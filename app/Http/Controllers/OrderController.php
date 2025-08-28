<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function List(){
        return view('Backend.Order.List');
    }
}
