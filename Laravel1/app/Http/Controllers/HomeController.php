<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show($a = null,$b=null){
    	$data = array('username'=> $a,
    				'umur'=> $b
    	 );
    	return view('dashboard',$data);
    }
}
