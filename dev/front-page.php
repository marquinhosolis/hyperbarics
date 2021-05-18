<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?> 
<div class="cover coverHome" >
	<div class="coverImage videoBg">
		<div class="videoWrapper" style="background-image: url(<?php the_field('cover_image_background')?>);">
			<video loop muted autoplay class="videoWrapper__video">
				<source src="<?php the_field('cover_video_background')?>" type="video/mp4">
			</video>
		</div>
	</div>
	<div class="container">
		<div class="coverContent" data-aos="fade-up">
			<h1>Experience <br><span>the healing power</span> of oxygen</h1>
			<div class="coverText">
				<h2><?php the_field('cover_copy')?></h2>
				<a href="<?php echo site_url(); ?>/schedule-a-consultation" class="btn btn-orange">Schedule a Consultation</a>
			</div>

		</div>

	</div>
</div>


<main class="homePage">
	<section class="homeBoxes">
		<div class="container">
			<div class="cards" data-aos="fade-up">
				<div class="flexsliderWrapper flexslider carousel">
					<ul class="slides">
						<?php
							if( have_rows('boxes') ):
								while ( have_rows('boxes') ) : the_row(); ?>
									<li>
										<div class="card" >
											<div class="cardImage">
												<img src="<?php the_sub_field('box_image'); ?>" alt="<?php the_sub_field('box_title'); ?>">
											</div>
											<div class="cardText">
												<h3><?php the_sub_field('box_title'); ?></h3>
												<p><?php the_sub_field('box_copy'); ?></p>
											</div>
										</div>
									</li>
								<?php endwhile;
							endif;
						?>
					</ul>
				</div>
			</div>
		</div>  
	</section>
	<section class="ourMissionHome" style="background-image: url(<?php the_field('our_mission_background_image')?>);">
		<div class="container">
			<h2>Our Mission</h2>
			<p><?php the_field('our_mission_intro_copy'); ?></p>
			<div class="cards" data-aos="fade-up">
				<div class="flexsliderWrapper flexslider carousel">
					<ul class="slides">
						<?php
							if( have_rows('our_mission_boxes') ):
								while ( have_rows('our_mission_boxes') ) : the_row(); ?>
									<li> 
										<div class="card">
											<div class="cardImage" style="background-image: url(<?php the_sub_field('our_mission_box_image'); ?>"></div>
											<div class="cardText">
												<h3><?php the_sub_field('our_mission_box_title')?></h3>
												<p><?php the_sub_field('our_mission_box_copy')?></p>
												<a href="<?php the_sub_field('our_mission_box_link');?>">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
												
											</div>
										</div>
									</li>
								<?php endwhile;
							endif;
						?>
					</ul>
				</div>
			</div>	
			<a href="<?php echo site_url(); ?>/schedule-a-consultation" class="btn btn-orange">Schedule a Consultation</a>
		</div>
	</section>
	<section class="videosHome">
		<div class="container">
			<h2 class="subtitle">Latest Videos</h2>
			<div class="videosHomeContainer">
			
				<div class="flexsliderWrapper flexslider carousel">
					<ul class="slides" data-aos="fade-up">
						<?php
						$args = array(
							'posts_per_page' => '3',
							'post_type'      => array( 'videos' ),
						);

						$query = new WP_Query( $args );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();?>
								
								
						<li class="videoHome">
							<a href="<?php the_permalink(); ?>" >
								<div class="videoHomeThumb" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
									
								</div>
							</a>
						</li>
						<?php }
						} 

						wp_reset_postdata();
						?>
					</ul>
				</div>
				
			</div>
		</div>
	</section>
	
	<section class="lastNewsHome" style="background-image: url(<?php the_field('last_blogs_background_image')?>);">
		<div class="container">
			<h2>Our Latest Blogs</h2>
			<div class="cards">
				<div class="flexsliderWrapper flexslider">
					<ul class="slides" data-aos="fade-up">
						<?php
						$args = array(
							'posts_per_page'         => '3',
						);

						$query = new WP_Query( $args );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post(); 
								
								$category = get_the_category();
								$catName = $category[0]->name;
								$catId = $category[0]->term_id;
								$catLink = get_category_link( $catId );
								
								?>
								<li>
									<div class="card">
										<div class="cardImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
										<div class="cardText">
											<h3><?php the_title(); ?></h3>
											<p><datetime><?php the_date('M d, Y'); ?></datetime> | <span class="category"><a href="<?php echo $catLink; ?>"> <?php echo $catName; ?></a></span></p>
											<div class="excerpt">
												<?php the_excerpt(); ?>
											</div>
											<a href="<?php the_permalink(); ?>" class="readMore">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</li>
						<?php }
						} 

						wp_reset_postdata();
						?>
					</ul>
				</div>
			</div>	
		</div>
	</section>
	<section class="checklistHome">
		<div class="container" data-aos="fade-up">
			<div class="checklistHomeLeft">
				<h2><?php the_field('questions_title'); ?></h2>
				<p><?php the_field('questions_copy'); ?></p>
				<?php echo do_shortcode('[formidable id=4]'); ?>
			</div>
			<div class="checklistHomeRight" style="background-image: url(<?php the_field('questions_image'); ?> );"></div>
		</div>
	</section>
	<section class="testimonialsHome" style="background-image: url(<?php the_field('testimonials_background_image')?>);">
		<div class="container" data-aos="fade-up">
			<h2>Testimonials</h2>
				<div class="flexslider">
					<ul class="slides">
						<?php
							if( have_rows('testimonials') ):
								while ( have_rows('testimonials') ) : the_row(); ?>
									<li>
										<div class="testimonial">
											<div class="testimonialCopy">
												<div class="testimonialText">
													<?php the_sub_field('testimonial_copy'); ?>
												</div>
												<p class="testimonialName"><strong>— <?php the_sub_field('testimonial_name'); ?></strong></p>
											</div>
											<div class="testimonialImage" style="background-image: url(<?php the_sub_field('testimonial_image'); ?>);">
											</div>
										</div>
									</li>
								<?php endwhile;
							 endif;
						?>
					</ul>
				</div>
		</div>
	</section>
	<section class="contactUsHome">
		<div class="container" data-aos="fade-up">
			<h2>Call to book your free virtual consultation</h2>
			<span class="arrow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-home-arrow.png" alt="">
			</span>
			<div class="ctaHome">
				<div class="phone">
					<a href="tel:407.530.0710"></a><i class="fa fa-phone" aria-hidden="true"></i> 407.530.0710
				</div>
				<p>— <span>or</span> — </p>
				<a href="<?php echo site_url(); ?>/schedule-a-consultation" class="btn btn-white">Contact Us</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>		