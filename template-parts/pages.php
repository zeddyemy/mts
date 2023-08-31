<?php 
/*
    Template part : Pages
    Description : This Template Part Is For The Pages Of The Site.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The Single Page.

    Template Parts : 	1) None template part.
						2) The Side Bar.

*/

?>

<section class="wrapper col-12 pages-home">
	<?php
	get_template_part('template-parts/pages-parts/home-section', get_post_format());
	?>
</section>

<section class="wrapper pages pages-home-isActive col-12 flex layout">

	<section class="  col-8 main" >
		
		<?php if (have_posts()) :

			while (have_posts()) : the_post();

				get_template_part( 'template-parts/pages-parts/pages-content', get_post_format() );

			endwhile;

		else:

			// if there is nothing on the page
			get_template_part( 'template-parts/none', get_post_format() );

		endif; ?>

	</section>

	<div class="col-4 side">
			<?php get_sidebar('pages'); // The Side Bar. 
            ?>
	</div>
</section>