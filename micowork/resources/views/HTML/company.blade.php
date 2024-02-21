@extends('layouts.html')
@section('content')
@include('commons.errors')
<main>
    <div id="company-info">

        <h2 class="company-title">会社概要</h2>

        <div class="company-detail">

            <h4>運営会社</h4>
            <p>株式会社Mico</p>

            <!-- 〒203-0053 <br>
    東京都東久留米市本町1-1-26 <br>
    メゾン東久留米207 -->



            <h4>事業内容</h4>
            <ul>
                <li>ウェブサイト制作事業 (企画/マーケティング/ブランディング/デザイン)</li>
                <li>情報コンテンツの企画、開発、販売事業</li>
                <li>Micowork運営事業</li>
            </ul>
        </div>

    </div>



</main>


@endsection()



