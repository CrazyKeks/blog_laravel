@extends('layouts.app')

@section('content')

	{!! Form::open(array('url' => route('post.edit', $post->id),'method'=>'GET')) !!}
		<div class="content">

			<h1><i>{{$post->title}}</i></h1>

			<p>{{$post->slug}}</p>
			
			<p>{{$post->content}}</p>

			<p>{{$post->created_at}}</p>
		</div>
		<br>
	{!! Form::submit('Редактировать', ['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}  
@stop