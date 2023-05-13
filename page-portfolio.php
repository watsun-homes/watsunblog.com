<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" 　 content="width=device-width, initial-scale=1.0 ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>watsunportfolio</title>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/portfolio-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


</head>


<body id="portfolio">

    <header>
        <h1><a href="https://watsunblog.com/">WATSUNBLOG</a></h1>
        <div class="menu">
            <div class="home"><a href="https://watsunblog.com/">HOME</a></div>
            <div class="service"><a href="https://watsunblog.com/service/">SERVICE</a></div>
            <div class="profile"><a href="https://watsunblog.com/company/">PROFILE</a></div>
        </div>
    </header>

    <main>








        <div class="works">

            <div class="title">
                <div class="en">
                    <p>PORTFOLIO</p>
                </div>
                <div class="ja">
                    <h2>ポートフォリオ</h2>
                    <p>＊許可頂いたWebサイトのみ載せております。</p>
                </div>
            </div>

            <div class="web">
                <!--div class="title">
                <h3>Web制作</h3>
            </div-->
                <div class="contents">

                    <div class="contact">
                        <h3 class="title">WEBサイト制作</h3>
                        <div class="contents">
                            サイト運営・管理：５サイトほど<br>
                            サイト制作：６サイトほど（デザインから公開まで）<br>
                            修正案件：３００サイト以上
                        </div>
                    </div>

                    <?php get_template_part('portfolio'); ?>

                </div>
            </div>


            <div class="system">
                <!--div class="title">
                <h3>システム開発</h3>
            </div-->
                <div class="contents">

                    <div class="contact">
                        <h3 class="title">フロントエンド</h3>
                        <div class="contents">
                            主にJavascript(Jquery,Vue.js,ajax)を使用して作成したページです。<br>
                            一部PHPで処理した箇所もあります。
                        </div>
                    </div>

                    <a href="https://watsunblog.com/front-end/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/front-end.png">
                    </a>

                </div>
            </div>

        </div>










        <div class="can">
            <div class="title">SKILL</div>
            <div class="contents">
                Web制作：Javascript/Jquery/Vue.js/React/HTML/CSS/sass/PHP/Mysql/WordPress/Github<br>
                Webデザイン：Photoshop/Illustrator/XD<br>
                SEO対策：内部対策/外部対策
            </div>
            <div class="btn"><a href="https://watsunblog.com/service/">SERVICE</a></div>
        </div>


        <!--div class="contact">
            <div class="title">CONTACT</div>
            <div class="contents">
                ホームページ制作やリニューアル、運営代行、システム開発のご依頼・ご相談はこちらからお問い合わせください。業務委託をお考えの代理店・制作会社さまもお気軽にご連絡ください。
            </div>
            <div class="btn"><a href="https://watsunblog.com/contact/">CONTACT</a></div>
        </div-->





    </main>








    <footer>
        <div class="sns">
            <a href="https://mobile.twitter.com/watsunblog" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/watsunblog" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="title">
            <div class="footertitle"><a href="https://watsunblog.com/">WATSUNBLOG</a></div>
            <div class="copyright">©WATSUNBLOG All Rights Reserved.</div>
        </div>
    </footer>

</body>

</html>