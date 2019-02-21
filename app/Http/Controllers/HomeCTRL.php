<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCTRL extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function customers()
    {
        return view('customer');

    }
}
