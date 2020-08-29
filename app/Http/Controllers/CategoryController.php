<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{



  public function index(){
    $page_title = 'Manage Category';
    // return $categories = Category::where('status',1)->get(); // filter by where 
    // return $categories = Category::get();
    // return $categories = Category::all();
     $categories = Category::get();
    return view('backend.category.index',\get_defined_vars());
  }

   public function create(){
       $page_title = 'Create Category';
      return view('backend.category.create',\get_defined_vars());
   }

   public function store(Request $request){
    //    return $request->all();
    // $_POST['name'];

    $category = new Category();
    $category->name = $request->name;
    $category->status = $request->status;
    $category->save(); 
   }
}
