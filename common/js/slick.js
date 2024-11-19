

// トップページスライドショー
	$('.mainimg').slick({
		autoplay: true,
		dots: true,				//丸いページナビボタンを表示
		arrows: false,			//左右の矢印
		autoplaySpeed: 4000,	//切り替えのスピード。デフォルトは4000。
		pauseOnHover: false,	//マウスオン時にスライドショーをストップする
        
        centerMode: true,
        centerPadding: '50px',
        focusOnSelect: true,
		centerPadding: '30px',        // 画像の間隔を30pxに設定（必要に応じて調整可能）
        slidesToShow: 3,              // 一度に表示する画像を3枚に設定
        slidesToScroll: 4,            // 1度にスライドする画像の枚数を4枚に設定
        focusOnSelect: true           // クリック時にその画像をフォーカスする
    });
