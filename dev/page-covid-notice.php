<?php
/*
Template Name: Covid Notice Page
*/
?>
<?php get_header(); ?> 

<main class="covidNoticePage">
	<section class="pageTitle covidTitle">
		<div class="container">
			<h2 class="subtitle"><?php the_title(); ?></h2>	
            <p>As we enter back into our new normal, we want our patients to feel comfortable and know that their safety is and has always been our main concern.</p>
		</div>
	</section>
    <section class="covidNoticePageContent">
        <div class="container">
            <aside class='covidNoticePageContentAside'>
                <h3>Helpful links:</h3>
                <ul>
                    <?php
                        if( have_rows('side_links') ):
                            while ( have_rows('side_links') ) : the_row(); ?>
                                <div class="covidNoticePageContentMainSection">
                                    <?php the_sub_field('page_content_section'); ?>
                                </div>
                                <li><a href="<?php the_sub_field('side_link_url'); ?>"><?php the_sub_field('side_link_label'); ?></a></li>
                            <?php endwhile;
                        endif;
                    ?>
                </ul>
                <h3>Questions?</h3>
                <p>Contact us <a href="<?php echo site_url('/contact-us/'); ?>"><span>here</span></a>. Or call us at <a href="tel:407.530.0710">407.530.0710</a></p>
            </aside>
            <div class="covidNoticePageContentMain">
                <?php
                    if( have_rows('page_content_sections') ):
                        while ( have_rows('page_content_sections') ) : the_row(); ?>
                            <div class="covidNoticePageContentMainSection">
                                <?php the_sub_field('page_content_section'); ?>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>	