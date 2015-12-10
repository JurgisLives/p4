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
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    
        <h1>Welcome to ChefMaster</h1>
		<h2>Enter your account details, and we can get started</h2>
		
		<form method='POST' action='/acct_info'>
		
		

			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
		<form method='POST' action='/usergenerator'>
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	

		Name<br><input type="text" name="name" value="your name"><br>
		Email<br><input type="email" name="email" value="your email"><br>
		Password<br><input type="password" name="password" value=""><br>
		Re-enter<br><input type="password" name="passwork_verify" value=""><br>
	
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
