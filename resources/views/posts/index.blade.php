@extends('layouts.app')
@section('title', 'All Post')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1>All Post</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" title="" class="btn btn-info">Create New Post</a>
		</div>
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Body</th>
							<th>Created At</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($post as $key => $p)
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{ $p->title }}</td>
							<td>{{ substr($p->body, 0, 50) }}{{ strlen($p->body) > 50 ? "..." : "" }}</td>
							<td>{{ $p->created_at->format('M j, Y') }}</td>
							<td>
								<a href="{{ route('posts.show', $p->id) }}" title="" class="btn btn-default btn-sm">View</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-center">
					{!! $post->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection