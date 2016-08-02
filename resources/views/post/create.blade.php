@extends('layouts.app')
 
@section('content')

	<h1>Создание поста</h1>

	{!! Form::open(array('url' => 'post','method'=>'POST')) !!}

		@include('post._form')

	{!! Form::close() !!}



@endsection