<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mail; 
use App\Models\Portfolio;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $active_menu = 'home';
        return view('welcome',compact('active_menu'));
    }


    public function aboutus(Request $request)
    {        
        $active_menu = 'about';
        return view('about',compact('active_menu'));         
    }

    public function services(Request $request)
    {        
        $active_menu = 'services';
        return view('services',compact('active_menu'));         
    }

    public function packages(Request $request)
    {        
        $active_menu = 'packages';
        return view('packages',compact('active_menu'));         
    }

    public function contact(Request $request)
    {        
        $active_menu = 'contact';
        return view('contact',compact('active_menu'));         
    }

}
