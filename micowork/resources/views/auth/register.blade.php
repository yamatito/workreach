@extends('layouts.app')
@section('content')
<h1>会員登録</h1>
@include('commons.errors')
<form action="{{ route('register') }}" method="post" class="space-y-6">
    @csrf
    <div class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">パスワード</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">パスワード（確認用）</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="もう一度入力" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
    </div>
    <div class="flex justify-between">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">登録する</button>
        <a href="/admin" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">キャンセル</a>
    </div>
</form>

@endsection()