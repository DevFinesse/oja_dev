<?php

namespace App\Http\Controllers;
use App\Job;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
    	$search = \Request::get('search');
    	$category = \Request::get('category');
        $show = Job::where('job_title','like','%'.$search.'%')->where('category','like',$category)->orderBy('created_at')->paginate(4);

        return view('search.index')->with('show', $show);
    }
}
