<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Browser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
       //composer require jenssegers/agent
       //composer require hisorange/browser-detect  
       $agent = new Agent();
       $browser = new Browser();

    return view('home',compact('browser'));

   
    }
}
