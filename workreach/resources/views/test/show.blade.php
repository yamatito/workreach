@extends('layouts.html')
@section('content')
<article class="article-item">
  <div class="article-title">
    <!-- <a href="{{ route('articles.adminshow', $article) }}">{{ $article->company_name }}</a> -->
  </div>
  <div class="article-content">

  </div>


  <div id="job-listing">
    <div class="job-info">
      <div class="job-detail">
        <ul class="genre-list">
          <li class="genre-1">{{ $article->area }}</li>
          <li class="genre-2">{{ $article->job_title }}</li>
          <li class="genre-3">{{ $article->employment_type }}</li>
        </ul>
        <h2 class="job-title">{{ $article->company_name }} / {{ $article->job_title_description }}</h2>
      </div>
      <img class="job-image" src="{{ asset('images/articlesImg/' . $article->image_path) }}" alt="$article->image_path)">
      <!-- <p class="job-description"></p> -->
      <table class="job-details">
        <tr>
          <td>会社名</td>
          <td>{!! nl2br(e($article->company_name)) !!}</td>
        </tr>
        <tr>
          <td>所在地</td>
          <td>{!! nl2br(e($article->address )) !!}</td>
        </tr>
        <tr>
          <td>勤務地</td>
          <td>{!! nl2br(e($article->work_location )) !!}</td>
        </tr>
        <tr>
          <td>職種</td>
          <td>{!! nl2br(e($article->job_title )) !!}</td>
        </tr>
        <tr>
          <td>アクセス</td>
          <td>{!! nl2br(e($article->access)) !!}</td>
        </tr>
        <tr>
          <td>雇用形態</td>
          <td>{!! nl2br(e($article->employment_type )) !!}</td>
        </tr>
        <tr>
          <td>仕事内容</td>
          <td>{!! nl2br(e($article->job_description)) !!}</td>
        <tr>
          <td>給与</td>
          <td>{!! nl2br(e($article->salary)) !!}</td>
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
          <td>{!! nl2br(e($article->application_method )) !!}</td>
        </tr>
        <tr>
          <td>面接地</td>
          <td>{!! nl2br(e($article->interview_location )) !!}</td>
        </tr>
        <tr>
          <td>受付担当者</td>
          <td>{!! nl2br(e( $article->receptionist )) !!}</td>
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