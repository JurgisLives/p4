<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'ChefMaster' --}}
        @yield('title','ChefMaster')
    </title>

    <meta charset='utf-8'>
    <link href="/public/master.css" type='text/css' rel='stylesheet'>
<link  href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://maxcdn.bootstrapcdn.com.bootswatch.3.3.5/lumen/bootstrap.css' rel='stylesheet'>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>

		@if(\Session::has('flash_message'))
			<div class='flash_message'>
				{{ \Session::get('flash_message') }}
			</div>
		@endif
	
    <header>
        <img
		src='moneyplate.jpg'       
		style='width:300px'
        alt='ChefMaster Logo'>
    </header>
			<nav>
			<ul>
				@if(Auth::check())
					<li><a href='/'>Home</a></li>
					<li><a href='/project'>Add a book</a></li>
					<li><a href='/logout'>Log out</a></li>
				@else
					<li><a href='/'>Home</a></li>
					<li><a href='/login'>Log in</a></li>
					<li><a href='/register'>Register</a></li>
				@endif
			</ul>
			</nav>
	
<body>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>
	
<a href="/logout">Logout</a>
    <footer>
        &copy; {{ date('Y') }} ChefMaster
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>