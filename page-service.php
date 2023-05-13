<?php get_header("top"); ?>
<main class="container">
    <div class="contents">
        <?php get_template_part('breadcrumbs'); ?>


        <div class="contentmenu">
            <div class="ul">
                <div class="li"><a href="#management">運営・管理・更新</a></div>
                <div class="li web"><a href="#web">Web制作</a></div>
                <div class="li"><a href="#coding">コーディング代行</a></div>
            </div>
        </div>

        <?php if (have_posts()) : the_post(); ?>
            <article <?php post_class('kiji'); ?>>


                <div class="top">
                    <div class="title">
                        <h1><?php the_title(); ?></h1>
                        <div class="undertitle">SERVICE</div>
                        <div class="slogan">具体的なサービス内容をご紹介します</div>
                    </div>
                </div>






                <div class="web" id="web">

                    <h2>Web制作</h2>
                    <div class="attention">*各項目をクリックすると、詳細（料金など）をご確認できます。</div>

                    <div class="detail">

                        <div class="li">
                            <a class="js-modal-open16" href="">
                                <div class="title">
                                    <div class="icon"><i class="fab fa-wordpress"></i></div>
                                    <div class="about">
                                        <h3>WordPress</h3>
                                        <div class="subtitle">ワードプレス</div>
                                    </div>
                                </div>
                                <p class="content">Webサイト運営に便利なCMSの一つ、WordPress。プラグインを使用し、様々なシステムを導入できます。WordPressでWebサイト制作をしていきます。既存のWebサイトにWordPressの導入も可能です。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open15" href="">
                                <div class="title">
                                    <div class="icon"><i class="far fa-newspaper"></i></div>
                                    <div class="about">
                                        <h3>Content Design</h3>
                                        <div class="subtitle">コンテンツ設計</div>
                                    </div>
                                </div>
                                <p class="content">Webサイトで記載する文章や画像などを整理し、SEO設計をしていきます。ターゲットとなるキーワードで上位表示させるための設計を行います。当社のブログではSEOに関する記事をご用意しているので、よければご覧下さい。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open13" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-desktop"></i></div>
                                    <div class="about">
                                        <h3>Web Design</h3>
                                        <div class="subtitle">デザイン制作</div>
                                    </div>
                                </div>
                                <p class="content">Webサイト・アプリデザインなど、デザインは幅広く行っております。Web制作においてデザインは最重要です。SEOを意識したデザインを考えていきます。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open14" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-laptop-code"></i></div>
                                    <div class="about">
                                        <h3>Coding</h3>
                                        <div class="subtitle">コーディング</div>
                                    </div>
                                </div>
                                <p class="content">作成されたデザインを実際にWeb上で見れるようにしていく作業がコーディングです。コーディングでは、SEOを観点からタグの設定などの重要な役割があります。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open29" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-desktop"></i></div>
                                    <div class="about">
                                        <h3>New Web Site</h3>
                                        <div class="subtitle">新規Webサイト制作</div>
                                    </div>
                                </div>
                                <p class="content">新規Webサイトを作成させて頂きます。サイト設計からデザイン、コーディング、SEO対策までお任せ下さい。LPやコーポレートサイト、ECサイトなど様々なサイト形態の制作をお任せ下さい。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open30" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-chart-line"></i></div>
                                    <div class="about">
                                        <h3>ReNewal</h3>
                                        <div class="subtitle">Webサイトリニューアル</div>
                                    </div>
                                </div>
                                <p class="content">運営しているWebサイトのリニューアルをさせていただきます。一部ページの改善から全ページリニューアルまでお任せ下さい。</p>
                            </a>
                        </div>


                    </div>

                    <div class="explanation">
                        <div class="slogan">Web制作で活動を支えます</div>
                        <p>初めてWeb制作をしたいとお考えの方や、既存サイトの改善をしたいとお考えの方は、ぜひWATSUNにお手伝いさせて下さい。<br>これまでのWeb制作・運営での経験を最大限に活かし、お客様のWeb活動の手助けをさせて頂きます。<br>WordPressを得意とするWATSUNは、ブログ運営者の支援もしております。<br>SEO対策の重要性をお伝えし、WATSUNの手助けなしでも運営していけるようにレクチャーさせて頂きます。</p>
                    </div>

                    <div class="workflow">
                        <div class="toptitle">
                            <div class="title">WORKFLOW</div>
                            <div class="subtitle">制作の流れ</div>
                        </div>
                        <div class="bottom">
                            <div class="content">
                                <div class="step" id="content-1">
                                    <div class="headline">
                                        <p>STEP.1　お客様からのお問い合わせ</p>
                                    </div>
                                    <div class="text">
                                        <p>お客様から、「お問い合わせフォーム」にてお問い合わせ頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-2">
                                    <div class="headline">
                                        <p>STEP.2　ヒアリングシートのご記入</p>
                                    </div>
                                    <div class="text">
                                        <p>ヒアリングシートをお送りするので、具体的にどのようなものを制作していきたいかをご記入頂き、ご提出して頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-3">
                                    <div class="headline">
                                        <p>STEP.3　ご提案・御見積もり書の提出</p>
                                    </div>
                                    <div class="text">
                                        <p>ヒアリングシートをもとに制作内容のご提案と制作料金の御見積もりをさせて頂き、提出させて頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-4">
                                    <div class="headline">
                                        <p>STEP.4　コンテンツ設計・ご確認</p>
                                    </div>
                                    <div class="text">
                                        <p>ご提案させて頂いた内容/御見積もり内容に承諾頂ければ、制作に必要なコンテンツ（文 /画像など）をご提出して頂きます。<br>
                                            提出頂いたコンテンツをもとにサイトの構成を練っていき・大まかなサイト構造（サイトマップ/見出しなど）をご確認して頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-5">
                                    <div class="headline">
                                        <p>STEP.5　制作開始・着手金ご入金</p>
                                    </div>
                                    <div class="text">
                                        <p>制作に入らせて頂きます。<br>
                                            着手金として、料金の２割をご入金頂きます。<br>
                                            ページデザインやコーディング、SEOを設計などをしていきます。<br>
                                            制作段階でご質問させて頂いたく場合がございますので、チャットでご連絡のやり取りをさせて頂きます。<br>
                                            ＊なんらかの理由で着手金がお支払いできない場合はご相談ください。<br>
                                            ＊チャットの用意・指示はこちらから出させて頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-6">
                                    <div class="headline">
                                        <p>STEP.6　制作物のご確認・修正</p>
                                    </div>
                                    <div class="text">
                                        <p>制作完了後ご確認頂き、修正点がある場合は修正していきます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-7">
                                    <div class="headline">
                                        <p>STEP.7　納品・ご入金</p>
                                    </div>
                                    <div class="text">
                                        <p>修正点がなければ納品完了とさせて頂き、ご入金頂きます。<br>
                                            ご入金は着手金を差し引いた金額となります。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="select">
                                <div class="step" onclick="clickcoa()">
                                    <p>STEP.1　お客様からのお問い合わせ</p>
                                </div>
                                <div class="step" onclick="clickcob()">
                                    <p>STEP.2　ヒアリングシートのご記入</p>
                                </div>
                                <div class="step" onclick="clickcoc()">
                                    <p>STEP.3　ご提案・御見積もり書の提出</p>
                                </div>
                                <div class="step" onclick="clickcod()">
                                    <p>STEP.4　コンテンツ設計・ご確認</p>
                                </div>
                                <div class="step" onclick="clickcoe()">
                                    <p>STEP.5　制作開始・着手金ご入金</p>
                                </div>
                                <div class="step" onclick="clickcof()">
                                    <p>STEP.6　制作物のご確認・修正</p>
                                </div>
                                <div class="step" onclick="clickcog()">
                                    <p>STEP.7　納品・ご入金</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>








                <div class="management" id="management">
                    <h2>運営・管理・更新</h2>
                    <div class="attention">*各項目をクリックすると、詳細（料金など）をご確認できます。</div>


                    <div class="detail">

                        <div class="li">
                            <a class="js-modal-open17" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-tasks"></i></div>
                                    <div class="about">
                                        <h3>Article correction</h3>
                                        <div class="subtitle">記事の添削</div>
                                    </div>
                                </div>
                                <p class="content">ブロガーなど記事を書いている方へ向けたサービスです。ライティングテクニックを用いて、読者に対して魅力的な文章に修正していきます。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open18" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-book-open"></i></div>
                                    <div class="about">
                                        <h3>Blog support</h3>
                                        <div class="subtitle">ブログ支援</div>
                                    </div>
                                </div>
                                <p class="content">ブロガーのためのサービスです。記事作成のサポートや、運営の仕方などのアドバイス、エラーの改善など、Webの技術が必要となる箇所のサポートをさせて頂きます。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open19" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-server"></i></div>
                                    <div class="about">
                                        <h3>Server transfer</h3>
                                        <div class="subtitle">サーバー移管</div>
                                    </div>
                                </div>
                                <p class="content">サーバーの移管を代行します。アクセス数が増えてくるとサーバーを変更しないといけない場合があります。サーバー移管はWebの知識がある方でも大変な作業となります。サーバー移管の経験があるWATSUNにぜひお任せ下さい。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open20" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-laptop"></i></div>
                                    <div class="about">
                                        <h3>Site management</h3>
                                        <div class="subtitle">Webサイト運営</div>
                                    </div>
                                </div>
                                <p class="content">Webサイト運営を代行させて頂きます。Webサイトは毎日の管理、更新が結果に繋がってきます。ですが、毎日運営していくのが大変な方も多いと聞きます。そこで代行サービスを始めさせて頂きました。原稿を用意していただくことで、記事の投稿などの代行も可能です。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open21" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
                                    <div class="about">
                                        <h3>Error improvement</h3>
                                        <div class="subtitle">エラー改善</div>
                                    </div>
                                </div>
                                <p class="content">サイトを運営していると、必ずといっていいほどエラーに出会います。エラーはSEOに影響する場合もあるため早急の対処が必要になる時があります。エラーの原因を探り、改善していきます。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open22" href="">
                                <div class="title">
                                    <div class="icon"><i class="fas fa-file-alt"></i></div>
                                    <div class="about">
                                        <h3>Update</h3>
                                        <div class="subtitle">お知らせ記事の更新</div>
                                    </div>
                                </div>
                                <p class="content">サイト運営の一部である記事の更新。多いと毎日記事を更新する方もいます。そこで、原稿を用意していただければ、記事の投稿を代行で投稿させて頂きます。</p>
                            </a>
                        </div>

                    </div>


                    <div class="explanation">
                        <div class="slogan">日々の運営・改善で成果を出していきます</div>
                        <p>毎日Webサイトを管理し運営していると、「あ、ここ改善したいな」と気づく時があります。<br>Web運営を普段からしており、Webの技術を持っている私たちは改善点を見つけるとすぐに改善することができます。特にエラーなどのSEOに影響の出るものはすぐに改善していく必要があります。<br>そのような改善をすばやく行うために当サービスをご利用いただき、Webの支援をさせて下さい。</p>
                    </div>


                    <div class="workflow">
                        <div class="toptitle">
                            <div class="title">WORKFLOW</div>
                            <div class="subtitle">制作の流れ</div>
                        </div>
                        <div class="bottom">
                            <div class="content">
                                <div class="step" id="content-8">
                                    <div class="headline">
                                        <p>STEP.1　お客様からのお問い合わせ</p>
                                    </div>
                                    <div class="text">
                                        <p>お客様から、「お問い合わせフォーム」にてお問い合わせ頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-9">
                                    <div class="headline">
                                        <p>STEP.2　ヒアリングシートのご記入</p>
                                    </div>
                                    <div class="text">
                                        <p>ヒアリングシートをお送りするので、具体的にどのようなサービスを希望するかをご記入頂き、ご提出して頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-10">
                                    <div class="headline">
                                        <p>STEP.3　ご提案・御見積もり書の提出</p>
                                    </div>
                                    <div class="text">
                                        <p>ヒアリングシートをもとにご提案と料金の御見積もりをさせて頂き、提出させて頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-11">
                                    <div class="headline">
                                        <p>STEP.4　運営/管理/更新の代行開始</p>
                                    </div>
                                    <div class="text">
                                        <p>各代行サービスを開始させて頂きます。<br>
                                            代行途中でのご質問などのご連絡はチャットにてさせて頂きます。<br>
                                            ＊チャットの用意・指示はこちらから出させて頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-12">
                                    <div class="headline">
                                        <p>STEP.5　ご入金（＊サービスにより異なる）</p>
                                    </div>
                                    <div class="text">
                                        <p>ご入金の仕方はサービス内容により異なります。<br>
                                            詳しくはヒアリングシートのご記入後ご説明させて頂きます。<br>
                                            着手金が必要になる場合や、月額で定期的にお支払いいただく場合がございます。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="select">
                                <div class="step" onclick="clickcoh()">
                                    <p>STEP.1　お客様からのお問い合わせ</p>
                                </div>
                                <div class="step" onclick="clickcoi()">
                                    <p>STEP.2　ヒアリングシートのご記入</p>
                                </div>
                                <div class="step" onclick="clickcoj()">
                                    <p>STEP.3　ご提案・御見積もり書の提出</p>
                                </div>
                                <div class="step" onclick="clickcok()">
                                    <p>STEP.4　運営/管理/更新の代行開始</p>
                                </div>
                                <div class="step" onclick="clickcol()">
                                    <p>STEP.5　ご入金（＊サービスにより異なる）</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>







                <div class="coding" id="coding">
                    <h2>コーディング代行</h2>
                    <div class="attention">*各項目をクリックすると、詳細（料金など）をご確認できます。</div>


                    <div class="detail">

                        <div class="li">
                            <a class="js-modal-open23" href="">
                                <div class="title">
                                    <div class="icon"><i class="fab fa-html5"></i></div>
                                    <div class="about">
                                        <h3>HTML/CSS</h3>
                                        <div class="subtitle">HTML/CSSを使用した静的ページ制作</div>
                                    </div>
                                </div>
                                <p class="content">HTML/CSSのみを使用したコーディングを代行をさせて頂きます。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open24" href="">
                                <div class="title">
                                    <div class="icon"><i class="fab fa-php"></i></div>
                                    <div class="about">
                                        <h3>PHP/Mysql</h3>
                                        <div class="subtitle">PHP/Mysqlを使用しデータを扱ったシステム開発</div>
                                    </div>
                                </div>
                                <p class="content">データベースを用いたシステム開発の代行をさせて頂きます。使用言語はPHPとなります。ログイン機能、チャット機能、予約機能などなど、まずはご相談下さい。</p>
                            </a>
                        </div>
                        <div class="li">
                            <a class="js-modal-open25" href="">
                                <div class="title">
                                    <div class="icon"><i class="fab fa-js"></i></div>
                                    <div class="about">
                                        <h3>Javascript</h3>
                                        <div class="subtitle">Javascriptを使用した動的ページ制作</div>
                                    </div>
                                </div>
                                <p class="content">HTML/CSSはもちろん、Javascriptを使用した動的ページのコーディング/フロントエンド実装を代行させて頂きます。「こんな動きを導入したい」とお伝えして頂ければ提案させて頂きます。</p>
                            </a>
                        </div>

                    </div>


                    <div class="explanation">
                        <div class="slogan">Web制作のサポートがしたい</div>
                        <p>Webの技術を誰かの手助けに使いたいと思い、「コーディング代行サービス」を始めさせて頂きました。Webサイト制作・システム開発・サーバー関連の作業はぜひお任せ下さい。<br>コーディング作業は完全内制で行います。データベースを用いたデータを扱ったシステムの開発、見応えのある動的サイトなどのWebサイト制作をさせて頂きます。</p>
                    </div>


                    <div class="workflow">
                        <div class="toptitle">
                            <div class="title">WORKFLOW</div>
                            <div class="subtitle">制作の流れ</div>
                        </div>
                        <div class="bottom">
                            <div class="content">
                                <div class="step" id="content-13">
                                    <div class="headline">
                                        <p>STEP.1　お客様からのお問い合わせ</p>
                                    </div>
                                    <div class="text">
                                        <p>お客様から、「お問い合わせフォーム」にてお問い合わせ頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-14">
                                    <div class="headline">
                                        <p>STEP.2　ヒアリングシートのご記入</p>
                                    </div>
                                    <div class="text">
                                        <p>ヒアリングシートをお送りするので、具体的にどのようなサービスを希望するかをご記入頂き、ご提出して頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-15">
                                    <div class="headline">
                                        <p>STEP.3　ご提案・御見積もり書の提出</p>
                                    </div>
                                    <div class="text">
                                        <p>ヒアリングシートをもとにご提案と料金の御見積もりをさせて頂き、提出させて頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-16">
                                    <div class="headline">
                                        <p>STEP.4　コーディング代行開始・着手金ご入金</p>
                                    </div>
                                    <div class="text">
                                        <p>コーディング代行を開始させて頂きます。<br>
                                            着手金として、料金の２割をご入金頂きます。代行途中でのご質問などのご連絡はチャットにてさせて頂きます。<br>
                                            ＊チャットの用意・指示はこちらから出させて頂きます。</p>
                                    </div>
                                </div>
                                <div class="step" id="content-17">
                                    <div class="headline">
                                        <p>STEP.5　納品・ご入金</p>
                                    </div>
                                    <div class="text">
                                        <p>修正点がなければ納品完了とさせて頂き、ご入金頂きます。<br>
                                            ご入金は着手金を差し引いた金額となります。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="select">
                                <div class="step" onclick="clickcom()">
                                    <p>STEP.1　お客様からのお問い合わせ</p>
                                </div>
                                <div class="step" onclick="clickcon()">
                                    <p>STEP.2　ヒアリングシートのご記入</p>
                                </div>
                                <div class="step" onclick="clickcoo()">
                                    <p>STEP.3　ご提案・御見積もり書の提出</p>
                                </div>
                                <div class="step" onclick="clickcop()">
                                    <p>STEP.4　コーディング代行開始・着手金ご入金</p>
                                </div>
                                <div class="step" onclick="clickcoq()">
                                    <p>STEP.5　納品・ご入金</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!------ モーダル内容（サービス内容） ------>
                <!-- 13つ目-->
                <div class="modal js-modal13 modal_detail">
                    <div class="modal__bg js-modal-close13"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-desktop"></i></div>
                            <div class="about">
                                <p>Web Design</p>
                                <div class="subtitle">デザイン制作</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>Webサイトデザイン</li>
                                <li>レスポンシブデザイン</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>トップページデザイン：￥20,000〜</li>
                                    <li>トップページレスポンシブデザイン：￥15,000〜</li>
                                    <li>下層ページデザイン：￥15,000〜</li>
                                    <li>下層ページレスポンシブデザイン：￥10,000〜</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close13" href="">閉じる</a>

                    </div>
                </div>
                <!-- 13つ目終わり-->

                <!-- 14つ目-->
                <div class="modal js-modal14 modal_detail">
                    <div class="modal__bg js-modal-close14"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-laptop-code"></i></div>
                            <div class="about">
                                <p>Coding</p>
                                <div class="subtitle">コーディング</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>Webサイトコーディング</li>
                                <li>レスポンシブコーディング</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>トップページコーディング：￥10,000~</li>
                                    <li>トップページレスポンシブコーディング：￥6500</li>
                                    <li>下層ページコーディング：￥10,000~</li>
                                    <li>下層ページレスポンシブコーディング：￥5500</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close14" href="">閉じる</a>

                    </div>
                </div>
                <!-- 14つ目終わり-->

                <!-- 15つ目-->
                <div class="modal js-modal15 modal_detail">
                    <div class="modal__bg js-modal-close15"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-newspaper"></i></div>
                            <div class="about">
                                <p>Content Design</p>
                                <div class="subtitle">コンテンツ設計</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>SEO設計</li>
                                <li>記事設計</li>
                                <li>コンテンツ選定</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>SEO設計：￥5,000〜/1ページ</li>
                                    <li>記事設計：￥1,500~/1ページ</li>
                                    <li>コンテンツ選定：￥3,000〜（コンテンツ内容により異なる）</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close15" href="">閉じる</a>

                    </div>
                </div>
                <!-- 15つ目終わり-->

                <!-- 16つ目-->
                <div class="modal js-modal16 modal_detail">
                    <div class="modal__bg js-modal-close16"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fab fa-wordpress"></i></div>
                            <div class="about">
                                <p>WordPress</p>
                                <div class="subtitle">ワードプレス</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>ワードプレス導入</li>
                                <li>他サービスとの連携/設定</li>
                                <li>プラグイン導入</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>ワードプレス導入：￥10,000~</li>
                                    <li>プラグイン導入：￥3,000~</li>
                                    <li>他サービスとの連携/設定：￥2,000/１サービス</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close16" href="">閉じる</a>

                    </div>
                </div>
                <!-- 16つ目終わり-->

                <!-- 17つ目-->
                <div class="modal js-modal17 modal_detail">
                    <div class="modal__bg js-modal-close17"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-tasks"></i></div>
                            <div class="about">
                                <p>Article Correction</p>
                                <div class="subtitle">記事の添削</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>記事の添削</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>記事の添削：￥1,000/1回,￥3,400/月（5回まで）</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close17" href="">閉じる</a>

                    </div>
                </div>
                <!-- 17つ目終わり-->

                <!-- 18つ目-->
                <div class="modal js-modal18 modal_detail">
                    <div class="modal__bg js-modal-close18"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-book-open"></i></div>
                            <div class="about">
                                <p>Blog Support</p>
                                <div class="subtitle">ブログ支援</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>記事添削</li>
                                <li>エラー改善</li>
                                <li>運営に関するアドバイスなどなど</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>ブログ運営に関するアドバイス全般：￥1,000/1回,￥3,000/4回,￥5,000/月（10回まで）</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close18" href="">閉じる</a>

                    </div>
                </div>
                <!-- 18つ目終わり-->

                <!-- 19つ目-->
                <div class="modal js-modal19 modal_detail">
                    <div class="modal__bg js-modal-close19"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-server"></i></div>
                            <div class="about">
                                <p>Server Transfer</p>
                                <div class="subtitle">サーバー移管</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>データエクスポート/インポート</li>
                                <li>メール移転</li>
                                <li>ドメイン移転</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>データエクスポート/インポート：￥23,000</li>
                                    <li>ドメイン移転：￥8,000</li>
                                    <li>メール移転：¥5,000</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close19" href="">閉じる</a>

                    </div>
                </div>
                <!-- 19つ目終わり-->


                <!-- 20つ目-->
                <div class="modal js-modal20 modal_detail">
                    <div class="modal__bg js-modal-close20"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-laptop"></i></div>
                            <div class="about">
                                <p>Site Management</p>
                                <div class="subtitle">サイト運営</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>更新作業</li>
                                <li>記事投稿など（サイト運営の内容は事前にご相談ください）</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>Webサイト運営全般：￥10,000~/月額</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close20" href="">閉じる</a>

                    </div>
                </div>
                <!-- 20つ目終わり-->

                <!-- 21つ目-->
                <div class="modal js-modal21 modal_detail">
                    <div class="modal__bg js-modal-close21"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
                            <div class="about">
                                <p>Error Improvement</p>
                                <div class="subtitle">エラー改善</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>エラー確認/改善</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>エラー確認/改善：￥3,000〜（エラー内容により異なります）/１エラー</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close21" href="">閉じる</a>

                    </div>
                </div>
                <!-- 21つ目終わり-->

                <!-- 22つ目-->
                <div class="modal js-modal22 modal_detail">
                    <div class="modal__bg js-modal-close22"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-file-alt"></i></div>
                            <div class="about">
                                <p>Update</p>
                                <div class="subtitle">お知らせ記事の更新</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>お知らせ記事制作/投稿</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>お知らせ記事制作/投稿：￥500/1記事,￥6,000/月</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close22" href="">閉じる</a>

                    </div>
                </div>
                <!-- 22つ目終わり-->

                <!-- 23つ目-->
                <div class="modal js-modal23 modal_detail">
                    <div class="modal__bg js-modal-close23"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fab fa-html5"></i></div>
                            <div class="about">
                                <p>HTML/CSS</p>
                                <div class="subtitle">HTML/CSSを使用した静的ページ制作</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>コーディング代行</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>コーディング代行：¥10,000〜/１ページ（ページ内容により異なります）</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close23" href="">閉じる</a>

                    </div>
                </div>
                <!-- 23つ目終わり-->

                <!-- 24つ目-->
                <div class="modal js-modal24 modal_detail">
                    <div class="modal__bg js-modal-close24"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fab fa-php"></i></div>
                            <div class="about">
                                <p>PHP/Mysql</p>
                                <div class="subtitle">PHP/Mysqlを使用しデータを扱ったシステム開発</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>システム開発</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>システム開発：￥15,000〜（内容により異なる）</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close24" href="">閉じる</a>

                    </div>
                </div>
                <!-- 24つ目終わり-->

                <!-- 25つ目-->
                <div class="modal js-modal25 modal_detail">
                    <div class="modal__bg js-modal-close25"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fab fa-js"></i></div>
                            <div class="about">
                                <p>Javascript</p>
                                <div class="subtitle">Javascriptを使用した使用した動的ページ制作</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>動的ページのコーディング実装</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>動的ページのコーディング実装：￥13,000〜（内容により異なる）</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close25" href="">閉じる</a>

                    </div>
                </div>
                <!-- 25つ目終わり-->


                <!-- 29つ目-->
                <div class="modal js-modal29 modal_detail">
                    <div class="modal__bg js-modal-close29"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-desktop"></i></div>
                            <div class="about">
                                <p>New Web Site</p>
                                <div class="subtitle">新規Webサイト制作</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>新規Webサイトデザイン</li>
                                <li>新規Webサイトコーディング</li>
                                <li>WordPress対応</li>
                                <li>SEO対策対応</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>トップページ＊1：￥35,000~</li>
                                    <li>下層ページ＊1：￥30,000~/1ページ</li>
                                    <li>WordPress導入（SEO対策対応含む）：￥10,000~</li>
                                </ul>
                                ＊1:デザイン・コーディング・レスポンシブ含みます。<br>
                                ＊2:Webサイト制作には、サーバーとドメイン共に定期費用が必要となります。
                            </div>
                        </div>

                        <a class="js-modal-close29" href="">閉じる</a>

                    </div>
                </div>
                <!-- 29つ目終わり-->

                <!-- 30つ目-->
                <div class="modal js-modal30 modal_detail">
                    <div class="modal__bg js-modal-close30"></div>
                    <div class="modal__content">

                        <div class="title">
                            <div class="icon"><i class="fas fa-chart-line"></i></div>
                            <div class="about">
                                <p>ReNewal</p>
                                <div class="subtitle">Webサイトリニューアル</div>
                            </div>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■内容
                            </div>
                            <ul>
                                <li>既存サイトの改善</li>
                                <li>SEO見直し</li>
                                <li>デザイン変更</li>
                                <li>ページの追加</li>
                                <li>テキスト・画像などの追加</li>
                            </ul>
                        </div>

                        <div class="sub">
                            <div class="subtitile">
                                ■料金
                            </div>
                            <div class="fee">
                                <ul>
                                    <li>SEO見直し：￥5,000~</li>
                                    <li>デザイン変更：￥15,000~/1ページ</li>
                                    <li>テキスト・画像などの追加：￥500~</li>
                                </ul>
                            </div>
                        </div>

                        <a class="js-modal-close30" href="">閉じる</a>

                    </div>
                </div>
                <!-- 30つ目終わり-->

                <!------- モーダル内容（サービス内容） 終わり------>



                <div class="works">

                    <div class="margin-center">
                        <h2>制作実績</h2>
                    </div>


                    <?php get_template_part('portfolio'); ?>

                </div>






                <div class="contact">


                    <h2>お問い合わせ</h2>

                    <p class="center"><strong>まずはお気軽にご相談ください</strong></p>
                    <a href="https://watsunblog.com/contact/">
                        <div class="to-contact">
                            <i class="fas fa-envelope"></i>
                            <p class="">お問い合わせフォームはこちら</p>
                        </div>
                    </a>

                    <p class="center">＊ご相談前に『<a href="https://watsunblog.com/question-answer/"><span class="blue">よくある質問</span></a>』<br class="br_sp">をご覧下さい。</p>
                    <p class="center">＊経費削減でお客様によりお安くサービスをご提供するため、お問い合わせはお問い合わせフォーム/メールのみとなっております。</p>


                </div>



            </article>
        <?php endif; ?>


    </div>
</main>
<?php get_footer(); ?>