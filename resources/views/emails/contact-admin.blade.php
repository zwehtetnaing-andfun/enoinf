<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
    <h2>お問い合わせがありました</h2>
    
    <table style="width: 100%; border-collapse: collapse;">
        @if(!empty($formData['type']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd; width: 200px;"><strong>企業 or 個人</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['type'] }}</td>
        </tr>
        @endif
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>貴社名</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['corporate'] }}</td>
        </tr>
        @if(!empty($formData['url']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>URL</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['url'] }}</td>
        </tr>
        @endif
        @if(!empty($formData['media']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>媒体名</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['media'] }}</td>
        </tr>
        @endif
        @if(!empty($formData['mediaurl']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>媒体URL</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['mediaurl'] }}</td>
        </tr>
        @endif
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>お名前</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['yourname'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>フリガナ</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['kana'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>メールアドレス</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['email'] }}</td>
        </tr>
        @if(!empty($formData['zip']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>郵便番号</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['zip'] }}</td>
        </tr>
        @endif
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>都道府県</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['pref'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>住所</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['address1'] }}</td>
        </tr>
        @if(!empty($formData['address2']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>建物名等</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['address2'] }}</td>
        </tr>
        @endif
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>電話番号</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['tel'] }}</td>
        </tr>
        @if(!empty($formData['fax']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>FAX番号</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['fax'] }}</td>
        </tr>
        @endif
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>お問い合わせ内容</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{!! nl2br(e($formData['message'])) !!}</td>
        </tr>
        @if(!empty($formData['howtoknow']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>どのようにして当社をお知りになりましたか</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['howtoknow'] }}</td>
        </tr>
        @endif
        @if(!empty($formData['sonota']))
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>その他</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{!! nl2br(e($formData['sonota'])) !!}</td>
        </tr>
        @endif
    </table>
    
    <p style="margin-top: 20px; color: #666;">
        このメールは自動送信されています。
    </p>
</body>
</html>
