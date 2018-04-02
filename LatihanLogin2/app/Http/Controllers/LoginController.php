<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
    	return view('login');
    }
    public function store(Request $Request){
    	
    	 $Request->validate([
    	 	'username'=>'required|max:10',
    	 	'password'=>'required|max:30'
    	 ]);
    	//print_r($Request->input());
    	$data = array(
    		'name' => $Request->input('username'),
    		'email' =>bcrypt($Request->input('password')) 
    	 );
    	//dd($data);
    	//echo strlen($data['email']); 
    	 $result = DB::insert('insert into test (name, email) value(?,?)',[$data['name'],$data['email']]);
    	// print_r($result);
    	print_r($data['email']);
    }
}
