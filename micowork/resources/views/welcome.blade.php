@extends('layouts.app')
@section('content')
<div class="welcome">
    @auth
    <div class="flex flex-col justify-center items-center h-96">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-x-1.5 rounded-full bg-blue-100 px-1.5 py-0.5 text-xl font-medium text-blue-700 my-2">
            <svg class="h-6 w-6 fill-current text-blue-500" viewBox="0 0 24 24" aria-hidden="true">
                <!-- SVGのパスを24x24サイズに調整 -->
                <circle cx="12" cy="12" r="12" />
            </svg>
            マイページ
        </a>
        <a href="{{ route('articles.adminindex') }}" class="inline-flex items-center gap-x-1.5 rounded-full bg-green-100 px-1.5 py-0.5 text-xl font-medium text-green-700 my-2">
            <svg class="h-6 w-6 fill-current text-green-500" viewBox="0 0 24 24" aria-hidden="true">
                <!-- SVGのパスを24x24サイズに調整 -->
                <circle cx="12" cy="12" r="12" />
            </svg>
            記事一覧
        </a>
<!-- 
        @can('admin-action')
        {{-- 管理者に表示される --}}
        <a class="btn" href="{{ route('register') }}">会員登録</a>
        @else
        {{-- 一般ユーザーに表示される --}}
        @endcan -->

    </div>


    @else

    <div class="h-96 mx-auto text-center">


  
        <div class="flex h-96 justify-center items-center">
            <a href="{{ route('login') }}" class="inline-flex items-center gap-x-1.5 rounded-full bg-gray-100 px-1.5 py-0.5 text-3xl font-medium text-gray-600">
                <svg class="h-6 w-6 fill-current text-gray-400" viewBox="0 0 24 24" aria-hidden="true">
                    <!-- SVGのパスを24x24サイズに調整する -->
                    <circle cx="12" cy="12" r="12" />
                </svg>
                ログイン
            </a>
        </div>

    </div>

    @endauth
</div>
@endsection()