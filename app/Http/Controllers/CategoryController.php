<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category(){
        return view('Backend.E-Food.Category.List');
    }
}
