<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use App\Models\Food;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    
   public function __construct()
    {
        $this->middleware(['permission:orders.view'])->only('List');
        $this->middleware(['permission:orders.create'])->only('Create');
        $this->middleware(['permission:orders.update'])->only('Update');
        $this->middleware(['permission:orders.delete'])->only('Delete');
       
    }

    public function List(){
        $orders = Order::with(['customer', 'food'])->paginate(10);
        $totalOrders = Order::count();
        $totalRevenue = Order::sum('total');
        $totalCustomers = Customer::count();

        $users = User::all();
        $foods = Food::all();
        $customers = Customer::all();
        return view('Backend.Order.List', 
        compact('orders', 'totalOrders', 'totalRevenue', 'totalCustomers', 'users', 'foods', 'customers'));
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->input('user_id');
        $order->customer_id = $request->input('customer_id');
        $order->food_id = $request->input('food_id');
        $order->qty = $request->input('qty');
        $order->subtotal = $request->input('subtotal');
        $order->total = $request->input('total');
        $order->note = $request->input('note');
        $timestamp = now()->format('YmdHis');
        $order->save();

        return redirect()->route('order.list')->with('success', 'Order created successfully.');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $users = User::all();
        $foods = Food::all();
        $customers = Customer::all();
        return view('Backend.Order.update', compact('order', 'users', 'foods', 'customers'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->user_id = $request->input('user_id');
        $order->customer_id = $request->input('customer_id');
        $order->food_id = $request->input('food_id');
        $order->qty = $request->input('qty');
        $order->subtotal = $request->input('subtotal');
        $order->total = $request->input('total');
        $order->note = $request->input('note');
        $order->location = $request->input('location');
        $order->save();

        return redirect()->route('order.list')->with('success', 'Order updated successfully.');
    }

}