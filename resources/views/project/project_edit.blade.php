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
		What are your average monthly food sales?<input type="number" name="food_sales" value="{{$proforma->food_sales}}"><br>
		What are your average monthly beverage sales?<input type="number" name="bev_sales" value="{{$proforma->bev_sales}}"><br>
		What type of operation is this?<input type="text" name="op_type" value="{{$proforma->op_type}}"><br>
		What is your zipcode?<input type="number" name="zip_code" value="{{$proforma->zip_code}}"><br>
		What is your rent per month?<input type="number" name="rent" value="{{$proforma->rent}}"><br>
		What level of food quality do you aim for?<input type="number" name="grade" value="{{$grade->grade}}"><br>
		Do you sell beer and wine?<input type="text" name="beer" value="{{old('beer', 'Yes')}}"><br>
		Do you sell liquor?<input type="text" name="booze" value="{{old('booze', 'Yes')}}"><br>
	</fieldset>

		<input type="submit" value="Change Project">
			
		</form>
	
		<a href="/acct">Go to my account</a><br>
		<a href="/project">Start Over</a><br>


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
