@extends('layouts.html')
@section('content')
@include('commons.errors')

<main>
    <div class="top-photo">
        <img src="{{ asset('storage/images/oldImg/img/top-photo.jpg') }}" alt="画像1">
    </div>
    <div class="title-bar">
        <img src="{{ asset('storage/images/oldImg/img/求人検索.png') }}" alt="求人検索">
    </div>
    <div class="search-bar">
        <form action="{{ route('job.search') }}" method="GET">

            <div class="content-title">
                <i class="fas fa-search"></i>
                <h2 class="search-title">求人検索</h2>
            </div>
            <div class="search-all">
                <div class="search-container">
                    <div class="keyword-search">
                        <h3>キーワード</h3>
                        <input type="text" class="search-input" name="keyword" value="{{ request('keyword') }}" placeholder="キーワードで検索">
                    </div>
                    <div class="area-search">
                        <h3>エリアから選ぶ</h3>
                        <div class="">
                            <select name="area" class="search-select">
                                <option value="">都道府県エリア</option>
                                @foreach(['北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県', '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県', '三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県', '鳥取県', '島根県', '岡山県', '広島県', '山口県', '徳島県', '香川県', '愛媛県', '高知県', '福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県'] as $prefecture)
                                <option value="{{ $prefecture }}" {{ request('area') == $prefecture ? 'selected' : '' }}>{{ $prefecture }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="area-search">
                        <h3>職種から選ぶ</h3>
                        <div class="">
                            <select name="job_title" class="search-select">
                                <option value="">職種から選ぶ</option>
                                @foreach(['全業種', '事務', '軽作業', '販売・接客', 'フード・飲食', 'サービス', '物流・運輸', '教育', 'エンタメ', 'イベント', 'クリエイティブ', '理美容', 'IT・コンピューター', '営業', '建築・土木', '医療・介護・福祉', '製造', '不動産', 'ドライバー', '管理職', '警備', '冠婚葬祭', '獣医師・動物看護士', '整備士・車関係', '清掃業', '配達', '調理', '農業', '引越し', 'リサイクル', '受付', '電気・設備', '整体', 'マッサージ・リラク', '保育士', 'スポーツ施設', '整体師', 'トリマー', '塾', '塗装', '漁業', '機械・メンテナンス', 'その他'] as $job)
                                <option value="{{ $job }}" {{ request('job_title') == $job ? 'selected' : '' }}>{{ $job }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="area-search">
                        <h3>雇用形態から選ぶ</h3>
                        <div class="">
                            <select name="employment_type" class="search-select">
                                <option value="">雇用形態から選ぶ</option>
                                @foreach(['全雇用形態', '正社員', '契約社員', 'パート', 'アルバイト', '業務委託', '派遣', '臨時社員', '嘱託社員', 'その他'] as $type)
                                <option value="{{ $type }}" {{ request('employment_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="search-button">検索</button>
                    <h3>この条件で検索</h3>
                </div>
            </div>
        </form>
    </div>

    </form>


    <!--おすすめ求人ーーーーーーーーーーーーーーーーーーーーーーーーーーー-->

    <div class="title-bar">
        <img src="{{ asset('storage/images/oldImg/img/オススメ求人.png ') }}" alt="おすすめ求人">
    </div>

    <div class="content-title">
        <i class="fa-solid fa-star"></i>
        <h2 class="search-title">おすすめ求人</h2>
    </div>
    <div id="slideshow-wrapper">
        <div class="slide-inner">
            <div class="slideshow-container">

                <ul class="slider-track">
                    <li class="slide">
                        <a href="/area-job/北海道/樺電工業.html">
                            <img src="/src/detail-img/北海道/樺電工業　株式会社 : 電気技術者.jpeg" alt="求人1の画像">
                            <div class="caption">樺電工業　株式会社 / 電気技術者<br><br></div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/滋賀/杉本商事.html">
                            <img src="/src/detail-img/滋賀/株式会社　杉本商事 : 工場内スタッフ.jpeg" alt="求人2の画像">
                            <div class="caption">株式会社　杉本商事 / 工場内スタッフ<br><br></div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/京都/山本清掃.html">
                            <img src="/src/detail-img/京都/株式会社　山本清掃 : リサイクル工場内作業員.png" alt="求人3の画像">
                            <div class="caption">株式会社　山本清掃 / リサイクル工場内作業員</div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/和歌山/おかむろ薬局.html">
                            <img src="/src/detail-img/和歌山/おかむろ薬局 : 一般事務.jpeg" alt="求人4の画像">
                            <div class="caption">おかむろ薬局 / 一般事務<br><br></div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/広島/富士マネジメント.html">
                            <img src="/src/detail-img/広島/富士マネジメント株式会社 : 設備技術者（広島市）設計.jpeg" alt="求人5の画像">
                            <div class="caption">富士マネジメント株式会社 / 設備技術者（広島市）設計</div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/山口/環境造形.html">
                            <img src="/src/detail-img/山口/有限会社　環境造形 : 技術職.jpeg" alt="Image 6">
                            <div class="caption">有限会社　環境造形 / 技術職<br><br></div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/徳島/かがやき歯科クリニック.html">
                            <img src="/src/detail-img/徳島/かがやき歯科クリニック : 受付・歯科助手.jpeg" alt="Image 6">
                            <div class="caption">かがやき歯科クリニック / 受付・歯科助手<br><br></div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/香川/やすとみ歯科医院.html">
                            <img src="/src/detail-img/香川/やすとみ歯科医院 : 歯科医院　受付補助.jpeg" alt="Image 6">
                            <div class="caption">やすとみ歯科医院 / 歯科医院　受付補助<br><br></div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/愛媛/ねぶの花.html">
                            <img src="/src/detail-img/愛媛/株式会社　元禄　デイサービスねぶの花 : 介護職員.jpeg" alt="Image 6">
                            <div class="caption">株式会社　元禄　デイサービスねぶの花 / 介護職員</div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/高知/仁智会.html">
                            <img src="/src/detail-img/高知/医療法人　仁智会（はまうづ医院・ヘルシーケアなはり） : 言語聴覚士【正社員】.jpeg" alt="Image 6">
                            <div class="caption">医療法人　仁智会（はまうづ医院・ヘルシーケアなはり） / 言語聴覚士【正社員】</div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/福岡/はこざき漢方.html">
                            <img src="/src/detail-img/福岡/はこざき漢方内科・心身医療クリニック : 事務.jpeg" alt="Image 6">
                            <div class="caption">はこざき漢方内科・心身医療クリニック / 事務</div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/佐賀/いづみや.html">
                            <img src="/src/detail-img/佐賀/有限会社いづみや : 青果コーナー業務（パート）.jpeg" alt="Image 6">
                            <div class="caption">有限会社いづみや / 青果コーナー業務（パート）</div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/長崎/ＬＩＦＥ.html">
                            <img src="/src/detail-img/長崎/ＬＩＦＥ・ＤＥＳＩＧＮ株式会社 : 介護支援専門員.jpeg" alt="Image 6">
                            <div class="caption">ＬＩＦＥ・ＤＥＳＩＧＮ株式会社 / 介護支援専門員</div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/熊本/三森会.html">
                            <img src="/src/detail-img/熊本/医療法人社団　三森会　三森循環器科・呼吸器科病院 : 介護支援専門員.jpeg" alt="Image 6">
                            <div class="caption">医療法人社団　三森会　三森循環器科・呼吸器科病院 / 介護支援専門員</div>
                        </a>
                    </li>
                    <li class="slide">
                        <a href="/area-job/沖縄/ホリデートラベル.html">
                            <img src="/src/detail-img/沖縄/株式会社　ジャパンホリデートラベル : 訪日旅行の企画手配、お客様対応.jpeg" alt="Image 6">
                            <div class="caption">株式会社　ジャパンホリデートラベル / 訪日旅行の企画手配、お客様対応</div>
                        </a>
                    </li>
                    <!-- 他のスライド要素を追加 -->
                </ul>



                <!-- 左矢印ボタン -->
                <button class="slick-arrow slick-prev" aria-label="Previous" type="button">Previous</button>
                <!-- 右矢印ボタン -->
                <button class="slick-arrow slick-next" aria-label="Next" type="button">Next</button>
            </div>

        </div>
        <!-- ドットのナビゲーションを表示するためのul要素 -->
        <ul class="slick-dots"></ul>
    </div>
    </div>




    <!--新着求人ーーーーーーーーーーーーーーーーーーーーーーーーーーー-->

    <div class="title-bar">
        <img src="{{ asset('storage/images/oldImg/img/新着求人.png') }}" alt="新着求人">
    </div>

    <div class="content-title">
        <i class="fas fa-search"></i>
        <h2 class="search-title">新着求人</h2>
    </div>

    <div id="slideshow-wrapper-2">
        <div class="slide-inner-2">
            <div class="slideshow-container-2">

                <ul class="slider-track-2">

                <li class="slide-2">
                    <a href="/area-job/北海道/Ｒ・ｓｔｙｌｅｓ.html">
                        <img src="/src/detail-img/北海道/株式会社　Ｒ・ｓｔｙｌｅｓ : 介護員（正職員）.jpeg" alt="Image 1">
                        <div class="caption-2">株式会社　Ｒ・ｓｔｙｌｅｓ / 介護員（正職員）<br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="/area-job/青森/大中.html">
                        <img src="/src/detail-img/青森/大中　株式会社 : りんごの木箱運搬・品出し.jpeg" alt="Image 2">
                        <div class="caption-2">大中　株式会社 / りんごの木箱運搬・品出し<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="/area-job/岩手/ざいもくちょう歯科.html">
                        <img src="/src/detail-img/岩手/ざいもくちょう歯科: 歯科衛生士.jpeg" alt="Image 3">
                        <div class="caption-2">ざいもくちょう歯科 / 歯科衛生士<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="/area-job/秋田/マルサ.html">
                        <img src="/src/detail-img/秋田/株式会社　マルサ : 建具製造工.jpeg" alt="Image 4">
                        <div class="caption-2">株式会社　マルサ / 建具製造工<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/山形/プロスパー.html">
                        <img src="/src/detail-img/山形/プロスパー株式会社 : 配管工【正社員・経験者】プロスパー株式会社 : 配管工【正社員・経験者】.png" alt="Image 5">
                        <div class="caption-2">プロスパー株式会社 / 配管工【正社員・経験者】<br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/福島/太陽の里いわき.html">
                        <img src="/src/detail-img/福島/社会福祉法人昌平黌　太陽の里いわき : 介護福祉士.jpeg" alt="Image 6">
                        <div class="caption-2">社会福祉法人昌平黌　太陽の里いわき / 介護福祉士<br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/栃木/Ｖａｒｉ.html">
                        <img src="/src/detail-img/栃木/株式会社Ｖａｒｉ : 訪問介護スタッフ.jpeg" alt="Image 6">
                        <div class="caption-2">株式会社Ｖａｒｉ / 訪問介護スタッフ<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/群馬/ケアサプライシステムズ.html">
                        <img src="/src/detail-img/群馬/ケアサプライシステムズ　株式会社 : 地域介護職員.jpeg" alt="Image 6">
                        <div class="caption-2">ケアサプライシステムズ　株式会社 / 地域介護職員</div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/埼玉/ＡＣＡ.html">
                        <img src="/src/detail-img/埼玉/ＡＣＡ　Ｎｅｘｔ　株式会社 : 調理師.jpeg" alt="Image 6">
                        <div class="caption-2">ＡＣＡ　Ｎｅｘｔ　株式会社 / 調理師<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/東京/小次郎.html">
                        <img src="/src/detail-img/東京/株式会社小次郎 : 訪問介護員（ヘルパー）.webp" alt="Image 6">
                        <div class="caption-2">株式会社小次郎 / 訪問介護員（ヘルパー）<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/神奈川/アリビオ.html">
                        <img src="/src/detail-img/神奈川/株式会社　アリビオ : ケアワーカー.jpeg" alt="Image 6">
                        <div class="caption-2">株式会社　アリビオ / ケアワーカー<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/新潟/丸世建設.html">
                        <img src="/src/detail-img/新潟/丸世建設株式会社 : 土木技術者.jpeg" alt="Image 6">
                        <div class="caption-2">丸世建設株式会社 / 土木技術者<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/富山/野沢工業.html">
                        <img src="/src/detail-img/富山/野沢工業　株式会社 : 建設機械オペレーター.jpeg" alt="Image 6">
                        <div class="caption-2">野沢工業　株式会社 / 建設機械オペレーター<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/福井/中野工業所.html">
                        <img src="/src/detail-img/福井/有限会社　中野工業所 : 製造.jpeg" alt="Image 6">
                        <div class="caption-2">有限会社　中野工業所 / 製造<br><br></div>
                    </a>
                </li>
                <li class="slide-2">
                    <a href="./area-job/山梨/ジャスト建設.html">
                        <img src="/src/detail-img/山梨/株式会社　ジャスト建設 : 法面工・土工・鳶.jpeg" alt="Image 6">
                        <div class="caption-2">株式会社　ジャスト建設 / 法面工・土工・鳶<br><br></div>
                    </a>
                </li>
                </ul>


                <!-- 左矢印ボタン -->
                <button class="slick-arrow-2 slick-prev-2" aria-label="Previous-2" type="button"></button>
                <!-- 右矢印ボタン -->
                <button class="slick-arrow-2 slick-next-2" aria-label="Next-2" type="button"></button>
            </div>

        </div>
        <!-- ドットのナビゲーションを表示するためのul要素 -->
        <ul class="slick-dots-2"></ul>
    </div>
    </div>




    <!--人気のカテゴリーーーーーーーーーーーーーーーーーーーーーーーーーーー-->

    <div class="title-bar">
        <img src="{{ asset('storage/images/oldImg/img/職種別検索.png') }}" alt="新着求人">
    </div>


    <div id="popular">
        <div class="content-title">
            <i class="fas fa-search"></i>
            <h2 class="search-title">人気のカテゴリー</h2>
        </div>

        <div class="popular-container">
            <div class="card-1">
                <a href="/genre/full-time.html">
                    <img src="{{ asset('storage/images/oldImg/img/photo-1-1.jpg') }}" alt="カード1の画像">
                    <h5>正社員</h5>
                </a>
            </div>
            <div class="card-2">
                <a href="/genre/part-job.html">
                    <img src="{{ asset('storage/images/oldImg/img/photo-2-2.jpg') }}" alt="カード2の画像">
                    <h5>パート・アルバイト</h5>
                </a>
            </div>
            <div class="card-3">
                <a href="/genre/health.html">
                    <img src="{{ asset('storage/images/oldImg/img/medical-photo-2.jpg') }}" alt="カード3の画像">
                    <h5>医療・介護・福祉</h5>
                </a>
            </div>
            <div class="card-4">
                <a href="/genre/construction.html">
                    <img src="{{ asset('storage/images/oldImg/img/build-photo-2.jpg') }}" alt="カード4の画像">
                    <h5>ドライバー・建築</h5>
                </a>
            </div>
        </div>
    </div>
    </div>

    <!-- <div class="flow-main">
    <div class="flow-detail">
        <div class="flow-text">
            <h3>掲載方法</h3>
            <p>「お客様からのお問い合わせ又は閉局からの営業により、<br>広告掲載の案内を始めさせていただきます。」</p>
        </div>

        <div class="flow-about">
            <h3>広告掲載までの流れについて</h3>
            <div class="flow-about-text">
                <h4>STEP1</h4>
                <p>弊局より申込書をFAX又はメールにてお送り致します。</p>
            </div>

            <i class="fa-solid fa-angles-down"></i>

            <div class="flow-about-text">
                <h4>STEP2</h4>
                <p>届いた申込書の記入欄に必要事項をご記入の上、<br>FAX又はメールにてご返信いただきます。</p>
            </div>

            <i class="fa-solid fa-angles-down"></i>

            <div class="flow-about-text">
                <h4>STEP3</h4>
                <p>申込書をご返信いただきましたら、制作担当者が<br>ヒアリングを行い、原稿を制作させていただきます。</p>
            </div>

            <i class="fa-solid fa-angles-down"></i>

            <div class="flow-about-text">
                <h4>STEP4</h4>
                <p>作成した原稿内容をFAX又はメールにてご案内いただき、
                    <br>修正箇所がない場合は掲載開始させていただきます。
                    <br>原稿の修正については協議の上で随時対応いたします。</p>
            </div>

            <h3>広告掲載料金について</h3>

            <table>
                <tr class="highlighted-row"> 
                    <td>掲載期間</td>
                    <td class="wider">掲載料金</td>
                </tr>
                <tr>
                    <td>3ヶ月</td>
                    <td class="wider">180,000円〜540,000円</td>
                </tr>
                <tr>
                    <td>1年以上</td>
                    <td class="wider">要相談</td>
                </tr>
            </table>

        </div>
    </div>
</div> -->

</main>

@endsection()