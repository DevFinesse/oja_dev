<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Profile;
use App\Application;

class ApplicationsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'job_id' => 'required',
            'job_title' => 'required',
            'company_name' => 'required',
            'job_location' => 'required',
            'deadline' => 'required',
            'education' => 'required',
            'specialization' => 'required',
            'cv' => 'required',
        ]);

        $applications = new Application;
        $applications->users_id = auth()->user()->id;
        $applications->job_id = $request->input('job_id');
        $applications->job_title = $request->input('job_title');
        $applications->job_location = $request->input('job_location');
        $applications->company_name = $request->input('company_name');
        $applications->deadline = $request->input('deadline');
        $applications->first_name = auth()->user()->first_name;
        $applications->last_name = auth()->user()->last_name;
        $applications->email = auth()->user()->email;
        $applications->phone_number = auth()->user()->phone_number;
        $applications->education = $request->input('education');
        $applications->specialization = $request->input('specialization');
        $applications->cv = $request->input('cv');
        $applications->save();
        return redirect('/dashboard')->with('success', 'Application Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id)->profile;
        $jobs = Job::find($id);
        return view('application.index', compact('jobs', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
