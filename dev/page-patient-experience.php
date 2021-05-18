<?php
/*
Template Name: Patient Experience Page
*/
?>
<?php get_header(); ?> 

<main class="ourTeamPage">
	<div class="cover coverPatientExperience" >
		<div class="coverImage" style="background-image: url(<?php the_field('cover_background_image'); ?>);"></div>
		<div class="container">
			<div class="coverContent" data-aos="fade-up">
				<h1>What to Expect</h1>
			</div>
		</div>
	</div>
	<section class="patientExperienceIntro">
		<div class="container">
			<div class="patientExperienceIntroCopy" data-aos="fade-right">
				<?php the_field('what_to_expect_intro_copy'); ?>
			</div>
			<div class="patientExperienceIntroList" data-aos="fade-left">
				<h2>Why choose us?</h2>
				<ul>
					<?php
						if( have_rows('what_to_expect_intro_list') ):
							while ( have_rows('what_to_expect_intro_list') ) : the_row(); ?>
								<li><?php the_sub_field('list_item'); ?></li>
							<?php endwhile;
						endif;
					?>
				</ul>
			</div>
			<div class="patientExperienceIntroVideo" data-aos="fade-up">
				<h2 class="subtitle">
					Experience the Hyperbaric Chamber
				</h2>
				<div class="patientExperienceIntroVideoIframe">
					<?php the_field('what_to_expect_video'); ?>
				</div>				
			</div>
		</div>
	</section>
	<section class="virtualTour videoBg">
		<div class="videoWrapper" style="background-image: url(<?php the_field('virtual_tour_background_image'); ?>);">
			<video loop muted autoplay class="videoWrapper__video">
				<source src="<?php the_field('virtual_tour_background_video'); ?>" type="video/mp4">
			</video>
		</div>
		<div class="container" data-aos="fade-right">
			<h3>Experience Hyperbaric Healing Treatment Center</h3>
			<a href="<?php echo site_url(); ?>/schedule-a-consultation/" class="btn btn-orange">Schedule a consultation</a>
		</div>
	</section>
	<section class="patientExperienceTravel">
		<div class="container">
			<h2 class="subtitle">Travel and Lodging</h2>
			<div class="patientExperienceTravelCopy" data-aos="fade-right">
				<?php the_field('travel_and_lodging_copy'); ?>
			</div>
			<div class="patientExperienceTravelMap" data-aos="fade-left">
				<?php the_field('travel_and_lodging_map_iframe_code'); ?>
			</div>
			<a href="<?php echo site_url(); ?>/schedule-a-consultation/" class="btn btn-orange">Schedule a Consultation</a>
		</div>
	</section>
	<section class="gallery" style="background-image: url(<?php the_field('gallery_background_image'); ?>);">
		<div class="container">
			<h2 class="subtitle">Gallery</h2>
			<div class="galleryWrapper">
				<?php echo do_shortcode('[ngg src="galleries" ids="1" display="basic_thumbnail" images_per_page="6" number_of_columns="3"]'); ?>
			</div>
		</div>
	</section>
	
	
	
</main>
<?php get_footer(); ?>	