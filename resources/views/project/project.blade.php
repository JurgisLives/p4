@extends('layouts.master')


@section('title')
    CM Project Creator 
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
	
		Project Name<br><input type="text" id='name' name="name" value="{{old('name', 'Your Project')}}"><br>
		
		<br><fieldset>
		<legend>Tell us a bit about "$name":</legend>
		Is this "$name" currently in operation?<input type="text" name="op_bool" value=""><br>
		What are your average monthly food sales?<input type="number" name="food_sales" value=""><br>
		What are your average monthly beverage sales?<input type="number" name="bev_sales" value=""><br>
		What type of operation is this?<input type="text" name="op_type" value="{{old('op_type', 'Chinese')}}"><br>
		What is your zipcode?<input type="number" name="zip_code" value="{{old('zip_code', '02141')}}"><br>
		What is your rent per month?<input type="number" name="rent" value="{{old('rent', '1000')}}"><br>
		What level of food quality do you aim for?<input type="text" name="grade" value="{{old('grade', '3')}}"><br>
		Do you sell beer and wine?<input type="text" name="beer" value="{{old('beer', 'Yes')}}"><br>
		Do you sell liquor?<input type="text" name="booze" value="{{old('booze', 'no')}}"><br>
	</fieldset>
	
		<input type="submit" value="Create Budget">
			
		</form>
	
		
		<a href="/project">Start Over</a><br>
		<a href="/acct">Go to my account</a><br>


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
