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

<div class="l-contents p-page p-page-<?php the_ID(); ?>">
	<div class="p-page__header">
		<div class="c-container">
			<h2 class="p-page__title">
				<div class="c-heading"><?php the_title(); ?></div>
			</h2>
		</div>
	</div>
	<!-- .p-page__header -->

	<div class="l-contents__body">
		<main class="l-contents__main">
			<!-- WP編集エリア ここから-->
			<article class="p-page__content">
				<div class="c-container">
					<div class="c-article">
						<?php the_content(); ?>
					</div>
				</div><!-- .c-article -->
			</article><!-- .c-container -->
			<!-- WP編集エリア ここまで-->
		</main>
	</div>
	<!-- .l-contents__body -->
</div>
<!-- .l-contents -->


<?php
get_footer();
