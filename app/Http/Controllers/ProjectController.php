<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
		$types= \App\Type::orderby('id','ASC')->get();
		
		$proforma= new \App\Proforma();
		
        return view ('project.project')->with('proforma', $proforma);
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
		 'rent' => 'required',
		 'op_type' => 'required',
		]);
		
		// code here to enter info to database
		
		$proforma= new \App\Proforma();
		$type= new\App\Type();
		

		$proforma->proj_name = $request->name;
		$proforma->rent = $request->rent;
		$proforma->food_sales = $request->food_sales;
		$proforma->bev_sales = $request->bev_sales;
		//$proforma->type_id = $request->op_type;
		
		$proforma->save();
					
		return view ('project.project_generated')->with('proforma', $proforma);		
    }


    public function getEdit($id = null)
	{
	
		$proforma= \App\Proforma::find($id);
		
		
		if($id !=null){
		return view ('project.project_edit')->with('proforma' , $proforma);
		}
	}


    public function postEdit(Request $request, $id = null)
	{

		//validation
		$proformas = \App\Proforma::orderBy('id','ASC')->get();
		$proforma= \App\Proforma::find($id);
		
	/* 	$this -> 
		validate($request, 
		['name' => 'required|min:2',
		 'rent' => 'required',
		 //'op_type' => 'required',
		]);
		 */
		
/* 		if(is_null($proforma))
		 {

		 return redirect('\acct');
		 
		 } */
				
	
		if($proforma) {

			# Give it a different title
			$proforma->proj_name = $request->name;

			# Save the changes
			$proforma->save();

			echo "Update complete;";
		}

	else{
			echo "Project not found, can't edit.";
		}

			return view('project.project_generated')->with('proforma', $proforma);
	

	}	
	
public function getDelete($id = null)
	{
		$proformas = \App\Proforma::orderBy('id','ASC')->get();
		$proforma= \App\Proforma::find($id);


			if($proforma) {

				# Goodbye!
				$proforma->delete();

			}
								
				return view ('acctinfo.acctview')->with ('proformas' , $proformas);	
	}
	
public function getShow($id=null)
{
		$proforma= \App\Proforma::find($id);
		if($proforma){
			
			return view ('project.project_show')->with('proforma', $proforma);
		}
}
}

