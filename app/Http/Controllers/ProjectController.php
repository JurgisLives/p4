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
		
		$types_for_dropdown = [];
		
		foreach($types as $type)
		{
			//$types_for_dropdown[$types->$id]= $type->type;
		}
		
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
		$type->type_id = $request->op_type;
		$type->beer = $request->beer;
		$type->booze = $request->booze;
		
		$proforma->save();
			
		\Session::flash('flash_message','proforma created!');
		
		return view ('project.project_generated');		
    }


    public function getEdit($id = null)
	{
	
		$types= \App\Type::find($id);	
		$type= \App\Type::find($id);
		$proforma= \App\Proforma::find($id);
		
		$types_for_dropdown = [];
		
		foreach ($types as $type){
			$types_for_dropdown[$type->id]= $type->name;
			
		}
		
		if($id !=null){
		return view ('project.project_edit')->with(['proforma'=>$proforma, 'types_for_dropdown' => $types_for_dropdown])->with('type' , $type);
		}
	}


    public function postEdit(Request $request)
	{

		//validation
		$grade= new\App\Grade();
		$type= new\App\Type();
		$proforma= new \App\Proforma();
				
		$this -> 
		validate($request, 
		['name' => 'required|min:2',
		 'rent' => 'required',
		 //'op_type' => 'required',
		]);
		
		
		if(is_null($proforma))
		{

			\Session::flash('flash_message',"Sorry, I can't find that project");
			return redirect('\acct');
		}		


		$proforma->proj_name = $request->name;
		$proforma->rent = $request->rent;
		$proforma->food_sales = $request->food_sales;
		$proforma->bev_sales = $request->bev_sales;
		$type->id = $request->op_type;
		$type->beer = $request->beer;
		$type->booze = $request->booze;


		$proforma->save();

		\Session::flash('flash_message','proforma edited!');


		return view('project.project_generated')->with('proforma', $proforma);
	}

	
	
    public function getDelete($id = null)
	{
		$proforma= \App\Proforma::orderby('id', 'ASC')->get();
		$proforma= \App\Proforma::find($id);
		$proforma = DB::table('proformas')->where('id', '<', '5' )->first()->delete;				
			
	
	return view ('acctinfo.acctview')->with('proforma', $proforma);
	}

}