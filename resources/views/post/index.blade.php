@extends('layouts.app')

 
@section('content')
	@foreach($posts as $post)
	{!! Form::open(array('url' => route('post.show', $post->id),'method'=>'GET')) !!}
		<article>
			<h2> {{$post->title}} </h2>
			<p>  {{$post->slug}} </p>
			<p>  {{$post->content}} </p>
			<p>
				Публикация: {{$post->created_at}}
			</p>
			{!! Form::submit('Читать далее...') !!}
			{!! Form::close() !!} 
		</article>
	 	<div class="container">
	 	</div>
	@endforeach
	<div> 
	<br>
	
		{!! link_to_route('post.create','новый пост', [], ["class" => "btn btn-primary" ]) !!}
	
	</div>
@endsection

