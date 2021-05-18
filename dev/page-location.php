<?php
/*
Template Name: Location Page
*/
?>
<?php get_header(); ?>

<main class="locationPage">
    <section class="locationPageTitle">
        <div class="container">
            <div class="locationLogo">
                <img src="<?php the_field('location_logo'); ?>" alt="">
            </div>
            <div class="locationAddress">
                <div class="locationAddressPhoto" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                </div>
                <div class="locationAddressCopy">
                    <a href="tel:407.530.0710" class="tel"><?php the_field('location_phone'); ?></a>
                    <address>
                        <a href="<?php the_field('location_address_link'); ?>" target="_blank">
                            <?php the_field('location_address'); ?>
                        </a>
                    </address>
                    <div class="time">
                        <span><strong>Monday – Friday:</strong></span><br>
                        <?php the_field('location_time_monday_friday'); ?>
                        <br>
                        <br>
                        <span><strong>Saturday and Sunday</strong> (by appointment only):</span> <br>
                        <?php the_field('location_time_saturday_sunday'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="locationGallery">
        <div class="container">
            <div class="locationGalleryTitle">
                <h2>Hyperbaric Healing Treatment Center</h2>
                <p>is the first and only private hyperbaric oxygen therapy center in Dr. Phillips, Florida.</p>
            </div>
            <div class="flexslider carousel">
                <ul class="slides">
                    <?php
                    while (have_rows('location_gallery')) : the_row(); ?>
                        <li>
                            <img src="<?php the_sub_field('location_gallery_image'); ?>" />
                        </li>
                    <?php endwhile;
                    ?>
                </ul>
            </div>
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