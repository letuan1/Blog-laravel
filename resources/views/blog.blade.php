@extends('layouts.viewLayoutBlog')
@section('conten')
    @foreach($mores as $more)
    <div class="blog-post">
        <h1 class="blog-title">{{ $more->noidung }}</h1>
        <a href="{{ route('blog') }}" class="post-link">Back</a>
    </div>
    @endforeach
@endsection

@section('a')
    <a href="{{ route('viewUpdateBlog', ['id' => $id]) }}" class="a">Update</a><br>
@endsection