<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanContactController extends Controller
{
    public function index(){
        return view('HalamanContact');
    }
}
