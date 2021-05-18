<?php
/*
Template Name: Schedule a Consultation Page
*/
?>
<?php get_header(); ?> 

<main class="contactUsPage schedulePage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/page-contact-us-bg.png)">
	<h1>Schedule a Consultation</h1>
	<div class="container" data-aos="fade-up">
		<div class="contactLeft">
			<div class="contactUsIntroText">
				If you’re ready to book your free virtual consultation, simply call us or fill out the form below. A member of our qualified team will be in touch with you shortly. <br>
									<br>
				We look forward to helping you on your healing journey!
			</div>
			<div class="contactForm">
				<?php
				echo do_shortcode('[formidable id=3]');
				?>	
			</div>
		</div>
		<div class="contactRight">
		<div>
			
		
			<div class="contactData">
				<div class="contactFooter">
					<p><a href="tel:407.530.0710"> 407.530.0710</a></p>
					<p>8 am – 4:30 pm<br>
					Monday – Friday<br>
					8 am - 12:00 pm<br>
					Saturday and Sunday<br>
					(by appointment only)</p>
				</div>
				<address>
					<a href="https://www.google.com.br/maps/place/Hyperbaric+Healing+Treatment+Center/@28.448658,-81.4932987,17z/data=!3m1!4b1!4m5!3m4!1s0x88e77fa105d3f6cb:0x920dd2afffae186e!8m2!3d28.448658!4d-81.49111" target="_blank">Hyperbaric Healing Treatment Center <br>
						7932 West Sand Lake Rd., Suite 103 <br>
						Orlando, FL 32819</a>
				</address>
			</div>
			</div>	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.0251584471166!2d-81.49329868492151!3d28.44865798249068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77fa105d3f6cb%3A0x920dd2afffae186e!2sHyperbaric+Healing+Treatment+Center!5e0!3m2!1spt-BR!2sbr!4v1549153012769" width="430" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		</div>

	</div>
</main>
<?php get_footer(); ?>	