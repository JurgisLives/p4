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
		<h2> {{$proforma->proj_name}}</h2>
		
		<br><fieldset>
		<legend>Here is your Project</legend>
	
	

			<h4> Monthly Food Sales             ${{$proforma->food_sales}}</h4>
			<h4> Monthly Beverage Sales         ${{$proforma->bev_sales}}</h4>
			<h4> Monthly Rent                   ${{$proforma->rent}}</h4>
			<h4> Other Fixed Costs              ${{$proforma->other_fx_cost}}</h4>
			<h4> ${{$proforma->proj_name}}</h4>
			<h4> ${{$proforma->proj_name}}</h4>
			<h4> ${{$proforma->proj_name}}</h4>
			
			
		
		
	</fieldset>

		<a href="/project">Start Over</a><br>
		<a href="/acct">Back to acct</a>
		<a href="/project/edit/{{$proforma->id}}">edit</a>
		<a href="/project/delete/{{$proforma->id}}">delete</a>

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
