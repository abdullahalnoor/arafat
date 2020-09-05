<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class PostController extends Controller
{


    public function index(){
        $page_title  = ' Posts';
        $posts = Post::where('status',1)->get();
        return view('backend.post.index',\get_defined_vars());
    }



    public function create(){
        $page_title  = 'Create Post';
        $categories = Category::where('status',1)->get();
        return view('backend.post.create',\get_defined_vars());
    }


    public function store(Request  $request){
        // dd($request->all());
        // return $request->all();
        // return $request->image;
        // return $request->image->getClientOriginalName();
        // return $request->image->getClientOriginalExtension();

        $this->validate($request,[
            'title' => 'required|max:200',
            'category_id' => 'required',
            'status' => 'nullable',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        $post = new Post();

        if($request->hasFile('image')){

         
            $originalImage = $request->file('image');
            // return $originalImage;
            // return uniqid();
            
            // return uniqid().'/'.time();
             $imageName = uniqid().time().'.'.$originalImage->getClientOriginalExtension();
            $imagePath = 'frontend/images/posts/';
   
            $originalImage->move($imagePath,$imageName);

            $imageFullPath = $imagePath.$imageName;
            $post->image =  $imageFullPath;
        }
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->save();




    }

}
