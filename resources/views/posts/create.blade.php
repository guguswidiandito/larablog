@extends('layouts.app')
@section('title', 'Create')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-xs-offset-2">
			<h2>Create New Post</h2>
			<hr>
			{!! Form::open(['route'=>'posts.store', 'data-parsley-validate']) !!}
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class'=>'form-control', 'required'=>'']) !!}
			<br>
			{!! Form::label('body', 'Post Body:') !!}
			{!! Form::textarea('body', null, ['class'=>'form-control', 'required'=>'']) !!}
			<br>
			{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
			<a href="{{ route('posts.index') }}" title="" class="btn btn-success">Finish</a>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection