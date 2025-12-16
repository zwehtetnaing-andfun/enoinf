@extends('layouts.app')

@section('title', '企業概要 - 株式会社エヴォルブド・インフォ')

@section('content')
<nav id="bc">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li class="active">Company Profile</li>
        </ol>
    </div>
</nav>

<div class="pageVisualWrapper visualCompany">
    <h1>Company Profile</h1>
    <p>企業概要</p>
</div>

<section id="japan" class="companyProfileWrapper">
    <div class="container">
        <h2>企業概要</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <table class="companyTable table table-bordered table-striped">
                    <tr>
                        <th>会社名</th>
                        <td>株式会社エヴォルブド・インフォ</td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td>代表取締役　原田栄一</td>
                    </tr>                                                
                    <tr>
                        <th>設立</th>
                        <td>2005年12月</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>〒105-0004　東京都港区新橋1-16-4 りそな新橋ビル6F</td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td>20名</td>
                    </tr>
                    <tr>
                        <th>取引銀行</th>
                        <td>みずほ銀行</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>出版、広告、電子商取引、コンサルティング</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<hr class="hrGrayL">

<section id="history" class="companyProfileWrapper">
    <div class="container">
        <h2>沿革</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <table class="companyTable table table-bordered table-striped">
                    <tr>
                        <th>2005年12月22日</th>
                        <td>有限会社エヴォルブド・インフォを東京都渋谷区恵比寿に開設</td>
                    </tr>
                    <tr>
                        <th>2006年6月24日</th>
                        <td>株式会社に組織変更</td>
                    </tr>
                    <tr>
                        <th>2006年7月30日</th>
                        <td>本社を東京都新宿区西新宿に移転</td>
                    </tr>
                    <tr>
                        <th>2014年5月12日</th>
                        <td>本社を東京都港区東新橋に移転</td>
                    </tr>
                    <tr>
                        <th>2022年2月14日</th>
                        <td>本社を東京都港区新橋に移転</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>


<section id="office">
    <div class="container">
        <h2>地図</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div id="maparea3" class="officeMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3563548088227!2d139.75475361454784!3d35.66822653829389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bebfa08873b%3A0xbf073f6f3983fab0!2z44CSMTA1LTAwMDQg5p2x5Lqs6YO95riv5Yy65paw5qmL77yR5LiB55uu77yR77yW4oiS77yUIOOCiuOBneOBquaWsOapi-ODk-ODqw!5e0!3m2!1sja!2sjp!4v1644797255606!5m2!1sja!2sjp" width="565" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <p>TEL:  03-5537-7437<br>FAX:  03-5537-7435</p>
            </div>
        </div>
    </div>
</section>

@endsection
