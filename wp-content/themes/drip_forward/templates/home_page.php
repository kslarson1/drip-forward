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
				<div class="column-full center">
					<h1><?php the_field('home_hero_title'); ?></h1>
				</div>
				<div class="column-full center">
					<h3><?php the_field('home_hero_text'); ?></h3>
				</div>
			</div>
			</div>
				<!-- END OF TITLE AND TEXT -->
			<!-- END OF HERO SECTION -->

			<!-- START OF WHAT WE DO SECTION -->
			<div id="what_section">
				<!-- START OF TITLE AND TEXT -->
				<div class="row">
					<div class="column-full center">
						<h1><?php the_field('what_title'); ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="column-full center">
						<h4><?php the_field('what_text'); ?></h4>
					</div>
				</div>
					<!-- END OF TITLE AND TEXT -->
					<!-- START OF FONT AWESOME AND DESCRIPTIONS OF SERVICES -->
				<div class="row">
					<!-- FIRST FONT AWESOME AND SUBTEXT -->
					<div class="column-one-third">
					<div class="center">
							<span class="fa-code fa-4x">
						</span>
					</div>
						<h5><?php the_field('what_subheader_1'); ?></h5>
						<p><?php the_field('what_subtext_1'); ?></p>
					</div>
					<!-- SECOND FONT AWESOME AND SUBTEXT -->
					<div class="column-one-third">
					<div class="center">
						<span class="fa-mobile fa-4x">
						</span>
					</div>
						<h5><?php the_field('what_subheader_2'); ?></h5>
						<p><?php the_field('what_subtext_2'); ?></p>
					</div>
					<!-- THIRD FONT AWESOME AND SUBTEXT -->
					<div class="column-one-third">
					<div class="center">
						<span class="fa-line-chart fa-4x">
						</span>
						<h5><?php the_field('what_subheader_3'); ?></h5>
						<p><?php the_field('what_subtext_3'); ?></p>
					</div>
					<!-- END OF FONT AWESOME AND DESCRIPTIONS OF SERVICES -->
				</div>
				</div>
			</div>
			<!-- END OF WHAT WE DO SECTION -->

			<!-- START OF WHY US SECTION -->
			<div id="why_section">
				<!-- WHY US TITLE -->
				<div class="row">
					<div class="column-full center">
						<h1><?php the_field('why_title'); ?></h1>
					</div>
				</div>
				<!-- END OF WHY US TITLE -->
				<div class="row">
					<!-- WHY US IMAGE -->
					<div class="column-one-half">
						<img src="<?php the_field('why_image'); ?>" class="soft_square glow">
					</div>
					<!-- WHY US TEXT -->
					<div class="column-one-half">
						<p><?php the_field('why_text'); ?></p>
					</div>
				</div>
			</div>
			<!-- END OF WHY US SECTION -->

			<!-- START OF HOW WE DO IT SECTION -->
			<div id="how_section">
				<div class="row center">
					<div class="column-full">
						<h1><?php the_field('how_title'); ?></h1>
					</div>
				</div>
			</div>
				<!-- START OF MEET AND PLAN -->
			
				<div class="full-width-one-half-green">
					<div class="center">
						<h2><?php the_field('how_meet_title'); ?></h2>
					</div>
					<div class="row">
						<p><?php the_field('how_meet_text'); ?></p>
					</div>
				</div>
				<div class="full-width-one-half-gray">
					<div class="center">
						<h2><?php the_field('how_plan_title'); ?></h2>
					</div>
					<div class="row">
						<p><?php the_field('how_plan_text'); ?></p>
					</div>
				</div>
			
			<!-- END OF MEET AND PLAN -->

			<!-- START OF DESIGN AND TEST -->
			<div class="row">
				<div class="column-one-half">
					<h2><?php the_field('how_design_title'); ?></h2>
					<p><?php the_field('how_design_text'); ?></p>
				</div>
				<div class="column-one-half">
					<h2><?php the_field('how_test_title'); ?></h2>
					<p><?php the_field('how_test_text'); ?></p>
				</div>
			</div>
			<!-- END OF DESIGN AND TEST -->
			<!-- START OF LAUNCH -->
			<div class="row">
			<div class="column-full">
				<div class="center">
					<h2><?php the_field('how_launch_title'); ?></h2>
				</div>
				<p><?php the_field('how_launch_text'); ?></p>
			</div>
			</div>
			<!-- END OF LAUNCH -->
		<!-- END OF HOW WE DO IT SECTION -->

			<!-- START OF CONTACT SECTION -->
			<div id="contact_section">
				<div class="row">
    				<?php echo do_shortcode('[contact-form-7 id="38" title="Contact form"]'); ?>
				</div>
			</div>
			<!-- END OF CONTACT SECTION -->

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
