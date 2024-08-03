@extends('layouts.html')
@section('content')

<article class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="mb-6">
        <h2 class="text-2xl font-bold">{{ $article->company_name }}</h2>
    </div>
    <div class="flex flex-col">
        <div class="w-full mb-6">
            <img class="w-full h-auto object-cover rounded-lg" src="{{ asset('images/articlesImg/' . $article->image_path) }}" alt="{{ $article->image_path }}">
            <ul class="flex space-x-2 text-sm mt-4">
                <li class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full">{{ $article->area }}</li>
                <li class="bg-green-100 text-green-700 px-2 py-1 rounded-full">{{ $article->job_title }}</li>
                <li class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full">{{ $article->employment_type }}</li>
            </ul>
            <h2 class="text-xl font-semibold mt-4">{{ $article->company_name }} / {{ $article->job_title_description }}</h2>
        </div>
        <div class="w-full">
        <table class="w-full mb-6 border-collapse border border-gray-300">
    <tbody>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">会社名</td>
            <td class="py-2 px-4">{!! nl2br(e($article->company_name)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">所在地</td>
            <td class="py-2 px-4">{!! nl2br(e($article->address)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">勤務地</td>
            <td class="py-2 px-4">{!! nl2br(e($article->work_location)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">職種</td>
            <td class="py-2 px-4">{!! nl2br(e($article->job_title)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">アクセス</td>
            <td class="py-2 px-4">{!! nl2br(e($article->access)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">雇用形態</td>
            <td class="py-2 px-4">{!! nl2br(e($article->employment_type)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">仕事内容</td>
            <td class="py-2 px-4">{!! nl2br(e($article->job_description)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">給与</td>
            <td class="py-2 px-4">{!! nl2br(e($article->salary)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">待遇</td>
            <td class="py-2 px-4">{!! nl2br(e($article->treatment)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">勤務時間</td>
            <td class="py-2 px-4">{!! nl2br(e($article->working_hours)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">募集条件</td>
            <td class="py-2 px-4">{!! nl2br(e($article->recruitment_conditions)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">休日/休暇</td>
            <td class="py-2 px-4">{!! nl2br(e($article->holidays)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">応募方法</td>
            <td class="py-2 px-4">{!! nl2br(e($article->application_method)) !!}</td>
        </tr>
        <tr class="border-b-[0.5px] border-gray-300">
            <td class="font-semibold py-2 px-4">面接地</td>
            <td class="py-2 px-4">{!! nl2br(e($article->interview_location)) !!}</td>
        </tr>
        <tr>
            <td class="font-semibold py-2 px-4">受付担当者</td>
            <td class="py-2 px-4">{!! nl2br(e($article->receptionist)) !!}</td>
        </tr>
    </tbody>
</table>

            <p class="call text-lg font-semibold text-blue-600">応募する：<a href="tel:{{ $article->application_contact }}" class="hover:underline">{{ $article->application_contact }}</a></p>
        </div>
    </div>
</article>

@endsection
