<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ | かまらヨガ 華曼羅瑜伽 KAMALA YOGA </title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/contact.css" />
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
            <h2>お問い合わせ</h2>
            <p class="title">Contact</p>
        </div>
        <div class="wrapper">
            <p class="contact-intro">個人の方はもちろんですが、団体様や貸切などのご相談も承っております。<br>
                ヨガインストラクターの先生と生徒様のリトリートにご活用いただくことも可能です。<br></p>
            <p class="intro-two">また、社員研修や事業所、学校単位での参加も可能です。<br>
                社員様や生徒様の健康教育の一環としてもご活用していただけます。<br></p>
            <p class="contact-intro">健康教育や栄養指導、運動指導など、予防医学の観点からもご利用いただけます。<br>
                健康教育などの講座や指導をご希望の方は、医療スタッフが対応いたしますので、ご相談ください。<br>
                妊娠中のケアや産後ケアなどに関するご相談も承りますので、お気軽にご相談くださいませ。</p>


        </div>



        <section class="contact-wrapper">
            <div class="wrapper">
                <form class="mailForm" action="send.php" method="post">




                    <div class="contactFormRow">
                        <label>お名前<span class="required">必須</span></label>
                        <input type="text" name="name" placeholder="例）山田太郎" value="" maxlength="20" required>
                    </div>
                    <div class="contactFormRow">
                        <label>ふりがな<span class="required">必須</span></label>
                        <input type="text" name="furigana" placeholder="例）やまだたろう" value="" maxlength="20" required>
                    </div>
                    <div class="contactFormRow">
                        <label>メールアドレス<span class="required">必須</span></label>
                        <input type="email" name="email" placeholder="例）guest@example.com" value="" required>
                    </div>
                    <div class="contactFormRow">
                        <label>電話番号<span class="required">必須</span></label>
                        <input type="tel" name="tel" placeholder="例）0000000000" value="" required maxlength="15">
                    </div>
                    <div class="contactFormRow">
                        <label>性別<span class="required">必須</span></label>
                        <input type="radio" name="sex" value="男性" checked> 男性
                        <input type="radio" name="sex" value="女性" checked> 女性
                    </div>
                    <div class="contactFormRow">
                        <label>お問い合わせ項目<span class="required">必須</span></label>
                        <select name="item" required>
                            <option value="">お問い合わせ項目を選択してください</option>
                            <option value="ヨガ・リトリート">ヨガリトリート</option>
                            <option value="ヴェーダーンタ勉強会">ヴェーダーンタ勉強会</option>
                            <option value="助産院プラサーダ">助産院プラサーダ</option>
                            <option value="保健室オンライン">保健室オンライン</option>
                        </select>
                    </div>
                    <div class="contactFormRow">
                        <label>お問い合わせ内容<span class="required">必須</span></label>
                        <textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
                    </div>



                    <div class="privacy-body">
                        <h3>個人情報の取り扱い</h3>
                        <p>記載していただいた個人情報は、お問い合わせ内容の確認・返信以外には使用しません。ご本人の同意がなければ第三者に個人情報を提供することもございません。取得した個人情報は管理責任者を定め、紛失や漏洩などが発生しないよう積極的な安全対策を実施いたします。</p>
                    </div>
                    <div class="check-privacy">
                        <label for="checkbox">
                            <input type="checkbox" required><span>個人情報の取り扱いに同意する</span><span class="required">必須</span>
                        </label>
                    </div>



                    <div class="messagebtn">
                        <button class="messagebtn">確認する　→</button>

                    </div>


                </form>

            </div>
        </section>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>
