<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index()
    {
        $data = [
            'rendi',
            'raka',
            'eko'
        ];
        return view('beginner-laravel.9-ini-blade-php')
            ->with('name', 'Victoria')
            ->with('collection', $data);
    }
}
