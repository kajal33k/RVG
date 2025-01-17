<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
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

    public function features(){
        return view('frontend.features');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function blogdetails(){
        return view('frontend.blog-details');
    }

    public function privacypolicy(){
        return view('frontend.privacypolicy');
    }

    public function condition(){
        return view('frontend.condition');
    }

    public function refund(){
        return view('frontend.refund');
    }

    public function detail(){
        return view('frontend.detail');
    }

    public function learnmore(){
        return view('frontend.learnmore');
    }
}
