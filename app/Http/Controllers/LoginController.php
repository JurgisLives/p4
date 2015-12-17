<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view ('login.login');
		//return "Login Here";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
		$proformas = \App\Proforma::orderBy('id','ASC')->get();

		// validate entry
		$this -> 
			validate($request, 
			['email' => 'required',
			 'password' => 'required'
			]);
	

		\Session::flash('flash_message','proforma created!');
		
        return view ('acctinfo.acctview')->with('proformas', $proformas);
    }

}
