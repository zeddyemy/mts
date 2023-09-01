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
 * @package mts
 */

global $mtsThemeMods;
?>



<section class="article-card card">
	<header>
		<h2 class="article-card-title"> <?php the_title(); ?> </h2>
	</header>


	<?php if ($mtsThemeMods['toggle_single_featured_img'] == true) { ?>
		<div class="featured-image">
			<?php theme_post_thumb(); ?>
		</div>
	<?php } ?>

	<div class="article-content">
		<?php the_content(__('(more...)')); ?>
	</div>
</section>