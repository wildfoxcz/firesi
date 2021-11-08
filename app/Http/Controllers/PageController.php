<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PageController extends Controller
{
    public function Home(){
        Session::put('page','Home');
        return view('pages.home');
    }

    public function Services(){
        Session::put('page','Services');
        return view('pages.services');
    }

    public function Projects(){
        Session::put('page','Projects');
        return view('pages.projects');
    }

    public function Manufacturing(){
        Session::put('page','Manufacturing');
        return view('pages.manufacturing');
    }

    public function Installation(){
        Session::put('page','Installation');
        return view('pages.installation');
    }

    public function PVI(){
        Session::put('page','Pressure Vessel Inspection');
        return view('pages.pvi');
    }

    public function FrsRack3(){
        Session::put('page','FRS Rack 3');
        return view('pages.frs-rack-3');
    }

    public function FiresiModul(){
        Session::put('page','Firesi Modul');
        return view('pages.firesi-modul');
    }

    public function ValvesFRSH(){
        Session::put('page','Valves FRS-H');
        return view('pages.valves-frs-h');
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
        Session::put('page','Contact');
        return view('pages.contact');
    }
}
