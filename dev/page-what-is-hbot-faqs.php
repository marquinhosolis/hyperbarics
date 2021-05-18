<?php
/*
Template Name: What is HBOT? Faqs Page
*/
?>
<?php get_header(); ?> 

<main class="whatIsPage">
	<section class="pageTitle">
		<div class="container">
			<h2 class="subtitle"><?php the_title(); ?></h2>	
		</div>
	</section>
	<section class="WhatIsFaqQuestions">
		<div class="container">
		
			<?php
			if( have_rows('faqs') ):
			while ( have_rows('faqs') ) : the_row(); ?>
			<div class="question">
				<a href="#">
					<div class="WhatIsFaqQuestionsTitle">
						<?php the_sub_field('question'); ?>
					</div>
				</a>
				<div class="WhatIsFaqQuestionsAnswer">
					<?php the_sub_field('answer'); ?>
				</div>
			</div>
			<?php endwhile;
			endif;
			?>
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