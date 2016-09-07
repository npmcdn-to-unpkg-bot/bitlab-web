<!DOCTYPE html>
<html>
    <head>
        <title>BitLab</title>

		<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Yantramanav:300' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap Core CSS -->
    	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
    </head>
    <body>
    	
	    <!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ asset('images/bitlab_logo.png') }}" class="nav-icon"/></a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			        <ul class="nav navbar-nav pull-right">
			            	<li><a href="{{ URL::to('/home') }}">HOME</a></li>
			            	<li><a href="{{ URL::to('/blog') }}">BLOG</a></li>
			            	<li><a href="{{ URL::to('/projects') }}">PROJECTS</a></li>
			            	<li><a href="{{ URL::to('/contact') }}">CONTACT</a></li>
			            	<li><a href="{{ URL::to('/admin') }}">ADMIN</a></li>
			        </ul>
			    </div>
			    <!-- /.navbar-collapse -->
			</div>
		<!-- /.container -->
		</nav>
    	
    	<div class="container">
    		<div class="col-md-6 col-centered text-center">
    			@yield('header')
    		</div>
    	</div>
    	<div class="container">
    		@yield('content')
    	</div>
    	
        <div class="footer">
        	<p class="text-muted text-center">BITLAB HOME PAGE | BITLAB 2016</p>
		</div>
        <!-- jQuery -->
	    <script src="{{ asset('js/jquery.js') }}"></script>
	
	    <!-- Bootstrap Core JavaScript -->
	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	    
        <!-- JS Files -->
		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
		<script src="https://unpkg.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
		
    </body>
</html>
