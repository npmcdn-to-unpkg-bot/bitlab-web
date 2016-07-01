<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {

	$userName = Input::get('name');
	$userEmail = Input::get('email');
	$userMessage = Input::get('message');
	
	Mail::send('emails.contactForm', ['userName' => $userName, 'userEmail' => $userEmail, 'content' => $userMessage], function ($message) {
	    $message->from(Input::get('email'), Input::get('name'))
	    		->to('freitascbruno@gmail.com')
	    		->subject('Bitlab Contact Form');
	});
	
    return view('home');
});

/*
PRIVATE AREA - ADMIN ROUTES
*/
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/newProject', function () {
    return view('newProject');
});

Route::get('/newPost', function () {
    return view('newPost');
});

Route::post('/newProject', function () {
	
	$project = new Project;
	$project->title = Input::get('title');
	$project->technology = Input::get('technology');
	$project->link = Input::get('link');
	$project->description = Input::get('description');
	$project->save();
	
	return Redirect::to('projects');
});

Route::post('/newPost', function () {
	
	$post = new Post;
	$post->title = Input::get('title');
	$post->type = Input::get('type');
	$post->description = Input::get('description');
	$post->save();
	
	return Redirect::to('blog');
});