@extends('layouts.app')
@section('content')

<div class="flex items-center justify-around mt-10 space-x-4">
    <a class="p-3 bg-blue-600 hover:bg-blue-700 rounded-full text-white font-bold" href="{{ route('articles.create') }}">記事を書く</a>

    <form action="{{ route('articles.adminindex') }}" method="GET" class="flex items-center">
        <select name="order" onchange="this.form.submit()" class="p-3 bg-blue-600 hover:bg-blue-700 rounded-full text-white font-bold">
            <option value="newest" @if($order==='newest' ) selected @endif>最新順</option>
            <option value="oldest" @if($order==='oldest' ) selected @endif>古い順</option>
            <option value="status_unset" @if($order==='status_unset' ) selected @endif>status未設定順</option>
        </select>
    </form>
    
    <a class="p-3 bg-blue-600 hover:bg-blue-700 rounded-full text-white font-bold" href="{{ route('home') }}">ホーム</a>
</div>

<div class="mt-16 space-y-10 lg:mt-10">
    @foreach ($articles as $article)
    <a href="{{ route('articles.adminshow', $article) }}" class="block transform transition-transform hover:scale-105">
        <article class="relative isolate flex flex-col lg:flex-row bg-gray-300 p-4 rounded-xl shadow-md">
            <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-48 lg:shrink-0">
                <img src="{{ asset('images/articlesImg/' . $article->image_path) }}" alt="{{ $article->image_path }}" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
            </div>
            <div class="flex-1 px-4 py-2">
                <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="{{ $article->created_at }}" class="text-gray-500">{{ $article->created_at->format('Y-m-d') }}</time>
                    <span class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600">{{ $article->area }}</span>
                </div>
                <div class="group relative max-w-xl mt-2">
                    <h3 class="text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        {{ $article->company_name }}
                    </h3>
                    <p class="mt-1 text-sm leading-6 text-gray-600">更新日：{{ $article->updated_at->format('Y-m-d') }}</p>
                </div>
                <div class="mt-4 flex border-t border-gray-900/5 pt-4">
                    <div class="relative flex items-center gap-x-4">
                        <p class="text-sm leading-6 text-gray-600">
                            アップロード状況：
                            @if ($article->status == 1)
                            <span class="text-green-600">アップロード完了</span>
                            @elseif ($article->status == 0)
                            <span class="text-red-600">未アップロード</span>
                            @else
                            <span class="text-yellow-600">ステータス不明</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </a>
    @endforeach
</div>

<!-- 月ごとの投稿数 -->
<div class="mt-10">
    <h2 class="text-xl font-bold text-gray-800 mb-4">月ごとの投稿数</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($monthlyCounts as $month => $count)
        <div class="bg-blue-100 p-4 rounded-lg text-center">
            <h3 class="text-lg font-semibold text-blue-700">{{ $month }}</h3>
            <p class="text-2xl font-bold text-blue-900">{{ $count }}</p>
        </div>
        @endforeach
    </div>
</div>

<div class="my-5">
    {{ $articles->appends(request()->query())->links() }}
</div>

@endsection
