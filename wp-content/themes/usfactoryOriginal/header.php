<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package usfactory
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="/common/img/Usfactory_Mark_500px.png" type="image/x-icon">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="/common/css/general.css" media="screen">
	<link rel="stylesheet" href="/common/css/index.css" media="screen">
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3'></script>
	<script type="text/javascript" src="/common/js/script.js"></script>
	<script type="text/javascript" src="/common/js/common.js"></script>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script type="text/javascript" src="/common/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="/common/fancybox/source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="/common/fancybox/source/jquery.fancybox.css?v=2.1.4" media="screen" />
	<link rel="stylesheet" type="text/css" href="/common/fancybox/source/jquery.fancybox.css?v=2.1.4" media="screen" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xX1GsaxQIz0GzEAB7fMCI7Q4VQ0pUsk/AXouo2RPWaHimaw9ViKhKHFTD2Y0++PmV+u2h2CkaIexiYnAsZt7EQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */
		});
	</script>

	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-2LDVC6FWFE"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-2LDVC6FWFE');
	</script>
</head>

<body <?php body_class(); ?>>
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-63929903-1', 'auto');
		ga('send', 'pageview');
	</script>
<header>
	<a
        href="/"
        target="_blank"
        class="header_logo"
        data-astro-cid-3ef6ksr2
      >
        <img
          src="/common/img/us-logo-black.svg"
          alt="株式会社U's Factory"
          data-astro-cid-3ef6ksr2
        />
      </a>
   <nav data-astro-cid-3ef6ksr2>
        <ul data-astro-cid-3ef6ksr2 class="dropmenu">
          <li data-astro-cid-3ef6ksr2>
            <a href="/" data-astro-cid-3ef6ksr2>TOP</a>
          </li>
          <li data-astro-cid-3ef6ksr2>
            <a href="/info360/" data-astro-cid-3ef6ksr2>Info360</a>
          </li>
          <!-- 開閉ブロック -->
           <li data-astro-cid-3ef6ksr2  class="has-submenu">
            <a href="" data-astro-cid-3ef6ksr2 class="navListicon">BI for AC</a>
            <ul class="dropdowns">
              <li><a href="/biforac/">S造・RC造</a></li>
              <li><a href="/mokuzou/">木造</a></li>
              </ul>
          </li>
          <li data-astro-cid-3ef6ksr2>
            <a href="/news/" data-astro-cid-3ef6ksr2>NEWS</a>
          </li>
          <li data-astro-cid-3ef6ksr2>
            <a href="/media/" data-astro-cid-3ef6ksr2>MEDIA</a>
          </li>
          <li data-astro-cid-3ef6ksr2>
            <a href="/access/" data-astro-cid-3ef6ksr2>ACCESS</a>
          </li>
          <li data-astro-cid-3ef6ksr2>
            <a href="/company/" data-astro-cid-3ef6ksr2>会社概要</a>
          </li>
          <li data-astro-cid-3ef6ksr2>
            <a href="/recruit/" data-astro-cid-3ef6ksr2>採用情報</a>
          </li>
          <li data-astro-cid-3ef6ksr2>
            <a
              href="https://lms.us-factory.jp/mypage/login"
              class="contact"
              target="_blank"
              data-astro-cid-3ef6ksr2>
              ユーザーログイン
            </a>
          </li>
        </ul>
      </nav>
   <button
        class="nav_open_btn"
        data-open-trigger="dialog"
        data-astro-cid-3ef6ksr2
      >
        <img
          src="/mokuzou/_astro/hamburger.PRsVdlmL_27KD2Y.svg"
          alt="メニューを開く"
          data-astro-cid-3ef6ksr2
          width="40"
          height="40"
          loading="lazy"
          decoding="async"
        />
      </button>
    </header>
  <section id="dialogNav" class="dialog __hidden" data-astro-cid-ttztgwaq>
  <div
    class="dialog__bglayer"
    data-close-trigger="dialog"
    data-astro-cid-ttztgwaq
  ></div>
  <div
    role="dialog"
    aria-modal="true"
    aria-labelledby="dialog-title"
    aria-describeby="dialog-desc"
    class="dialog__container"
    data-astro-cid-ttztgwaq
  >
    <button
      class="nav_close_btn dialog-close-trigger"
      data-close-trigger="dialog"
      data-astro-cid-ttztgwaq
    >
      <img
        src="/mokuzou/_astro/close.CmCnHbKA_Z1YbDzu.svg"
        alt="メニューを閉じる"
        data-astro-cid-ttztgwaq
        width="18"
        height="18"
        loading="lazy"
        decoding="async"
      />
    </button>
    <nav data-astro-cid-ttztgwaq>
      <!-- <a href="#" class="brand_logo_link nav_link" data-astro-cid-ttztgwaq>
        <img
          src="images/mokuzo-logo-horizontal.svg"
          class="brand_logo"
          alt="ページ上部へ"
          data-astro-cid-ttztgwaq
        />
      </a> -->
      <ul data-astro-cid-ttztgwaq class="dropmenu">
        <li data-astro-cid-ttztgwaq>
          <a href="/" class="nav_link" data-astro-cid-ttztgwaq>TOP</a>
        </li>
        <li data-astro-cid-ttztgwaq>
          <a href="/info360/" class="nav_link" data-astro-cid-ttztgwaq
            >Info360
          </a>
        </li>
        <li data-astro-cid-ttztgwaq>
          <a href="/biforac/" class="dropdowns" data-astro-cid-ttztgwaq
            >BI for AC
          </a>
          <ul class="dropmenuCon">
              <li><a href="/biforac/">S造・RC造</a></li>
              <li><a href="/mokuzou/">木造</a></li>
              </ul>
        </li>
        <li data-astro-cid-ttztgwaq>
          <a href="/news/" class="nav_link" data-astro-cid-ttztgwaq>NEWS</a>
        </li>
        <li data-astro-cid-ttztgwaq>
          <a href="/media/" class="nav_link" data-astro-cid-ttztgwaq>MEDIA</a>
        </li>
        <li data-astro-cid-ttztgwaq>
          <a href="/access/" class="nav_link" data-astro-cid-ttztgwaq
            >ACCESS
          </a>
        </li>
        <li data-astro-cid-ttztgwaq>
          <a href="/company/" class="nav_link" data-astro-cid-ttztgwaq
            >会社概要
          </a>
        </li>
        <li data-astro-cid-ttztgwaq>
          <a href="/recruit/" class="nav_link" data-astro-cid-ttztgwaq
            >採用情報
          </a>
        </li>
        <li data-astro-cid-ttztgwaq>
          <a
            href="https://lms.us-factory.jp/mypage/login"
            target="_blank"
            class="contact"
            data-astro-cid-ttztgwaq>
            <em data-astro-cid-ttztgwaq>ユーザーログイン</em>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>
