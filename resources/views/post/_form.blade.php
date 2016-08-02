
<div class="form-group">
	{!! Form::label('Заголовок') !!}
	{!! Form::text ('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Ваш текст') !!}
	{!! Form::textarea ('content', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Публикация') !!}
	{!! Form::input ('date', 'created_at', date('Y-m-d'), ['class'=>'form-control'] ) !!}
</div>
	{!! Form::submit('Отправить', ['class'=>'btn btn-primary']) !!}