<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package usfactory
 */
?>

<article class="sideWrap">
<dl>
<dt>INFO360</dt>
<dd><a href="/robot/">商品説明</a></dd>
<dd><a href="/inquiry/">お問い合わせ</a></dd>
</dl>
<dl>
<dt class="biforacTitle">BI for ArchiCAD</dt>
<dd><a href="/bi/">商品説明</a></dd>
<dd><a href="/inquiry/">お問い合わせ</a></dd>
<dd><a href="https://lms.us-factory.jp/mypage/login">ログイン</a></dd>
</dl>

<ul>
<li><a href="/news/">NEWS</a></li>
<li><a href="/media/">実績・メディア掲載</a></li>
<li><a href="/company/">会社概要</a></li>
<li><a href="/access/">アクセス</a></li>
<li><a href="/inquiry/">お問い合わせ</a></li>
</ul>
</article>
</article>
</article>

<!-- /#mainWrap --></article>

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
<p id="page-top"><a href="#top">上へ戻る</a></p>
<script type="text/javascript">

$(function() {
	var showFlag = false;
	var topBtn = $('#page-top');
	topBtn.css('bottom', '-100px');
	var showFlag = false;
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			if (showFlag == false) {
				showFlag = true;
				topBtn.stop().animate({'bottom' : '20px'}, 100);
			}
		} else {
			if (showFlag) {
				showFlag = false;
				topBtn.stop().animate({'bottom' : '-100px'}, 100);
			}
		}
	});
});
</script>
</body>
</html>
