@extends('layouts.master')


@section('title')
    ChefMaster Login 
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
@stop


@section('content')
    
        <h1>Welcome to ChefMaster</h1>
		<h2>Project Creator</h2>
		<p>This is where you can create a pro-forma income statement, or devise a benchmark based budget for a currently running operation</p>
		<p>user generated data is based on inputs you provide included location, type of operation and a bunch of other things that we don't realy need to get into right now. Just answer the questions as honestly as possible and ChefMaster will show you the route to financial success!</p>
		
		
		
		<form method='POST' action='project'>

			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
				
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	
		Project Name<br><input type="text" name="name" value=""><br>
		
		<br><fieldset>
		<legend>Tell us a bit about "$name":</legend>
		Is this "$name" currently in operation?<input type="text" name="op_bool" value=""><br>
		What is your zipcode?<input type="number" name="zip_code" value=""><br>
		What is your rent per month?<input type="text" name="password" value=""><br>
		What are your average sales? <input type="number" name="TL_Sales" value="">per<input type="text" name="period" value=""><br>
		Overall what type of operation is "$name"?<input type="text" name="op_type" value=""><br>
		What level of food quality do you aim for?<input type="text" name="food_quality" value=""><br>
		Do your cooks bring their own knives, or do you provide them?<input type="text" name="password" value=""><br>
		Do you define yourself as a 'locally sourced' operation?<input type="text" name="password" value=""><br>
		Is your operation vegetarian/vegan?<input type="text" name="password" value=""><br>
		Are you associated with a hotel, mall, university or other institution?<input type="text" name="password" value=""><br>
		How many tables do you have?<input type="text" name="password" value=""><br>
		What percentage of tables is on a patio?<input type="text" name="password" value=""><br>
		Do you sell beer and wine?<input type="text" name="password" value=""><br>
		Do you sell liquor?<input type="text" name="password" value=""><br>
		How many stars do you have (or want) on Yelp?<input type="text" name="password" value=""><br>
		How many reviews do you have on Yelp?<input type="text" name="password" value=""><br>
		How long have you been in operation?<input type="text" name="password" value=""><br>
	</fieldset>
	
		<input type="submit" value="Create Budget">
			
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
