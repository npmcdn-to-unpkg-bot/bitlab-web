@extends('layouts.master')

@section('header')

	<div class="header">
	    <h1>
	    	NEW BLOG POST
	    </h1>
	    <hr class="simple-line">
	</div>

@stop

@section('content')

	<div class="spacer60"></div>
	
	<div class="col-md-10 col-centered">
		{!! BootForm::open(array('url' => 'newPost')) !!}
			{!! BootForm::text('title') !!}
			<div class="form-group">
    			<label class="control-label">Type</label>
    			<select name="type" class="form-control">
					<option value="tutorial">Tutorial</option>
					<option value="project">Project Update</option>
					<option value="news">News</option>
				</select>
			</div>
			{!! BootForm::textarea('description') !!}
			{!! BootForm::submit('Send') !!}
		{!! BootForm::close() !!}
	</div>

@stop