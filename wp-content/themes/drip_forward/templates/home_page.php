<?php
/**
 * Template Name: home_page
 *
 * 
 *
 * @package Drip Forward
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				
				<!-- START OF HERO SECTION -->
				<div id="home_section" class="full-width" style="background-image: url(<?php the_field(home_hero_image); ?>)">
				</div>
				<!-- START OF TITLE AND TEXT -->
				<div class="row">
					<h1><?php the_field('home_hero_title'); ?></h1>
					<h3><?php the_field('home_hero_text'); ?></h3>
				</div>
				<!-- END OF TITLE AND TEXT -->
				<!-- END OF HERO SECTION -->
				<!-- START OF WHAT WE DO SECTION -->
				<div id="what_section">

				</div>
				<!-- END OF WHAT WE DO SECTION -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
