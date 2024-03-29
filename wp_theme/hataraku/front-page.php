<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hataraku
 */

get_header();
?>

<div class="l-contents p-home">
	<div class="l-contents__body">
		<div class="p-home-concept">
			<div class="c-container c-container--full">
				<div class="p-home-concept__cols">
					<div class="p-home-concept__col-left">
						<h1 class="p-home-concept__title">
							未来を<br />育てる<br />焼き芋
						</h1>
						<figure class="p-home-concept__image1">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/concept02.webp" />
						</figure>
						<figure class="p-home-concept__image2 p-home-concept__image2--sp">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/concept01.webp" />
						</figure>
					</div>
					<div class="p-home-concept__col-right">
						<figure class="p-home-concept__image1 p-home-concept__image1--sp">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/concept02.webp" />
						</figure>
						<figure class="p-home-concept__image2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/concept01.webp" />
						</figure>
						<div class="p-home-concept__text js-fadeup">
							<p>
								大切な人、好きな町<br />
								全ての未来を育てる存在になりたい。<br />
								<br />
								自然の恵みをいっぱいに受けた<br />
								畑楽の石焼き芋は<br />
								「人」と「町」のことを一番に考え、<br />
								安心して食べていただける逸品です。<br />
								<br />
								たくさんの人の手を借りて<br />
								畑で楽しく働きながらも<br />
								大事に育てたさつまいも。<br />
								<br />
								農家がこだわって作った石焼き芋が<br />
								町の賑わいや子どもたちの笑顔に繋がる<br />
								ピースの一つになることを願って
							</p>
						</div>
					</div>
					<figure class="p-home-concept__image3">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/concept03.webp" />
					</figure>
				</div>
			</div>
			<!-- .c-container -->
		</div>
		<!-- .p-home-concept -->

		<div id="feature" class="p-home-feature">
			<div class="p-home-feature__header">
				<div class="p-home-feature__title js-fadeup">
					<h2 class="c-heading">
						「未来を育てる焼き芋」が<br />みなさんの元に届くまで
					</h2>
				</div>
			</div>
			<div class="p-home-feature__items">
				<div class="p-home-feature__item">
					<div class="c-feature">
						<div class="c-feature__body">
							<div class="c-feature__title">山元町ならではの土づくり</div>
							<div class="c-feature__description">
								さつまいもを栽培している耕作地は、2011年の震災によって塩害を受けた場所。<br />畑楽ではさつまいもに適した土壌を整えるため、「０」から土づくりを始めました。<br />さつまいもに合った土壌環境にするため、肥料にはサラブレッドの馬糞を使い、自然の力も借りて土を再生させながら栽培を行っています。
							</div>
						</div>
						<figure class="c-feature__images">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature01_1.webp" alt="" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature01_2.webp" alt="" />
						</figure>
					</div>
				</div>
				<!-- .p-home-feature__item -->

				<div class="p-home-feature__item">
					<div class="c-feature">
						<div class="c-feature__body">
							<div class="c-feature__title">一本一本、<br />手作業で栽培</div>
							<div class="c-feature__description">
								5月にさつまいもの苗を一本一本手作業で植え付け、収穫できるようになるのは10月になってから。<br />
								畑楽では紅はるかを栽培していて、自然の恵みをたっぷりと受けた味わいは非常に濃厚です。様々な農家さんから学んだ育て方を畑楽の土地で実践するなど、試行錯誤の末に“本当に美味しい”と思うものになりました。
							</div>
						</div>
						<figure class="c-feature__images">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature02_1.webp" alt="" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature02_2.webp" alt="" />
						</figure>
					</div>
				</div>
				<!-- .p-home-feature__item -->

				<div class="p-home-feature__item">
					<div class="c-feature">
						<div class="c-feature__body">
						<div class="c-feature__title">素材本来の味を<br />引き出す貯蔵熟成</div>
							<div class="c-feature__description">
								「どうすれば美味しい焼き芋になるのか」をとことん追求し、栽培や焼成だけでなく貯蔵熟成にもこだわっています。
								さつまいも本来の味を引き出すために最適な環境は、これまで湿度や温度を何度も微調整したことで、ようやく見つけられました。
								徹底管理された畑楽独自の貯蔵熟成によって、程良い粘り気と優しい甘さが口に広がる焼き芋へと生まれ変わります。
							</div>
						</div>
						<figure class="c-feature__images">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature03_1.webp" alt="" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature03_2.webp" alt="" />
						</figure>
					</div>
				</div>
				<!-- .p-home-feature__item -->

				<div class="p-home-feature__item">
					<div class="c-feature">
						<div class="c-feature__body">
						<div class="c-feature__title">ベストな状態を<br />見極め<br />じっくり手焼き</div>
							<div class="c-feature__description">
								美味しい焼き芋を目指し、大小さまざまなさつまいもを2万本焼き、1,000本以上食べてきました。焼き芋を作る農家だからこそたどりついた、適切な焼き加減の見極め。<br />
								中心温度まで管理して焼いているため、芯までしっかりと火が通っています。<br />
								皮がほんのりと焼けた芳ばしい香りと紅はるかの優しい甘さが広がり、舌も心もホッコリとさせてくれます。
							</div>
						</div>
						<figure class="c-feature__images">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature04_1.webp" alt="" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature04_2.webp" alt="" />
						</figure>
					</div>
				</div>
				<!-- .p-home-feature__item -->
			</div>
			<!-- .p-home-feature__items -->
		</div>
		<!-- .p-home-feature -->

		<div class="p-home-eyecatch">
			<div class="c-container">
				<figure class="js-fadeup-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/eyecatch.webp" />
				</figure>
			</div>
			<!-- .c-container -->
		</div>
		<!-- .p-home-eyecatch -->

		<div id="profile" class="p-home-profile">
			<figure class="p-home-profile__image js-fadeup-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/profile.webp" alt="" />
			</figure>
			<div class="p-home-profile__body">
				<p class="p-home-profile__name">
					<span class="p-home-profile__name-title">農場長</span>
					<span class="p-home-profile__name-name">内藤靖人</span>
				</p>
				<p class="p-home-profile__introduction js-fadeup">
					みなさん、はじめまして！<br />
					畑楽の代表・内藤靖人です。<br />
					埼玉県で生まれ育ち、震災ボランティアを機に宮城県山元町へ移住しました。農業未経験で移住・就農してからは、たくさんの方に助けてもらい、今では栽培から提供までこだわりぬいた石焼き芋を販売しています。<br />
					復興途中の山元町はまだまだ可能性を秘めた場所です。県外からのインターンシップ受け入れや移住サポートにも協力し、焼き芋を楽しんでもらうだけでなく、町や人のより良い未来を想いながら、畑で楽しく働いています。<br />
					大切に育て、じっくりと手焼きした石焼き芋。ぜひ味わってみてください。
				</p>
				<p class="p-home-profile__history js-fadeup">
					埼玉県生まれ。<br />
					震災を機にボランティアで山元町を訪ねる。<br />
					地元の人たちとともに行った復興の活動をする中で、町を好きになり移住。<br />
					農業で町を活性化を目指し、ナイトウファームを創業。<br />
					農業未経験ながら、さまざまな品種の作物に取り組む。<br />
					2019年より株式会社畑楽を設立。<br />
					現在はさつまいもから焼き芋まで、自らの手で作り上げている。
				</p>
			</div>
		</div>
		<!-- .p-home-profile -->

		<div id="product" class="p-home-product">
			<div class="c-container c-container--narrow">
				<div class="p-home-product__title js-fadeup">
					<h2 class="c-heading c-heading--vertical">商品一覧</h2>
				</div>
				<div class="p-home-product__body">
					<div class="p-home-product__item-direct js-fadeup">
						<?php if (have_rows('d_product', 'option')) : ?>
							<?php while (have_rows('d_product', 'option')) : the_row(); ?>
								<div class="c-product c-product--direct">
									<div class="c-product__cols">
										<div class="c-product__col-left">
											<div class="c-product__header">
												<div class="c-product__category">直売所</div>
												<div class="c-product__image">
													<?php
													$image = get_sub_field('d_product_image');
													if ($image) : ?>
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="c-product__col-right">
											<div class="c-product__title"><?php the_sub_field('d_product_name'); ?></div>
											<div class="c-product__description"><?php the_sub_field('d_product_description'); ?></div>
											<div class="c-product__btn">
												<a class="c-btn c-btn--green" href="<?php the_sub_field('d_product_link_url'); ?>">
													<span class="c-btn__icon"><i class="fa-light fa-calendar"></i></span>
													<span class="c-btn__label"><?php the_sub_field('d_product_link_text'); ?></span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- .c-product -->
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="p-home-product__item-online js-fadeup">
						<?php if (have_rows('o_product', 'option')) : ?>
							<?php while (have_rows('o_product', 'option')) : the_row(); ?>
								<div class="c-product c-product--online">
									<div class="c-product__header">
										<div class="c-product__category">ONLINE SHOP</div>
										<div class="c-product__image">
											<?php
											$image = get_sub_field('o_product_image');
											if ($image) : ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
										</div>
									</div>
									<div class="c-product__title"><?php the_sub_field('o_product_name'); ?></div>
									<div class="c-product__description"><?php the_sub_field('o_product_description'); ?></div>
									<div class="c-product__btn">
										<a class="c-btn c-btn" href="<?php the_sub_field('o_product_link_url'); ?>">
											<span class="c-btn__icon"><i class="fa-light fa-cart-shopping"></i></span>
											<span class="c-btn__label"><?php the_sub_field('o_product_link_text'); ?></span>
										</a>
									</div>
								</div>
								<!-- .c-product -->
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="p-home-product__btn">
						<a class="c-btn c-btn--large" href="https://hata-raku.stores.jp">
							<span class="c-btn__icon"><i class="fa-light fa-cart-shopping"></i></span>
							<span class="c-btn__label">公式ONLINE SHOP</span>
						</a>
					</div>
				</div>
			</div>
			<!-- .c-container -->
		</div>
		<!-- .p-home-product -->

		<div id="news" class="p-home-news js-fadeup">
			<h2 class="p-home-news__title">
				<span class="p-home-news__title-ja c-heading">お知らせ</span>
				<span class="p-home-news__title-en">@hataraku_official</span>
			</h2>
			<div class="p-home-news__body">
				<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
				<div class="elfsight-app-4797f1bb-db18-4f0e-b3d7-b8330216c2b7" data-elfsight-app-lazy></div>
			</div>
			<div class="p-home-news__btn">
				<a class="c-btn c-btn--large" href="https://www.instagram.com/hataraku_official">
					<span class="c-btn__icon"><i class="fa-brands fa-instagram"></i></span>
					<span class="c-btn__label">INSTAGRAM</span>
				</a>
			</div>
		</div>
		<!-- .p-home-news -->
	</div>
	<!-- .l-contents__body -->
</div>
<!-- .l-contents -->

<?php
get_footer();
