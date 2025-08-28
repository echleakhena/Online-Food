<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function List(){
        return view('Backend.Payment.List');
    }
}
