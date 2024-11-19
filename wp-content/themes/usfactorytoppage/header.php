<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="header sp headerHomeBg">
        <div class="headerBox">
            <div class="titleLogo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="/common/img/RecruitQuestionImg.svg">
                </a>
            </div>
        </div>
        <div class="menuPanelBody">
            <?php //wp_nav_menu(); 
            ?>
            <div class="menuArea">
                <div class="menuBox">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <p>TOP</p>
                    </a>
                </div>
                <div class="menuBox">
                    <a href="https://us-factory.jp/robot/">
                        <p>Info360</p>
                    </a>
                </div>
                <div class="menuBox">
                    <p>BI for AC</p>
                    <div class="dropdownMenu">
                        <a href="https://us-factory.jp/robot/" target="_blank">
                            <p class="dropdownItem">S造・RC造</p>
                        </a>
                        <a href="/mokuzou/" target="_blank">
                            <p class="dropdownItem">木造</p>
                        </a>
                    </div>
                </div>
                <div class="menuBox">
                    <a href="https://us-factory.jp/news/">
                        <p>NEWS</p>
                    </a>
                </div>
                <div class="menuBox">
                    <a href="https://us-factory.jp/media/">
                        <p>MEDIA</p>
                    </a>
                </div>
                <div class="menuBox">
                    <a href="https://us-factory.jp/access/">
                        <p>ACCESS</p>
                    </a>
                </div>
                <div class="menuBox">
                    <a href="https://us-factory.jp/company/">
                        <p>会社概要</p>
                    </a>
                </div>
                <div class="menuBox">
                    <a href="https://us-factory.jp/recruit/">
                        <p>採用情報</p>
                    </a>
                </div>
                <div class="menuBox">
                    <a href="https://us-factory.jp/inquiry/">
                        <p>お問い合わせ</p>
                    </a>
                </div>
                <div class="menuBox">
                    <a href="https://lms.us-factory.jp/mypage/login">
                        <p class="loginBtn">ユーザーログイン</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>