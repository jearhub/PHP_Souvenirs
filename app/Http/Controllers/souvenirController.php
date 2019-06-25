<?php
namespace App\Http\Controllers;
use App\Souvenir;
use Illuminate\Http\Request;
use pagination;
use Links;
class SouvenirController extends Controller
{
    public function index()
    {
        $souvenirs = souvenir::OrderBy('created_at', 'DESC')->paginate(6);
        return view('souvenirs.index', compact('souvenirs'));
    }
    public function Create()
    {
        return view('souvenirs.Create');
    }
    public function CreateSouvenir(Request $request)
    {
        $souvenir = new souvenir([
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'price' => $_POST['price'],
            'imagePath' => $_POST['imagePath'],
            'supplier_id' => $_POST['supplier_id'],
            'category_id' => $_POST['category_id'],
        ]);
        $souvenir->save();
        return redirect('souvenirs');
    }
}
