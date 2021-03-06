<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registerController extends Controller
{
    public function create(){
    	return view('registration.create');
    }
    public function store(){
    	//validate the form
    	$this->validate(request(), [
    		'name'=>'required',
    		'email'=>'required',
    		'password'=>'required|confirmed',
    	]);
    	//create and save the user 
    	$user = User::create(request(['name','email','password']));

    	//sign them in
    	auth()->login($user);

    	//redirect to the home
    	return redirect('/');
    }
    public function destroy(){

    }
}
