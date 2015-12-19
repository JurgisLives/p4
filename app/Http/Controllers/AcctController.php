<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AcctController extends Controller
{
 
    public function getAcct()
    {
		$proformas = \App\Proforma::orderBy('id','ASC')->get();
		//dump($proformas->ToArray());
		
        return view ('acctinfo.acctview')->with('proformas', $proformas);
    }

  
    public function postAcct()
    {
        //
    }
}