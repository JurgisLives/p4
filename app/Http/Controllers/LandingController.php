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
        // "Show login screen";
		return view('landing.landing');
	}
   public function postIndex()
    {
        //send to login screen;
		return view('login.login');
    }
    
 
}
