<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vue.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,100' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/2.0.6/velocity.min.js"></script>
    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

    <header>

        <div class="header-box">

            <div class="site-title">
                <a href="<?php echo home_url(); ?>">
                    <?php the_custom_logo();
                    if (!has_custom_logo()) { ?><?php bloginfo('name'); ?>
                <?php } ?>
                </a>
            </div>

            <div class="menu_btn">
            </div>

            <nav id="nav">
                <ul>
                    <li v-for="item in items">
                        <a :href="item.url" v-bind:class="{active:active===item}" v-on:click="dropdown(item)">
                            {{ item.name }}
                        </a>
                        <ul class="dropdown" v-if="active===item">
                            <li v-for="child in item.children">
                                <a :href="child.url" v-bind:label="chile.name">
                                    {{ child.name }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

    </header>

    <main id="main">


        <!--記事本文-->
        <?php if (have_posts()) : the_post(); ?>
            <article <?php post_class('kiji'); ?>>

                <section class="section06">
                    <div id="demo">
                        <h2 class="title">住所変換(Vue.jsで設置)</h2>
                        <p>郵便番号の入力しボタンを押すと<br class="sp">住所が表示されます。
                        </p>

                        <div class="btn_flex">
                            <input v-model="inputZip" :placeholder="computedZip" @keypress.enter="getAddress(computedZip)" maxlength="7">
                            <button @click="getAddress(computedZip)">変換ボタン</button>
                        </div>

                        <div class="result">
                            <transition name="trans">
                                <p class="res" :key="results">{{results}}</p>
                            </transition>
                        </div>
                    </div>
                </section>



                <div id="app">

                    <button v-on:click="openModal">Click</button>

                    <open-modal v-show="showContent" v-on:from-child="closeModal">
                        slotからモーダルウィンドウへ
                    </open-modal>

                </div>




            </article>
        <?php endif; ?>



    </main>


    <footer>

        <div class="footer-bottom">
            <div class="copyright">
                <p>Copyright ©<?php bloginfo('name'); ?> All Rights Reserved.</p>
            </div>
        </div>


    </footer>


    <script src="<?php echo get_template_directory_uri(); ?>/js/vue.js"></script>
    <style>
        html {
            margin-top: 0 !important;
        }
    </style>

</body>


</html>