@extends('layouts.app')
@section('content')
@include('commons.errors')
<form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('articles.form')
    <button class="block rounded-md bg-indigo-600 px-3 my-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type="submit">投稿する</button>
    <a class="rounded-md bg-indigo-600 px-3 mb-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="{{ route('articles.adminindex') }}">キャンセル</a>
</form>
@endsection()