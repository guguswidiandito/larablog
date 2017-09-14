@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="lead">Welcome to My Blog!</h1>
                <p>Terimakasih telah mengunjungi blog saya, blog ini saya buat dengan menggunakan Laravel 5.2, silahkan baca post terpopuler saya.</p>
                <p><a href="#" class="btn btn-primary">Popular Post</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach ($post as $p)
            <div class="post">
                <h3>{{ $p->title }}</h3>
                <p>{{ substr($p->body, 0, 300) }}{{ strlen($p->body) > 300 ? "...":"" }}</p>
                <p><a href="#" class="btn btn-primary">Read More</a></p>
            </div>
            <hr>
            @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
</div>
@endsection