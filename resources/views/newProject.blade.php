@extends('layouts.master')

@section('header')

	<div class="header">
	    <h1>
	    	NEW PROJECT
	    </h1>
	    <hr class="simple-line">
	</div>

@stop

@section('content')

	<div class="spacer60"></div>
	
	<div class="col-md-10 col-centered">
		{!! BootForm::open(array('url' => 'newProject')) !!}
			{!! BootForm::text('title') !!}
			{!! BootForm::text('technology') !!}
			{!! BootForm::text('link') !!}
			{!! BootForm::textarea('description') !!}
			{!! BootForm::submit('Send') !!}
		{!! BootForm::close() !!}
	</div>

@stop