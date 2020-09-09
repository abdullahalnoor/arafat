<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use DB;
use Session;

class PostController extends Controller
{


    public function index(){
        $page_title  = ' Posts';
        $posts = Post::where('status',1)->with('category')->get();
    //    return $posts[0]->category->name;

    // return $posts = DB::table('posts')
    //         ->join('categories', 'posts.category_id', '=', 'categories.id')
    //         ->select('posts.id as post_id',
    //          'posts.created_at as post_created_at',
    //          'categories.created_at as cat_created_at',
    //          'categories.id as cat_id')
    //         ->get();

        $session_array = [
            'name'=> 'Md X',
            'address' => 'Dhaka',
            'phone'  => '01464646',
            'login'  => true,
        ];
        Session::put('session_array',$session_array);

    
        return view('backend.post.index',\get_defined_vars());
    }
    
    public function login(){
        $page_title  = 'Login Page';
      
        return view('backend.login.login',\get_defined_vars());
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
