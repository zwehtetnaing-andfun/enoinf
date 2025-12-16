@extends('layouts.app')

@section('title', 'その他 お問い合わせ - 株式会社エヴォルブド・インフォ')

@section('content')
<div>
    <nav id="bc">
        <nav id="bc">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li class="active">その他 お問い合わせ</li>
                </ol>
            </div>
        </nav>
    </nav>
    
    <div class="pageVisualWrapper visualContact">
        <div class="container">
            <h1>Contact</h1>
            <p>その他 お問い合わせ</p>
        </div>
    </div>
    
    <section class="contactWrapper">
        <div class="container">
            <div class="col-xs-12 evo_input" @if(session('success')) style="display:none;" @endif>
                <h2>その他 お問い合わせ</h2>
                <hr class="hrWhite" />
                <p class="lead pCenter">下記フォームに必要事項を入力の上送信してください。</p>
                <p class="pCenter">お問い合わせ頂いた内容につきましては、後ほど、担当者よりご連絡をさせていただきます。<br>なお、お問い合わせいただいた内容によっては、ご連絡までお時間がかかるものがございます。<br>あらかじめご了承ください。</p>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('contact.general.submit') }}" method="post" class="form-horizontal">
                    @csrf
                    <fieldset class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="type">*企業 or 個人</label>
                            <div class="col-md-4">
                                <select name="type" class="form-control" id="type" required>
                                    <option value="">選択してください</option>
                                    <option value="企業">企業</option>
                                    <option value="個人">個人</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="corporate">*貴社名</label>
                            <div class="col-md-4">
                                <input type="text" name="corporate" class="form-control input-md" id="corporate" placeholder="会社名をご入力ください" required />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="yourname">*お名前</label>
                            <div class="col-md-4">
                                <input type="text" name="yourname" class="form-control input-md" id="yourname" required />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="kana">*フリガナ</label>
                            <div class="col-md-4">
                                <input type="text" name="kana" class="form-control input-md" id="kana" required />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">*ご連絡先メールアドレス</label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control input-md" id="email" required />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="zip">郵便番号</label>
                            <div class="col-md-4">
                                <input type="text" name="zip" class="form-control input-md" id="zip" placeholder="100-0000" /><br />
                                <span class="help-block">半角英数字でご入力ください</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="pref">*都道府県</label>
                            <div class="col-md-4">
                                <select name="pref" class="form-control" id="pref" required>
                                    <option value="">選択してください</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森県">青森県</option>
                                    <option value="岩手県">岩手県</option>
                                    <option value="宮城県">宮城県</option>
                                    <option value="秋田県">秋田県</option>
                                    <option value="山形県">山形県</option>
                                    <option value="福島県">福島県</option>
                                    <option value="茨城県">茨城県</option>
                                    <option value="栃木県">栃木県</option>
                                    <option value="群馬県">群馬県</option>
                                    <option value="埼玉県">埼玉県</option>
                                    <option value="千葉県">千葉県</option>
                                    <option value="東京都">東京都</option>
                                    <option value="神奈川県">神奈川県</option>
                                    <option value="新潟県">新潟県</option>
                                    <option value="富山県">富山県</option>
                                    <option value="石川県">石川県</option>
                                    <option value="福井県">福井県</option>
                                    <option value="山梨県">山梨県</option>
                                    <option value="長野県">長野県</option>
                                    <option value="岐阜県">岐阜県</option>
                                    <option value="静岡県">静岡県</option>
                                    <option value="愛知県">愛知県</option>
                                    <option value="三重県">三重県</option>
                                    <option value="滋賀県">滋賀県</option>
                                    <option value="京都府">京都府</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="兵庫県">兵庫県</option>
                                    <option value="奈良県">奈良県</option>
                                    <option value="和歌山県">和歌山県</option>
                                    <option value="鳥取県">鳥取県</option>
                                    <option value="島根県">島根県</option>
                                    <option value="岡山県">岡山県</option>
                                    <option value="広島県">広島県</option>
                                    <option value="山口県">山口県</option>
                                    <option value="徳島県">徳島県</option>
                                    <option value="香川県">香川県</option>
                                    <option value="愛媛県">愛媛県</option>
                                    <option value="高知県">高知県</option>
                                    <option value="福岡県">福岡県</option>
                                    <option value="佐賀県">佐賀県</option>
                                    <option value="長崎県">長崎県</option>
                                    <option value="熊本県">熊本県</option>
                                    <option value="大分県">大分県</option>
                                    <option value="宮崎県">宮崎県</option>
                                    <option value="鹿児島県">鹿児島県</option>
                                    <option value="沖縄県">沖縄県</option>
                                    <option value="海外">海外</option>
                                </select><br />
                                <span class="help-block">海外の方は「海外」を選択してください</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address1">*住所</label>
                            <div class="col-md-4">
                                <input type="text" name="address1" class="form-control input-md" id="address1" required />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address2">建物名等</label>
                            <div class="col-md-4">
                                <input type="text" name="address2" class="form-control input-md" id="address2" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="tel">*電話番号</label>
                            <div class="col-md-4">
                                <input type="tel" name="tel" class="form-control input-md" id="tel" placeholder="03-0000-0000" required />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="fax">FAX番号</label>
                            <div class="col-md-4">
                                <input type="text" name="fax" class="form-control input-md" id="fax" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="inquiries">*お問い合わせ内容</label>
                            <div class="col-md-4">
                                <textarea name="message" class="form-control" id="inquiries" rows="10" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="howtoknow">どのようにして当社をお知りになりましたか</label>
                            <div class="col-md-4">
                                <label><input type="radio" name="howtoknow" value="検索エンジン" checked /> 検索エンジン</label><br>
                                <label><input type="radio" name="howtoknow" value="プレスリリース" /> プレスリリース</label><br>
                                <label><input type="radio" name="howtoknow" value="紹介" /> 紹介</label><br>
                                <label><input type="radio" name="howtoknow" value="口コミ" /> 口コミ</label><br>
                                <label><input type="radio" name="howtoknow" value="その他" /> その他</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="sonota">その他の場合</label>
                            <div class="col-md-4">
                                <textarea name="sonota" class="form-control" id="sonota" rows="10" placeholder="上の質問でその他を選択された場合はご入力ください"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group sendButton">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                <input type="submit" value="送信する" class="btn btn-primary btn-mediaPaper" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            
            <div class="col-xs-12 evo_output" @if(session('success')) style="display:block;" @else style="display:none;" @endif>
                <h2>その他 お問い合わせ &nbsp;&nbsp;送信完了</h2>
                <hr class="hrWhite" />
                <p class="lead pCenter">お問い合わせ頂きありがとうございます。</p>
                <p class="pCenter">後ほど、担当者よりご連絡をさせていただきます。<br>今しばらくお待ちくださいますようよろしくお願い申し上げます。<br><br>
                なお、お問い合わせいただいた内容によっては、ご連絡までお時間がかかるものがございます。予めご了承ください。</p>
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
                    <p>TEL: 03-5537-7437<br>FAX: 03-5537-7435</p>
                </div>
            </div>
        </div>
    </section>
  
</div>
@endsection
