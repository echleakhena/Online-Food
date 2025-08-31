<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
   public function list()
{
    $customers = Customer::orderBy('created_at', 'desc')->get();

    return view('Backend.Customer.List', compact('customers'));
}

    public function rigister(){
        return view('Frontend.Register');
    }
    public function add(){
        return view('Backend.Customer.Add');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'phone'    => 'required|string|max:20|unique:customers,phone',
            'password' => 'required|string|min:4|confirmed', 
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->password = Hash::make($request->password); 
        $customer->save();

        return redirect()->back() ->with('success', 'Customer added successfully');
    }


    public function delete($id)
{
    $customer = Customer::findOrFail($id);
    $customer->delete();

    return redirect()->route('customer.list')->with('success', 'Customer deleted successfully.');
}

    
}
