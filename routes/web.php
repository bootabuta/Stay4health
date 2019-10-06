<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/verify', function () {
    return view('auth.verify');
});

Route::get('/confirm', function () {
    return view('email.confirm');
});

Route::get('/health-tool', function () {
    return view('tool');
})->name('tool');

Route::get('/free-tutorial-video', function () {
    return view('video');
})->name('video');

Route::get('/learn-yoga-free', function () {
    return view('yoga');
})->name('yoga');

Route::get('/all-health-experts', function () {
    return view('allExperts');
})->name('allExperts');

Route::get('/about-stay4health', function () {
    return view('about');
})->name('about');



Auth::routes(['verify' => true]);

Route::middleware(['web','auth'])->group(function(){

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/addQuestion', function(){
	 return view('userDataView.addQuestion'); })->name('addQuestion');

	Route::get('/askedQuestion', function(){
	 return view('userDataView.askedQuestion'); })->name('askedQuestion');

	Route::get('/complains', function(){
	 return view('userDataView.complains'); })->name('complains');

	Route::get('/connectedExpert', function(){
	 return view('userDataView.connectedExpert'); })->name('connectedExpert');
	
	Route::get('/likedArticles', function(){
	 return view('userDataView.likedArticles'); })->name('likedArticles');

	Route::get('/likedVideos', function(){
	 return view('userDataView.likedVideos'); })->name('likedVideos');

	Route::get('/playlist', function(){
	 return view('userDataView.playlist'); })->name('playlist');

	Route::get('/savedTool', function(){
	 return view('userDataView.savedTool'); })->name('savedTool');

	Route::get('/newAnswers', function(){
	 return view('userDataView.newAnswers'); })->name('newAnswers');

});