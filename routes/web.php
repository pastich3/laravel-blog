<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/case_studies', 'HomeController@case_studies')->name('case_studies');
Route::get('/bootcamp', 'HomeController@bootcamp')->name('bootcamp');
// Route::get('/your_story', 'HomeController@yourStory')->name('your_story');
// Route::get('/our_story', 'HomeController@ourStory')->name('our_story');
// Route::get('/contact', 'HomeController@contact')->name('contact');
// Route::get('/contact_submitted', 'HomeController@contactInfoSubmitted')->name('contact_submitted');
// Route::get('/testimonials', 'HomeController@testimonials')->name('testimonials');
Route::post('/contact', 'TathamContactController@contact')->name('contactPost');
// Route::get('/blog', 'PostController@index')->name('blog');
// Route::get('/posts/feed', 'PostFeedController@index')->name('posts.feed');
// Route::resource('posts', 'PostController')->only('show');
// Route::resource('users', 'UserController')->only('show');

// Route::get('newsletter-subscriptions/unsubscribe', 'NewsletterSubscriptionController@unsubscribe')->name('newsletter-subscriptions.unsubscribe');
