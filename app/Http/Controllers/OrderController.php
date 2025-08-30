<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function List(){
        $orders = Order::with(['customer', 'food'])->paginate(10);
        $totalOrders = Order::count();
        $totalRevenue = Order::sum('total');
        $totalCustomers = Customer::count();
        
        return view('Backend.Order.List', compact('orders', 'totalOrders', 'totalRevenue', 'totalCustomers'));
     
    }
}
