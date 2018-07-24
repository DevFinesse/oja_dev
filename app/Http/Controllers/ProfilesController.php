<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use DB;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::find($id);
        $user = User::find($id)->profile;
        return view('edit', compact('user', 'profile', 'id'));
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
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'user_location' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'state' => 'required',
            'local_govt' => 'required',
            'education' => 'required',
            'specialization' => 'required',
            'employment_status' => 'required',
            'cv' => 'mimes:doc,pdf,docx,zip|required',
            'summary' => 'required'
        ]);

        //Handles File Upload
        if($request->hasFile('cv')){
        //get filename with extension
        $getFileNameWithExt = $request->file('cv')->getClientOriginalName();
        //get filename
        $fileName = pathinfo($getFileNameWithExt, PATHINFO_FILENAME);
        //get extension
        $extension = $request->file('cv')->getClientOriginalExtension();
        //file to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        //Upload Image
        $path = $request->file('cv')->storeAs('public/cv', $fileNameToStore);
        }
        $id = auth()->user()->id;

        $users = User::find($id);
        $profiles = new Profile;

        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->email = $request->input('email');
        $users->phone_number = $request->input('phone_number');
        $users->user_location = $request->input('user_location');
        $users->dob = $request->input('dob');
        $users->gender = $request->input('gender');
        $profiles->users_id = $id;
        $profiles->state_of_origin = $request->input('state');
        $profiles->local_govt = $request->input('local_govt');
        $profiles->education = $request->input('education');
        $profiles->specialization = $request->input('specialization');
        $profiles->employment_status = $request->input('employment_status');
        $profiles->summary = $request->input('summary');
        if($request->hasFile('cv')){
            $profiles->cv = $fileNameToStore;
        }

        $users->save();
        $profiles->save();

        return redirect('/dashboard')->with('success', 'Profile Successfully Updated');
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
