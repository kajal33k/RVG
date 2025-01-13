<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function happiness()
    {
        // Return the 'happiness' view
        return view('frontend.happiness');
    }

    public function join()
    {
        return view('frontend.join');
    }

    public function product(){
        return view('frontend.product');
    }
    public function career(){
        return view('frontend.career');
    }

    public function pricing(){
        return view('frontend.pricing');
    }
}
