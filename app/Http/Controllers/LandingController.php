<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //return "Show login screen";
		return view('landing.landing');
	}
   public function postIndex()
    {
        //return "process login credentials";
		return view('login.login');
    }
    
 
}
