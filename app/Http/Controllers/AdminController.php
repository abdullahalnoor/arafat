<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;

class AdminController extends Controller
{
    public function showLoginForm(){
        return view('admin-auth.login');
    }

    public function userName(){
        return 'name';
    }

    public function validateLogin($request){
        $this->validate($request,[
            $this->userName() => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

    }

    public function login(Request $request){
        // return $request->all();

       $this->validateLogin($request);

        $admin = Admin::where('email',$request->email)->first();

        if($admin){
            if(password_verify($request->password,$admin->password)){

                $admin_login = [
                    'name' =>  $admin->name,
                    'email' =>  $admin->email,
                    'login' => true,
                ];
                Session::put('admin_login',$admin_login);
                return \redirect()->route('admin.post.index');
            }

            $admin_login = [
                'login' => false,
            ];

            Session::put('admin_login',$admin_login);
            return back();




            $admin_login = [
                'web' => [
                    'name' =>  $admin->name,
                    'email' =>  $admin->email,
                    'login' => true,
                ],
                'admin' => [
                    'name' =>  $admin->name,
                    'email' =>  $admin->email,
                    'login' => true,
                ],
            ];




        }
       
    return 'user not found';

    }

    public function logout(){
        Session::invalidate();
        return \redirect()->route('admin.login');
    }

    public function showRegisterForm(){
        return view('admin-auth.register');
    }

    public function register(Request $request){
        // return $request->all();

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $admin = new Admin();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = \bcrypt($request->password);
        $admin->save();
        return $admin;
    }


    
}
