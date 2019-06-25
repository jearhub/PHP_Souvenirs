<?php

namespace App\Http\Controllers;

use App\cart;
use App\souvenir;
use App\order;
use App\category;
use Carbon\CarbonTimeZone;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use Auth;
use DB;
use Links;
use Pagination;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = souvenir::OrderBy('created_at', 'DESC')->paginate(6);
        return view('home.products', ['products' => $products]);
    }
    public function getAddToCart(Request $request, $id)
    {
        $product = souvenir::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        /*dd($request->session()->get('cart'));*/
        return redirect()->route('product.index');
    }
    public function getRemoveOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->removeOne($id);

        if (count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        } else
        {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }
    public function getRemoveAll($id){
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->removeAll($id);

        if (count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        } else
            {
                Session::forget('cart');
            }
        return redirect()->route('product.shoppingCart');
    }
    public function getCart(){
        if (!Session::has('cart')){
            return view('home.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('home.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    public function  getCheckout(){
        if (!Session::has('cart')){
            return view('home.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart ($oldCart);
        $total = $cart->totalPrice;
        return view('home.checkout', ['total' => $total]);
    }
    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')){
            return redirect()->route('home.shopping-Cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('');
        try {
             Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "nzd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Charge"
            ));
        } catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'You have successfully purchased products!');
    }
    public function  getCartcheckout()
    {
        if (!Session::has('cart')){
            return redirect()->route('product.index')->with('success', 'You have successfully purchased products!');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->cart = serialize($cart);

        Auth::user()->orders()->save($order);

        Session::forget('cart');
        return redirect()->route('cartcheckout');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $product = DB::table('souvenirs')->where('name', 'like', '%'.$search.'%')->paginate(6);
        return view('home.proCat', ['products' => $product]);
    }
    public function proCat(Request $request){
        $category = $request->category;

        $products = DB::table('souvenirs')->join('categories', 'categories.id', 'souvenirs.category_id')
            ->where('categories.name',$category)->get();
        return view('home.procat',['products' => $products]);
    }
}
