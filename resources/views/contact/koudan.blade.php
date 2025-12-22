@extends('layouts.app')

@section('title', '講談師神田織音 お問い合わせ - 株式会社エヴォルブド・インフォ')

@section('content')
<div>
    <nav id="bc">
        <nav id="bc">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li class="active">講談師神田織音 お問い合わせ</li>
                </ol>
            </div>
        </nav>
    </nav>
    
    <div class="pageVisualWrapper visualContact">
        <div class="container">
            <h1>Contact</h1>
            <p>講談師神田織音 お問い合わせ</p>
        </div>
    </div>
    
    <section class="contactWrapper">
        <div class="container">
            <div class="col-xs-12 evo_input" @if(session('success')) style="display:none;" @endif>
                <h2>講談師神田織音 お問い合わせ</h2>
                <hr class="hrWhite" />
                <p class="lead pCenter">下記フォームに必要事項を入力の上送信してください。</p>
                <p class="pCenter">お問い合わせ頂いた内容につきましては、後ほど、担当者よりご連絡をさせていただきます。<br>なお、お問い合わせいただいた内容によっては、ご連絡までお時間がかかるものがございます。<br>あらかじめご了承ください。</p>
                
                {{-- error banner moved below submit button --}}
                
                <form action="{{ route('contact.koudan.submit') }}" method="post" class="form-horizontal" novalidate>
                    @csrf
                    <fieldset class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="type">*企業 or 個人</label>
                            <div class="col-md-4">
                                <select name="type" class="form-control" id="type" required>
                                    <option value="" selected>選択してください</option>
                                    <option value="企業" {{ old('type') === '企業' ? 'selected' : '' }}>企業</option>
                                    <option value="個人" {{ old('type') === '個人' ? 'selected' : '' }}>個人</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="corporate">*貴社名</label>
                            <div class="col-md-4">
                                <input type="text" name="corporate" class="form-control input-md" id="corporate" value="{{ old('corporate') }}" placeholder="会社名をご入力ください" required />
                                @error('corporate')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="yourname">*お名前</label>
                            <div class="col-md-4">
                                <input type="text" name="yourname" class="form-control input-md" id="yourname" value="{{ old('yourname') }}" required />
                                @error('yourname')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="kana">*フリガナ</label>
                            <div class="col-md-4">
                                <input type="text" name="kana" class="form-control input-md" id="kana" value="{{ old('kana') }}" required />
                                @error('kana')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div style="margin-bottom: 10px;"></div>
                            <label class="col-md-4 control-label" for="email">*ご連絡先メールアドレス</label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control input-md" id="email" value="{{ old('email') }}" required />
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="zip">郵便番号</label>
                            <div class="col-md-4">
                                <input type="text" name="zip" class="form-control input-md" id="zip" value="{{ old('zip') }}" placeholder="100-0000" /><br />
                                <span class="help-block">半角英数字でご入力ください</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="pref">*都道府県</label>
                            <div class="col-md-4">
                                <select name="pref" class="form-control" id="pref" required>
                                    <option value="" selected>選択してください</option>
                                    <option value="北海道" {{ old('pref') === '北海道' ? 'selected' : '' }}>北海道</option>
                                    <option value="青森県" {{ old('pref') === '青森県' ? 'selected' : '' }}>青森県</option>
                                    <option value="岩手県" {{ old('pref') === '岩手県' ? 'selected' : '' }}>岩手県</option>
                                    <option value="宮城県" {{ old('pref') === '宮城県' ? 'selected' : '' }}>宮城県</option>
                                    <option value="秋田県" {{ old('pref') === '秋田県' ? 'selected' : '' }}>秋田県</option>
                                    <option value="山形県" {{ old('pref') === '山形県' ? 'selected' : '' }}>山形県</option>
                                    <option value="福島県" {{ old('pref') === '福島県' ? 'selected' : '' }}>福島県</option>
                                    <option value="茨城県" {{ old('pref') === '茨城県' ? 'selected' : '' }}>茨城県</option>
                                    <option value="栃木県" {{ old('pref') === '栃木県' ? 'selected' : '' }}>栃木県</option>
                                    <option value="群馬県" {{ old('pref') === '群馬県' ? 'selected' : '' }}>群馬県</option>
                                    <option value="埼玉県" {{ old('pref') === '埼玉県' ? 'selected' : '' }}>埼玉県</option>
                                    <option value="千葉県" {{ old('pref') === '千葉県' ? 'selected' : '' }}>千葉県</option>
                                    <option value="東京都" {{ old('pref') === '東京都' ? 'selected' : '' }}>東京都</option>
                                    <option value="神奈川県" {{ old('pref') === '神奈川県' ? 'selected' : '' }}>神奈川県</option>
                                    <option value="新潟県" {{ old('pref') === '新潟県' ? 'selected' : '' }}>新潟県</option>
                                    <option value="富山県" {{ old('pref') === '富山県' ? 'selected' : '' }}>富山県</option>
                                    <option value="石川県" {{ old('pref') === '石川県' ? 'selected' : '' }}>石川県</option>
                                    <option value="福井県" {{ old('pref') === '福井県' ? 'selected' : '' }}>福井県</option>
                                    <option value="山梨県" {{ old('pref') === '山梨県' ? 'selected' : '' }}>山梨県</option>
                                    <option value="長野県" {{ old('pref') === '長野県' ? 'selected' : '' }}>長野県</option>
                                    <option value="岐阜県" {{ old('pref') === '岐阜県' ? 'selected' : '' }}>岐阜県</option>
                                    <option value="静岡県" {{ old('pref') === '静岡県' ? 'selected' : '' }}>静岡県</option>
                                    <option value="愛知県" {{ old('pref') === '愛知県' ? 'selected' : '' }}>愛知県</option>
                                    <option value="三重県" {{ old('pref') === '三重県' ? 'selected' : '' }}>三重県</option>
                                    <option value="滋賀県" {{ old('pref') === '滋賀県' ? 'selected' : '' }}>滋賀県</option>
                                    <option value="京都府" {{ old('pref') === '京都府' ? 'selected' : '' }}>京都府</option>
                                    <option value="大阪府" {{ old('pref') === '大阪府' ? 'selected' : '' }}>大阪府</option>
                                    <option value="兵庫県" {{ old('pref') === '兵庫県' ? 'selected' : '' }}>兵庫県</option>
                                    <option value="奈良県" {{ old('pref') === '奈良県' ? 'selected' : '' }}>奈良県</option>
                                    <option value="和歌山県" {{ old('pref') === '和歌山県' ? 'selected' : '' }}>和歌山県</option>
                                    <option value="鳥取県" {{ old('pref') === '鳥取県' ? 'selected' : '' }}>鳥取県</option>
                                    <option value="島根県" {{ old('pref') === '島根県' ? 'selected' : '' }}>島根県</option>
                                    <option value="岡山県" {{ old('pref') === '岡山県' ? 'selected' : '' }}>岡山県</option>
                                    <option value="広島県" {{ old('pref') === '広島県' ? 'selected' : '' }}>広島県</option>
                                    <option value="山口県" {{ old('pref') === '山口県' ? 'selected' : '' }}>山口県</option>
                                    <option value="徳島県" {{ old('pref') === '徳島県' ? 'selected' : '' }}>徳島県</option>
                                    <option value="香川県" {{ old('pref') === '香川県' ? 'selected' : '' }}>香川県</option>
                                    <option value="愛媛県" {{ old('pref') === '愛媛県' ? 'selected' : '' }}>愛媛県</option>
                                    <option value="高知県" {{ old('pref') === '高知県' ? 'selected' : '' }}>高知県</option>
                                    <option value="福岡県" {{ old('pref') === '福岡県' ? 'selected' : '' }}>福岡県</option>
                                    <option value="佐賀県" {{ old('pref') === '佐賀県' ? 'selected' : '' }}>佐賀県</option>
                                    <option value="長崎県" {{ old('pref') === '長崎県' ? 'selected' : '' }}>長崎県</option>
                                    <option value="熊本県" {{ old('pref') === '熊本県' ? 'selected' : '' }}>熊本県</option>
                                    <option value="大分県" {{ old('pref') === '大分県' ? 'selected' : '' }}>大分県</option>
                                    <option value="宮崎県" {{ old('pref') === '宮崎県' ? 'selected' : '' }}>宮崎県</option>
                                    <option value="鹿児島県" {{ old('pref') === '鹿児島県' ? 'selected' : '' }}>鹿児島県</option>
                                    <option value="沖縄県" {{ old('pref') === '沖縄県' ? 'selected' : '' }}>沖縄県</option>
                                    <option value="海外" {{ old('pref') === '海外' ? 'selected' : '' }}>海外</option>
                                </select>
                                @error('pref')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <br>
                                <span class="help-block">海外の方は「海外」を選択してください</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address1">*住所</label>
                            <div class="col-md-4">
                                <input type="text" name="address1" class="form-control input-md" id="address1" value="{{ old('address1') }}" required />
                                @error('address1')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address2">建物名等</label>
                            <div class="col-md-4">
                                <input type="text" name="address2" class="form-control input-md" id="address2" value="{{ old('address2') }}" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="tel">*電話番号</label>
                            <div class="col-md-4">
                                <input type="tel" name="tel" class="form-control input-md" id="tel" value="{{ old('tel') }}" placeholder="03-0000-0000" required />
                                @error('tel')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="fax">FAX番号</label>
                            <div class="col-md-4">
                                <input type="text" name="fax" class="form-control input-md" id="fax" value="{{ old('fax') }}" />
                                @error('fax')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="inquiries">*お問い合わせ内容</label>
                            <div class="col-md-4">
                                <textarea name="message" class="form-control" id="inquiries" rows="10" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="howtoknow">どのようにして当社をお知りになりましたか</label>
                            <div class="col-md-4">
                                <label style="margin-right: 20px;"><input type="radio" name="howtoknow" value="検索エンジン" {{ old('howtoknow', '検索エンジン') === '検索エンジン' ? 'checked' : '' }} /> 検索エンジン</label>
                                <label style="margin-right: 20px;"><input type="radio" name="howtoknow" value="プレスリリース" {{ old('howtoknow') === 'プレスリリース' ? 'checked' : '' }} /> プレスリリース</label>
                                <label style="margin-right: 20px;"><input type="radio" name="howtoknow" value="紹介" {{ old('howtoknow') === '紹介' ? 'checked' : '' }} /> 紹介</label><br>
                                <label style="margin-right: 20px;"><input type="radio" name="howtoknow" value="口コミ" {{ old('howtoknow') === '口コミ' ? 'checked' : '' }} /> 口コミ</label>
                                <label><input type="radio" name="howtoknow" value="その他" {{ old('howtoknow') === 'その他' ? 'checked' : '' }} /> その他</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="sonota">その他の場合</label>
                            <div class="col-md-4">
                                <textarea name="sonota" class="form-control" id="sonota" rows="10" placeholder="上の質問でその他を選択された場合はご入力ください">{{ old('sonota') }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group sendButton">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                <input type="submit" value="送信する" class="btn btn-primary btn-mediaPaper" />
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="contact-error-banner">
                                1つまたは複数のフィールドにエラーがあります。ご確認の上、再度お試しください。
                            </div>
                        @endif
                    </fieldset>
                </form>
            </div>
            
            <div class="col-xs-12 evo_output" @if(session('success')) style="display:block;" @else style="display:none;" @endif>
                <h2>講談師神田織音 お問い合わせ &nbsp;&nbsp;送信完了</h2>
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
