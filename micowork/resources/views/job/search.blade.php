@extends('layouts.html')
@section('content')

@foreach ($xmlArticles as $article)
<!-- 検索結果の表示 -->
<div>
    <div class="features-container">
        <div class="feature" id="">
            <a href="/area-job/{{ $article->area }}{{ $article->url }}">
                <img src="{{ asset("{$article->imagePath}") }}" alt="{{ $article->title }}" class="feature-image">

                <div class="feature-content">
                    <ul class="genre-list">
                        <li class="genre-1">{{ $article->area }}</li>
                        <li class="genre-2">{{ $article->jobtype }}</li>
                        <li class="genre-3">{{ $article->employmentType }}</li>
                    </ul>
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->description }}</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endforeach

@foreach ($articles as $article)
<!-- 検索結果の表示 -->
<div>

    <div class="features-container">
        <div class="feature " id="">
            <a href="{{ route('job.show', $article) }}">
                <img src="{{ asset("images/articlesImg/{$article->image_path}") }}" alt="{{ $article->image_path }}" class="feature-image">

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
    <style>
    .pagination {
        width: 10px;
        /* 他のスタイル */
    }

    svg{
        width: 20px;
    }

    .pagenation p{
        display: none;
    }
</style>

  <!-- Pagination for Database Articles -->
<!-- <div class="" style="padding: 15px;">
    {{ $articles->links() }}
</div> -->

<!-- Pagination for XML Articles -->
<div class="pagenation" style="padding: 15px;">
    {{ $xmlArticles->links() }}
</div>
    @endsection