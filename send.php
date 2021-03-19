<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$furigana = htmlspecialchars($_POST['furigana'],ENT_QUOTES);
$email = htmlspecialchars($_POST['email'],ENT_QUOTES);
$tel = htmlspecialchars($_POST['tel'],ENT_QUOTES);
$sex = htmlspecialchars($_POST['sex'],ENT_QUOTES);
$item = htmlspecialchars($_POST['item'],ENT_QUOTES);
$content = htmlspecialchars($_POST['content'],ENT_QUOTES);

//担当者用メール送信
$to = 'mullkippe.ayu@gmail.com';
$from = 'info@wadaayumi.com';
$subject = '問い合わせがありました';
$body = <<<EOF
お問い合わせがありました。
ーーーーーーーーーーーーーーーーーーーーーーーーーーー
お名前：{$name}
ふりがな：{$furigana}
メールアドレス：{$email}
電話番号：{$tel}
性別：{$sex}
お問い合わせ項目：{$item}
お問い合わせ内容：
{$content}

-- 
このメールは、info@wadaayumi.comから自動で送信されています。
EOF;

mb_language( "Japanese" );
mb_internal_encoding("UTF-8");
mb_send_mail( $to , $subject , $body , "from:{$from}");

//確認メール
$to = 'mullkippe.ayu@gmail.com';
$subject = '【テスト】お問い合わせありがとうございます';
$body = <<<EOF
{$name}様、
お問い合わせありがとうございます。

ご確認のため、ご入力いただいた内容を送信いたします。

ーーーーーーーーーーーーーーーーーーーーーーーーーーー
お名前：{$name}
ふりがな：{$furigana}
メールアドレス：{$email}
電話番号：{$tel}
性別：{$sex}
お問い合わせ項目：{$item}
お問い合わせ内容：
{$content}

ーーーーーーーーーーーーーーーーーーーーーーーーーーー

担当者より、別途メールを送信させていただきますので、今しばらくお待ちくださいませ。

-- 
このメールは、info@wadaayumi.comから自動で送信されています。
EOF;
mb_send_mail( $to , $subject , $body , "from:{$from}");

?>


<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ送信完了 | かまらヨガ 華曼羅瑜伽 KAMALA YOGA </title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="./css/send.css" />
    <link rel="stylesheet" href="./css/responsive.css" />

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">

    <!-- ドロワー -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css" media="screen and (max-width:768px)">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
    <script src="./js/script.js"></script>

</head>

<body class="drawer drawer--right">
    <?php include('header.php'); ?>
    <main role="main">
        <div class="access-img">
        </div>
        <div class="heading">
            <h2>お問い合わせ送信完了</h2> </div>
            <div class="completetext">
            <p class="sendtext"><?php echo $name; ?>様、お問い合わせありがとうございます。</p>
            <p>送信が完了いたしました。</p>
            <p>折り返し、担当者よりご連絡いたしますので、 恐れ入りますが、しばらくお待ちください。</p>
            </div>
       
        <div class="backbtn">
        <a href="./" class="sendbtn">トップページへ戻る</a>
        </div>




    </main>
    <?php include('footer.php'); ?>
</body>

</html>
