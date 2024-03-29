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

Auth::routes();
//  -----for auth
Route::group(['middleware'=>['auth']], function(){
    Route::post('favorite/{post}/add', 'FavoriteController@add')->name('favorite.post');
    Route::post('favorite/ajax/add', 'FavoriteController@addLike');
    Route::post('comments/{post}', 'CommentController@addComment')->name('add.comment');
});

Route::get('admin/post/comment', 'Admin\CommentController@showComment')->name('post.comment');

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

    //======favorite 
    Route::get('/favorite/post/list', 'FavoriteController@index')->name('favorite.index');
    //======Comment 
    // Route::get('/post/comment', 'CommentController@showComment')->name('post.comment');
    Route::get('/comments', 'CommentController@showComment')->name('post.comment');
    Route::delete('/comments/{id}/destroy', 'CommentController@destroyComment')->name('comment.destroy');



    // user profile controller route
    Route::get('/profile-setting', 'ProfileController@index')->name('profile.setting');
    Route::put('/profile-setting/update', 'ProfileController@updateProfile')->name('profile.update');
    Route::put('/password/update', 'ProfileController@updatePassword')->name('password.update');

});
// -------for Author
Route::group(['as'=>'author.','prefix'=>'author', 'namespace'=>'Author', 'middleware'=>['auth','author']], function()
{
    Route::get('dashboard', 'AuthorController@index')->name('dashboard');
    Route::resource('post', 'PostController');
    
    // user profile controller route
    Route::get('/profile-setting', 'ProfileController@index')->name('profile.setting');
    Route::put('/profile-setting/update', 'ProfileController@updateProfile')->name('profile.update');
    Route::put('/password/update', 'ProfileController@updatePassword')->name('password.update');
    //======favorite 
    Route::get('/favorite/post/list', 'FavoriteController@index')->name('favorite.index');
    
    //======Comment 
    Route::get('/comments', 'CommentController@showComment')->name('post.comment');
    Route::delete('/comments/{id}/destroy', 'CommentController@destroyComment')->name('comment.destroy');


});

// for visitor
Route::get('/', 'HomeController@index')->name('home');
Route::get('/post/{slug}', 'PostController@index')->name('post.details');
Route::get('/category/{slug}', 'PostController@postByCategory')->name('category.post');
Route::get('/tag/{slug}', 'PostController@postByTag')->name('tag.post');
Route::get('/user/{id}', 'PostController@postByUser')->name('user.post');


Route::post('/subscriber', 'SubscriberController@index')->name('user.subscriber');

View::composer('layouts.frontEnd.partial.footer', function($view){
    $categories = App\Category::all();
    $view->with('categories',$categories);
});
