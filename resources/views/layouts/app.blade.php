<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>@yield('title', '株式会社エヴォルブド・インフォ')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', '株式会社エヴォルブド・インフォは『後世に伝承すべきメッセージを残すこと』を企業理念とし、コンテンツ事業、イベント／マネジメント事業、ネット広告事業など様々な活動を行っております。')">
    <meta name="keywords" content="@yield('keywords', 'エヴォルブド・インフォ,こそだてDAYS,こそだてデイズ,昔ばなし絵巻,怒らない子育て,嶋津良智,夢我人,神田織音,人力')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/module.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/page.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/print.css') }}" media="print" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/hover.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/jquery.mCustomScrollbar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/whhg.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
       <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/themes/template03/css/page_top.css') }}">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
   div.pageVisualWrapper {
    padding: 62px 0 1em 2em;
    position: relative;
     }
        </style>
    @stack('styles')
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="headerBox col-xs-11 col-sm-8 col-md-6">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo_evo.png') }}" alt="logo" class="img-responsive" /></a>
                </div>
            </div>
        </div>
    </div>

    <div class="globalNav">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav" style="margin:0 auto;">
                    <li id="home" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">ホーム</a>
                    </li>
                    <li id="about" class="{{ request()->routeIs('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}">企業概要</a>
                    </li>
                    <li id="service" class="{{ request()->routeIs('services') ? 'active' : '' }}">
                        <a href="{{ route('services') }}">サービス概要</a>
                    </li>
                    <li id="contact" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    @yield('content')

    <div id="brandsIntro">
        <div class="container">
            <ul class="row brandBox">
                <li class="col-xs-6 col-sm-3 col-md-15">
                    <a href="http://www.kosodatedays.com/" target="_blank"><img src="{{ asset('assets/img/brand_kosodatedays.png') }}" alt="こそだてDAYS" class="img-responsive"></a>
                </li>
                <li class="col-xs-6 col-sm-3 col-md-15">
                    <a href="http://www.okoranai.com/" target="_blank"><img src="{{ asset('assets/img/brand_shimazu.png') }}" alt="怒らない伝道師" class="img-responsive"></a>
                </li>
                <li class="col-xs-6 col-sm-3 col-md-15">
                    <a href="http://www.wel.ne.jp/doc/feature/koudan/index.html" target="_blank"><img src="{{ asset('assets/img/brand_orine.png') }}" alt="女流講談師" class="img-responsive"></a>
                </li>
                <li class="col-xs-6 col-sm-3 col-md-15">
                    <a href="http://www.wel.ne.jp/" target="_blank"><img src="{{ asset('assets/img/brand_wel.png') }}" alt="ウェル" class="img-responsive"></a>
                </li>
                <li class="col-xs-6 col-sm-3 col-md-15">
                    <a href="https://www.jinriki.info/" target="_blank"><img src="{{ asset('assets/img/brand_jinriki.png') }}" alt="人力" class="img-responsive"></a>
                </li>
                <li class="col-xs-6 col-sm-3 col-md-15">
                    <a href="https://www.mukashi.info/" target="_blank"><img src="{{ asset('assets/img/brand_mukashi.png') }}" alt="昔話絵巻" class="img-responsive"></a>
                </li>
                <li class="col-xs-6 col-sm-3 col-md-15">
                    <a href="https://mirakuu.jp/" target="_blank"><img src="{{ asset('assets/img/brand_mirakuu.png') }}" alt="MiRAKUU" class="img-responsive"></a>
                </li>
            </ul>
            <p class="footerCopy">Evolved Information 進化した情報の提供</p>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class=" col-xs-12 col-sm-8">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">ホーム</a></li>
                    <li><a href="{{ route('about') }}">企業概要</a></li>
                    <li><a href="{{ route('privacy') }}">個人情報保護方針</a></li>
                    <li><a href="{{ route('services') }}">サービス概要</a></li>
                    <li><a href="{{ route('contact') }}">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="copyRight col-xs-12 col-sm-4">
                <span>c2022 EvolvedInfo. All Rights Reserved.</span>
            </div>
        </div>
    </footer>
    
    <a href="#top" id="toTop"><img src="{{ asset('assets/img/totop.png') }}" alt="TOPに戻る" width="35" height="41"></a>
    
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/site.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
