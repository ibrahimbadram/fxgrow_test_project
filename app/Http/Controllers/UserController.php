<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;


class UserController extends BaseController
{
    /*
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }
	
	public function loginView(){
		return view('login');
	}
	
	public function registerView(){
		return view('register');
	}
	public function uploadFilesView(){
		return view('upload_files');
	}
	public function userVerifyEmail(){
		return view('verify');
	}
	
	public function login(Request $request){
		
		$validatedData = $request->validate([
			'email' => 'required|max:255',
		]);
		
		print_r($validatedData);
		exit;
	
		return view("login");
	}
	
	public function register(Request $request){
		
		$validatedData = $request->validate([
			'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);
		
		$user =  User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
		
		if($user){
			redirect('verify');
		}
		return view("register");
	}
	
	
	public function logout(Request $request){
		echo 'Logout User test!';
	}
}
