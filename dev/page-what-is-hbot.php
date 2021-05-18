<?php
/*
Template Name: What is HBOT Page
*/
?>
<?php get_header(); ?> 

<main class="whatIsHbotPage">
	<div class="cover coverPatientExperience" >
		<div class="coverImage" style="background-image: url(<?php the_field('what_is_hbot_background_image'); ?>);"></div>
		<div class="container">
			<div class="coverContent" data-aos="fade-up">
				<h1>What is HBOT?</h1>
			</div>
		</div>
	</div>
	<section class="whatIsHbotIntro">
		<div class="container">
			<div class="whatIsHbotIntroVideo" data-aos="fade-right">
				<?php the_field('what_is_hbot_intro_video'); ?>
			</div>
			<div class="whatIsHbotIntroText" data-aos="fade-left">
				<h2 class="subtitle">How hyperbaric oxygen therapy works</h2>
				<?php the_field('what_is_hbot_intro_copy'); ?>
			</div>
		</div>
	</section>
	<section class="whatIsHbotBenefits" style="background-image: url(<?php the_field('what_is_hbot_benefits_background_image'); ?>);">
		<div class="container">
			<div class="whatIsHbotBenefitsText" data-aos="fade-right">
				<h2>What are the benefits of hyperbaric oxygen therapy?<br>
				<span>The benefits of HBOT are well-documented, including:</span></h2>
				<div class="whatIsHbotBenefitsTextList">
					<?php the_field('what_is_hbot_benefits_list'); ?>
				</div>
			</div>
			<div class="whatIsHbotBenefitsImage" style="background-image: url(<?php the_field('what_is_hbot_benefits_image'); ?>);" data-aos="fade-left"></div>
		</div>
		<a class="btn btn-orange">Can HBOT help you?</a>
	</section>
	<section class="whatIsHbotBloodFlow">
		<div class="container">
			<h2 class="subtitle">How hyperbaric oxygen therapy helps you heal</h2>
			<div class="bloodItems">
				<?php
				if( have_rows('what_is_hbot_blood_flow') ):
					while ( have_rows('what_is_hbot_blood_flow') ) : the_row(); ?>
					<div class="bloodItem" data-aos="fade-up">
						<img src="<?php the_sub_field('item_image'); ?>" alt="<?php the_sub_field('item_title'); ?>">
						<h3><?php the_sub_field('item_title'); ?></h3>
						<?php the_sub_field('item_copy'); ?>
					</div>	
					<?php endwhile;
				endif;
				?>
			</div>
		</div>
		
	</section>
	<section class="contactUsHome">
		<div class="container">
			<h2>Book your free 30 minute tour and consultation</h2>
			<span class="arrow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-home-arrow-blue-stroke.png" alt="">
			</span>
			<div class="ctaHome">
				<div class="phone">
					<a href="tel:407.530.0710"></a><i class="fa fa-phone" aria-hidden="true"></i> 407.530.0710
				</div>
				<p>- <span>or</span> - </p>
				<a href="<?php echo site_url(); ?>/schedule-a-consultation" class="btn btn-white">Contact Us</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>	