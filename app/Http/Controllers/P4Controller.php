<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class P4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 /**
	 query responsibility
	 
	 
	 */
    public function getPractice()
    {
		//this returns the collection
	
	$type = \App\Type::orderBy('id', 'DESC')->get();
//now $type is the collection, and we can work from within that, like so. 
	$first = $type->first();
	
		dump ($type);
		dump ($first);
	}	

	//we will use the following method, (then within page.page, pull out what we need from $types)
	//return veiw (page.page)->with('types' as $types)
		
		function getUpdate()
		{
			$type = new \App\Type();
			
			$type_to_update = $type->find(4);
			$type_to_update->type = "Pizza n' Subs";
			
			$type_to_update->save();
			
		}
		function getAdd()
		{
			$type = new \App\Type();
			
			$type->type = 'Sushi';
			$type->fc_adj = .07;
			$type->lc_adj = -.10;
			
			$type->save();
			
			foreach ($type->all() as $type){
				echo $type->type;
				
			}; 
		}	
		
		
	
    /*READING operation with QueryBUILDER

	$types = \DB::table('types')->get();
	   
	   foreach($types as $type)
	   {
		   echo $type->type.'<br>';
	   }
	}
	To create rows use 'insert' insteat of 'get' (line 21)
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	
    public function postPractice()
    {
        //
    }
}