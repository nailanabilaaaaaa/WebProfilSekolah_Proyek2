<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanAboutController extends Controller
{
    public function index(){
        return view('HalamanAbout');
    }
}
