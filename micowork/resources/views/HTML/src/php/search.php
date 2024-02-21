
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>求人情報</title>
    <link rel="stylesheet" type="text/css" href="/src/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/src/css/genre.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
<header class="header">
        <div class="inner">
            <div class="header-name">
                <a href="/index.html">
                    <h3 class="header-site">求人情報サイト</h3>
                    <h3 class="header-company-name">Micowork</h3>
                </a>
            </div>
            <a href="/src/php/process.php" class="new-jobs-button">お問い合わせ</a>
        </div>


    <form action="/src/php/data.php" method="GET">
        <div class="button-group">
            <ul class="nav-list">
                <li class="dropdown">
                    <button class="nav-button no-arrow" name="area" value="">全国</button>
                </li>
                <li class="dropdown">
                    <div class="nav-button">関東</div>
                    <ul class="dropdown-menu">
                        <li><button type="submit" name="area" value="茨城">茨城</button></li>
                        <li><button type="submit" name="area" value="栃木">栃木</button></li>
                        <li><button type="submit" name="area" value="群馬">群馬</button></li>
                        <li><button type="submit" name="area" value="埼玉">埼玉</button></li>
                        <li><button type="submit" name="area" value="千葉">千葉</button></li>
                        <li><button type="submit" name="area" value="東京">東京</button></li>
                        <li><button type="submit" name="area" value="神奈川">神奈川</button></li>
                        <!-- 他のエリアを追加 -->
                    </ul>
                </li>

                <li class="dropdown">
                    <div class="nav-button">関西</div>
                    <ul class="dropdown-menu">
                        <li><button type="submit" name="area" value="滋賀">滋賀</button></li>
                        <li><button type="submit" name="area" value="京都">京都</button></li>
                        <li><button type="submit" name="area" value="大阪">大阪</button></li>
                        <li><button type="submit" name="area" value="兵庫">兵庫</button></li>
                        <li><button type="submit" name="area" value="奈良">奈良</button></li>
                        <li><button type="submit" name="area" value="和歌山">和歌山</button></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <div class="nav-button">東海</div>
                    <ul class="dropdown-menu">
                        <li><button type="submit" name="area" value="岐阜">岐阜</button></li>
                        <li><button type="submit" name="area" value="静岡">静岡</button></li>
                        <li><button type="submit" name="area" value="愛知">愛知</button></li>
                        <li><button type="submit" name="area" value="三重">三重</button></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <li><button class="nav-button no-arrow" type="submit" name="area" value="北海道">北海道</button></li>
                </li>

                <li class="dropdown">
                    <div class="nav-button">東北</div>
                    <ul class="dropdown-menu">
                        <li><button type="submit" name="area" value="青森">青森</button></li>
                        <li><button type="submit" name="area" value="岩手">岩手</button></li>
                        <li><button type="submit" name="area" value="宮城">宮城</button></li>
                        <li><button type="submit" name="area" value="秋田">秋田</button></li>
                        <li><button type="submit" name="area" value="山形">山形</button></li>
                        <li><button type="submit" name="area" value="福島">福島</button></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <div class="nav-button">甲信越・北陸</div>
                    <ul class="dropdown-menu">
                        <li><button type="submit" name="area" value="新潟">新潟</button></li>
                        <li><button type="submit" name="area" value="富山">富山</button></li>
                        <li><button type="submit" name="area" value="石川">石川</button></li>
                        <li><button type="submit" name="area" value="福井">福井</button></li>
                        <li><button type="submit" name="area" value="山梨">山梨</button></li>
                        <li><button type="submit" name="area" value="長野">長野</button></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <div class="nav-button">中国・四国</div>
                    <ul class="dropdown-menu">
                        <li><button type="submit" name="area" value="島根">島根</button></li>
                        <li><button type="submit" name="area" value="鳥取">鳥取</button></li>
                        <li><button type="submit" name="area" value="岡山">岡山</button></li>
                        <li><button type="submit" name="area" value="広島">広島</button></li>
                        <li><button type="submit" name="area" value="長野">山口</button></li>
                        <li><button type="submit" name="area" value="徳島">徳島</button></li>
                        <li><button type="submit" name="area" value="香川">香川</button></li>
                        <li><button type="submit" name="area" value="愛媛">愛媛</button></li>
                        <li><button type="submit" name="area" value="高知">高知</button></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <div class="nav-button">九州・沖縄</div>
                    <ul class="dropdown-menu">
                        <li><button type="submit" name="area" value="福岡">福岡</button></li>
                        <li><button type="submit" name="area" value="佐賀">佐賀</button></li>
                        <li><button type="submit" name="area" value="長崎">長崎</button></li>
                        <li><button type="submit" name="area" value="熊本">熊本</button></li>
                        <li><button type="submit" name="area" value="大分">大分</button></li>
                        <li><button type="submit" name="area" value="宮崎">宮崎</button></li>
                        <li><button type="submit" name="area" value="鹿児島">鹿児島</button></li>
                        <li><button type="submit" name="area" value="沖縄">沖縄</button></li>
                    </ul>
                </li>

            </ul>
        </div>
    </form> 
    </header>



<?php


// キーワードを受け取る
$keyword = $_GET['keyword'];

// エリアを受け取る
$area = $_GET['area'];

// 職種を受け取る
$jobtype = $_GET['jobtype'];

// 雇用形態を受け取る
$employmentType = $_GET['employmentType'];



$xml = simplexml_load_file('../xml/data.xml');



// 条件に合致する求人情報を抽出
$matchingJobs = array();

