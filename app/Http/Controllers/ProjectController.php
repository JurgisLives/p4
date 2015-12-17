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
		
		$proforma= new \App\Proforma();

		$proforma->proj_name = $request->name;
		$proforma->rent = $request->rent;
		$proforma->TL_Sales = $request->TL_Sales;
		$proforma->op_type = $request->op_type;
		$proforma->grade = $request->grade;
		$proforma->beer = $request->beer;
		$proforma->booze = $request->booze;
		
		$proforma->save();
			
		\Session::flash('flash_message','proforma created!');
		
		return view ('project.project_generated');		
    }


    public function getEdit($id = null)
	{

		$proforma = \App\Proforma::find($id);

		return view ('project.project_edit')->with('proforma', $proforma);
	}


    public function postEdit()
	{

		//validation
		$proforma = \App\Proforma::find($id);
		
		if(is_null($book))
		{

			\Session::flash('flash_message',"Sorry, I can't find that message");
			return redirect('\acct');
		}		


		$proforma->proj_name = $request->name;
		$proforma->rent = $request->rent;
		$proforma->TL_Sales = $request->TL_Sales;
		$proforma->op_type = $request->op_type;
		$proforma->grade = $request->grade;
		$proforma->beer = $request->beer;
		$proforma->booze = $request->booze;


		$proforma->save();

		\Session::flash('flash_message','proforma edited!');


		return redirect('/proformas/edit/'.$request->id);
	}

}