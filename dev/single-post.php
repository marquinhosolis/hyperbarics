<?php get_header();  ?> 
<main class="singlePost">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="singlePostImage">
			<div class="singlePostThumb" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
			<div class="singlePostShare">
				<span>Share this Blog:</span>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
				</a>
				<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank">
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
				</a>
				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source=" target="_blank">
					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
				</a>
				<a href="mailto:?&subject=Look at this article I've found on HyperbaricsOrlando.com&body=Look%20at%20this%20article%20I've%20found%20on%20HyperbaricsOrlando.com%3A%20<?php the_permalink(); ?>" target="_blank">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		
		<div class="singlePostCopy">
			<h1><?php the_title(); ?></h1>
			<div class="postData">
				<span><?php the_category(', '); ?></span> | <span>Published: <?php the_date('F jS Y, h:iA '); ?></span>
			</div>
			<div class="singlePostContent">
				<?php the_content(); ?>
			</div>
			<div class="singlePostReadMore">
				<a href="<?php echo site_url(); ?>/blog/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to all blogs</a>
				<div class="pagination">
					<?php previous_post_link('%link','<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous'); ?>
					<?php next_post_link('%link','Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' ); ?>

				</div>
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