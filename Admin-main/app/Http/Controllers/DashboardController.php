<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('DashBoard');
    }

    public function signup(){
        return view('Signup');
    }
}
