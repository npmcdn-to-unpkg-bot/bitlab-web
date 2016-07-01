<?php
$posts = Post::where('visible', 1)
               ->orderBy('created_at', 'desc')
               ->get();
?>

@extends('layouts.master')

@section('header')

	<div class="header">
		<h1>
	    	BLOG
	    </h1>
	    <hr class="simple-line">
	    <h3>
	    	News about projects development, tutorial and samples.
	    </h3>
	    <h3 class="intro">
	    	<span class="small">
	    		Bitlab is a personal project, intent on showcasing various ideas and skills regarding programming and webdesign.
	    	</span>
	    </h3>
	</div>

@stop

@section('content')

	<div class="content-blog">
		
		@foreach($posts as $post)
			@include('layouts.blog_icon')
		@endforeach
	</div>
@stop