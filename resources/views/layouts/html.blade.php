<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkReach</title>
    <meta name="description" content="あなたの理想の企業を見つけ出すMico work。幅広い業界と職種から、あなたにピッタリの会社が見つかります。">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body class="min-h-screen bg-[#F7FAFF]">
<header class="p-4 bg-[#F7FAFF]">
    <div class="container mx-auto flex justify-between items-center">
        <div class="header-name flex items-center space-x-4">
            <a href="/" class="flex items-center space-x-2">
                <h3 class="header-site text-xl font-bold">求人情報サイト</h3>
                <h3 class="header-company-name text-xl font-bold text-primary">Work Reach</h3>
            </a>
        </div>
    </div>
    <form id="category-form" action="{{ route('job.search') }}" method="GET" class="mt-4 hidden sm:block">
        <div class="button-group d-flex flex-wrap justify-content-center">
            <div class="me-2">
                <button class="nav-button  btn btn-secondary " name="area" value="">全国</button>
            </div>
            <div class="dropdown me-2">
                <button class="nav-button btn btn-secondary dropdown-toggle bg-blue-800" type="button" data-bs-toggle="dropdown" aria-expanded="false">関東</button>
                <ul class="dropdown-menu">
                    <li><button type="submit" name="area" value="茨城県" class="dropdown-item">茨城</button></li>
                    <li><button type="submit" name="area" value="栃木県" class="dropdown-item">栃木</button></li>
                    <li><button type="submit" name="area" value="群馬県" class="dropdown-item">群馬</button></li>
                    <li><button type="submit" name="area" value="埼玉県" class="dropdown-item">埼玉</button></li>
                    <li><button type="submit" name="area" value="千葉県" class="dropdown-item">千葉</button></li>
                    <li><button type="submit" name="area" value="東京都" class="dropdown-item">東京</button></li>
                    <li><button type="submit" name="area" value="神奈川県" class="dropdown-item">神奈川</button></li>
                </ul>
            </div>
            <div class="dropdown me-2">
                <button class="nav-button btn btn-secondary dropdown-toggle bg-blue-800" type="button" data-bs-toggle="dropdown" aria-expanded="false">関西</button>
                <ul class="dropdown-menu">
                    <li><button type="submit" name="area" value="滋賀県" class="dropdown-item">滋賀</button></li>
                    <li><button type="submit" name="area" value="京都府" class="dropdown-item">京都</button></li>
                    <li><button type="submit" name="area" value="大阪府" class="dropdown-item">大阪</button></li>
                    <li><button type="submit" name="area" value="兵庫県" class="dropdown-item">兵庫</button></li>
                    <li><button type="submit" name="area" value="奈良県" class="dropdown-item">奈良</button></li>
                    <li><button type="submit" name="area" value="和歌山県" class="dropdown-item">和歌山</button></li>
                </ul>
            </div>
            <div class="dropdown me-2">
                <button class="nav-button btn btn-secondary dropdown-toggle bg-blue-800" type="button" data-bs-toggle="dropdown" aria-expanded="false">東海</button>
                <ul class="dropdown-menu">
                    <li><button type="submit" name="area" value="岐阜県" class="dropdown-item">岐阜</button></li>
                    <li><button type="submit" name="area" value="静岡県" class="dropdown-item">静岡</button></li>
                    <li><button type="submit" name="area" value="愛知県" class="dropdown-item">愛知</button></li>
                    <li><button type="submit" name="area" value="三重県" class="dropdown-item">三重</button></li>
                </ul>
            </div>
            <div class="dropdown me-2">
                <button class="nav-button no-arrow btn btn-secondary bg-blue-800" type="submit" name="area" value="北海道">北海道</button>
            </div>
            <div class="dropdown me-2">
                <button class="nav-button btn btn-secondary dropdown-toggle bg-blue-800" type="button" data-bs-toggle="dropdown" aria-expanded="false">東北</button>
                <ul class="dropdown-menu">
                    <li><button type="submit" name="area" value="青森県" class="dropdown-item">青森</button></li>
                    <li><button type="submit" name="area" value="岩手県" class="dropdown-item">岩手</button></li>
                    <li><button type="submit" name="area" value="宮城県" class="dropdown-item">宮城</button></li>
                    <li><button type="submit" name="area" value="秋田県" class="dropdown-item">秋田</button></li>
                    <li><button type="submit" name="area" value="山形県" class="dropdown-item">山形</button></li>
                    <li><button type="submit" name="area" value="福島県" class="dropdown-item">福島</button></li>
                </ul>
            </div>
            <div class="dropdown me-2">
                <button class="nav-button btn btn-secondary dropdown-toggle bg-blue-800" type="button" data-bs-toggle="dropdown" aria-expanded="false">甲信越・北陸</button>
                <ul class="dropdown-menu">
                    <li><button type="submit" name="area" value="新潟県" class="dropdown-item">新潟</button></li>
                    <li><button type="submit" name="area" value="富山県" class="dropdown-item">富山</button></li>
                    <li><button type="submit" name="area" value="石川県" class="dropdown-item">石川</button></li>
                    <li><button type="submit" name="area" value="福井県" class="dropdown-item">福井</button></li>
                    <li><button type="submit" name="area" value="山梨県" class="dropdown-item">山梨</button></li>
                    <li><button type="submit" name="area" value="長野県" class="dropdown-item">長野</button></li>
                </ul>
            </div>
            <div class="dropdown me-2">
                <button class="nav-button btn btn-secondary dropdown-toggle bg-blue-800" type="button" data-bs-toggle="dropdown" aria-expanded="false">中国・四国</button>
                <ul class="dropdown-menu">
                    <li><button type="submit" name="area" value="島根県" class="dropdown-item">島根</button></li>
                    <li><button type="submit" name="area" value="鳥取県" class="dropdown-item">鳥取</button></li>
                    <li><button type="submit" name="area" value="岡山県" class="dropdown-item">岡山</button></li>
                    <li><button type="submit" name="area" value="広島県" class="dropdown-item">広島</button></li>
                    <li><button type="submit" name="area" value="山口県" class="dropdown-item">山口</button></li>
                    <li><button type="submit" name="area" value="徳島県" class="dropdown-item">徳島</button></li>
                    <li><button type="submit" name="area" value="香川県" class="dropdown-item">香川</button></li>
                    <li><button type="submit" name="area" value="愛媛県" class="dropdown-item">愛媛</button></li>
                    <li><button type="submit" name="area" value="高知県" class="dropdown-item">高知</button></li>
                </ul>
            </div>
            <div class="dropdown me-2">
                <button class="nav-button btn btn-secondary dropdown-toggle bg-blue-800" type="button" data-bs-toggle="dropdown" aria-expanded="false">九州・沖縄</button>
                <ul class="dropdown-menu">
                    <li><button type="submit" name="area" value="福岡県" class="dropdown-item">福岡</button></li>
                    <li><button type="submit" name="area" value="佐賀県" class="dropdown-item">佐賀</button></li>
                    <li><button type="submit" name="area" value="長崎県" class="dropdown-item">長崎</button></li>
                    <li><button type="submit" name="area" value="熊本県" class="dropdown-item">熊本</button></li>
                    <li><button type="submit" name="area" value="大分県" class="dropdown-item">大分</button></li>
                    <li><button type="submit" name="area" value="宮崎県" class="dropdown-item">宮崎</button></li>
                    <li><button type="submit" name="area" value="鹿児島県" class="dropdown-item">鹿児島</button></li>
                    <li><button type="submit" name="area" value="沖縄県" class="dropdown-item">沖縄</button></li>
                </ul>
            </div>
        </div>
    </form>
</header>

<main class="bg-[#F7FAFF]">
    @yield('content')
</main>

<footer class="bg-[#F7FAFF] text-dark py-6">
    <div class="container mx-auto d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="text-center text-md-left mb-4 mb-md-0">
            <h3 class="text-xl font-bold">求人情報サイト</h3>
            <h3 class="text-xl font-bold text-primary">WorkReach</h3>
        </div>
        <div class="text-center text-md-left">
            <div class="policy mb-2">
                <a href="{{ route('policy') }}" class="text-primary hover:text-secondary transition duration-300">プライバシーポリシー</a>
            </div>
            <div class="link">
                <a href="{{ route('company') }}" class="text-primary hover:text-secondary transition duration-300">運営会社</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/style.js') }}"></script>
</body>

</html>
