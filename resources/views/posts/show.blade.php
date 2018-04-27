@extends('layouts.app')

@section('content')
	<a href="/posts">Go Back</a>
	<h1>{{$post->title}}</h1>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on {{$post->created_at}}</small>
@endsection
