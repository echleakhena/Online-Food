<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function List(){
        return view('Backend.User.List');
    }
}
