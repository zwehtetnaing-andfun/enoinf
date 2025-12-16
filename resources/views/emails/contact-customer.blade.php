<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>お問い合わせありがとうございます</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
    <p>{{ $formData['yourname'] }} 様</p>
    
    <p>この度は、株式会社エヴォルブド・インフォにお問い合わせいただき、誠にありがとうございます。</p>
    
    <p>以下の内容でお問い合わせを受け付けました。<br>
    後ほど、担当者よりご連絡をさせていただきます。<br>
    今しばらくお待ちくださいますようよろしくお願い申し上げます。</p>
    
    <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">
    
    <h3>お問い合わせ内容</h3>
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd; width: 200px;"><strong>企業 or 個人</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['type'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>貴社名</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['corporate'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>お名前</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['yourname'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>メールアドレス</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>電話番号</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $formData['tel'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; background-color: #f5f5f5; border: 1px solid #ddd;"><strong>お問い合わせ内容</strong></td>
            <td style="padding: 8px; border: 1px solid #ddd;">{!! nl2br(e($formData['message'])) !!}</td>
        </tr>
    </table>
    
    <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">
    
    <p style="color: #666; font-size: 14px;">
        なお、お問い合わせいただいた内容によっては、ご連絡までお時間がかかるものがございます。<br>
        予めご了承ください。
    </p>
    
    <p style="margin-top: 30px; color: #666; font-size: 14px;">
        ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br>
        株式会社エヴォルブド・インフォ<br>
        TEL: 03-5537-7437<br>
        FAX: 03-5537-7435<br>
        ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
    </p>
    
    <p style="margin-top: 20px; color: #999; font-size: 12px;">
        このメールは自動送信されています。<br>
        このメールに返信されても対応できませんので、ご了承ください。
    </p>
</body>
</html>
