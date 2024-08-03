@extends('layouts.html')
@section('content')
@include('commons.errors')

<main class="container mx-auto p-6 bg-white shadow-md rounded-lg mt-8">
    <div id="company-info">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">会社概要</h2>

        <div class="company-detail space-y-6">
            <div>
                <h4 class="text-xl font-semibold text-blue-700">運営会社</h4>
                <p class="text-gray-700">株式会社WorkReach</p>
            </div>
            <div>
                <h4 class="text-xl font-semibold text-blue-700">メール</h4>
                <p class="text-gray-700">info@WorkReach.com</p>
            </div>
            <div>
                <h4 class="text-xl font-semibold text-blue-700">事業内容</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>ウェブサイト制作事業 (企画/マーケティング/ブランディング/デザイン)</li>
                    <li>情報コンテンツの企画、開発、販売事業</li>
                    <li>WorkReach運営事業</li>
                </ul>
            </div>
        </div>
    </div>
</main>

@endsection
