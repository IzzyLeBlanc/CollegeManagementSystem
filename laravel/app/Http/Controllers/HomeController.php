<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function add_activity(){
        return view('add_activity');
    }

    public function submit_activity(){
        return view('submit_activity');
    }

    public function Homepageadmin(){
        return view('Homepageadmin');
    }

    public function homepagestudent(){
        return view('homepagestudent');
    }
    
    public function staff_page(){
        return view('staff_page');
    }
}
