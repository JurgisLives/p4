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
    
		<h2>Project "$name"</h2>
		
		<br><fieldset>
		<legend>Here is your Project</legend>
	</fieldset>

		<a href="/project">Start Over</a><br>
		<a href="/acct">Back to acct</a>


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
