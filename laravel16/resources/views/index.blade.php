@extends('layout.app')
@section('title')
	Halaman data Post
@endsection
@section('body')
	<h1>Halaman Posts</h1>
	@if( count($posts) > 0)
		<ul>
		    @foreach($posts as $post)
		    <a href="{{route('post.show',$post['id']) }}"><li>{{ $post['title'] }}</li></a>
		    @endforeach
		</ul>
	@else
	<p>Tidak Ada yang Dikeluarkan</p>
	@endif
@endsection