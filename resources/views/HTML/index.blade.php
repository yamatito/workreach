@extends('layouts.html')
@section('content')
@include('commons.errors')

<div class="relative mb-8 max-w-6xl mx-auto bg-[#F7FAFF]">
            <img src="{{ asset('/images/top.jpeg') }}" alt="画像1" class="w-full">
            <div class="w-full absolute inset-0 flex items-top justify-end">
                <h2 class="text-blue-800 text-xl md:text-6xl font-bold p-4 rounded-lg left-0 -top-5 sm:top-5 relative">
                    あなたの求める
                    <br>
                    企業が見つかる
                </h2>
            </div>
        </div>

<div class="bg-[#F7FAFF] py-8">
    <div class="max-w-6xl mx-auto px-2 sm:px-10">
       


        <div class="mb-8">
            <div class="bg-blue-800 text-white text-center py-4 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold">求人検索</h2>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <form action="{{ route('job.search') }}" method="GET">
                <div class="space-y-6">
                    <div>
                        <label for="keyword" class="block text-gray-700 font-semibold">キーワード</label>
                        <input type="text" id="keyword" name="keyword" value="{{ request('keyword') }}" placeholder="キーワードで検索" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>
                    <div>
                        <label for="area" class="block text-gray-700 font-semibold">エリアから選ぶ</label>
                        <select name="area" id="area" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="">都道府県エリア</option>
                            @foreach(['全国','北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県', '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県', '三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県', '鳥取県', '島根県', '岡山県', '広島県', '山口県', '徳島県', '香川県', '愛媛県', '高知県', '福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県'] as $prefecture)
                            <option value="{{ $prefecture }}" {{ request('area') == $prefecture ? 'selected' : '' }}>{{ $prefecture }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="job_title" class="block text-gray-700 font-semibold">職種から選ぶ</label>
                        <select name="job_title" id="job_title" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="">職種から選ぶ</option>
                            @foreach(['全業種', '事務', '軽作業', '販売・接客', 'フード・飲食', 'サービス', '物流・運輸', '教育', 'エンタメ', 'イベント', 'クリエイティブ', '理美容', 'IT・コンピューター', '営業', '建築・土木', '医療・介護・福祉', '製造', '不動産', 'ドライバー', '管理職', '警備', '冠婚葬祭', '獣医師・動物看護士', '整備士・車関係', '清掃業', '配達', '調理', '農業', '引越し', 'リサイクル', '受付', '電気・設備', '整体', 'マッサージ・リラク', '保育士', 'スポーツ施設', '整体師', 'トリマー', '塾', '塗装', '漁業', '機械・メンテナンス', 'その他'] as $job)
                            <option value="{{ $job }}" {{ request('job_title') == $job ? 'selected' : '' }}>{{ $job }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="employment_type" class="block text-gray-700 font-semibold">雇用形態から選ぶ</label>
                        <select name="employment_type" id="employment_type" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="">雇用形態から選ぶ</option>
                            @foreach(['全雇用形態', '正社員', '契約社員', 'パート', 'アルバイト', '業務委託', '派遣', '臨時社員', '嘱託社員', 'その他'] as $type)
                            <option value="{{ $type }}" {{ request('employment_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">検索</button>
                </div>
            </form>
        </div>

        <!--おすすめ求人ーーーーーーーーーーーーーーーーーーーーーーーーーーー-->
        <div class="mb-8">
            <div class="bg-blue-800 text-white text-center py-4 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold">おすすめ求人</h2>
            </div>
        </div>

        <div class="mb-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($articles as $article)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="{{ route('job.show', $article) }}">
                        <img src="{{ asset('storage/images/articlesImg/' . $article->image_path) }}" alt="求人の画像" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $article->company_name }} / {{ $article->job_title }}</h3>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <!--新着求人ーーーーーーーーーーーーーーーーーーーーーーーーーーー-->
        <div class="mb-8">
            <div class="bg-blue-800 text-white text-center py-4 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold">新着求人</h2>
            </div>
        </div>
        <div class="mb-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($articles as $article)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="{{ route('job.show', $article) }}">
                        <img src="{{ asset('storage/images/articlesImg/' . $article->image_path) }}" alt="求人の画像" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $article->company_name }} / {{ $article->job_title }}</h3>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <!--人気のカテゴリーーーーーーーーーーーーーーーーーーーーーーーーーーー-->
        <div class="mb-8">
            <div class="bg-blue-800 text-white text-center py-4 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold">人気カテゴリー</h2>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <a href="https://workreach.works/search?keyword=&area=&job_title=&employment_type=%E6%AD%A3%E7%A4%BE%E5%93%A1">
                    <img src="{{ asset('images/photo-1-1.jpg') }}" alt="カード1の画像" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-semibold">正社員</h5>
                    </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <a href="https://workreach.works/search?keyword=&area=&job_title=&employment_type=%E3%82%A2%E3%83%AB%E3%83%90%E3%82%A4%E3%83%88">
                    <img src="{{ asset('images/photo-2-2.jpg') }}" alt="カード2の画像" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-semibold">アルバイト</h5>
                    </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <a href="https://workreach.works/search?keyword=&area=&job_title=%E5%8C%BB%E7%99%82%E3%83%BB%E4%BB%8B%E8%AD%B7%E3%83%BB%E7%A6%8F%E7%A5%89&employment_type=">
                    <img src="{{ asset('images/medical-photo-2.jpg') }}" alt="カード3の画像" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-semibold">医療・介護・福祉</h5>
                    </div>
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <a href="https://workreach.works/search?keyword=&area=&job_title=%E5%BB%BA%E7%AF%89%E3%83%BB%E5%9C%9F%E6%9C%A8&employment_type=">
                    <img src="{{ asset('images/build-photo-2.jpg') }}" alt="カード4の画像" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-semibold">建築・土木</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection