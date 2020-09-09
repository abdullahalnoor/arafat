<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{



  public function index(){
    $page_title = 'Manage Category';
    // return $categories = Category::where('status',1)->get(); // filter by where 
    // return $categories = Category::get();
    // return $categories = Category::all();
    //  $categories = Category::get();
     $categories = Category::paginate(3);

     Session::forget('session_array');
    return view('backend.category.index',\get_defined_vars());
  }

   public function create(){
       $page_title = 'Create Category';
      return view('backend.category.create',\get_defined_vars());
   }

   public function store(Request $request){
    //    return $request->all();
    // $_POST['name'];

    $this->validate($request,[
      'name' => 'required|min:5|max:255',
      'status' => 'required',
    ]);

    $category = new Category();
    $category->name = $request->name;
    $category->status = $request->status;
    $category->save(); 

    
    Session::flash('success','Information Added Successfullly..');
 

    return redirect()->route('admin.category.index');
   }


   public function edit($id){
    $page_title = 'Update Category';
    $category =  Category::find($id);
    // $category =  Category::where('id',$id)->first();
    return view('backend.category.edit',\get_defined_vars());
   }


   public function update(Request $request){
      //  return $request->all();
    // $_POST['name'];

    $this->validate($request,[
      'name' => 'required|min:5|max:255',
      'status' => 'required',
    ]);

    $category =  Category::find($request->category_id);
    $category->name = $request->name;
    $category->status = $request->status;
    // $category->save(); 
    $category->update(); 

    
    Session::flash('success','Information Updated Successfullly..');
 

    return redirect()->route('admin.category.index');
   }

   public function delete($id){
   
    $category =  Category::find($id);
    $category->delete();
    Session::flash('success','Information Deleted Successfullly..');
    return redirect()->route('admin.category.index');
   }

   public function changeStatus($id){
   
    $category =  Category::find($id);

    if($category->status == 1){
      $category->status = 0;
    }else{
      $category->status = 1;
    }

    $category->save();
    
    Session::flash('success','Information Status Change Successfullly..');
    return back();

   }

   
}
