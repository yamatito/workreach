<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mico work</title>
    <meta name="description" content="あなたの理想の企業を見つけ出すMico work。幅広い業界と職種から、あなたにピッタリの会社が見つかります。">

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/genre.css') }}">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header class="header">
        <div class="inner">
            <div class="header-name">
                <a href="/">
                    <h3 class="header-site">求人情報サイト</h3>
                    <h3 class="header-company-name">Micowork</h3>
                </a>
            </div>
        </div>
        <button id="search-button">都道府県検索</button>
        <form id="category-form" action="{{ route('job.search') }}" method="GET">

            <div class="button-group">
                <ul class="nav-list">
                    <li class="dropdown">
                        <button class="nav-button no-arrow" name="area" value="">全国</button>
                    </li>
                    <li class="dropdown">
                        <div class="nav-button">関東</div>
                        <ul class="dropdown-menu">
                            <li><button type="submit" name="area" value="茨城県">茨城</button></li>
                            <li><button type="submit" name="area" value="栃木県">栃木</button></li>
                            <li><button type="submit" name="area" value="群馬県">群馬</button></li>
                            <li><button type="submit" name="area" value="埼玉県">埼玉</button></li>
                            <li><button type="submit" name="area" value="千葉県">千葉</button></li>
                            <li><button type="submit" name="area" value="東京都">東京</button></li>
                            <li><button type="submit" name="area" value="神奈川県">神奈川</button></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <div class="nav-button">関西</div>
                        <ul class="dropdown-menu">
                            <li><button type="submit" name="area" value="滋賀県">滋賀</button></li>
                            <li><button type="submit" name="area" value="京都府">京都</button></li>
                            <li><button type="submit" name="area" value="大阪府">大阪</button></li>
                            <li><button type="submit" name="area" value="兵庫県">兵庫</button></li>
                            <li><button type="submit" name="area" value="奈良県">奈良</button></li>
                            <li><button type="submit" name="area" value="和歌山県">和歌山</button></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <div class="nav-button">東海</div>
                        <ul class="dropdown-menu">
                            <li><button type="submit" name="area" value="岐阜県">岐阜</button></li>
                            <li><button type="submit" name="area" value="静岡県">静岡</button></li>
                            <li><button type="submit" name="area" value="愛知県">愛知</button></li>
                            <li><button type="submit" name="area" value="三重県">三重</button></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <button class="nav-button no-arrow" type="submit" name="area" value="北海道">北海道</button>
                    </li>
                    <li class="dropdown">
                        <div class="nav-button">東北</div>
                        <ul class="dropdown-menu">
                            <li><button type="submit" name="area" value="青森県">青森</button></li>
                            <li><button type="submit" name="area" value="岩手県">岩手</button></li>
                            <li><button type="submit" name="area" value="宮城県">宮城</button></li>
                            <li><button type="submit" name="area" value="秋田県">秋田</button></li>
                            <li><button type="submit" name="area" value="山形県">山形</button></li>
                            <li><button type="submit" name="area" value="福島県">福島</button></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <div class="nav-button">甲信越・北陸</div>
                        <ul class="dropdown-menu">
                            <li><button type="submit" name="area" value="新潟県">新潟</button></li>
                            <li><button type="submit" name="area" value="富山県">富山</button></li>
                            <li><button type="submit" name="area" value="石川県">石川</button></li>
                            <li><button type="submit" name="area" value="福井県">福井</button></li>
                            <li><button type="submit" name="area" value="山梨県">山梨</button></li>
                            <li><button type="submit" name="area" value="長野県">長野</button></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <div class="nav-button">中国・四国</div>
                        <ul class="dropdown-menu">
                            <li><button type="submit" name="area" value="島根県">島根</button></li>
                            <li><button type="submit" name="area" value="鳥取県">鳥取</button></li>
                            <li><button type="submit" name="area" value="岡山県">岡山</button></li>
                            <li><button type="submit" name="area" value="広島県">広島</button></li>
                            <li><button type="submit" name="area" value="山口県">山口</button></li>
                            <li><button type="submit" name="area" value="徳島県">徳島</button></li>
                            <li><button type="submit" name="area" value="香川県">香川</button></li>
                            <li><button type="submit" name="area" value="愛媛県">愛媛</button></li>
                            <li><button type="submit" name="area" value="高知県">高知</button></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <div class="nav-button">九州・沖縄</div>
                        <ul class="dropdown-menu">
                            <li><button type="submit" name="area" value="福岡県">福岡</button></li>
                            <li><button type="submit" name="area" value="佐賀県">佐賀</button></li>
                            <li><button type="submit" name="area" value="長崎県">長崎</button></li>
                            <li><button type="submit" name="area" value="熊本県">熊本</button></li>
                            <li><button type="submit" name="area" value="大分県">大分</button></li>
                            <li><button type="submit" name="area" value="宮崎県">宮崎</button></li>
                            <li><button type="submit" name="area" value="鹿児島県">鹿児島</button></li>
                            <li><button type="submit" name="area" value="沖縄県">沖縄</button></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </form>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-name">
                <h3 class="footer-site">求人情報サイト</h3>
                <h3 class="footer-company-neme">Micowork</h3>
                <div class="policy"><a href="{{ route('policy') }}">プライバシーポリシー</a></div>
                <div class="link"><a href="{{ route('company') }}">運営会社</a></div>
            </div>
        </div>
    </footer>


    <!-- 一番上に戻るボタン -->
    <button class="scroll-to-top-button">
        <i class="fa-regular fa-chevron-down fa-rotate-180"></i>
    </button>


    <!-- ここでjQueryをCDNから読み込む -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- ここでSlickライブラリをCDNから読み込む -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- ここでRemodalライブラリをCDNから読み込む -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>

    <!-- ここでstyle.jsを読み込む -->
    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>