<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AcctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAcct()
    {
		$proformas = \App\Proforma::orderBy('id','ASC')->get();
		//dump($proformas->ToArray());
		
        return view ('acctinfo.acctview')->with('proformas', $proformas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postAcct()
    {
        //
    }
}