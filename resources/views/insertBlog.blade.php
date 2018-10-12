@extends('layouts.masterBlogLayout')

@section('title')
    Insert
@endsection

@section('title1')
    Insert
@endsection

@section('form')
    <form class="contact100-form validate-form" method="post" action="{{ route('addNewBlog') }}">
        {{ csrf_field() }}
        @include('include.masterBlogLayout')
    </form>
@endsection