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
    
    $category =  Category::find(1);
    $category->delete();
   
    return $category;

    return view('welcome');
});