<?php

namespace App\Http\Controllers;

use App\category;
use App\order;
use App\User;
use Illuminate\Http\Request;
use APP\Http\Requests;
use Auth;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class UserController extends Controller
{
    public function index()
    {
        $users = user::all();
        return view('users.index', compact('users'));
    }
    public function getSignup(){
        return view('users.signup');
    }
    public function postSignup(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:6'
        ]);
        $user = new User([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'confirmation+token'=>str_random(64),
            'password'=>bcrypt($request->input('password'))
        ]);
        $user->save();

        Auth::login($user);

        if (Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('users.profile');
    }
    public function getSignin(Request $request){
        return view('users.signin');
    }
    public function postSignin(Request $request){
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required|min:6'
        ]);
        if (Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            if (Session::has('oldUrl')){
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('users.profile');
        }
        return redirect()->back();
    }
    public function getProfile(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('users.profile', ['orders'=>$orders]);
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('users.signin');
    }

    public function getOrder(){
        $orders = order::all();
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('orders.index', ['orders'=>$orders]);
    }
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt::make($data['password']),
        ]);

        Mail::to($data['email'])->send(new WelcomeMail($user));

        return $user;
    }
    protected function credentials(Request $request){
        $credentials = $request->only($this->username(), 'password');//get data from signin
        return array_add($credentials, 'isBan',0 ); //0 means all fine. (Can login)
    }
}
