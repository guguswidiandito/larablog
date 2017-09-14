@extends('layouts.app')
@section('title', substr($post->title, 0, 14))
@section('content')
<div class="container">
	<div class="row">
		{!! Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'put']) !!}
		<div class="col-md-8">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class'=>'form-control']) !!}
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<dt>Created At:</dt>
					<dd>{{ $post->created_at->format('M j, Y h:ia') }}</dd>
				</dl>
				<dl>
					<dt>Last Updated:</dt>
					<dd>{{ $post->updated_at->format('M j, Y h:ia') }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Form::submit('Update', ['class'=>'btn btn-block btn-success']) !!}
					</div>
					<div class="col-sm-6">
						{!! Html::LinkRoute('posts.show', 'Cancel', [$post->id], ['class'=>'btn btn-block btn-danger']) !!}
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection