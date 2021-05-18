<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<main class="contactUsPage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/page-contact-us-bg.png)">
	<h1>Contact Us</h1>
	<div class="container" data-aos="fade-up">
		<div class="contactLeft">
			<div class="contactUsIntroText">
				If you’d like to learn more about how hyperbaric oxygen therapy can help you or a loved one, simply call us or contact us below. A member of our qualified team will be in touch with you shortly.

				We look forward to helping you on your healing journey!
			</div>
			<div class="contactForm">
				<?php
				echo do_shortcode('[formidable id=2]');
				?>
			</div>
		</div>
		<div class="contactRight">
			<div class="contactData">
				<h2>Orlando Location</h2>
				<a href="tel:407.530.0710" class="tel">407.530.0710</a>
				<address>
					<a href="https://www.google.com.br/maps/place/7932+W+Sand+Lake+Rd+STE+103,+Orlando,+FL+32819,+EUA/@28.4486577,-81.4932991,17z/data=!3m1!4b1!4m8!1m2!2m1!1s7932+West+Sand+Lake+Rd.,+Suite+103+Orlando,+FL+32819++407.530.0710!3m4!1s0x88e77fa19e09af11:0x915833c1733c5bef!8m2!3d28.4486577!4d-81.4911104" target="_blank">
						Hyperbaric Healing Treatment Center <br>
						7932 West Sand Lake Rd., Suite 103 <br>
						Orlando, FL 32819
					</a>
				</address>
				<a href="<?php echo site_url('orlando-location'); ?>" class="moreInfoAddressLink">
					More Location details <i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</a>
			</div>
			<div class="contactData">
				<h2>New Smyrna Location</h2>
				<a href="tel:407.530.0710" class="tel">407.530.0710</a>
				<address>
					<a href="https://www.google.com.br/maps/place/1708+FL-44,+New+Smyrna+Beach,+FL+32168,+EUA/@29.0143065,-80.9420936,17z/data=!3m1!4b1!4m5!3m4!1s0x88e72ed434436731:0x42d11b9950eae221!8m2!3d29.0143065!4d-80.9399049" target="_blank">
						Hyperbaric Healing Treatment Center <br>
						1708 FL - 44 <br>
						New Smyrna Beach, FL 32169 <br>
					</a>
				</address>
				<a href="<?php echo site_url('new-smyrna-location'); ?>" class="moreInfoAddressLink">
					More Location details <i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>

	</div>
</main>
<?php get_footer(); ?>