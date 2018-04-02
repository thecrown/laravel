<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mytable;



class DashboardController extends Controller
{
	

    public function index(){
    	return view('dashboard/dashboard');
    }
    public function save(){

    	$table = new mytable;

    	$table->id = 3;
    	$table->save();
    	return "jobs is done";
    }
    public function get()
    {
    	$table = new mytable;
    	$data = mytable::all();
    	//$data = $table->all();
    	return $data;
    }
}
