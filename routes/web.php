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

Route::resource('tasks', 'TaskController');

Route::get('/', 'TaskController@index');

/*
Route::get('/tasks', function(){
   return 'test '; 
});

Route::get('/tasks/{id}', function($id){
   return 'test '.$id; 
});

Route::get('/test/{id}', function($id){
    return view('test')->with('id', $id);
});

Route::get('/taskss/{id}', 'TaskController@show')->name('tasks.show');

Route::get('/taskss', 'TaskController@index');
*/