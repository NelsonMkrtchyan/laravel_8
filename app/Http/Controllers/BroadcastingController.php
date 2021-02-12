<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BroadcastingController extends Controller
{
    public function index(){
        return view('broadcasting');
    }
}
