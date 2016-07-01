<?php
$projects = Project::where('visible', 1)
               ->orderBy('created_at', 'desc')
               ->get();
?>

@extends('layouts.master')

@section('header')

	<div class="header">
		<h1>
	    	PROJECTS
	    </h1>
	    <hr class="simple-line">
	    <h3>
	    	Programming and WebDesign
	    </h3>
	    <h3 class="intro">
	    	<span class="small">
	    		Bitlab is a personal project, intent on showcasing various ideas and skills regarding programming and webdesign.
	    	</span>
	    </h3>
	</div>

@stop

@section('content')

	@foreach($projects as $project)
		@include('layouts.project_icon')	
	@endforeach

@stop