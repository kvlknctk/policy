<?php

    namespace App\Http\Controllers;

    use App\Customer;
    use Illuminate\Http\Request;

    class HomeCTRL extends Controller
    {
        public function index()
        {
            return view('index');
        }

    }
