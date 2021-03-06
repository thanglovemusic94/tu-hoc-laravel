<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function (){
   return view('test');
});

Route::get('/product', function (){
    return 'product view';
});

Route::get('/user-manager', function (){
    return 'user view';
})->name('user');

Route::get('/service', function (){
    return 'service view';
});

Route::get('/news', function (){
    return 'news view';
});


Route::get('news/{id}/category/{categoryId}', function ($id, $categoryId){
   return "bài viết số $id - danh mục $categoryId";
});

Route::get('user/{id}/branch/{branchId}', function ($id, $branchId){
    return "User $id - branch $branchId";
})->name("user.show.branch");

Route::prefix('backend')->namespace('Backend')->group(function (){
    Route::get('/user', 'UserController@index')->name('backend.user');

    Route::get('/product', 'ProductController@index')->name('backend.product');

    Route::get('/service', 'ServiceController@index')->name('backend.service');
});


