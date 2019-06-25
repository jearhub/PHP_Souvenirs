<?php
namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;
class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }
    public function Create()
    {
        return view('suppliers.Create');
    }
    public function CreateSupplier(Request $request)
    {
        $supplier = new supplier([
            'name' => $_POST['name'],
            'phone_number' => $_POST['phone_number'],
            'email' => $_POST['email'],

        ]);
        $supplier->save();
        return redirect('suppliers');
    }
}
