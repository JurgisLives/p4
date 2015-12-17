@extends('layouts.master')


@section('title')
    CM Project Editor
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
@stop


@section('content')
    
		<h2>Project Editor</h2>
		
		
		
		<form method='POST' action='/project/edit'>

			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
				
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{ $proforma->id }}">
	
		<h1>EDIT YOUR PROJECT</h1>
		Project Name<br><input type="text" id='name' name="name" value="{{$proforma->proj_name}}"><br>
		
		<br><fieldset>
		<legend>Tell us a bit about "$name":</legend>
		Is this "$name" currently in operation?<input type="text" name="op_bool" value=""><br>
		What is your zipcode?<input type="number" name="zip_code" value="{{$proforma->zip_code}}"><br>
		What is your rent per month?<input type="number" name="rent" value="{{$proforma->rent}}"><br>
		What are your average sales? <input type="number" name="TL_Sales" value="{{$proforma->TL_Sales}}"><br>
		Overall what type of operation is "$name"?<input type="text" name="op_type" value="{{$proforma->op_type}}"><br>
		What level of food quality do you aim for?<input type="text" name="grade" value="{{$proforma->grade}}"><br>
		Do your cooks bring their own knives, or do you provide them?<input type="text" name="password" value=""><br>
		Do you define yourself as a 'locally sourced' operation?<input type="text" name="password" value=""><br>
		Is your operation vegetarian/vegan?<input type="text" name="password" value=""><br>
		Are you associated with a hotel, mall, university or other institution?<input type="text" name="password" value=""><br>
		How many tables do you have?<input type="text" name="password" value=""><br>
		What percentage of tables is on a patio?<input type="text" name="password" value=""><br>
		Do you sell beer and wine?<input type="text" name="beer" value="{{$proforma->beer}}"><br>
		Do you sell liquor?<input type="text" name="booze" value="{{$proforma->booze}}"><br>
		How many stars do you have (or want) on Yelp?<input type="text" name="password" value="{{$proforma->grade}}"><br>
		How many reviews do you have on Yelp?<input type="text" name="password" value=""><br>
		How long have you been in operation?<input type="text" name="password" value=""><br>
	</fieldset>
	
		<input type="submit" value="Change Project">
			
		</form>
	
		
		<a href="/project">Start Over</a><br>
		<a href="/">Home</a>


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