<script>
  const dialog = document.getElementById("dialogNav");
  const main = document.querySelectorAll("main.main");
  const openTriggers = [
    ...document.querySelectorAll(`*[data-open-trigger="dialog"]`),
  ];
  const closeTriggers = [
    ...document.querySelectorAll(`*[data-close-trigger="dialog"]`),
  ];

  const FOCUSABLE_ELEMENTS = [
    "a[href]",
    "area[href]",
    'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',
    "select:not([disabled]):not([aria-hidden])",
    "textarea:not([disabled]):not([aria-hidden])",
    "button:not([disabled]):not([aria-hidden])",
    "iframe",
    "object",
    "embed",
    "[contenteditable]",
    '[tabindex]:not([tabindex^="-"])',
  ];

  // ダイアログの中でtabbableな要素を取得
  const focusableElements = [
    ...dialog.querySelectorAll(FOCUSABLE_ELEMENTS.join(",")),
  ];
  // ダイアログを開く時に、直前にフォーカスが当たっていた要素を格納する
  let beforeFocusedElement = null;

  // ダイアログを開く
  const handleDialogOpen = () => {
    if (!dialog.classList.contains("__hidden")) return;

    dialog.classList.remove("__hidden");
    dialog.classList.remove("__hidden");
    // ダイアログを開く直前のフォーカスの取得
    beforeFocusedElement = document.activeElement;
    // ダイアログ内の最初のtabbableな要素にフォーカスをあてる
    focusableElements[0].focus();

    // スクロールと選択操作の処理を追加
    bgScrollBehavior("fix");
    noSelectContents(true);
  };

  // ダイアログを閉じる
  const handleDialogClose = () => {
    if (dialog.classList.contains("__hidden")) return;

    // スムーズスクロールを一時的に無効化
    document.documentElement.style.scrollBehavior = "auto";
    dialog.classList.add("__hidden");

    // ダイアログを開く時に、直前にフォーカスが当たっていた要素にフォーカスを戻す
    beforeFocusedElement.focus();
    beforeFocusedElement = null;

    // スクロールと選択操作の処理を追加
    bgScrollBehavior("scroll");
    noSelectContents(false);

    // スムーズスクロールを再度有効化
    setTimeout(() => {
      document.documentElement.style.scrollBehavior = "smooth";
    }, 200); // 少し遅延を加えて再度有効化
  };

  const bgScrollBehavior = (state) => {
    const isFixed = state === "fix";

    if (isFixed) {
      // スクロールを止める処理
      // .fixedのスタイルを用意
      const scrollY = document.documentElement.scrollTop;
      document.body.classList.add("fixed");
      document.documentElement.style.setProperty(
        "--scroll-y",
        `${scrollY * -1}px`
      );
    } else {
      // スクロール停止を解除する処理
      const scrollY = parseInt(
        document.documentElement.style.getPropertyValue("--scroll-y") || "0"
      );
      document.body.classList.remove("fixed");
      window.scrollTo(0, scrollY * -1);
    }
  };

  const noSelectContents = (bool) => {
    // .user-select-noneのスタイルを用意
    if (bool) {
      //main.classList.add("user-select-none");
    } else {
      //main.classList.remove("user-select-none");
    }
  };

  openTriggers.forEach((trigger) => {
    trigger.addEventListener("click", handleDialogOpen);
  });
  closeTriggers.forEach((trigger) => {
    trigger.addEventListener("click", handleDialogClose);
  });

  //ナビ内のaタグがクリックされたら
  const navLinks = document.querySelectorAll("a.nav_link");

  navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      //event.preventDefault(); // デフォルトのリンク動作を無効化
      handleDialogClose();
    });
  });

  const handleKeydownDiaogContainer = (e) => {
    const firstFocusableElement = focusableElements[0];
    const lastFocusableElement =
      focusableElements[focusableElements.length - 1];

    if (e.code === "Tab") {
      if (e.shiftKey) {
        // Shift + Tab
        if (document.activeElement === firstFocusableElement) {
          e.preventDefault();
          // ダイアログ内で最初のtabableの要素の時、最後のtabableの要素にフォーカスを移す
          lastFocusableElement.focus();
        }
      } else {
        // Tab
        if (document.activeElement === lastFocusableElement) {
          e.preventDefault();
          // ダイアログ内で最後のtabableの要素の時、最初のtabableの要素にフォーカスを移す
          firstFocusableElement.focus();
        }
      }
    }

    // Escapeの押下でダイアログを閉じる
    if (e.code === "Escape") {
      handleDialogClose();
    }
  };
  dialog.addEventListener("keydown", handleKeydownDiaogContainer);

  document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector(".carousel-control-prev");
    const nextButton = document.querySelector(".carousel-control-next");
    const carouselInner = document.querySelector(".carousel-inner");
    const items = document.querySelectorAll(".carousel-item");
    let index = 0;
    let intervalId;

    function updateCarousel() {
      carouselInner.style.transform = `translateX(${-index * 100}%)`;
    }

    function startCarousel() {
      intervalId = setInterval(() => {
        index = index < items.length - 1 ? index + 1 : 0;
        updateCarousel();
      }, 5000);
    }

    function stopCarousel() {
      clearInterval(intervalId);
    }

    prevButton.addEventListener("click", function () {
      index = index > 0 ? index - 1 : items.length - 1;
      updateCarousel();
      stopCarousel();
    });

    nextButton.addEventListener("click", function () {
      index = index < items.length - 1 ? index + 1 : 0;
      updateCarousel();
      stopCarousel();
    });

    startCarousel();

    carouselInner.addEventListener("mouseenter", stopCarousel);
    carouselInner.addEventListener("mouseleave", startCarousel);
  });
  // ドロップダウンメニュー
  document.addEventListener('DOMContentLoaded', function() {
  var submenuItem = document.querySelector('.has-submenu');
  submenuItem.addEventListener('click', function(event) {
    if (!event.target.closest('ul.dropmenu')) {
      event.preventDefault();
      submenuItem.classList.toggle('active');
    }
  });
});
</script>