foreach ($xml->job as $job) {
    if (
        (empty($keyword) || stripos((string)$job->search, $keyword) !== false || stripos((string)$job->area, $keyword) !== false
        || stripos((string)$job->jobtype, $keyword) !== false || stripos((string)$job->employmentType, $keyword) !== false) &&

        (empty($area) || $area === '全国' || $area === (string)$job->area) &&
        (empty($jobtype) || $jobtype === '全業種' || $jobtype === (string)$job->jobtype) &&
        (empty($employmentType) || $employmentType === '全雇用形態' || $employmentType === (string)$job->employmentType)
    ) {
        $matchingJobs[] = $job;
    }
}

//求人情報をランダムにシャッフル
shuffle($matchingJobs);

/*
var_dump($matchingJobs);*/

// ページネーション設定
$jobsPerPage = 5; // 1ページに表示する求人数
$totalJobs = count($matchingJobs); // 総求人数
$totalPages = ceil($totalJobs / $jobsPerPage); // 総ページ数
$currentPage = isset($_GET['page']) ? max(1, min($totalPages, intval($_GET['page']))) : 1; // 現在のページ番号


// 求人情報の表示範囲を計算
$startIndex = ($currentPage - 1) * $jobsPerPage;
$endIndex = min($startIndex + $jobsPerPage, $totalJobs);
$currentPageJobs = array_slice($matchingJobs, $startIndex, $endIndex - $startIndex);



// 受け取ったデータを使用して何らかの処理を行う
/*
echo 'キーワード: ' . $keyword . '<br>';
echo 'エリア: ' . $area . '<br>';
echo '職種: ' . $jobtype . '<br>';
echo '雇用形態: ' . $employmentType;

echo "Current Page: " . $currentPage;
echo "Start Index: " . $startIndex . "<br>";
echo "End Index: " . $endIndex . "<br>";

foreach ($xml->job as $job) {
    echo '求人のエリア情報: ' . $job->area;
}
*/


// 検索条件のデバッグ

/*
var_dump($_GET['keyword']);
var_dump($_GET['area']);
var_dump($_GET['jobtype']);
var_dump($_GET['employmentType']);

var_dump($xml);
*/
?>



<div class="features-container">
<?php if (!empty($currentPageJobs)) : ?>
        <?php foreach ($currentPageJobs as $job) : ?>
            <!-- 求人情報の表示コード -->
            <div class="feature" id="feature-<?php echo $job['id']; ?>">
                <a href="/area-job/<?php echo $job->area; ?><?php echo $job->url; ?>">
                    <img src="<?php echo $job->imagePath; ?>" alt="特徴画像" class="feature-image">
                    <div class="feature-content">
                        <ul class="genre-list">
                            <li class="genre-1"><?php echo $job->area; ?></li>
                            <li class="genre-2"><?php echo $job->jobtype; ?></li>
                            <li class="genre-3"><?php echo $job->employmentType; ?></li>
                        </ul>
                        <h3><?php echo $job->title; ?></h3>
                        <p><?php echo $job->description; ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>


        <!-- ページネーションリンクを表示 -->
<ul class="pagination">
    <!-- 最初のページへのリンク -->
    <li class="page-item <?php echo ($currentPage == 1) ? 'disabled' : ''; ?>">
        <a href="?page=1&keyword=<?php echo $keyword; ?>&area=<?php echo $area; ?>&jobtype=<?php echo $jobtype; ?>&employmentType=<?php echo $employmentType; ?>" class="page-link">1</a>
    </li>
    
    <!-- 省略記号（...） -->
    <?php if ($currentPage > 5) : ?>
        <li class="page-item disabled">
            <span class="page-link">...</span>
        </li>
    <?php endif; ?>
    
    <!-- 現在のページの前後に最大で5ページ分を表示 -->
    <?php for ($i = max(2, $currentPage - 5); $i <= min($totalPages - 1, $currentPage + 5); $i++) : ?>
        <li class="page-item <?php echo ($i == $currentPage) ? 'current-page' : ''; ?>">
            <a href="?page=<?php echo $i; ?>&keyword=<?php echo $keyword; ?>&area=<?php echo $area; ?>&jobtype=<?php echo $jobtype; ?>&employmentType=<?php echo $employmentType; ?>" class="page-link"><?php echo $i; ?></a>
        </li>
    <?php endfor; ?>
    
    <!-- 省略記号（...） -->
    <?php if ($currentPage < $totalPages - 4) : ?>
        <li class="page-item disabled">
            <span class="page-link">...</span>
        </li>
    <?php endif; ?>
    
    <!-- 最後のページへのリンク -->
    <li class="page-item <?php echo ($currentPage == $totalPages) ? 'disabled' : ''; ?>">
        <a href="?page=<?php echo $totalPages; ?>&keyword=<?php echo $keyword; ?>&area=<?php echo $area; ?>&jobtype=<?php echo $jobtype; ?>&employmentType=<?php echo $employmentType; ?>" class="page-link"><?php echo $totalPages; ?></a>
    </li>
</ul>



    
</ul>




<?php else : ?>
        <p>選択された検索結果に該当する求人情報はありません。</p>
    <?php endif; ?>
</div>
















<footer class="footer">
    <div class="footer-inner">
        <div class="footer-name">
            <h3 class="footer-site">求人情報サイト</h3>
            <h3 class="footer-company-neme">Micowork</h3>
            <div class="policy"><a href="policy.html">プライバシーポリシー</a></div>
            <div class="link"><a href="company.html">運営会社</a></div>
        </div>
    </div>
</footer>



</body>
</html>