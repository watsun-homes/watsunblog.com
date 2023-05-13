<?php get_header("top"); ?>
<main class="container">
    <div class="contents">




        <!--記事本文-->
        <?php if (have_posts()) : the_post(); ?>
            <article <?php post_class('kiji'); ?>>





                <div class="top">
                    <div class="top-text center">
                        <h1><strong>Webサイトを"改善"します</strong></h1>
                        <span>"改善"することで新たな課題を解決します</span>
                    </div>
                    <div class="top-text-sub">
                        <p id="okikae">時代の流れとともにWebの世界も変わっていきます。<br class="br_pc">
                            それに伴い、Webサイトも新しくリニューアルしていくことが大切です。<br class="br_pc">Web制作のプロとして企業や個人の未来を支えるため適切な施策を提供していきます。</p>
                    </div>
                    <div class="content_news">
                        <div class="news_relative">
                            <a href="<?php echo home_url(); ?>/category/news/" class="news_title" data-text="NEWS">ニュース一覧</a>
                            <ul>
                                <?php
                                $cat_posts = get_posts(array(
                                    'post_type' => 'post', // 投稿タイプ
                                    'category_name' => 'news', // カテゴリをスラッグで指定する場合
                                    'posts_per_page' => 2, // 表示件数
                                    'orderby' => 'date', // 表示順の基準
                                    'order' => 'DESC' // 昇順・降順
                                ));
                                global $post;
                                if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>

                                        <li><a href="<?php the_permalink(); ?>">
                                                <p><?php the_time('Y.m.d') ?> <span>NEW</span> <br class="br_sp"><?php the_title(); ?></p>
                                            </a></li>
                                <?php endforeach;
                                endif;
                                wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                </div>







                <div class="superiority">

                    <h2 class="fade_in up">Web制作・運営における<br class="br_sp">「悩み」を解決します</h2>
                    <p class="margin-center fade_in up">Webの世界は"<b>継続力</b>"が大切です</p>

                    <div class="clear">

                        <div class="left"></div>
                        <div class="right fade_in right">
                            <p class="">「Webサイトをリニューアルし改善したい」<br>
                                「正しく運営していきたい」<br>
                                「Web制作の代行をして欲しい」<br>
                                「コーディング代行をしてもらいたい」</p>
                            <p class="text_left_sp">こんなWebに関する「<b>悩み</b>」を解決するために、徹底的に分析し「<b>改善</b>」していきます。</p>
                            <p class="text_left_sp">Webサイトを制作・運営することは「簡単ではない」のです。<br>適切な施策を行うことで地道に積み上げていくのがWebの世界です。</p>
                            <a href="https://watsunblog.com/contact">
                                <div class="btn">相談する</div>
                            </a>
                            <p class="attention"><strong>＊ご相談は完全無料です。</strong></p>
                        </div>

                    </div>

                </div><!--優越性-->






                <div class="service">

                    <h2 class="fade_in up">サービス</h2>

                    <div class="flex">

                        <div class="web">
                            <div class="rhombus">制作</div>
                            <h3 class="margin-center fade_in right">Web制作</h3>
                            <div class="center"><i class="fas fa-desktop"></i></div>
                            <p class="slogan fade_in right"><strong>”想い”を可視化する</strong></p>
                            <p class="margin-center fade_in up">Wordpress/デザイン/スマホ・タブレット対応/
                                SEO対策/コンテンツ設計</p>
                            <a href="https://watsunblog.com/service/#web" class="fade_in up">
                                <div class="detail">詳しくみる</div>
                            </a>
                        </div>

                        <div class="management">
                            <div class="rhombus">代行</div>
                            <h3 class="margin-center fade_in right">運営・管理・更新</h3>
                            <div class="center"><i class="fas fa-edit"></i></div>
                            <p class="slogan fade_in right"><strong>”変化に対応する”</strong></p>
                            <p class="margin-center fade_in up">サイト運営/サーバー移管/管理/更新作業/ブログ支援</p>
                            <a href="https://watsunblog.com/service/#management" class="fade_in up">
                                <div class="detail">詳しくみる</div>
                            </a>
                        </div>

                        <div class="coding">
                            <div class="rhombus">協力</div>
                            <h3 class="margin-center fade_in right">コーディング代行</h3>
                            <div class="center"><i class="fas fa-code"></i></div>
                            <p class="slogan fade_in right"><strong>制作を”効率”よく</strong></p>
                            <p class="margin-center fade_in up">HTML/CSS/Javascript/PHP</p>
                            <a href="https://watsunblog.com/service/#coding" class="fade_in up">
                                <div class="detail">詳しくみる</div>
                            </a>
                        </div>

                    </div>

                </div>





                <div class="authority">

                    <p class="margin-center fade_in up">Webサイト制作や運営は、<br class="br_sp">「適切な」技術・知識が必要</p>
                    <h2 class="fade_in up">Web制作のプロに<br class="br_sp">お任せ下さい</h2>
                    <p class="margin-center fade_in up">SEO・ライティングなどの技術を利用した運営をしていくことで、結果を出していきます。</p>
                    <div class="square fade_in right">
                        <p class="margin-center center_pc"><strong>・内部SEO・外部SEO・コンテンツSEO・記事設計/添削<br class="br">
                                ・サイト分析・サイト設計・キーワード選定</strong></p>
                        <p class="margin-center">以上の経験が豊富なWATSUNBLOGが戦略的に考え、Webサイトの成長を目指していきます。</p>
                        <p class="margin-center">Webエンジニアやデザイナーの視点からみた分析をすることで、Webサイトを「改善」していきます。</p>
                    </div>



                    <div class="margin-center portfolio_authority fade_in up">
                        <p><strong>制作実績</strong></p>
                    </div>



                    <?php get_template_part('portfolio'); ?>



                </div><!--権威性-->







                <div class="reliability"> <!--信頼性-->

                    <h2 class="fade_in up">Web制作は戦略を練ることで結果を出していきます</h2>
                    <div class="icon fade_in up">
                        <div class="icon-1 icon-to"><img src="https://watsunblog.com/wp-content/uploads/2020/08/1839172705eaa618be9e6b2e3a06e60b.png" alt="SEOアイコン" /></div>
                        <div class="icon-2 icon-to"></div>
                        <div class="icon-3 icon-to"></div>
                    </div>
                    <p class="margin-center fade_in up">「SEO/ライティング/分析」３つの技術を駆使してWebサイト設計を行っていき、「<b>適切</b>」に改善していきます。</p>
                    <p class="margin-center center_pc fade_in right">Webサイトで集客していくには、検索結果で上位表示されなければ始まりません。<br>
                        適切な「<b>分析</b>」をし、その結果をもとに「<b>SEO対策</b>」を行い上位表示を狙っていきます。<br>
                        また、読者に対して魅力的なWebサイトにしていくため、「<b>ライティングテクニック</b>」を駆使してコンテンツを作り上げていきます。</p>

                </div>









                <div class="blog">
                    <h2 class="fade_in up">お役立ち情報</h2>
                    <p class="fade_in left">サイト運営/制作・ブログ運営・SEO対策・ライティングテクニックなど<br class="br">
                        Webの技術的なお話について主に掲載しています。</p>
                    <div class="recommended fade_in up">
                        <p>おすすめ記事</p>
                        <div class="margin-center">
                            <div class="article">
                                <a class="list-up" href="https://watsunblog.com/%e5%ae%8c%e5%85%a8%e5%88%9d%e5%bf%83%e8%80%85%e5%90%91%e3%81%91%e3%83%96%e3%83%ad%e3%82%b0%e3%81%ae%e5%a7%8b%e3%82%81%e6%96%b9%e5%ae%8c%e5%85%a8%e3%82%ac%e3%82%a4%e3%83%89%ef%bc%81%e7%84%a1/">
                                    <img src="https://watsunblog.com/wp-content/uploads/2020/06/5633e841f838e5528e1b18ee0466691c.jpg" alt="ブログの始め方" />
                                    <div class="text">
                                        <h3>[完全初心者向け]ブログの始め方完全ガイド！[無料・有料を比較]</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="article">
                                <a class="list-up" href="https://watsunblog.com/keywordpoint/">
                                    <img src="https://watsunblog.com/wp-content/uploads/2020/06/16b7cca61e2ddff47a3af272589b2f73-scaled.jpg" alt="キーワード選定" />
                                    <div class="text">
                                        <h3>[正しい選び方]キーワード選定の具体的手順とポイントを解説[ブログ]</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="article">
                                <a class="list-up" href="https://watsunblog.com/%e8%aa%ad%e3%81%be%e3%82%8c%e3%82%8b%e8%a8%98%e4%ba%8b%e3%82%92%e4%bd%9c%e3%82%8b%e3%83%96%e3%83%ad%e3%82%b0%e3%81%ae%e6%9b%b8%e3%81%8d%e6%96%b9%e3%82%92%e5%ae%8c%e5%85%a8%e7%90%86%e8%a7%a3/">
                                    <img src="https://watsunblog.com/wp-content/uploads/2020/06/a6b549e91fce78e7429a9f21c4cefee0.jpg" alt="ブログの書き方" />
                                    <div class="text">
                                        <h3>[読まれる記事を作る]ブログの書き方を完全理解[コツ・手順公開]</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>















            </article>
        <?php endif; ?>





    </div>
</main>
<?php get_footer(); ?>