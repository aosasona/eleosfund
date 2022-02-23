<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //Homepage
    public function index() {
        return view('index');
    }

    //About page
    public function about() {
        return view('components.about');
    }

    //Contact page
    public function contact() {
        return view('components.contact');
    }

    //FAQs
    public function faqs() {
        return view('components.faq');
    }
}
