<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function list(){
        return view('Backend.E-Food.Food.List');
    }
}
