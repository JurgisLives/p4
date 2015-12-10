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
		<h2>Login</h2>
		
		<form method='POST' action='login'>
		
		

			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
			
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	


		Email<br><input type="email" name="email" value=""><br>
		Password<br><input type="password" name="password" value=""><br>
	
	
		<input type="submit" value="Login">
			
		</form>
	
		
		<a href="/register">Create New Account</a><br>
		<a href="/">Home</a>


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
