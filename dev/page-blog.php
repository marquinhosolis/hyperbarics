<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?> 

<main class="pageBlog">
	<section class="pageTitle">
		<div class="container">
			<h2 class="subtitle"><?php the_title(); ?></h2>	
		</div>
	</section>
	<div class="blogFilters">
		<div class="container">
			<form class="categorySelect" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

				<?php
				$args = array(
					'show_option_none' => __( 'Select a category' ),
					'orderby'          => 'name',
					'hide_empty'       => true,
					'echo'             => 0,
				);
				?>

				<?php $select  = wp_dropdown_categories( $args ); ?>
				<?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
				<?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>

				<?php echo $select; ?>

				<noscript>
					<input type="submit" value="View" />
				</noscript>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</form>
			<form class="searchForm" action="<?php echo site_url();?>/blog/" method="get" accept-charset="utf-8" id="searchform" role="search">
				<div>
					<input type="text" name="q" placeholder="Search"/>
					<button type="submit"/><i class="fa fa-search" aria-hidden="true"></i>
				</div>
			</form>
		</div>
	</div>
	<section class="showcase blogShowcase">
		<div class="container">
			<div class="cards">
				<?php
				$args = array(
					'posts_per_page' => -1,
					's'         	 => $_GET['q'],
					'post_type'      => array( 'post' ),
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
						<a href="<?php the_permalink(); ?>">
							<div class="card" data-aos="fade-up">
								<div class="cardImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
								<div class="cardText">
									<h3><?php the_title(); ?></h3>
									<p><datetime><?php the_date('M d, Y'); ?></datetime> | <span class="category"><a href="<?php echo $catLink; ?>"> <?php echo $catName; ?></a></span></p>
									<div class="excerpt">
										<?php the_excerpt(); ?>
									</div>
									<a href="<?php the_permalink(); ?>" class="readMore">Read Blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</a>
					<?php }
				} else{?>
					<div class="notFoundBlog">
						<p>Sorry! no blogs found for this search. </p>
						<a href="<?php echo site_url(); ?>/blog" class="btn btn-orange">back to all blogs</a>
					</div>
				<?php }

				wp_reset_postdata();
				?>
			</div>
			<a href="#" class="showMorePosts"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>	
















