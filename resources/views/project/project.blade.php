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
		<legend>Change your Project:</legend>
		What are your average monthly food sales?<input type="number" name="food_sales" value="10000"><br>
		What are your average monthly beverage sales?<input type="number" name="bev_sales" value="5000"><br>
		What type of operation is this?<select name='op_type'>
  <option value="1">Quick Service</option>
  <option value="2">Institutional Dining</option>
  <option value="3">Neighborhood Casual</option>
  <option value="4">Neighborhood Semi-Casual</option>
  <option value="5">Neighborhood Fine Dining</option>
  <option value="6">High Volume Casual</option>
  <option value="7">High Volume Semi-Casual</option>
  <option value="8">Destination Restaurant</option>
  <option value="9">Formal Destination Restaurant</option>
</select><br>
		What is your rent per month?<input type="number" name="rent" value="{{old('rent', '1000')}}"><br>
		What are your other fixed costs (total)<input type="number" name="other_fx_cost" value="{{old('other_fx_cost', '5500')}}"><br>
		Do you sell beer and wine?<input type="text" name="beer" value="{{old('beer', 'Yes')}}"><br>
		Do you sell liquor?<input type="text" name="booze" value="{{old('booze', 'no')}}"><br>
		What is your tax rate?<input type="number" name="tax_rate" value="{{old('tax_rate', '.33')}}"><br>
		What is your average check?<input type="number" name="avg_check" value="{{old('avg_check', '14.50')}}"><br>
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
