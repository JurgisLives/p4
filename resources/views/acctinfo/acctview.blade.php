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
		
		
		

			@if(count($errors) > 0)
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
			
		

		
		<h1>Your Projects</h1>
			
		@foreach($proformas as $proforma)
		
			<div>
				<h3>{{ $proforma->proj_name }}</h3>
			<a href="/project/edit/{{$proforma->id}}">edit</a>
			<a href="/project/delete/{{$proforma->id}}">delete</a>
			<a href="/project/show/{{$proforma->id}}">show</a>
			</div>
			
		@endforeach
	
		<h3><a href="/project">Create New Project</a><br></h3>


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
