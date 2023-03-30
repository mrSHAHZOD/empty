<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
 
Route::get  ('/hello/{name?}',function($name=null){
    return'hello '.$name;

});

Route::get  ('/user/{name?}',function($name=null){
    return'hello user '.$name;

});


Route::get('/search',function(Request $request ){
   return $name= $request->all(); 
});



Route::group(['prefix'=>'dashboard'], function(){
    Route::get('/users',function(){
        return 'users dashboard';
    });
    
    Route::get('/statik',function(){
        return 'statistika dashboard';
    });
});  


//yangisig