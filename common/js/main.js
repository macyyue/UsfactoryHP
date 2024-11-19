
//===============================================================
// debounce関数
//===============================================================
function debounce(func, wait) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            func.apply(context, args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

//===============================================================
// スムーススクロール（※バージョン2024-1）※通常タイプ
//===============================================================
$(function() {
    // ページ上部へ戻るボタンのセレクター
    var topButton = $('.pagetop');
    // ページトップボタン表示用のクラス名
    var scrollShow = 'pagetop-show';

    // スムーススクロールを実行する関数
    // targetにはスクロール先の要素のセレクターまたは'#'（ページトップ）を指定
    function smoothScroll(target) {
        // スクロール先の位置を計算（ページトップの場合は0、それ以外は要素の位置）
        var scrollTo = target === '#' ? 0 : $(target).offset().top;
        // アニメーションでスムーススクロールを実行
        $('html, body').animate({scrollTop: scrollTo}, 500);
    }

    // ページ内リンクとページトップへ戻るボタンにクリックイベントを設定
    $('a[href^="#"], .pagetop').click(function(e) {
        e.preventDefault(); // デフォルトのアンカー動作をキャンセル
        var id = $(this).attr('href') || '#'; // クリックされた要素のhref属性を取得、なければ'#'
        smoothScroll(id); // スムーススクロールを実行
    });
    // スクロールに応じてページトップボタンの表示/非表示を切り替え
    $(topButton).hide(); // 初期状態ではボタンを隠す
    $(window).scroll(function() {
        if($(this).scrollTop() >= 300) { // スクロール位置が300pxを超えたら
            $(topButton).fadeIn().addClass(scrollShow); // ボタンを表示
        } else {
            $(topButton).fadeOut().removeClass(scrollShow); // それ以外では非表示
        }
    });

    // ページロード時にURLのハッシュが存在する場合の処理
    if(window.location.hash) {
        // ページの最上部に即時スクロールする
        $('html, body').scrollTop(0);
        // 少し遅延させてからスムーススクロールを実行
        setTimeout(function() {
            smoothScroll(window.location.hash);
        }, 10);
    }
});


//===============================================================
// 汎用開閉処理
//===============================================================
$(function() {
	$('.openclose').next().hide();
	$('.openclose').click(function() {
		$(this).next().slideToggle();
		$('.openclose').not(this).next().slideUp();
	});
});


//===============================================================
// テキストのフェードイン効果
//===============================================================
$(function() {
    $('.fade-in-text').on('inview', function(event, isInView) {
        // この要素が既にアニメーションされたかどうかを確認
        if (isInView && !$(this).data('animated')) {
            // アニメーションがまだ実行されていない場合
            let innerHTML = '';
            const text = $(this).text();
            $(this).text('');

            for (let i = 0; i < text.length; i++) {
                innerHTML += `<span class="char" style="animation-delay: ${i * 0.1}s;">${text[i]}</span>`;
            }

            $(this).html(innerHTML).css('visibility', 'visible');
            // アニメーションが実行されたことをマーク
            $(this).data('animated', true);
        }
    });
});

//===============================================================
// 詳細ページのサムネイル切り替え
//===============================================================
$(function() {
    // 初期表示: 各 .thumbnail-view に対して、直後の .thumbnail の最初の画像を表示
    $(".thumbnail-view").each(function() {
        var firstThumbnailSrc = $(this).next(".thumbnail").find("img:first").attr("src");
        var defaultImage = $("<img>").attr("src", firstThumbnailSrc);
        $(this).append(defaultImage);
    });

    // サムネイルがクリックされたときの動作
    $(".thumbnail img").click(function() {
        var imgSrc = $(this).attr("src");
        var newImage = $("<img>").attr("src", imgSrc).hide();

        // このサムネイルの直前の .thumbnail-view 要素を取得
        var targetPhoto = $(this).parent(".thumbnail").prev(".thumbnail-view");

        targetPhoto.find("img").fadeOut(400, function() {
            targetPhoto.empty().append(newImage);
            newImage.fadeIn(400);
        });
    });
});


//===============================================================
// スライドショー
//===============================================================
$(function() {
	var slides = $('#mainimg .slide');
	var slideCount = slides.length;
	var currentIndex = 0;

	slides.eq(currentIndex).css('opacity', 1).addClass('active');

	setInterval(function() {
		var nextIndex = (currentIndex + 1) % slideCount;
		slides.eq(currentIndex).css('opacity', 0).removeClass('active');
		slides.eq(nextIndex).css('opacity', 1).addClass('active');
		currentIndex = nextIndex;
	}, 4000); // 4秒ごとにスライドを切り替える
});


