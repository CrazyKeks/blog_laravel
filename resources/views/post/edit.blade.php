@extends('layouts.app')
 
@section('content')

	<h1>Создание поста</h1>
	 	 

	 	 {!! Form::model($post, [
	 	 'method' => 'PATCH',
	 	 'url' => [ route('post.update', array($post->id))],
	 	 ]) !!}

		@include('post._form')

		{!! Form::submit('Отправить', ['class'=>'btn btn-primary']) !!}

		{!! Form::close() !!}



@endsection