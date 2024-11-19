<?php

// 受け取る時のSubject（件名）
$mailSubject = 'お問い合わせメール【株式会社U’s Factory】';

//送信メッセージ
$mailMessage = <<< EOD
{$sfm_mail->name} 様

株式会社U'sFactoryサポートデスクです。
ご連絡ありがとうございます。
メールを確認致しました。
担当より後程ご連絡させていただきますので、しばらくお待ちいただけますでしょうか。
どうぞよろしくお願いいたします。

────────────────────────────────────
■法人・団体名
{$sfm_mail->cname}　様

■法人・団体名（フリガナ）
{$sfm_mail->ckana}　様

■お名前
{$sfm_mail->name}　様

■ご連絡先メールアドレス
{$sfm_mail->email}

■ご連絡先電話番号
{$sfm_mail->tel01}-{$sfm_mail->tel02}-{$sfm_mail->tel03}

■お問い合わせ件名
{$sfm_mail->subject}

■お問い合わせ内容
{$sfm_mail->message}

□□□□□□□□□□□□□□□□□□□□□
株式会社Ｕ’ｓＦａｃｔｏｒｙ
サポートデスク
〒240-0005
神奈川県横浜市保土ヶ谷区神戸町134番地 　
横浜ビジネスパーク　イーストタワー5階
TEL：  045-348-1560
Fax：  045-348-1561
mail： info@us-factory-sys.jp
HP： http://us-factory.jp/
□□□□□□□□□□□□□□□□□□□□□
────────────────────────────────────
□ユーザー情報
$sfm_userinfo
EOD;
