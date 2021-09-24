<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanServicesController extends Controller
{
    public function index(){
        return view('HalamanServices');
    }
}