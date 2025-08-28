<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function List(){
        return view('Backend.Report.List');
    }
}
