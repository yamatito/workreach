@extends('layouts.app')
@section('content')
<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold leading-6 text-gray-900">記事詳細</h1>
            <p class="mt-2 text-sm text-gray-700">選択された記事の全情報を表示します。</p>
        </div>
    </div>
    <div class="-mx-4 mt-8 sm:-mx-6 lg:mx-0">
        <div class="inline-block min-w-full py-2 align-middle">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5">
                <table class="min-w-full divide-y divide-gray-300">
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">会社名</td><td class="text-sm text-gray-500">{{ $article->company_name }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">エリア</td><td class="text-sm text-gray-500">{{ $article->area }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">住所</td><td class="text-sm text-gray-500">{{ $article->address }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">勤務地</td><td class="text-sm text-gray-500">{{ $article->work_location }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">職種</td><td class="text-sm text-gray-500">{{ $article->job_title }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">アクセス</td><td class="text-sm text-gray-500">{!! nl2br(e($article->access)) !!}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">雇用形態</td><td class="text-sm text-gray-500">{{ $article->employment_type }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">仕事内容</td><td class="text-sm text-gray-500">{!! nl2br(e($article->job_description)) !!}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">給与</td><td class="text-sm text-gray-500">{{ $article->salary }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">待遇</td><td class="text-sm text-gray-500">{{ $article->treatment }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">勤務時間</td><td class="text-sm text-gray-500">{!! nl2br(e($article->working_hours)) !!}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">採用条件</td><td class="text-sm text-gray-500">{!! nl2br(e($article->recruitment_conditions)) !!}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">休日</td><td class="text-sm text-gray-500">{!! nl2br(e($article->holidays)) !!}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">応募方法</td><td class="text-sm text-gray-500">{{ $article->application_method }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">面接地</td><td class="text-sm text-gray-500">{{ $article->interview_location }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">受付</td><td class="text-sm text-gray-500">{{ $article->receptionist }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">連絡先</td><td class="text-sm text-gray-500">{{ $article->application_contact }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">画像パス</td><td class="text-sm text-gray-500">{{ $article->image_path }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ステータス</td><td class="text-sm text-gray-500">{{ $article->status ? '有効' : '無効' }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">作成日</td><td class="text-sm text-gray-500">{{ $article->created_at->format('Y-m-d H:i') }}</td></tr>
                        <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">更新日</td><td class="text-sm text-gray-500">{{ $article->updated_at->format('Y-m-d H:i') }}</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>






    <div class="article-control">
        <a href="{{ route('articles.edit', $article) }}" class="block rounded-md bg-indigo-600 px-3 mb-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">編集</a>
        <form action="{{ route('articles.destroy', $article) }}" onsubmit="return confirm('本当に削除しますか？')" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">削除</button>
        </form>
    </div>
</article>
@endsection