<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
		$proformas = \App\Proforma::orderBy('id','ASC')->get();

		//return "Register Here";
        return view('register.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegister()
    {
		$proformas = \App\Proforma::orderBy('id','ASC')->get();

        return view ('acctinfo.acctview')->with('proformas', $proformas);
	}

}
    