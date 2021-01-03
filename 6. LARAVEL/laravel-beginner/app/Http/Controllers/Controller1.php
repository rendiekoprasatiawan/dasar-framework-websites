<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    function index($user)
    {
        return view('beginner-laravel.7-ini-controller', compact('user'));
    }
}
