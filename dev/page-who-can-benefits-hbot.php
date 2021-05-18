<?php
/*
Template Name: Who can benefit from HBOT? Page
*/
?>
<?php get_header(); ?> 

<main class="whatIsPage">
	<section class="pageTitle">
		<div class="container">
			<h2 class="subtitle"><?php the_title(); ?></h2>	
		</div>
	</section>
	<div class="who-can-benefits-search">
		<div class="container">
			<form class="searchForm" action="<?php echo site_url();?>/blog/" method="get" accept-charset="utf-8" id="searchform" role="search">
				<div>
					<input type="text" name="q" placeholder="Search"/>
					<button type="submit"/><i class="fa fa-search" aria-hidden="true"></i>
				</div>
			</form>
		</div>
	</div>
	<section class="who-can-benefits">
		<div class="container">
			<div class="who-can-benefits-intro-text">
				<?php the_field('who_can_benefit_intro_text'); ?>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php 
			if( have_rows('who_can_benefit_articles') ): ?>
			<div id="to-do-lists">
				<?php 
				while( have_rows('who_can_benefit_articles') ): the_row(); ?>

				<div class="who-can-benefits-articles">
					<h3><?php the_sub_field('who_can_benefit_article_category_title'); ?></h3>
					<?php 
					if( have_rows('who_can_benefit_article_category') ): ?>
					<ul>
						<?php 
						while( have_rows('who_can_benefit_article_category') ): the_row();
						?>
						<li><a href="<?php the_sub_field('who_can_benefit_article_link'); ?>" target="_blank"><?php the_sub_field('who_can_benefit_article_text'); ?></a></li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<?php endwhile;  ?>
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