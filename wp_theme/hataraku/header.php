<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hataraku
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />


	<?php wp_head(); ?>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-VVYCEL8LCM"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-00000000');
	</script>

	<!-- Adobe fonts -->
	<script>
		(function(d) {
			var config = {
					kitId: "hmp1cas",
					scriptTimeout: 3000,
					async: true,
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className =
						h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = "https://use.typekit.net/" + config.kitId + ".js";
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || (a && a != "complete" && a != "loaded")) return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config);
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s);
		})(document);
	</script>
</head>

<body <?php body_class('l-body'); ?>>
	<?php wp_body_open(); ?>
	<div class="l-container">
		<header class="l-header">
			<div class="c-container">
				<h1 class="l-header__logo">
					<a href="<?php echo home_url() ?>">
						<figure>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_v.svg" alt="焼き芋農場 畑らく Yakiimo Farm HAYARAKU" />
						</figure>
					</a>
				</h1>
				<div class="l-header__navi">
					<div class="l-header__btn-shop">
						<a class="c-btn c-btn--small" href="#">
							<span class="c-btn__icon"><i class="fa-light fa-cart-shopping"></i></span>
							<span class="c-btn__label">ONLINE SHOP</span>
						</a>
					</div>
					<div class="l-header__trigger js-trigger">
						<div class="c-trigger">
							<div class="c-trigger__inner">
								<span class="c-trigger__line"></span>
								<span class="c-trigger__line"></span>
								<span class="c-trigger__line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .c-container -->
		</header>
		<!-- .l-header -->

		<div class="l-drawer">
			<ul>
				<li><a href="<?php echo home_url() ?>#feature">「未来を育てる焼き芋」がみなさんの元に届くまで</a></li>
				<li><a href="<?php echo home_url() ?>#product">商品一覧</a></li>
				<li><a href="<?php echo home_url() ?>#news">お知らせ</a></li>
			</ul>
		</div>
		<!-- .l-drawer -->
