<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:dashboard.view'])->only('admin');
    }
    
    public function admin()
    {
        $orders = Order::with(['customer', 'food'])->paginate(10);
        $totalOrders = Order::count();
        $totalRevenue = Order::sum('total');
        $totalCustomers = Customer::count();

        return view('Backend.Dashboard', compact('orders', 'totalOrders', 'totalRevenue', 'totalCustomers'));
    }
}