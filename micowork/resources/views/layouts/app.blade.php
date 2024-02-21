<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        .courier-prime-bold {
            font-family: "Courier Prime", monospace;
            font-weight: 700;
            font-style: normal;
        }
    </style>
    <div class="p-5">
        <h1 class="font-bold text-xl courier-prime-bold">Z-upload-system</h1>
        <h2>Micowork様 求人記事アップロードシステム</h2>
    </div>

    <main class="container mx-auto ">

        <div class="mx-auto max-w-7xl px-5 lg:px-7">
            <div class="mx-auto py-10 max-w-2xl lg:max-w-4xl">
                @yield('content')
            </div>
        </div>
    </main>
    <footer class="mt-6">
        <a class="ml-2 font-bold courier-prime-bold" target="_blank" href="https://www.zdev.co.jp/">&copy; Z-developer 合同会社</a>
    </footer>
</body>

</html>