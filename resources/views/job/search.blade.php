@extends('layouts.html')
@section('content')

<div class="max-w-6xl mx-auto p-6">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($articles as $article)
        <div class="bg-white shadow-md rounded-lg overflow-hidden transition-transform transform hover:scale-105">
            <a href="{{ route('job.show', $article) }}">
            <img src="{{ asset('images/articlesImg/' . normalize_path($article->image_path)) }}" alt="{{ $article->image_path }}" class="w-full h-48 object-cover">

                <div class="p-4">
                    <ul class="flex space-x-2 text-sm">
                        <li class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full">{{ $article->area }}</li>
                        <li class="bg-green-100 text-green-700 px-2 py-1 rounded-full">{{ $article->job_title }}</li>
                        <li class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full">{{ $article->employment_type }}</li>
                    </ul>
                    <h3 class="text-lg font-semibold mt-2">{{ $article->company_name }}</h3>
                    <p class="text-gray-700 mt-2">{{ $article->job_description }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- Pagination for Database Articles -->
<div class="mt-5 flex justify-center">
    {{ $articles->appends(request()->query())->links() }}
</div>


@endsection
