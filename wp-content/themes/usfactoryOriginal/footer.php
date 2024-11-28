<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package usfactory
 */
?>
<footer>
	<div class="footerItem">
		<div class="ftBoxL">
		<h5><a href="/"><img src="/common/img/us-logo.svg" width="200" height="40" alt=""></a></h5>
				<h6>株式会社U'sFactory　（ユーズファクトリ）</h6>
				<p class="ftTel">045-348-1560</p>
				<p class="time">受付時間 9：30～17：30（土・日・祝日除く）</p>
			</div>
			<div class="ftBoxR">
				<dl class="ftLink01">
					<dt><a href="/">HOME</a></dt>
				</dl>
				<dl class="ftLink02">
					<dt>INFO360</dt>
					<dd>∟<a href="/robot/">商品説明</a></dd>
					<dd>∟<a href="/inquiry/">お問い合わせ</a></dd>
				</dl>
				<dl class="ftLink03">
					<dt>BI for ArchiCAD</dt>
					<dd>∟<a href="/bi/">商品説明</a></dd>
					<dd>∟<a href="/inquiry/">お問い合わせ</a></dd>
					<dd>∟<a href="https://lms.us-factory.jp/mypage/login">ログイン</a></dd>
				</dl>
				<dl class="ftLink04">
					<dt><a href="/policy/">サイトポリシー</a></dt>
					<dt><a href="/news/">NEWS</a></dt>
					<dt><a href="/media/">実績・メディア掲載</a></dt>
					<dt><a href="/company/">会社概要</a></dt>
					<dt><a href="/access/">アクセス</a></dt>
				</dl>
			</div>
		<p class="credit">Copyright©2013-2024　U’sFactory All Rights Reserved.</p>
	</div>
</footer>
<!-- /#all_container --></article>                                                                                                                              
<p id="page-top">
	<a href="#top"><img src="/common/img/homepage/backtop.Phc7XCNW_Z67Kf1.svg" alt=""></a>
</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
		var showFlag = false; 
		var topBtn = $('#page-top'); 
		topBtn.css({'opacity': '0', 'visibility': 'hidden'}); 
		$(window).scroll(function() {
			if ($(this).scrollTop() > 100) {
				if (showFlag == false) {
					showFlag = true;
					topBtn.stop().css('visibility', 'visible').animate({'opacity': '1'}, 300); // 渐显按钮
				}
			} else {
				if (showFlag) {
					showFlag = false;
					topBtn.stop().animate({'opacity': '0'}, 300, function() {
						topBtn.css('visibility', 'hidden');
					});
				}
			}
		});
	});
</script>
<?php wp_footer(); ?>
</body>
</html>