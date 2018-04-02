<?php

//Route::get('/','PostController@index');
// Route::get('/post/create', 'PostController@create');
// Route::post('/post/store', 'PostController@store');
// Route::get('/post/{id}/',['as'=>'post.dev', function($id) {
//    echo "$id";
// }] );
Route::resource('post','BeritaController');
Route::get('/insert', function(){
	//DB::insert('insert into post (title, body, user_id) values (?,?,?)', ['belajar laravel', 'laravel is the best','1']);
	$data = [
		'title'=>'amien','body'=>'yaa ini bisa di save','user_id'=>'2'
	];
	DB::table('post')->insert($data);
	echo"data berhasil ditambah";
});
Route::get('/read', function() {
	// $query = DB::select('select * from post where id = ?', [1]);
	//ini untuk array
	//$query = DB::table('post')->select('title','body')->where('id',1)->get();
	//ini untuk object
	$query = DB::table('post')->select('title','body')->where('id',1)->first();
	return var_dump($query);
});
Route::get('/update', function() {
    // $update = DB::update('update post set title = "update field title" where id=?',[1]);
    $data = [
    	'title'=>'isi an update title',
    	'body'=>'isi an update body'
    ];
    $update = DB::table('post')->where('id', 1)->update($data);

    return $update;
});
Route::get('/delete', function() {
    // $delete = DB::delete('delete from post where id = ?',[1]);
		$delete = DB::table('post')->where('id', 2)->delete();
    return $delete;
});

use App\post;

Route::get('/post',function (){
	$posts = post::all();
	return $posts;
});
Route::get('/find', function() {
    $post = post::find(5);
    return $post;
});

Route::get('/findwhere', function() {
    $post = post::where('user_id',2)->orderBy('id','DESC')->take(2)->get();
    return $post;
});

Route::get('/create',function(){
	$posts = new post;
	$posts->title = 'ini judul baru';
	$posts->body = 'ini body baru';
	$posts->user_id = 7;
	$posts->save();
});

Route::get('/createpost', function() {

    $post = post::create(
    	[
    		'title'=>'ini mass insert',
    		'body'=>'ini body untuk mass insert',
    		'user_id'=>9
    	]
    );
});
Route::get('/updatepost', function() {
    $post = post::find(9);
    $post->update(
    	[
    		'title'=>'ini mass update',
    		'body'=>'ini body untuk mass update',
    		'user_id'=>20
    	]
    );
});
Route::get('/deletepost', function() {
    // $post = post::find(15);
    // $post->delete();
    
    //post::destroy([3,4]);

	$post = post::where('user_id',7);
	$post->delete();
});