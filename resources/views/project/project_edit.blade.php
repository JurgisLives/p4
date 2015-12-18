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
		What are your average monthly food sales?<input type="number" name="food_sales" value=""><br>
		What are your average monthly beverage sales?<input type="number" name="bev_sales" value=""><br>
		<label for='type'>*What type of operation is this?</label>
		<select name='op_type' id='type'>

		@foreach($types_for_dropdown as $type_id => $type_name)
			<option value='{{$type_id}}'> {{$type_name}}</option>
		@endforeach

</select><br>
		What is your rent per month?<input type="number" name="rent" value="{{old('rent', '1000')}}"><br>
		What are your other fixed costs (total)<input type="number" name="other_fx_cost" value="{{old('other_fx_cost', '5500')}}"><br>
		Do you sell beer and wine?<input type="text" name="beer" value="{{old('beer', 'Yes')}}"><br>
		Do you sell liquor?<input type="text" name="booze" value="{{old('booze', 'no')}}"><br>
		What is your tax rate?<input type="number" name="tax_rate" value="{{old('tax_rate', '.33')}}"><br>
		What is your average check?<input type="number" name="avg_check" value="{{old('avg_check', '14.50')}}"><br>
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
