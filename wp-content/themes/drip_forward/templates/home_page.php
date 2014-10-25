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
				<div id="home_section" class="full-width" style="background-image: url(<?php the_field('home_hero_image'); ?>);" >
					<!-- START OF TITLE AND TEXT -->
				<div class="row">
					<h1><?php the_field('home_hero_title'); ?></h1>
					<h3><?php the_field('home_hero_text'); ?></h3>
				</div>
				</div>
					<!-- END OF TITLE AND TEXT -->
				<!-- END OF HERO SECTION -->

				<!-- START OF WHAT WE DO SECTION -->
				<div id="what_section">
					<!-- START OF TITLE AND TEXT -->
				<div class="row">
					<h1><?php the_field('what_title'); ?></h1>
				</div>
				<div class="row">
					<p><?php the_field('what_text'); ?></p>
				</div>
					<!-- END OF TITLE AND TEXT -->
					<!-- START OF FONT AWESOME AND DESCRIPTIONS OF SERVICES -->
				<div class="row">
					<!-- FIRST FONT AWESOME AND SUBTEXT -->
				<div class="soft_square fa-code">
				</div>
				<p><?php the_field('what_subtext_1'); ?></p>
					<!-- SECOND FONT AWESOME AND SUBTEXT -->
				<div class="soft_square fa-mobile">
				</div>
				<p><?php the_field('what_subtext_2'); ?></p>
					<!-- THIRD FONT AWESOME AND SUBTEXT -->
				<div class="soft_square fa-line-chart">
				</div>
				<p><?php the_field('what_subtext_3'); ?></p>
				</div>
					<!-- END OF FONT AWESOME AND DESCRIPTIONS OF SERVICES -->
				</div>
				<!-- END OF WHAT WE DO SECTION -->

				<!-- START OF WHY US SECTION -->
				<div id="why_section">
					<!-- WHY US TITLE -->
					<div class="row">
						<h1><?php the_field('why_title'); ?></h1>
					</div>
					<!-- END OF WHY US TITLE -->
					<!-- WHY US IMAGE -->
					<div class="row">
						<div class="col-1-12">
						<img src="<?php the_field('why_image'); ?>">
						</div>
					<!-- WHY US TEXT -->
					<p><?php the_field('why_text'); ?></p>
					<!-- START OF TESTIMONIAL SECTION -->
					<!-- END OF TESTIMONIAL SECTION -->
				</div>
				</div>
				<!-- END OF WHY US SECTION -->

				<!-- START OF CONTACT SECTION -->
				<div id="contact_section">
				<div class="row">
					<p>Your Name (required)</p>
    <?php echo do_shortcode('[contact-form-7 id="38" title="Contact form"]'); ?>
				</div>
				</div>
				<!-- END OF CONTACT SECTION -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
