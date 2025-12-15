@extends('layouts.app')

@section('title', 'サービス概要 - 株式会社エヴォルブド・インフォ')

@section('content')
<nav id="bc">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li class="active">Services</li>
        </ol>
    </div>
</nav>

<div class="pageVisualWrapper visualService">
    <h1>Services</h1>
    <p>サービス概要</p>
</div>

<nav id="serviceList">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="#contents">
                    <dl class="row">
                        <dt class="col-xs-3"><span class="iconCircle"><img src="{{ asset('assets/img/icon_contents.png') }}" alt="コンテンツ事業" class="img-responsive"></span></dt>
                        <dd class="col-xs-9"><span class="serviceTitle">コンテンツ事業</span><br>オリジナル絵本「昔ばなし絵巻シリーズ」の出版と書籍連動知育アプリの開発。子育て中の"共感"を漫画化したメディアサイト「こそだてDAYS」の運営、アンガーマネジメントを子育て向けに開発したメソッド"イラオコダイエット"書籍の出版、歴史旧街道をテーマにした健康ウォーキング情報サイトの運営等を行っています。</dd>
                    </dl>
                </a>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="#management">
                    <dl class="row">
                        <dt class="col-xs-3"><span class="iconCircle"><img src="{{ asset('assets/img/icon_consalting.png') }}" alt="イベント／マネジメント事業" class="img-responsive"></span></dt>
                        <dd class="col-xs-9"><span class="serviceTitle">イベント／マネジメント事業</span><br>教育コンサルタントとして累計150万部「怒らない技術」シリーズ（フォレスト出版社）のベストセラー作家でもある嶋津良智先生による「子育てセミナー」、成年後見制度の全国普及啓蒙を目的とした女流講談師神田織音師匠の「成年後見講談」等の運営、マネジメント事業などを行っています。 </dd>
                    </dl>
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="#netAd">
                    <dl class="row">
                        <dt class="col-xs-3"><span class="iconCircle"><img src="{{ asset('assets/img/icon_netAd.png') }}" alt="海外・その他事業" class="img-responsive"></span></dt>
                        <dd class="col-xs-9"><span class="serviceTitle">ネット広告事業</span><br>インターネット広告・検索エンジンマーケティング・サイト制作などクライアント様のご要望を実現する為のデジタルマーケティングをご提供致します。PC、スマートフォン、タブレットなどあらゆるデバイスでのご提案が可能です。</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
</nav>

<section id="contents">
    <div class="container">
        <h2>コンテンツ事業</h2>
        <p class="serviceLead"><span></span></p>
        <div class="row serviceBox">
            <div class="serviceImage col-xs-12  col-md-4 col-lg-4">
                <a class="servicePanel" href="https://www.mukashi.info/" target="_blank"><img src="{{ asset('assets/img/img_mukasibanasi.png') }}" class="img-responsive" alt="昔ばなし絵巻"></a>
            </div>
            <div class="serviceBody col-xs-12 col-md-8 col-lg-7">
                <h3>昔ばなし絵巻</h3>
                <p>日本では古くから、自然を敬う心、物を大切にする心、大欲をかかない心、助け合いの心など、多くの精神を昔ばなしから学んできましたが、近年の日本社会において昔ばなしは急激に失われつつあります。昔ばなし絵巻はこの点に着目して、全国各地から収集した民話・伝説を新しいコンテンツとして再編し、社会に広く伝えていくことを目的としております。</p>
                <div class="serviceLink">
                    <a href="https://www.mukashi.info/" class="btn btn-goto" target="_blank"><span class="glyphicon glyphicon-arrow-right"></span> このサイトをみる</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="dentou">
    <div class="container">
        <ul class="row ServiceBoxColumn">
            <li class="serviceBox col-xs-12 col-sm-4">
                <div class="serviceImage"><a class="servicePanel" href="https://www.kosodatedays.com/" target="_blank"><img src="{{ asset('assets/img/img_kosodatedays.png') }}" class="img-responsive" alt="こそだてDAYS"></a></div>
                <div class="serviceBody">
                    <h3>こそだてDAYS</h3>
                    <p>こそだてDAYS（kosodatedays）は、妊娠中から出産、子育てにおいて必要な知識をわかりやすく解説した漫画を無料で読めるサイトです。現役子育てママや先輩ママの体験をつづった「育児あるある」オリジナルマンガも無料で読めて、コメントすることもできます。有識者や著名インフルエンサーによる動画解説もあります。</p>
                    <div class="serviceLink">
                        <a href="https://www.kosodatedays.com/" class="btn btn-goto" target="_blank"><span class="glyphicon glyphicon-arrow-right"></span> このサイトをみる</a>
                    </div>
                </div>
            </li>
            <li class="serviceBox col-xs-12 col-sm-4">
                <div class="serviceImage"><a class="servicePanel" href="https://www.jinriki.info/" target="_blank"><img src="{{ asset('assets/img/img_jinriki.png') }}" class="img-responsive" alt="人力"></a></div>
                <div class="serviceBody">
                    <h3>人力</h3>
                    <p>江戸時代に存在した歴史旧街道の正確なルート、宿場町、一里塚を徹底リサーチした上で、実際にスタッフが歩いて収集した正確な座標情報をもとに、旧街道の正確なルートや史跡が存在する場所を地図上に表示する形で紹介しています。オリエンテーリング感覚で歴史旧街道をウォーキングされる方にご好評いただいています。</p>
                    <div class="serviceLink">
                        <a href="https://www.jinriki.info/" class="btn btn-goto" target="_blank"><span class="glyphicon glyphicon-arrow-right"></span> このサイトをみる</a>
                    </div>
                </div>
            </li>
            <li class="serviceBox col-xs-12 col-sm-4">
                <div class="serviceImage"><a class="servicePanel" href="https://www.mugajin.jp/index.html" target="_blank"><img src="{{ asset('assets/img/kakejiku.jpg') }}" class="img-responsive" alt="夢我人"></a></div>
                <div class="serviceBody">
                    <h3>夢我人</h3>
                    <p>当コンテンツは2007年に当社創立3周年を記念して、「夢や目標の実現に向けて我を忘れて意志を貫いている」23名の方を「夢我人」として紹介したコンテンツです。原文そのままに再掲載しましたので、記載内容、名称、呼称等は当時のものであることをご容赦ください。</p>
                    <div class="serviceLink">
                        <a href="https://www.mugajin.jp/index.html" class="btn btn-goto" target="_blank"><span class="glyphicon glyphicon-arrow-right"></span> このサイトをみる</a>
                    </div>
                </div>
            </li>				 
        </ul>
    </div>
