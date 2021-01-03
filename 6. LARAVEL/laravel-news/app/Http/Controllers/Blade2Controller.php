<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blade2Controller extends Controller
{
    function index()
    {
        $data = [
            'rendi',
            'eko'
        ];
        return view('beginner-laravel.10-ini-blade2-php')
            ->with('haha', 'hahaha')
            ->with('name', 'Victoria')
            ->with('collection', $data);
    }
}
