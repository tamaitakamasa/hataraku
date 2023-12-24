<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hataraku
 */

?>

<footer class="l-footer">
	<div class="c-container">
		<div class="l-footer__inner">
			<div class="l-footer__company">
				<figure>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="焼き芋農場 畑らく Yakiimo Farm HAYARAKU" />
				</figure>
				<p>
					株式会社畑楽<br />
					〒989-2201<br />宮城県亘理郡山元町山寺北泥沼85-24
				</p>
			</div>
			<div class="l-footer__navi">
				<ul class="l-footer__navi-main">
				<li>
						<a href="<?php echo home_url() ?>/#feature">「未来を育てる焼き芋」が<br>みなさんの元に届くまで</a>
					</li>
					<li><a href="<?php echo home_url() ?>/#product">商品一覧</a></li>
					<li><a href="<?php echo home_url() ?>/#news">お知らせ</a></li>
				</ul>
				<ul class="l-footer__navi-sub">
					<ul>
						<li>
							<a href="https://www.instagram.com/hataraku_official/"><i class="fa-brands fa-instagram"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/farm.hataraku"><i class="fa-brands fa-facebook-f"></i></a>
						</li>
					</ul>
					<li><a href="<?php echo home_url() ?>/privacy-policy">プライバシーポリシー</a></li>
						<li><a href="<?php echo home_url() ?>/contact">お問い合わせ</a></li>
				</ul>
			</div>
		</div>
		<div class="l-footer__copyright">©Yakiimo Farm HAYARAKU</div>
	</div>
	<!-- .c-container -->
</footer>
<!-- .l-footer -->
</div>
<!-- .l-container -->

<?php wp_footer(); ?>

</body>

</html>
