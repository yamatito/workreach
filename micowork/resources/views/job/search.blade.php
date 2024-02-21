@extends('layouts.html')
@section('content')
@foreach ($articles as $article)
<!-- 検索結果の表示 -->
<div>

    <!-- その他の記事情報 -->

    <div class="feature" id="">
        <a href="{{ route('job.show', $article) }}">
            <img src="{{ asset("storage/images/articlesImg/{$article->image_path}") }}" alt="{{ $article->image_path }}" class="feature-image">

            <div class="feature-content">
                <ul class="genre-list">
                    <li class="genre-1">{{ $article->area }}</li>
                    <li class="genre-2">{{ $article->job_title }}</li>
                    <li class="genre-3">{{ $article->employment_type}}</li>
                </ul>
                <h3>{{ $article->company_name}}</h3>
                <p>{{ $article->job_description}}</p>
            </div>
        </a>
    </div>
</div>
@endforeach


<div class="" style="padding: 15px;">
    {{ $articles->links() }}
</div>
@endsection