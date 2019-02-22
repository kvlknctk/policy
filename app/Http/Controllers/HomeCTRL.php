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

        public function customers()
        {
            $customers = Customer::paginate(5);

            return view('customer', compact('customers'));

        }
    }
