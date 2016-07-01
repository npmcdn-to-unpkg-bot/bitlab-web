@extends('layouts.master')

@section('header')
	
	<div class="spacer60"></div>
	
	<div class="header">
		<h1>
	    	ADMIN AREA
	    </h1>
	    <hr class="simple-line">
	    <h3>
	    	<span class="small">
	    		Create and edit Projects and Blog Posts.
	    	</span>
	    </h3>
	</div>

@stop

@section('content')
	
	<div class="spacer60"></div>
	
	<div class="col-sm-6 text-center">
		<a href="{{ URL::to('/newProject') }}">
			<div class="project">
				<div class="blog-inner">
		    		<h3>NEW PROJECT</h3>
			    </div>
	    	</div>
		</a>
	</div>
	<div class="col-sm-6 text-center">
		<a href="{{ URL::to('/newPost') }}">
			<div class="project">
				<div class="blog-inner">
		    		<h3>NEW POST</h3>
			    </div>
	    	</div>
		</a>
	</div>

@stop