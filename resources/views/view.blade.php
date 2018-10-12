@extends('layouts.viewLayoutBlog')
@section('conten')
    @foreach($blogs as $blog)
        <div class="blog-post">
            <h1 class="blog-title">{{ $blog->title }}</h1>
            <h2 class="date">{{ $blog->Created }}</h2>
            <p class="blog-content">{{ $blog->content }}</p>
            <a href="{{ route('delete', $blog->id) }}" class="a">Delete</a><br>
            <a href="{{ route('readMore', ['noidung' => $blog->noidung,'id' => $blog->id]) }}" class="post-link">Read More...</a>
        </div>
    @endforeach
    {{ $blogs->links() }}
@endsection

@section('a')
    <a href="{{ route('viewinsertBlog') }}" class="post-link add-new">Add new blog</a>
@endsection