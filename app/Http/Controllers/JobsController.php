<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use DB;

class JobsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
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
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'categories' => 'required',
            'company_name' => 'required',
            'experience' => 'required',
            'slot' => 'required',
            'deadline' => 'required'
        ]);

        $jobs = new Job;
        $jobs->job_title = $request->input('title');
        $jobs->job_description = $request->input('description');
        $jobs->job_location = $request->input('location');
        $jobs->slot = $request->input('slot');
        $jobs->experience = $request->input('experience');
        $jobs->company_name = $request->input('company_name');
        $jobs->category = $request->input('categories');
        $jobs->deadline = $request->input('deadline');
        $jobs->users_id = auth()->user()->id;

        $jobs->save();
        return redirect('/jobs')->with('success', 'Job Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = Job::find($id);
        //DB::table('jobs')->where('id', $id);
        return view('/jobs.show', compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = Job::find($id);

        if(auth()->user()->id !== $jobs['users_id']) {
           return redirect('/jobs')->with('error', 'Unauthorized Access');
        }
        return view('/jobs.edit', compact('jobs', 'id'));
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'categories' => 'required',
            'company_name' => 'required',
            'experience' => 'required',
            'slot' => 'required',
            'deadline' => 'required'
        ]);

        $jobs =Job::find($id);
        $jobs->job_title = $request->input('title');
        $jobs->job_description = $request->input('description');
        $jobs->job_location = $request->input('location');
        $jobs->slot = $request->input('slot');
        $jobs->experience = $request->input('experience');
        $jobs->company_name = $request->input('company_name');
        $jobs->category = $request->input('categories');
        $jobs->deadline = $request->input('deadline');

        $jobs->save();
        return redirect('/jobs')->with('success', 'Job Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        if(auth()->user()->id !== $jobs['users_id']) {
           return redirect('/jobs')->with('error', 'Unauthorized Access');
        }
        $job->delete();
        return redirect('/dashboard')->with('success','Job Successfully Deleted');
    }
}
