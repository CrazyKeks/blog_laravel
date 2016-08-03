
<div class="form-group">
	{!! Form::label('Заголовок') !!}
	{!! Form::text ('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Тема') !!}
	{!! Form::text ('slug', null, ['class'=>'form-control']) !!}
</div><div class="form-group">
	{!! Form::label('Текст') !!}
	{!! Form::textarea ('content', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Публикация') !!}
	{!! Form::input ('date', 'created_at', date('Y-m-d'), ['class'=>'form-control'] ) !!}
</div>
	