@extends('layouts.app')

@section('title', 'お問い合わせ - 株式会社エヴォルブド・インフォ')

@push('styles')
<style>
.btn-primary {
    background: #50314a;
    border-color: #61425b;
    color: #fff;
}
     div.pageVisualWrapper {
    padding: 62px 0 1em 2em;
    position: relative;
}
</style>
@endpush

@section('content')
<nav id="bc">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li class="active">Contact</li>
        </ol>
    </div>
</nav>

<div class="pageVisualWrapper visualContact">
    <h1>Contact</h1>
    <p>お問い合わせ</p>
</div>

<section class="contactGateWrapper">
    <div class="container">
        <h2>Contact<span class="japanase">お問い合わせ</span></h2>
        <p class="lead pCenter">お問い合わせ内容をお選びの上、フォームにお進みください。</p>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ route('contact.press') }}">
                    <dl>
                        <dt>プレス用　お問い合わせ</dt>
                        <dd class="mediaLinkImage"><img src="{{ asset('assets/img/tb_press.png') }}" class="img-responsive" alt="プレス用お問い合わせ"></dd>
                        <dd class="mediaLinkButton btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> お問い合わせフォームへ</dd>
                    </dl>
                </a>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="https://www.j-core.co.jp/contact/">
                    <dl>
                        <dt>MiRAKUU、絵本男子　お問い合わせ</dt>
                        <dd class="mediaLinkImage"><img src="{{ asset('assets/img/tb_mirakuu.png') }}" class="img-responsive" alt="保育雑誌「MIRAKUU」「絵本男子」のお問い合わせ"></dd>
                        <dd class="mediaLinkButton btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> お問い合わせフォームへ</dd>
                    </dl>
                </a>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ route('contact.phonics') }}">
                    <dl>
                        <dt>Phonics　お問い合わせ</dt>
                        <dd class="mediaLinkImage"><img src="{{ asset('assets/img/tb_phonics.png') }}" class="img-responsive" alt="Phonics　お問い合わせ"></dd>
                        <dd class="mediaLinkButton btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> お問い合わせフォームへ</dd>
                    </dl>
                </a>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ route('contact.mukashi') }}">
                    <dl>
                        <dt>昔ばなし絵巻　お問い合わせ</dt>
                        <dd class="mediaLinkImage"><img src="{{ asset('assets/img/tb_mukashibanashi.png') }}" class="img-responsive" alt="昔ばなし絵巻　お問い合わせ"></dd>
                        <dd class="mediaLinkButton btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> お問い合わせフォームへ</dd>
                    </dl>
                </a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ route('contact.game') }}">
                    <dl>
                        <dt>地方創生ゲーム　お問い合わせ</dt>
                        <dd class="mediaLinkImage"><img src="{{ asset('assets/img/tb_sousei.png') }}" class="img-responsive" alt="地方創生ゲーム　お問い合わせ"></dd>
                        <dd class="mediaLinkButton btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> お問い合わせフォームへ</dd>
                    </dl>
                </a>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ route('contact.koudan') }}">
                    <dl>
                        <dt>講談師神田織音　お問い合わせ</dt>
                        <dd class="mediaLinkImage"><img src="{{ asset('assets/img/tb_koudan.png') }}" class="img-responsive" alt="講談師神田織音　お問い合わせ"></dd>
                        <dd class="mediaLinkButton btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> お問い合わせフォームへ</dd>
                    </dl>
                </a>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ route('contact.anger') }}">
                    <dl>
                        <dt>アンガーマネジメント嶋津良智　お問い合わせ</dt>
                        <dd class="mediaLinkImage"><img src="{{ asset('assets/img/tb_shimazu.png') }}" class="img-responsive" alt="アンガーマネジメント嶋津良智 お問い合わせ"></dd>
                        <dd class="mediaLinkButton btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> お問い合わせフォームへ</dd>
                    </dl>
                </a>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{ route('contact.general') }}">
                    <dl>
                        <dt>その他　お問い合わせ</dt>
                        <dd class="mediaLinkImage"><img src="{{ asset('assets/img/tb_others.png') }}" class="img-responsive" alt="その他　お問い合わせ"></dd>
                        <dd class="mediaLinkButton btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> お問い合わせフォームへ</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
