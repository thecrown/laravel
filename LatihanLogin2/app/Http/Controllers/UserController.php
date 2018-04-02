<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
	public function index(){
		return view('new',['text'=>'ini text dari controller']);  
	}  
	public function show(){
		return view('new');
	}
	public function submit(){
		return view('form');
	}
	public function submited(Request $request){
		//print_r($request->input());

		return view('form',['name'=>$request->input('amien')]);
	}
	public function form(){
		return view('form1');	
	}
	public function about(request $request){
		// print_r ($request->input());
		$request->session()->put('name',$request->input('name'));
		print_r($request->session());
		return view('about')->with('name',$request->session()->get('name'));

		// return view('about');
	}
	public function form2(){
		return view('form2');
	}
	public function about2(Request $request){
		print_r($request->input());
		$request->validate([
			'text1'=>'required|confirmed|min:3|numeric',
		]);
	}
	public function msg($inputlanguage = null){
		App()->setLocale($inputlanguage);
		return view('msg');
	}
	public function insert(){
		// $result = DB::insert('insert into test (name, email) values (?,?)', [ 'Dayle', 'dayle@gmail.com']);
		// $result = DB::update('update test set name="amien" where id=?',[2]);
		// $result = DB::delete('delete from test where id=?',[2]);
		// $result = DB::select('select * from test');
		print_r($result);

	}
	public function pagination(){
		$result = DB::table('test')->paginate(5);
		//print_r($result);
		return view('page',["datas" => $result]);
	}
	public function join(){
		$query = DB::table('test as b')
		->join('departemen as a','b.id','=','a.id_departmen')
		->select('b.name','b.email','a.Departmens')
		->get();

		echo $query;
	}
	public function path(){
		$path = mix();
		echo $path;
	}
	public function upload(){
		return view('upload');
	}
	public function store(Request $Request){
		$path = $Request->file('image')->storeAs('upload',"amien");
		
		return view('view',['path'=>$path]);

	}
}
