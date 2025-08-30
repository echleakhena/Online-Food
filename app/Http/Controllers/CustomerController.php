<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
         $customers = Customer::withCount('orders')->paginate(10);
        $totalCustomers = Customer::count();
        $totalOrders = Order::whereMonth('created_at', now()->month)->count();
        $totalRevenue = Order::whereMonth('created_at', now()->month)->sum('total');
        
        return view('Backend.Customer.List', compact('customers', 'totalCustomers', 'totalOrders', 'totalRevenue'));
 
    }
}
