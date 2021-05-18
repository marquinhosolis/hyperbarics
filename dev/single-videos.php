<?php get_header();  ?> 
<main class="singleVideos">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		
		$category = get_the_category();
		$catName = $category[0]->name;

		?>
		
		<div class="singleVideoThumb">
			<?php the_field('video_url'); ?>
			<div class="singleVideoShare">
				<span>Share this Video:</span>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
				</a>
				<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank">
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
				</a>
				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source=" target="_blank">
					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
				</a>
				<a href="mailto:?&subject=Look at this article I've found on Hyperbarics.com&body=Look%20at%20this%20article%20I've%20found%20on%20Hyperbarics.com%3A%20<?php the_permalink(); ?>" target="_blank">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="singleVideosCopy">
			<h1><?php the_title(); ?></h1>
			<div class="postData">
				<span><?php echo $catName;  ?></span> | <span>Published: <?php the_date('F jS Y'); ?></span>
			</div>
			<div class="singlePostContent">
				<?php the_content(); ?>
			</div>
			<div class="singlePostReadMore">
				<a href="<?php echo site_url(); ?>/video-faqs/"><strong><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to all videos</strong></a>
			</div>	
			
		</div>
		<?php endwhile; endif; ?>
	</div>
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
				<a href="<?php echo site_url(); ?>/contact-us" class="btn btn-white">Contact Us</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>		