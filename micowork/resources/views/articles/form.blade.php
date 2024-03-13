@csrf
<div class="form-group bg-gray-100 p-5">
    <label class="block" for="job_title" class="block text-sm font-medium text-gray-700">職種・ジャンル</label>
    <select required id="job_title" name="job_title" class="form-control search-select p-4 rounded-xl">
        <option value="">職種・ジャンル</option>
        @foreach(['全業種', '事務', '軽作業', '販売・接客', 'フード・飲食', 'サービス', '物流・運輸', '教育', 'エンタメ', 'イベント', 'クリエイティブ', '理美容', 'IT・コンピューター', '営業', '建築・土木', '医療・介護・福祉', '製造', '不動産', 'ドライバー', '管理職', '警備', '冠婚葬祭', '獣医師・動物看護士', '整備士・車関係', '清掃業', '配達', '調理', '農業', '引越し', 'リサイクル', '受付', '電気・設備', '整体', 'マッサージ・リラク', '保育士', 'スポーツ施設', '整体師', 'トリマー', '塾', '塗装', '漁業', '機械・メンテナンス', 'その他'] as $job)
        <option value="{{ $job }}" {{ (old('job_title', $article->job_title ?? '') == $job) ? 'selected' : '' }}>{{ $job }}</option>
        @endforeach
    </select>
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="company_name">会社名:</label>
    <textarea rows="6" id="company_name" name="company_name" class="form-control w-full rounded-xl">{{ old('company_name', $article->company_name) }}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="area" class="block text-sm font-medium text-gray-700">都道府県</label>
    <select required id="area" name="area" class="form-control search-select p-4 rounded-xl">
        <option value="">都道府県エリア</option>
        @foreach(['北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県', '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県', '三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県', '鳥取県', '島根県', '岡山県', '広島県', '山口県', '徳島県', '香川県', '愛媛県', '高知県', '福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県'] as $prefecture)
        <option  value="{{ $prefecture }}" {{ (old('area', $article->area ?? '') == $prefecture) ? 'selected' : '' }}>{{ $prefecture }}</option>
        @endforeach
    </select>
</div>


<div class="form-group bg-gray-100 p-5">
    <label class="block" for="address">所在地:</label>
    <textarea rows="6" id="address" name="address" class="form-control w-full rounded-xl">{{ old('address', $article->address) }}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="work_location">勤務地:</label>
    <textarea rows="6" id="work_location" name="work_location" class="form-control w-full rounded-xl">{{ old('work_location', $article->work_location) }}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="job_title_description">職種:</label>
    <textarea rows="6" id="job_title_description" name="job_title_description" class="form-control w-full rounded-xl">{{ old('job_title_description', $article->job_title_description) }}</textarea rows="6">
</div>



<div class="form-group bg-gray-100 p-5 ">
    <label class="block" for="access">アクセス:</label>
    <textarea rows="6" id="access" name="access" class="form-control w-full rounded-xl">{{ old('access', $article->access) }}</textarea rows="6">
</div>

<!-- <div class="form-group bg-gray-100 p-5">
    <label class="block" for="employment_type" class="block text-sm font-medium text-gray-700">雇用形態</label>
    <select id="employment_type" name="employment_type" class="form-control search-select p-4 rounded-xl">
        <option value="">雇用形態から選ぶ</option>
        @foreach(['全雇用形態', '正社員', '契約社員', 'パート', 'アルバイト', '業務委託', '派遣', '臨時社員', '嘱託社員', 'その他'] as $type)
        <option value="{{ $type }}" {{ (old('employment_type', $article->employment_type ?? '') == $type) ? 'selected' : '' }}>{{ $type }}</option>
        @endforeach
    </select>
</div> -->

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="employment_type">雇用形態:</label>
    <textarea rows="6" id="employment_type" name="employment_type" class="form-control w-full rounded-xl">{{ old('employment_type', $article->employment_type) }}</textarea rows="6">
</div>


<div class="form-group bg-gray-100 p-5">
    <label class="block" for="job_description">仕事内容:</label>
    <textarea required rows="6" id="job_description" name="job_description" class="form-control w-full rounded-xl">{{ old('job_description', $article->job_description) }}</textarea rows="6">
</div>


<div class="form-group bg-gray-100 p-5 ">
    <label class="block" for="salary">給与:</label>
    <textarea rows="6" id="salary" name="salary" class="form-control w-full rounded-xl">{{ old('salary', $article->salary) }}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="treatment">待遇:</label>
    <textarea rows="6" id="treatment" name="treatment" class="form-control w-full rounded-xl">{{ old('treatment', $article->treatment )}}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="working_hours">勤務時間:</label>
    <textarea rows="6" id="working_hours" name="working_hours" class="form-control w-full rounded-xl">{{ old('working_hours', $article->working_hours )}}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="recruitment_conditions">募集条件:</label>
    <textarea rows="6" id="recruitment_conditions" name="recruitment_conditions" class="form-control w-full rounded-xl">{{ old('recruitment_conditions', $article->recruitment_conditions) }}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="holidays">休日:</label>
    <textarea rows="6" id="holidays" name="holidays" class="form-control w-full rounded-xl">{{ old('holidays', $article->holidays) }}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="application_method">応募方法:</label>
    <textarea rows="6" id="application_method" name="application_method" class="form-control w-full rounded-xl">{{ old('application_method', $article->application_method) }}電話 応募 「Mico work を見た」と言って頂けるとスムーズにお繋ぎすることができます</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="interview_location">面接地:</label>
    <textarea rows="6" id="interview_location" name="interview_location" class="form-control w-full rounded-xl">{{ old('interview_location', $article->interview_location) }}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="receptionist">受付:</label>
    <textarea rows="6" id="receptionist" name="receptionist" class="form-control w-full rounded-xl">{{ old('receptionist', $article->receptionist) }}</textarea rows="6">
</div>

<div class="form-group bg-gray-100 p-5">
    <label class="block" for="application_contact">連絡先:</label>
    <textarea rows="6" id="application_contact" name="application_contact" class="form-control w-full rounded-xl">{{ old('application_contact', $article->application_contact) }}</textarea rows="6">
</div>

<!-- <div class="form-group bg-gray-100 p-5">
        <label class="block" for="image_path">画像アップロード:</label>
        <input class="border border-gray-200 p-2 w-full rounded-xl" type="file" id="image_path" name="image_path" value="{{ old('image_path', $article->image_path )}}" class="form-control">
    </div> -->
<div class="form-group bg-gray-100 p-5">
    <label class="block" for="new_image">画像アップロード:</label>
    <!-- 以前にアップロードされた画像があれば表示 -->
    @if ($article->image_path)
    <div class="mb-2">
        <img src="{{ asset('storage/images/articlesImg/' . $article->image_path) }}" alt="アップロードされた画像" style="max-width: 100%; height: auto;">
    </div>
    @endif
    <input class="border border-gray-200 p-2 w-full rounded-xl" type="file" id="new_image" name="new_image" class="form-control">
    <!-- 以前の画像名を保持するための隠しフィールド、変更がない場合に使用 -->
    <input type="hidden" name="previous_image" value="{{ $article->image_path }}">
</div>


<div class="form-group bg-gray-100 p-5">
    <label class="block" for="status">アップロード:</label>
    <select id="status" name="status" class="form-control">
        <option value="1" {{ $article->status ? 'selected' : '' }}>有効</option>
        <option value="0" {{ !$article->status ? 'selected' : '' }}>無効</option>
    </select>
</div>
