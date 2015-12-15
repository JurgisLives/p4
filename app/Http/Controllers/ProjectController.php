<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProject()
    {
        return view ('project.project');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postProject(Request $request)
    {
		
		// validate entry
		$this -> 
		validate($request, 
		['name' => 'required|min:2',
		 'zip_code' => 'required|min:5',
		 'rent' => 'required',
		 'op_type' => 'required',
		 'grade' => 'required',
		 'beer' => 'required',
		 'booze' => 'required',
		]);
		
		// code here to enter info to database
				
				//$proforma= new \App\Proforma();

				//$proforma->proj_name = $request->name;
				//$proforma->type = $request->fc_adj; <-this has to correspond with the "name= '  '" in the forms.
				//$proforma->type = $request->title;
				
				//$proforma->save();
			
		\Session::flash('flash_message','proforma created!');
		
        return view ('acctinfo.acctview')->with('proformas', $proformas);
		
    }

}