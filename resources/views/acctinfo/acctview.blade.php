@extends('layouts.master')


@section('title')
    your account
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
@stop


@section('content')
    
        <h1>Welcome to Your Account</h1>
		<h2>"#username"</h2>
		
		
		

			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
			
		
	

		Your Last Login: 
		Your Projects<br><input type="email" name="email" value=""><br>
	
	
		<input type="submit" value="Login">
			
	
		
		<a href="/project">Create New Project</a><br>


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