</section>

<hr class="hrGrayL">

<section id="management">
    <div class="container">
        <h2>イベント／マネジメント事業</h2>
        <p class="serviceLead"><span></span></p>
        <div class="row serviceBox">
            <div class="serviceImage col-xs-12 col-md-4 col-lg-4">
                <a class="servicePanel" href="https://www.okoranai.com/" target="_blank"><img src="{{ asset('assets/img/img_shimazu-seminar.jpg') }}" class="img-responsive" alt="嶋津良智"></a>
            </div>
            <div class="serviceBody col-xs-12  col-md-8 col-lg-7 ">
                <h3></h3>
                <p>　教育コンサルタントとして累計150万部「怒らない技術」シリーズ（フォレスト出版社）のベストセラー作家でもある嶋津良智先生による「怒らない子育てセミナー」どの運営、出版・マネジメント事業などを行っています。 </p>
                <div class="serviceLink">
                    <a href="https://www.okoranai.com/" class="btn btn-goto" target="_blank"><span class="glyphicon glyphicon-arrow-right"></span> このサイトをみる</a>
                </div>
            </div>
        </div>
        <div class="row serviceBox">
            <div class="serviceImage col-xs-12 col-md-4 col-lg-4">
                <a class="servicePanel" href="https://www.wel.ne.jp/doc/feature/koudan/index.html" target="_blank"><img src="{{ asset('assets/img/image_orine.png') }}" class="img-responsive" alt="神田織音"></a>
            </div>
            <div class="serviceBody col-xs-12  col-md-8 col-lg-7 ">
                <h3></h3>
                <p>　成年後見制度の全国普及啓蒙を目的とした女流講談師神田織音師匠の「成年後見講談」等の運営、マネジメント事業などを行っています。</p>
                <div class="serviceLink">
                    <a href="https://www.wel.ne.jp/doc/feature/koudan/index.html" class="btn btn-goto" target="_blank"><span class="glyphicon glyphicon-arrow-right"></span> このサイトをみる</a>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="hrGrayL">

<section id="netAd">
    <div class="container">
        <h2>ネット広告事業</h2>
        <p class="serviceLead"><span></span></p>
        <div class="row serviceBox">
            <div class="serviceImage col-xs-12 col-md-4 col-lg-4">
                <img src="{{ asset('assets/img/img_netAd.jpg') }}" class="img-responsive" alt="ネット広告事業">
            </div>
            <div class="serviceBody col-xs-12 col-md-8 col-lg-7">
                <h3>ネット広告事業</h3>
                <p>インターネット広告・検索エンジンマーケティング・サイト制作などクライアント様のご要望を実現する為のデジタルマーケティングをご提供致します。PC、スマートフォン、タブレットなどあらゆるデバイスでのご提案が可能です。</p>
            </div>
        </div>
    </div>
</section>
@endsection
