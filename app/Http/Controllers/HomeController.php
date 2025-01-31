<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the frontend index page.
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Display the about us page.
     */
    public function about()
    {
        return view('frontend.about');
    }

    /**
     * Display the products page.
     */
    public function product()
    {
        return view('frontend.product');
    }

    /**
     * Display the careers page.
     */
    public function career()
    {
        return view('frontend.career');
    }

    /**
     * Display the pricing page.
     */
    public function pricing()
    {
        return view('frontend.pricing');
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        return view('frontend.services');
    }

    /**
     * Display the contact us page.
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Display the blog listing page.
     */
    public function blog()
    {
        return view('frontend.blog');
    }

    /**
     * Display the blog details page.
     */
    public function blogdetails()
    {
        return view('frontend.blog-details');
    }

    /**
     * Display the privacy policy page.
     */
    public function privacypolicy()
    {
        return view('frontend.privacy-policy');
    }

    /**
     * Display the terms and conditions page.
     */
    public function condition()
    {
        return view('frontend.terms-and-conditions');
    }

    /**
     * Display the refund policy page.
     */
    public function refund()
    {
        return view('frontend.refund-policy');
    }

    /**
     * Display the details page.
     */
    public function detail()
    {
        return view('frontend.details');
    }

    /**
     * Display the learn more page.
     */
    public function learnmore()
    {
        return view('frontend.learn-more');
    }

    /**
     * Display the category page.
     */
    public function category()
    {
        return view('frontend.category');
    }

    public function testing()
    {
        return view('frontend.testing');
    }
}
