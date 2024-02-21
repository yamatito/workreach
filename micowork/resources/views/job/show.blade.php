@extends('layouts.html')
@section('content')
<article class="article-item">
    <div class="article-title">
        <!-- <a href="{{ route('articles.adminshow', $article) }}">{{ $article->company_name }}</a> -->
    </div>
    <div class="article-content">
        <!-- <p>エリア: {{ $article->area }}</p> -->
        <!-- <p>住所: {{ $article->address }}</p> -->
        <!-- <p>勤務地: {{ $article->work_location }}</p> -->
        <!-- <p>職種: {{ $article->job_title }}</p> -->
        <!-- <p>アクセス: {!! nl2br(e($article->access)) !!}</p> -->
        <!-- <p>雇用形態: {{ $article->employment_type }}</p> -->
        <!-- <p>仕事内容: {!! nl2br(e($article->job_description)) !!}</p> -->
        <!-- <p>給与: {{ $article->salary }}</p> -->
        <!-- <p>勤務時間:{!! nl2br(e($article->working_hours)) !!}</p> -->
        <!-- <p>採用条件:{!! nl2br(e($article->recruitment_conditions)) !!}</p> -->
        <!-- <p>休日:{!! nl2br(e($article->holidays)) !!}</p> -->
        <!-- <p>応募方法: {{ $article->application_method }}</p> -->
        <!-- <p>面接地: {{ $article->interview_location }}</p> -->
        <!-- <p>受付: {{ $article->receptionist }}</p> -->
        <!-- <p>連絡先: {{ $article->application_contact }}</p> -->
        <!-- <p>画像パス: {{ $article->image_path }}</p> -->
        <!-- <p>ステータス: {{ $article->status ? '有効' : '無効' }}</p> -->
        <!-- <p>作成日: {{ $article->created_at->format('Y-m-d H:i') }}</p> -->
        <!-- <p>更新日: {{ $article->updated_at->format('Y-m-d H:i') }}</p> -->
    </div>
    
  
<div id="job-listing">
    <div class="job-info">
        <div class="job-detail">
            <ul class="genre-list">
            <li class="genre-1">{{ $article->area }}</li>
            <li class="genre-2">{{ $article->job_title }}</li>
            <li class="genre-3">{{ $article->employment_type }}</li>
            </ul>
        <h2 class="job-title">{{ $article->company_name }} / {{ $article->job_title }}</h2>
    </div>
        <img class="job-image" src="{{ asset('storage/images/articlesImg/' . $article->image_path) }}" alt="$article->image_path)">
    <!-- <p class="job-description"></p> -->
    <table class="job-details">
      <tr>
        <td>会社名</td>
        <td>{{ $article->company_name }}</td>
      </tr>
      <tr>
        <td>所在地</td>
        <td>{{ $article->address }}</td>
      </tr>
      <tr>
        <td>勤務地</td>
        <td>{{ $article->work_location }}</td>
      </tr>
      <tr>
        <td>職種</td>
        <td>{{ $article->job_title }}</td>
      </tr>
      <tr>
        <td>アクセス</td>
        <td>{!! nl2br(e($article->access)) !!}</td>
      </tr>
      <tr>
        <td>雇用形態</td>
        <td>{{ $article->employment_type }}</td>
      </tr>
      <tr>
        <td>仕事内容</td>
        <td>{!! nl2br(e($article->job_description)) !!}</td>
      <tr>
        <td>給与</td>
        <td>{{ $article->salary }}</td>
      </tr>
      <tr>
        <td>待遇</td>
        <td>{!! nl2br(e($article->treatment)) !!}</td>
      </tr>
      <tr>
        <td>勤務時間</td>
        <td>{!! nl2br(e($article->working_hours)) !!}</td>
      </tr>
      <tr>
        <td>募集条件</td>
        <td>{!! nl2br(e($article->recruitment_conditions)) !!}</td>
      </tr>
      <tr>
        <td>休日/休暇</td>
        <td>{!! nl2br(e($article->holidays)) !!}
      </tr>
      <tr>
        <td>応募方法</td>
        <td>{{ $article->application_method }}</td>
      </tr>
      <tr>
        <td>面接地</td>
        <td>{{ $article->interview_location }}</td>
      </tr>
      <tr>
        <td>受付担当者</td>
        <td>{{ $article->receptionist }}</td>
      </tr>
      <!-- 他の求人情報項目も同様に追加 -->
    </table>
    <p class="call">応募する：<a href="tel:.{{ $article->application_contact }}">{{ $article->application_contact }}</a></p>
<!--
    <p class="email">メールで応募する：<a href="mailto:masaki.yfc.niwa@furukawaelectric.com">masaki.yfc.niwa@furukawaelectric.com</a></p>
-->
    </div>
  </div>
</article>
@endsection