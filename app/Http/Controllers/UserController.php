<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
    public function edit()
    {
        return view('users.edit');
    }
	
    public function made_project()
    {
        return view('users.made_project');
    }

    public function assist_project()
    {
        return view('users.assist_project');
    }
	
	public function favorite()
    {
        return view('users.favorite');
    }
}
