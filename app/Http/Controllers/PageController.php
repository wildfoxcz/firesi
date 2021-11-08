<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PageController extends Controller
{
    public function Home(){
        Session::put('page','home');
        return view('pages.home');
    }

    public function Services(){
        Session::put('page','services');
        return view('pages.services');
    }

    public function AboutUs(){
        Session::put('page','About Us');
        return view('pages.about');
    }

    public function WhyFiresi(){
        Session::put('page','Why Firesi?');
        return view('pages.why-firesi');
    }

    public function Contact(){
        Session::put('page','contact');
        return view('pages.contact');
    }
}
