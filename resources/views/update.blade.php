@extends('layouts.masterBlogLayout')

@section('title')
    Update
@endsection

@section('title1')
    Update
@endsection

@section('form')
    <form class="contact100-form validate-form" method="post" action="{{ route('updateBlog', $blogs->id) }}">
        {{ csrf_field() }}
        @include('include.masterBlogLayout')
    </form>
@endsection