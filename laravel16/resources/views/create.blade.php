@extends('layout.app')
@section('title')
	Halaman Create
@endsection
@section('body')
	Ini Halaman Create
	<form action="{{Route('post.store')}}" method="post" accept-charset="utf-8">
		<label>judul</label>
		@csrf
		<input type="text" name="title" id="title">
		<hr>
		<label>body</label>
		<textarea name="body" id="body" cols="30" rows="20"></textarea>
		<hr>
		<button type="submit">submit</button>
	</form>
@endsection