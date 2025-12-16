@extends('layouts.app')

@section('title', '株式会社エヴォルブド・インフォ')

@section('content')

<div class="pageVisualWrapper visualToppage">
    <div class="headerText container">
        <div class="row">
            <div class="visualToppageText col-sm-6 col-md-6">
                <div class="title"><span class="evo">Evolved info</span><span>進化した情報の提供</span></div>
                <div class="subTitle">この時代に生きた者として、後世に伝承すべきメッセージを残すことを企業理念としています。事業の推進においては、既成の伝達手段にとらわれることなく、また、今の時代に生きるものとして意識すべき社会問題や課題を踏まえた活動を行ってまいります。</div>
            </div>
        </div>
    </div>
</div>


<section id="newsSection">
    <div class="container">
        <div class="row">
            <h2 class="col-xs-12 col-sm-4">NEWS<span class="japanase">お知らせ</span></h2>
            <dl class="col-xs-12 col-sm-8 row">
                <dt class="col-xs-12 col-sm-2">2024.12.07</dt>
                <dd class="col-xs-12 col-sm-10" style="margin-bottom: .8rem;">2024年12月28日（土）～2025年1月5日（日）を冬期休業とさせていただきます。</dd>
                <dt class="col-xs-12 col-sm-2">2024.10.01</dt>
                <dd class="col-xs-12 col-sm-10" style="margin-bottom: .8rem;">2024年10月1日 保育業界専門誌「MIRAKUU」の発行及び関連サービスの運営主体を、<a href="https://www.j-core.co.jp/">株式会社ジェイコア</a>に移管しました。</dd>		
                <dt class="col-xs-12 col-sm-2">2022.09.01</dt>
                <dd class="col-xs-12 col-sm-10" style="margin-bottom: .8rem;">この度、MiRAKUU web をリニューアルいたしました。<a href="https://mirakuu.jp/">https://mirakuu.jp/</a>。<br/>
                    新たに『<a href="https://mirakuu.jp/fortunes/">イケメン保育士の毎日ラッキー占い</a>』や『<a href="https://mirakuu.jp/column/story-of-nursery">保育園の○○な話 四コマ漫画</a>』など新コンテンツも盛り沢山となっております。</dd>
                <dt class="col-xs-12 col-sm-2">2021.11.01</dt>
                <dd class="col-xs-12 col-sm-10" style="margin-bottom: .8rem;">保育業界専門誌「<a href="http://mirakuu.jp/">MiRAKUU</a>」を運営している『メディア事業』が加わりました。</dd>
                <dt class="col-xs-12 col-sm-2">2021.10.01</dt>
                <dd class="col-xs-12 col-sm-10" style="margin-bottom: .8rem;">岐阜県高山市を舞台にした地方創生RPG『たかやまくえすと』を弊社アカウントからリリースいたしました。</dd>
                <dt class="col-xs-12 col-sm-2">2019.09.30</dt>
                <dd class="col-xs-12 col-sm-10" style="margin-bottom: .8rem;">昔ばなし絵巻シリーズの<a href="https://www.mukashi.info/">絵本10作品</a>が完成しました。</dd>
                <dt class="col-xs-12 col-sm-2">2017.05.22</dt>
                <dd class="col-xs-12 col-sm-10" style="margin-bottom: .8rem;">育児中のママのあるある体験をマンガで紹介するサイト<br>『<a href="https://www.kosodatedays.com/">こそだてＤＡＹＳ</a>』をオープンしました。</dd>
                <dt class="col-xs-12 col-sm-2">2015.04.10</dt>
                <dd class="col-xs-12 col-sm-10">ハピニコマスター★ヨンヨン（嶋津良智/しまづよしのり）の新書<br>『<a href="https://www.amazon.co.jp/gp/product/4904703111/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=4904703111&linkCode=as2&tag=evoinf0b-22" target="_blank">ハピニコマスター★ヨンヨンの7日間イラオコダイエット</a>』を発刊いたしました。</dd>
            </dl>
        </div>
    </div>
</section>


<section id="topBusiness">
    <div class="container">
        <h2>SERVICE<span class="japanase">サービス概要</span></h2>
        <div class="row ServiceBoxColumn">
            <div class="serviceBox col-xs-12 col-sm-3 col-md-3">
                <a href="{{ route('services') }}#contents" class="servicePanel">
                    <div class="serviceImage">
                        <img src="{{ asset('assets/img/img_contents-jigyo.png') }}" alt="コンテンツ事業" class="img-responsive">
                    </div>
                    <div class="serviceBody">
                        <h3>コンテンツ事業</h3>
                        <p>オリジナル絵本「昔ばなし絵巻シリーズ」の出版と書籍連動知育アプリの開発。子育て中の"共感"を漫画化したメディアサイト「こそだてDAYS」の運営、アンガーマネジメントを子育て向けに開発したメソッド"イラオコダイエット"書籍の出版、歴史旧街道をテーマにした健康ウォーキング情報サイトの運営等を行っています。
                        </p>
                    </div>
                </a>
            </div>
            <div class="serviceBox col-xs-12 col-sm-3 col-md-3">
                <a href="{{ route('services') }}#management" class="servicePanel">
                    <div class="serviceImage">
                        <img src="{{ asset('assets/img/img_event-management.png') }}" alt="イベント/マネジメント事業" class="img-responsive">
                    </div>
                    <div class="serviceBody">
                        <h3>イベント／マネジメント事業</h3>
                        <p>教育コンサルタントとして累計150万部「怒らない技術」シリーズ（フォレスト出版社）のベストセラー作家でもある嶋津良智先生による「子育てセミナー」、成年後見制度の全国普及啓蒙を目的とした女流講談師神田織音師匠の「成年後見講談」等の運営、マネジメント事業などを行っています。</p>
                    </div>
                </a>
            </div>
            <div class="serviceBox col-xs-12 col-sm-3 col-md-3">
                <a href="{{ route('services') }}#netAd" class="servicePanel">
                    <div class="serviceImage">
                        <img src="{{ asset('assets/img/img_netAd.jpg') }}" alt="海外・その他事業" class="img-responsive">
                    </div>
                    <div class="serviceBody">
                        <h3>ネット広告事業</h3>
                        <p>インターネット広告・検索エンジンマーケティング・サイト制作などクライアント様のご要望を実現する為のデジタルマーケティングをご提供致します。PC、スマートフォン、タブレットなどあらゆるデバイスでのご提案が可能です。</p>
                    </div>
                </a>
            </div>
            <div class="serviceBox col-xs-12 col-sm-3 col-md-3">
                <a href="https://www.j-core.co.jp/mirakuu/" class="servicePanel">
                    <div class="serviceImage">
                        <img src="{{ asset('assets/img/media-top.png') }}" alt="メディア事業" class="img-responsive">
                    </div>
                    <div class="serviceBody">
                        <h3>メディア事業</h3>
                        <p>1都3県の保育園・幼稚園約12,000施設、専門学校・大学に配布している園経営者・保育士・保育学生向けの保育業界専門誌『MiRAKUU』の発行、web版「MiRAKUU」、保育園・幼稚園の商品・サービス検索サイト「みらぷれ」（MiRAKUUぷれみあむ）の運営、イケメン絵本男子による絵本紹介・読み聞かせ・手遊び動画の配信を行っています。</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
