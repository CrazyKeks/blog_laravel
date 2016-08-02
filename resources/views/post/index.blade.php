@extends('layouts.app')

 
@section('content')
	@foreach($posts as $post)
		<article>
			<h2> {{$post->title}} </h2>
			<p>  {{$post->content}} </p>
			<p>
				Публикация: {{$post->created_at}}
			</p>
		</article>
	 	<div class="container">
	 	</div>
	@endforeach
	<div> 
	
		{!! link_to_route('post.create','новый пост', [], ["class" => "btn btn-primary" ]) !!}
	
	</div>
@endsection

