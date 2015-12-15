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
		 'TL_Sales' => 'required',
		]);
		
		// code here to enter info to database
		/**
		$proforma= new /App/Proforma();
		$proforma->type = $request->name;
		$proforma->type = $request->fc_adj; <-this has to correspond with the "name= '  '" in the forms.
		$type->type = $request->title;
		
		$type->save();
		
		\Session::flash('flash_message','proforma created!'
		)
		return redirect('/project)->
		*/
	return "project created:  ".$request->input('name');
    }

}