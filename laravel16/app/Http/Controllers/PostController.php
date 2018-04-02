<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
    	$posts = [
		['id'=>1,'body'=>'body posting dengan id','title'=>'post dengan id'],
		['id'=>2,'body'=>'body posting dengan id','title'=>'post dengan id'],
		['id'=>3,'body'=>'body posting dengan id','title'=>'post dengan id'],
		['id'=>4,'body'=>'body posting dengan id','title'=>'post dengan id']
	];
	echo '<ul>';
	    foreach ($posts as $post) {
	    	echo '<a href="'.Route('post.dev', $post['id'] ).'">'.$post['title'].$post['id'].'</a>';
	    	echo '<br>';
	    }
	echo '</ul>';
    }
    public function create(){
    	return view('create');
    }
    public function store(Request $request){
    	return dd( $request->all());
    }
}
