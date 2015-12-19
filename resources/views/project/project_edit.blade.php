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
	
		<h1>EDIT</h1>
		Project Name<br><input type="text" id='name' name="name" value="{{$proforma->proj_name}}"><br>
		
		<br><fieldset>
		<legend>Change your Project:</legend>
		What are your average monthly food sales?<input type="number" name="food_sales" value="{{$proforma->food_sales}}"><br>
		What are your average monthly beverage sales?<input type="number" name="bev_sales" value="{{$proforma->bev_sales}}"><br>
		What type of operation is this?<select name='op_type' value="{{$type->type}}">
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
		What is your rent per month?<input type="number" name="rent" value="{{$proforma->rent}}"><br>
		What are your other fixed costs (total)<input type="number" name="other_fx_cost" value="{{$proforma->other_fx_cost}}"><br>
		What is your tax rate?<input type="number" name="tax_rate" value="{{$proforma->tax_rate}}"><br>
		What is your average check?<input type="number" name="avg_check" value="{{$proforma->avg_check}}"><br>
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
