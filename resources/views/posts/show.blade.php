@extends('layouts.app')
@section('title', $post->title)
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			<p>{{ $post->body }}</p>
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
						{!! Html::LinkRoute('posts.edit', 'Edit', [$post->id], ['class'=>'btn btn-block btn-primary']) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
						{!! Form::submit('Delete', ['class'=>'btn btn-block btn-danger']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection