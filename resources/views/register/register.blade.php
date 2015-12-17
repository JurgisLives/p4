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
    <link href="/css/master.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    
        <h1>Welcome to ChefMaster</h1>
		<h2>Enter your account details, and we can get started</h2>
		
		<form method='POST' action='/register'>
		
		

			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	

		Name<br><input type="text" name="name" value="{{old('name', 'Sample')}}"><br>
		Email<br><input type="email" name="email" value="{{old('email', 'sample@sample.net')}}"><br>
		Password<br><input type="password" name="password" value="{{old('password', '01234')}}"><br>
		Re-enter<br><input type="password" name="password_verify" value="{{old('password_verify', '01234')}}"><br>
	
		<input type="submit" value="Create My Account">
			
		</form>
	
		
		<a href="/">Go Back</a>

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
