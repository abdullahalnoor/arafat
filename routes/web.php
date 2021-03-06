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
use App\Category;

Route::get('/', function () {
    // return  Category::where('status',1)->get();

    // save data
    // $category = new Category();

    // $category->name = 'Car1';
    // $category->status = 0;
    // $category->save();


    // $category =  Category::find(1);

    // $category->name = 'Car1';
    // $category->status = 0;
    // $category->update();
    
    // $category =  Category::find(1);
    // $category->delete();
   
    // return $category;

    return view('welcome');
});


// Route::get('/admin', function () {
    

//     return view('backend.home.index');
// });

Route::get('/admin/category/index','CategoryController@index')->name('admin.category.index');
Route::get('/admin/category/create','CategoryController@create')->name('admin.category.create');
Route::post('/admin/category/store','CategoryController@store')->name('admin.category.store');
Route::get('/admin/edit/{id}/','CategoryController@edit')->name('admin.category.edit');
Route::post('/admin/category/update','CategoryController@update')->name('admin.category.update');
Route::get('/admin/category/delete/{id}/','CategoryController@delete')->name('admin.category.delete');
Route::get('/admin/category/status/{id}/','CategoryController@changeStatus')->name('admin.category.status');


Route::get('/admin/post/index','PostController@index')->name('admin.post.index');
Route::get('/admin/post/create','PostController@create')->name('admin.post.create');
Route::post('/admin/post/store','PostController@store')->name('admin.post.store');





Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


Route::get('/admin/login','AdminController@showLoginForm')->name('admin.login');
Route::post('/admin/login','AdminController@login');

Route::get('/admin/logout','AdminController@logout')->name('admin.logout');


Route::get('/admin/register','AdminController@showRegisterForm')->name('admin.register');
Route::post('/admin/register','AdminController@register');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
