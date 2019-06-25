<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('categories.index', compact('categories'));
    }
    public function Create()
    {
        return view('categories.Create');
    }
    public function CreateCategory(Request $request)
    {
        $category = new category([
            'name' => $_POST['name'],
        ]);
        $category->save();
        return redirect('categories');
    }
}
