<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Profile;
use App\Application;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $profile = User::find($id);
        //$complete = Profile::all()->where('users_id', $id);
        $user = User::find($id)->profile;
        $jobs = User::find($id)->job;
        $application = Application::where('users_id', $id)->get();
        //$application = Application::find($id)->job;
        //$jobapp = Job::find($id)->application;
        //$userapp = Application::find($id);
        return view('home', compact('profile','user','jobs','application','jobapp','userapp'));
    }
}
