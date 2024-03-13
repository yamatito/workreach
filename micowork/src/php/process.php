<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>

    <link rel="stylesheet" type="text/css" href="../../css/reset.css"> <!-- reset.cssを読み込む -->
    <link rel="stylesheet" type="text/css" href="/src/css/contact.css">
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
            <a href="/src/php/process.php" target="_blank" class="new-jobs-button">お問い合わせ</a>
        </div>
    </header>

    <div class="container">
        <h2>お問い合わせフォーム</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">お名前:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">お問い合わせ内容:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" name="submit">送信</button>
        </form>

        <?php

        // 文字エンコーディングを指定するHTTPヘッダーを設定
        header('Content-Type: text/html; charset=UTF-8');


        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // 送信先のメールアドレスを設定
            $to = "info@mico-work.com";

            // メールの件名
            $subject = "お問い合わせフォームからのメッセージ";

            // メールの本文
            $messageBody = "お名前: $name\n";
            $messageBody .= "メールアドレス: $email\n";
            $messageBody .= "お問い合わせ内容:\n$message";

            // 送信元のメールアドレスとヘッダーを設定
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            $headers .= "From: $email\r\n";

            // メールを送信
            if (mail($to, $subject, $messageBody, $headers)) {
            // 送信が成功した場合の処理
            echo '<div style="text-align: center; margin-top: 20px;">お問い合わせありがとうございます。メッセージが送信されました.</div>';
            } else {
            // 送信が失敗した場合の処理
            echo '<div style="text-align: center; margin-top: 20px; color: red;">メッセージの送信中にエラーが発生しました. もう一度お試しください.</div>';
            }


        }
        ?>
    </div>

    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-name">
                <h3 class="footer-site">求人情報サイト</h3>
                <h3 class="footer-company-neme">Micowork</h3>
                <div class="policy"><a href="/policy.html">プライバシーポリシー</a></div>
                <div class="link"><a href="company.html">運営会社</a></div>
            </div>
        </div>
    </footer>

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
<script src="/src/js/style.js"></script>
</body>
</html>

