<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JatahCutiController extends Controller
{
    public function index(){
        return view('admin.jatahcuti.index');
    }
}
