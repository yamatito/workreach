@extends('layouts.app')
@section('content')

<div class="flex items-center justify-around">
    <a class="mt-10  p-3 bg-gray-800 rounded-full text-white font-bold" href="{{ route('articles.create') }}">記事を書く</a>

    <form action="{{ route('articles.adminindex') }}" method="GET">
        <select name="order" onchange="this.form.submit()" class="mt-10  p-3 bg-gray-800 rounded-full text-white font-bold">
            <option value="newest" @if($order==='newest' ) selected @endif>最新順</option>
            <option value="oldest" @if($order==='oldest' ) selected @endif>古い順</option>
            <option value="status_unset" @if($order==='status_unset' ) selected @endif>status未設定順</option>
        </select>
    </form>
    <a class="mt-10  p-3 bg-gray-800 rounded-full text-white font-bold" href="{{ route('home') }}">ホーム</a>

</div>




@foreach ($articles as $article)

<div class="mt-16 space-y-20 lg:mt-10 lg:space-y-10">
    <article class="relative isolate flex flex-col gap-8 lg:flex-row bg-gray-300 p-4 rounded-xl">
        <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
            <img src="{{ asset('storage/images/articlesImg/' . $article->image_path) }}" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </div>
        <div>
            <div class="flex items-center gap-x-4 text-xs">
                <time datetime="" class="text-gray-500">{{ $article->created_at }}</time>
                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $article->area }}</a>
            </div>
            <div class="group relative max-w-xl">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="{{ route('articles.adminshow', $article) }}">
                        <span class="absolute inset-0"></span>
                        {{ $article->company_name }}
                    </a>
                </h3>
                <p class="mt-5 text-sm leading-6 text-gray-600">更新日：{{ $article->updated_at }}</p>
            </div>
            <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                <div class="relative flex items-center gap-x-4">
                    <p class="mt-5 text-sm leading-6 text-gray-600">アップロード状況：{{ $article->status }}</p>
                </div>
            </div>
        </div>

        @can('admin-action')
        {{-- 管理者に表示される --}}
        <form action="{{ route('articles.activate', $article->id) }}" method="POST">
            @csrf
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Statusを有効にする
            </button>
        </form>

        @else
        {{-- 一般ユーザーに表示される --}}
       
        @endcan
    </article>
</div>




@endforeach
<div class="my-5">
    {{ $articles->appends(request()->query())->links() }}
    </di </div>
    @endsection