@extends('layouts.master')


@section('title')
    ChefMaster 
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
@stop


@section('content')
		<h2>{{$proforma->proj_name}}</h2>
		
		<br><fieldset>
		<legend>Here is your Project</legend>
		
	

			<h4> Monthly Food Sales             ${{$proforma->food_sales}}</h4>
			<h4> Monthly Beverage Sales         ${{$proforma->bev_sales}}</h4>
			<h4> Total Sales                    ${{$proforma->tl_sales}}</h4><br>

			<h4> Monthly Rent                   ${{$proforma->rent}}</h4>
			<h4> Other Fixed Costs              ${{$proforma->other_fx_cost}}</h4>
			<h4> Total Variable Costs           ${{$proforma->tot_v_costs}}</h4>
			<h4> Break Even Point               ${{$proforma->bep_doll}}</h4>
			

			
		
	</fieldset>

		<a href="/project">Start Over</a><br>
		<a href="/acct">Back to acct</a><br>
		<a href="/project/edit/{{$proforma->id}}">edit</a><br>
		<a href="/project/delete/{{$proforma->id}}">delete</a>

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
