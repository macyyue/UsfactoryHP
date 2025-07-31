<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package usfactory
 */
get_header(); ?>
<link rel="stylesheet" href="/common/css/slide.css">
<!--スライドショー-->
<div class="mainimg">
  <a href="/biforac/">
    <img src="/common/img/homepage/banner 01.png" alt="" />
  </a>
  <a href="/info360/">
    <img src="/common/img/homepage/banner 02.png" alt="" />
  </a>
  <a href="/mokuzou/">
    <img src="/common/img/homepage/banner 03.png" alt="" />
  </a>
  <a href="/pointgroup/">
    <img src="/common/img/homepage/banner 04.png" alt="" />
  </a>
</div>
<div id="container">
  <main class="main">
    <article id="mainWrap">
      <article id="contents">
        <div class="infoWrap">
          <h2>ニュース</h2>
          <p>news</p>
          <?php
          // 各投稿タイプから2件ずつ取得
          $post_types = array(
            'news' => 'お知らせ',
            'release' => 'ニュースリリース',
            'media' => 'メディア掲載'
          );
          $all_posts = array();

          foreach ($post_types as $type => $label) {
            $args = array(
              'post_type' => $type,
              'posts_per_page' => 6
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) {
              while ($loop->have_posts()) {
                $loop->the_post();
                $all_posts[] = array(
                  'date' => get_the_date("Y年n月j日"),
                  'title' => get_the_title(),
                  'link' => get_permalink(),
                  'type' => $label,
                  'raw_type' => $type
                );
              }
            }
            wp_reset_postdata();
          }

          // 投稿日時で並び替え（新しい順）
          usort($all_posts, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
          });

          // 最大6件表示
          // $all_posts = array_slice($all_posts, 0, 6);
          ?>
          <div class="infoContent">
            <div class="categoryFilter">
              <button class="categoryBtn active" data-type="news"><a href="<?php echo esc_url(home_url('release')); ?>">リリース</a></button>
              <button class="categoryBtn" data-type="release"><a href="<?php echo esc_url(home_url('news')); ?>">イベント</a></button>
              <button class="categoryBtn" data-type="media"><a href="<?php echo esc_url(home_url('media')); ?>">メディア掲載</a></button>
            </div>
            <div class="infoList">
              <?php foreach ($all_posts as $post): ?>
                <div class="infoItem" data-type="<?php echo esc_attr($post['raw_type']); ?>">
                  <span class="infoDate"><?php echo esc_html($post['date']); ?></span>
                  <a class="infoLink" href="<?php echo esc_url($post['link']); ?>">
                    <?php echo esc_html($post['title']); ?>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>

            <div class="viewMore">
              <a href="<?php echo esc_url(home_url('release')); ?>">もっと見る</a>
            </div>
          </div>
      </article>
    </article>
    <section id="solution" data-astro-cid-utstonhj>
      <figure class="bg" data-astro-cid-utstonhj>
        <img
          src="/common/img/homepage/service-bg.png"
          alt=""
          data-astro-cid-utstonhj
          width="1994"
          height="1327"
          loading="lazy"
          decoding="async" />
      </figure>
      <div class="header" data-astro-cid-utstonhj>
        <div
          class="header__inner"
          data-aos="fade-down"
          data-astro-cid-utstonhj>
          <h2 data-astro-cid-utstonhj>
            <span data-astro-cid-utstonhj>ゼネコン・サブコン様における熟練技術者不足の問題</span>
            <span data-astro-cid-utstonhj><em data-astro-cid-utstonhj>BI for AC®</em>を解決するサービスを提供します。</span>
          </h2>
        </div>
      </div>
      <div class="content" data-astro-cid-k7dvyszk>
        <article data-astro-cid-k7dvyszk>
          <ul data-astro-cid-k7dvyszk>
            <li data-aos="fade-down" data-astro-cid-k7dvyszk>
              <div data-astro-cid-k7dvyszk>
                <h3 data-astro-cid-k7dvyszk>
                  <em data-astro-cid-k7dvyszk>内装</em>
                </h3>
                <p data-astro-cid-k7dvyszk>
                  スキャンで現場調査を短縮<br
                    data-astro-cid-k7dvyszk />図面化までワンストップ対応
                </p>
              </div>
              <figure data-astro-cid-k7dvyszk>
                <img
                  src="/common/img/homepage/service-内装.png"
                  srcset="
                      /common/img/homepage/service-内装.png  389w,
                      /common/img/homepage/service-内装.png  615w,
                      /common/img/homepage/service-内装.png  839w,
                      /common/img/homepage/service-内装.png 4451w
                    "
                  alt=""
                  sizes="(max-width: 486px) 389px, (max-width: 768px) 615px, (max-width: 830px) 664px, (min-width: 831px) 400px, 4451px"
                  data-astro-cid-k7dvyszk
                  width="4451"
                  height="3338"
                  loading="lazy"
                  decoding="async" />
              </figure>
            </li>
            <li
              data-aos="fade-down"
              data-aos-delay="100"
              data-astro-cid-k7dvyszk>
              <div data-astro-cid-k7dvyszk>
                <h3 data-astro-cid-k7dvyszk>
                  <em data-astro-cid-k7dvyszk>足場</em>
                </h3>
                <p data-astro-cid-k7dvyszk>
                  施工前の安全計画をスピード化<br
                    data-astro-cid-k7dvyszk />3Dモデルで干渉チェックも簡単に
                </p>
              </div>
              <figure data-astro-cid-k7dvyszk>
                <img
                  src="/common/img/homepage/service-足場.png"
                  srcset="
                      /common/img/homepage/service-足場.png    389w,
                      /common/img/homepage/service-足場.png  615w,
                      /common/img/homepage/service-足場.png    839w,
                      /common/img/homepage/service-足場.png  4452w
                    "
                  alt=""
                  sizes="(max-width: 486px) 389px, (max-width: 768px) 615px, (max-width: 830px) 664px, (min-width: 831px) 400px, 4452px"
                  data-astro-cid-k7dvyszk
                  width="4452"
                  height="3339"
                  loading="lazy"
                  decoding="async" />
              </figure>
            </li>
            <li
              data-aos="fade-down"
              data-aos-delay="200"
              data-astro-cid-k7dvyszk>
              <div data-astro-cid-k7dvyszk>
                <h3 data-astro-cid-k7dvyszk>
                  <em data-astro-cid-k7dvyszk>鉄筋</em>
                </h3>
                <p data-astro-cid-k7dvyszk>
                  配筋検査を効率よくデジタル化<br
                    data-astro-cid-k7dvyszk />図面との照合で手戻りを削減
                </p>
              </div>
              <figure data-astro-cid-k7dvyszk>
                <img
                  src="/common/img/homepage/service-鉄筋.png"
                  srcset="
                      /common/img/homepage/service-鉄筋.png 389w,
                      /common/img/homepage/service-鉄筋.png 389w  615w,
                      /common/img/homepage/service-鉄筋.png 389w  839w,
                      /common/img/homepage/service-鉄筋.png 389w  500w
                    "
                  alt=""
                  sizes="(max-width: 486px) 389px, (max-width: 768px) 615px, (max-width: 830px) 664px, (min-width: 831px) 400px, 500px"
                  data-astro-cid-k7dvyszk
                  width="500"
                  height="375"
                  loading="lazy"
                  decoding="async" />
              </figure>
            </li>
            <li
              data-aos="fade-down"
              data-aos-delay="200"
              data-astro-cid-k7dvyszk>
              <div data-astro-cid-k7dvyszk>
                <h3 data-astro-cid-k7dvyszk>
                  <em data-astro-cid-k7dvyszk>点群計測サービス</em>
                </h3>
                <p data-astro-cid-k7dvyszk>
                  高精度点群で現場を丸ごと可視化<br
                  data-astro-cid-k7dvyszk />BIM×CADで設計・施工を効率化
                </p>
              </div>
              <figure data-astro-cid-k7dvyszk>
                <img
                  src="/common/img/homepage/service-point.png"
                  srcset="
                      /common/img/homepage/service-point.png  389w,
                      /common/img/homepage/service-point.png  615w,
                      /common/img/homepage/service-point.png  839w,
                      /common/img/homepage/service-point.png  500w
                    "
                  alt=""
                  sizes="(max-width: 486px) 389px, (max-width: 768px) 615px, (max-width: 830px) 664px, (min-width: 831px) 400px, 500px"
                  data-astro-cid-k7dvyszk
                  width="500"
                  height="375"
                  loading="lazy"
                  decoding="async" />
              </figure>
            </li>
          </ul>
        </article>
      </div>
    </section>
    <section id="function" data-astro-cid-zzvl4fxx>
      <div class="inner" data-astro-cid-zzvl4fxx>
        <div class="header" data-astro-cid-zzvl4fxx>
          <h2 
            data-aos="fade-right"
            data-aos-easing="ease-in-out-sine"
            data-astro-cid-zzvl4fxx>
            <em data-astro-cid-zzvl4fxx>
              <span data-astro-cid-zzvl4fxx>サービス情報</span>
            </em>
            <span class="eng" data-astro-cid-zzvl4fxx>SERVICES</span>
          </h2>
        </div>
        <div class="cardList" data-astro-cid-zzvl4fxx>
          <article
            data-aos="fade-up"
            data-aos-easing="ease-in-out-sine"
            data-aos-duration="400"
            data-astro-cid-5d2te5s5>
            <div class="text" data-astro-cid-5d2te5s5>
              <h3 data-astro-cid-5d2te5s5>
                <span data-astro-cid-5d2te5s5>BI for AC®</span>
              </h3>
              <ul data-astro-cid-5d2te5s5>
                <li data-astro-cid-5d2te5s5>
                  BI for AC®を使うことで、建材の自動発生・集計が可能
                </li>
                <li data-astro-cid-5d2te5s5>
                  施工検討や工程シミュレーションも行える
                </li>
                <li data-astro-cid-5d2te5s5>
                  操作を簡素化し、省人化・効率化をサポート
                </li>
                <li data-astro-cid-5d2te5s5>
                  自動モデリング・最適化機能で、圧倒的な効率化を実現
                </li>
              </ul>
            </div>
            <figure data-astro-cid-5d2te5s5>
              <img
                src="/common/img/homepage/services-biforac.png"
                srcset="
                    /common/img/homepage/services-biforac.png   389w,
                    /common/img/homepage/services-biforac.png   615w,
                    /common/img/homepage/services-biforac.png   839w,
                    /common/img/homepage/services-biforac.png   700w
                  "
                alt=""
                sizes="(max-width: 486px) 389px, (max-width: 768px) 615px, (max-width: 830px) 664px, (min-width: 831px) 320px, 700px"
                data-astro-cid-5d2te5s5
                width="700"
                height="480"
                loading="lazy"
                decoding="async" />
            </figure>
          </article>
          <article
            data-aos="fade-up"
            data-aos-easing="ease-in-out-sine"
            data-aos-duration="400"
            data-astro-cid-5d2te5s5>
            <div class="text" data-astro-cid-5d2te5s5>
              <h3 data-astro-cid-5d2te5s5>
                <span data-astro-cid-5d2te5s5>BI for AC® x 木造住宅</span>
              </h3>
              <ul data-astro-cid-5d2te5s5>
                <li data-astro-cid-5d2te5s5>
                  CEDXMデータの読込で建物モデルを自動作成
                </li>
                <li data-astro-cid-5d2te5s5>
                  構造金物を自動で発生
                </li>
                <li data-astro-cid-5d2te5s5>
                  木造住宅に特化した専用機能を搭載
                </li>
              </ul>
            </div>
            <figure data-astro-cid-5d2te5s5>
              <img
                src="/common/img/homepage/services-mokuzou.png"
                srcset="
                    /common/img/homepage/services-mokuzou.png  389w,
                    /common/img/homepage/services-mokuzou.png  615w,
                    /common/img/homepage/services-mokuzou.png  839w,
                    /common/img/homepage/services-mokuzou.png  640w
                  "
                alt=""
                sizes="(max-width: 486px) 389px, (max-width: 768px) 615px, (max-width: 830px) 664px, (min-width: 831px) 320px, 640px"
                data-astro-cid-5d2te5s5
                width="640"
                height="480"
                loading="lazy"
                decoding="async" />
            </figure>
          </article>
          <article
            data-aos="fade-up"
            data-aos-easing="ease-in-out-sine"
            data-aos-duration="400"
            data-astro-cid-5d2te5s5>
            <div class="text" data-astro-cid-5d2te5s5>
              <h3 data-astro-cid-5d2te5s5>
                <span data-astro-cid-5d2te5s5>Info360®</span>
              </h3>
              <ul data-astro-cid-5d2te5s5>
                <li data-astro-cid-5d2te5s5>
                  点群データやIFCモデルなどの3DをWEBで表示・共有
                </li>
                <li data-astro-cid-5d2te5s5>
                  図面などの資料もブラウザ上で一元管理
                </li>
                <li data-astro-cid-5d2te5s5>
                  BCF対応で現場管理に活用可能
                </li>
                <li data-astro-cid-5d2te5s5>
                  デジタルツインによるスマートな情報共有
                </li>
              </ul>
            </div>
            <figure data-astro-cid-5d2te5s5>
              <img
                src="/common/img/homepage/services-info360.png"
                srcset="
                    /common/img/homepage/services-info360.png  389w,
                    /common/img/homepage/services-info360.png  615w,
                    /common/img/homepage/services-info360.png  839w,
                    /common/img/homepage/services-info360.png  700w
                  "
                alt=""
                sizes="(max-width: 486px) 389px, (max-width: 768px) 615px, (max-width: 830px) 664px, (min-width: 831px) 320px, 700px"
                data-astro-cid-5d2te5s5
                width="700"
                height="480"
                loading="lazy"
                decoding="async" />
            </figure>
          </article>
          <article
            data-aos="fade-up"
            data-aos-easing="ease-in-out-sine"
            data-aos-duration="400"
            data-astro-cid-5d2te5s5>
            <div class="text" data-astro-cid-5d2te5s5>
              <h3 data-astro-cid-5d2te5s5>
                <span data-astro-cid-5d2te5s5>点群計測サービス</span>
              </h3>
              <ul data-astro-cid-5d2te5s5>
                <li data-astro-cid-5d2te5s5>
                  高精度3Dレーザー測量による建築物の計測
                </li>
                <li data-astro-cid-5d2te5s5>
                  点群データの合成からBIM作成まで一貫対応
                </li>
                <li data-astro-cid-5d2te5s5>
                  測量機のレンタルサービスも提供
                </li>
              </ul>
            </div>
            <figure data-astro-cid-5d2te5s5>
              <img
                src="/common/img/homepage/services-point-model.png"
                srcset="
                    /common/img/homepage/services-point-model.png  389w,
                    /common/img/homepage/services-point-model.png  615w,
                    /common/img/homepage/services-point-model.png  839w,
                    /common/img/homepage/services-point-model.png  700w"
                alt=""
                sizes="(max-width: 486px) 389px, (max-width: 768px) 615px, (max-width: 830px) 664px, (min-width: 831px) 320px, 700px"
                data-astro-cid-5d2te5s5
                width="700"
                height="480"
                loading="lazy"
                decoding="async" />
            </figure>
          </article>
        </div>
      </div>
    </section>
    <section id="seminar" data-astro-cid-abc999xx>
      <div class="inner" data-astro-cid-abc999xx>
      <div class="header" data-astro-cid-abc999xx>
        <h2 data-aos="fade-right" data-aos-easing="ease-in-out-sine" data-astro-cid-abc999xx>
          <em data-astro-cid-abc999xx><span data-astro-cid-abc999xx>無料オンラインセミナー開催中</span></em>
          <span class="eng" data-astro-cid-abc999xx>Seminar</span>
        </h2>
      </div>
      <div class="seminarList" data-astro-cid-abc999xx>
        <!-- セミナー1（受付中） -->
        <article class="seminar-card open" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="400" data-astro-cid-abc999xx>
          <figure>
            <img src="/common/img/homepage/seminar01.png" alt="セミナー画像" />
          </figure>
          <div class="text" data-astro-cid-abc999xx>
            <p class="target">【対象者】設計・構造担当者様、施工関係者様、積算事務所様、鉄筋工事会社様、型枠工事会社様</p>
            <ul class="links">
              <li><a href="#">2025.05.27(火)15:00〜16:00</a></li>
              <li><a href="#">Teams Web Seminar</a></li>
            </ul>
          </div>
        </article>

        <!-- セミナー2（開催終了） -->
        <article class="seminar-card closed" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="400" data-astro-cid-abc999xx>
          <figure>
            <img src="/common/img/homepage/seminar02.png" alt="セミナー画像" />
          </figure>
          <div class="text" data-astro-cid-abc999xx>
            <p class="desc">BI For ACにおける作業手順や復習できるチャンス</p>
            <ul class="links">
              <li><a href="#">2025.02.10(月)15:00〜16:00</a></li>
              <li><a href="#">Teams Web Seminar</a></li>
            </ul>
          </div>
        </article>

        <!-- セミナー3（開催終了・初心者向け） -->
        <article class="seminar-card closed" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="400" data-astro-cid-abc999xx>
          <figure>
            <img src="/common/img/homepage/seminar03.png" alt="セミナー画像" />
          </figure>
          <div class="text" data-astro-cid-abc999xx>
            <p class="desc">初心者向けの講習BI FOR ACの内装仕上げ積算を紹介</p>
            <ul class="links">
              <li><a href="#">2024.11.28(水)15:00〜16:00</a></li>
              <li><a href="#">Teams Web Seminar</a></li>
            </ul>
          </div>
        </article>
      </div>
      <!-- 一覧ボタン -->
      <div class="btnWrap" data-astro-cid-abc999xx>
        <a class="btn" href="/seminar/" data-astro-cid-abc999xx>
          <em data-astro-cid-abc999xx>セミナー開催情報一覧</em>
        </a>
      </div>
      </div>
    </section>
  </main>
</div>
<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    once: true,
  });
</script>
<script>
  const categoryButtons = document.querySelectorAll('.categoryBtn');
  categoryButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      categoryButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".categoryBtn");
    const items = document.querySelectorAll(".infoItem");

    buttons.forEach(button => {
      button.addEventListener("click", function(e) {
        e.preventDefault();

        buttons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");

        const type = button.getAttribute("data-type");


        items.forEach(item => {
          if (item.getAttribute("data-type") === type) {
            item.style.display = "grid";
          } else {
            item.style.display = "none";
          }
        });

        const viewMore = document.querySelector(".viewMore a");
        if (viewMore) {
          if (type === "news") {
            viewMore.href = "<?php echo esc_url(home_url('news')); ?>";
          } else if (type === "release") {
            viewMore.href = "<?php echo esc_url(home_url('release')); ?>";
          } else if (type === "media") {
            viewMore.href = "<?php echo esc_url(home_url('media')); ?>";
          }
        }
      });
    });

    buttons[0].click();
  });
</script>


<!--jQueryファイルの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--スライドショー（slick）-->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/common/js/slick.js"></script>
<!--パララックス（inview）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="/common/js/jquery.inview_set.js"></script>