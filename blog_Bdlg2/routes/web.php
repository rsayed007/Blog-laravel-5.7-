<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//  --------- For Admin
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']], function()
{
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
    Route::resource('tag', 'TagController');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');

    // approve custom route for admin post
    Route::get('pending/post','PostController@pendingPost')->name('post.pending');
    Route::put('/post/{id}/approved','PostController@approvedPost')->name('approve.post');
    // subscriber controller
    Route::get('/subscriber','SubscriberController@getSubscriber')->name('subscriber');
    Route::delete('/subscriber/{id}/delete','SubscriberController@deleteSubscriber')->name('subscriber.delete');

});
// -------for Author
Route::group(['as'=>'author.','prefix'=>'author', 'namespace'=>'Author', 'middleware'=>['auth','author']], function()
{
    Route::get('dashboard', 'AuthorController@index')->name('dashboard');
    Route::resource('post', 'PostController');

});

// for visitor
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/subscriber', 'SubscriberController@index')->name('user.subscriber');
