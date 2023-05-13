<?php get_header("top"); ?>
<main class="container">
    <div class="contents">
        <?php get_template_part('breadcrumbs'); ?>



        <!--記事本文-->
        <?php if (have_posts()) : the_post(); ?>
            <article <?php post_class('kiji'); ?>>
                <!--タイトル-->
                <h1><?php the_title(); ?></h1>
                <!--本文取得-->
                <div class="undertitle">よくあるご質問</div>

                <table>
                    <tr>
                        <td><a href="#web">Web制作について</a></td>
                        <td><a href="#management">運営・管理・更新について</a></td>
                        <td><a href="#code">コーディングについて</a></td>
                    <tr>
                    <tr>
                        <td><a href="#fee">料金について</a></td>
                        <td><a href="#contact">お問い合わせについて</a></td>
                        <td><a href="#campany">企業について</a></td>
                    <tr>
                </table>


                <h2 id="web">Web制作について</h2>

                <div class="question-ul">

                    <div class="hidden_box">
                        <label for="label1">初めてなのですが、まずは相談だけでも大丈夫でしょうか?</label>
                        <input type="checkbox" id="label1" />
                        <div class="hidden_show">
                            <p>もちろん大丈夫です！お気軽にご相談ください。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label2">制作工程が知りたいです。</label>
                        <input type="checkbox" id="label2" />
                        <div class="hidden_show">
                            <p>それぞれのサービスによって工程が異なるので、詳しくは<a href="https://watsunblog.com/service/">サービスページ</a>からご覧ください。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label3">他社が作成したWebサイトを変更してもらえますか?</label>
                        <input type="checkbox" id="label3" />
                        <div class="hidden_show">
                            <p>はい、可能です。Web制作のことならお任せください。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label4">どんな業種のWebサイト制作が得意ですか？</label>
                        <input type="checkbox" id="label4" />
                        <div class="hidden_show">
                            <p>様々な業種を制作しております。制作実績の詳細は<a href="https://watsunblog.com/portfolio/">制作実績一覧</a>からご覧ください。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label5">Webサイトの具体的な構成や内容を提案してもらえますか？</label>
                        <input type="checkbox" id="label5" />
                        <div class="hidden_show">
                            <p>ヒアリングシートをご用意させて頂きますので、記入頂いた内容をもとに提案させて頂きます。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label6">デザインの要望はどうやって伝えたらいいですか？</label>
                        <input type="checkbox" id="label6" />
                        <div class="hidden_show">
                            <p>こちらもヒアリングシートでご記入いただくので各項目にお答え頂ければなと思います。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label7">デザイン案はいくつ作ってもらえるのでしょうか？</label>
                        <input type="checkbox" id="label7" />
                        <div class="hidden_show">
                            <p>基本は１つです。追加料金でいくつか提案させて頂きます。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label8">デザインを変更してもらいたい場合、追加料金は必要ですか？</label>
                        <input type="checkbox" id="label8" />
                        <div class="hidden_show">
                            <p>変更する内容によって追加料金が発生する場合があります。</p>
                        </div>
                    </div>

                </div>



                <h2 id="management">運営・管理・更新について</h2>

                <div class="question-ul">

                    <div class="hidden_box">
                        <label for="label9">Webサイト公開後の更新や運営業務もお願いできますか？</label>
                        <input type="checkbox" id="label9" />
                        <div class="hidden_show">
                            <p>もちろん可能です。お気軽にご相談頂けたらなと思います。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label10">すでにある自社サイトの更新業務をお願いできますか？</label>
                        <input type="checkbox" id="label10" />
                        <div class="hidden_show">
                            <p>もちろん可能です。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label11">頻繁に更新したいので、自分でできるようにしたいのですが、可能ですか？</label>
                        <input type="checkbox" id="label11" />
                        <div class="hidden_show">
                            <p>更新作業をご自身で管理していけるようにマニュアルをPDF形式でご用意させて頂きます。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label12">インターネットショップの商品入れ替えは自分でできますか？</label>
                        <input type="checkbox" id="label12" />
                        <div class="hidden_show">
                            <p>管理の仕方をマニュアルをご用意させて頂きます。</p>
                        </div>
                    </div>

                </div>




                <h2 id="code">コーディングについて</h2>

                <div class="question-ul">

                    <div class="hidden_box">
                        <label for="label14">データベースを使用したPHPのプログラムを組むことはできますか？</label>
                        <input type="checkbox" id="label14" />
                        <div class="hidden_show">
                            <p>はい、可能です。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label15">Webサイトのコーディングを任せる場合、具体的にどのようなことができますか？</label>
                        <input type="checkbox" id="label15" />
                        <div class="hidden_show">
                            <p>HTML/CSS/PHP/Javascriptでできることならなんでも可能です。フロントエンド実装はもちろん、サーバーと連携したプログラム作成も可能です。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label16">使用できる言語を教えてください。</label>
                        <input type="checkbox" id="label16" />
                        <div class="hidden_show">
                            <p>HTML/CSS/PHP/Javascriptです。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label17">業務提携を結ぶことはできますか？</label>
                        <input type="checkbox" id="label17" />
                        <div class="hidden_show">
                            <p>可能です。<a href="https://watsunblog.com/contact/">お問い合わせページ</a>からお問い合わせいただけたらなと思います。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label18">SEOを意識したコーディングはできますか？</label>
                        <input type="checkbox" id="label18" />
                        <div class="hidden_show">
                            <p>可能です。コーディングはSEOを意識しながらコーディングします。</p>
                        </div>
                    </div>

                </div>




                <h2 id="fee">料金について</h2>

                <div class="question-ul">

                    <div class="hidden_box">
                        <label for="label19">Webサイト制作時にはどんな費用が必要ですか？</label>
                        <input type="checkbox" id="label19" />
                        <div class="hidden_show">
                            <p>費用について、詳しくは<a href="https://watsunblog.com/service/">サービスページ</a>からご確認ください。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label20">御見積書を見て、他社と比較検討してもいいですか？</label>
                        <input type="checkbox" id="label20" />
                        <div class="hidden_show">
                            <p>ぜひ検討して頂き、お客様が納得できる形でWeb制作を進めていってもらえたらなと思います。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label23">万が一の途中キャンセルの場合、お支払いはどうなりますか？</label>
                        <input type="checkbox" id="label23" />
                        <div class="hidden_show">
                            <p>タイミングにもよりますが、基本はその段階までの作業料金をお支払いいただきます。お見積もりの段階できっちりと検討していただければなと思います。</p>
                        </div>
                    </div>

                </div>



                <h2 id="campany">WATSUNについて</h2>

                <div class="question-ul">

                    <div class="hidden_box">
                        <label for="label24">どんな特徴を持った制作会社ですか？</label>
                        <input type="checkbox" id="label24" />
                        <div class="hidden_show">
                            <p>様々な業種に対応し制作しております。制作させていただく業界についてとことん調べお客様の成功のため最善を尽くします。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label25">１つのサイト制作でどのくらいのお時間がかかりますか？</label>
                        <input type="checkbox" id="label25" />
                        <div class="hidden_show">
                            <p>サイトの内容によりますが、1つのWebサイトを作るには早くて1ヶ月、長くて3~4ヶ月ほどかかります。</p>
                        </div>
                    </div>
                    <div class="hidden_box">
                        <label for="label27">制作実績を見たいです。</label>
                        <input type="checkbox" id="label27" />
                        <div class="hidden_show">
                            <p>制作実績は<a href="https://watsunblog.com/portfolio/">制作実績一覧</a>からご覧ください。</p>
                        </div>
                    </div>

                </div>




                <h2 id="contact">お問い合わせについて</h2>

                <div class="question-ul">
                    <div class="hidden_box">
                        <label for="label30">Webに関しては初心者で右も左もわからないですが、丁寧に教えていただけますか？</label>
                        <input type="checkbox" id="label30" />
                        <div class="hidden_show">
                            <p>もちろんです！わからないことがあればお気軽にご相談ください。その都度しっかりとお答えさせて頂きます。</p>
                        </div>
                    </div>
                </div>

            </article>
        <?php endif; ?>


    </div>
</main>
<?php get_footer(); ?>