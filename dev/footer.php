<footer>
	<div class="container">
		<div class="logoFooter">
			<a href="https://www.google.com.br/maps/place/7932+W+Sand+Lake+Rd+STE+103,+Orlando,+FL+32819,+EUA/@28.4486577,-81.4932991,17z/data=!3m1!4b1!4m8!1m2!2m1!1s7932+West+Sand+Lake+Rd.,+Suite+103+Orlando,+FL+32819++407.530.0710!3m4!1s0x88e77fa19e09af11:0x915833c1733c5bef!8m2!3d28.4486577!4d-81.4911104" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Hyperbaric-Logo-Orlando-footer.png" alt=""><br><br>
				<address>
					7932 West Sand Lake Rd., Suite 103 <br>
					Orlando, FL 32819 <br>
					<br>
					407.530.0710
				</address>
			</a>
		</div>
		<div class="logoFooter">
			<a href="https://www.google.com.br/maps/place/1708+FL-44,+New+Smyrna+Beach,+FL+32168,+EUA/@29.0143065,-80.9420936,17z/data=!3m1!4b1!4m5!3m4!1s0x88e72ed434436731:0x42d11b9950eae221!8m2!3d29.0143065!4d-80.9399049" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Hyperbaric-Logo-NewSmyrna-footer.png" alt=""><br><br>
				<address>
					1708 FL - 44 <br>
					New Smyrna Beach, FL 32169 <br>
					<br>
					407.530.0710
				</address>
			</a>
		</div>
		<div class="formFooter">
			<p> Sign up for our email newsletter </p>
			<?php echo do_shortcode('[formidable id=5]'); ?>
		</div>
	</div>
	<div class="socialFooter">
		<a href="https://www.facebook.com/Hyperbaricsorlando/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i>
		</a>
		<a href="https://www.linkedin.com/company/hyperbaric-healing-treatment-center/
" target="_blank" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i>
		</a>
		<a href="https://www.instagram.com/hyperbaricsorlando/
" target="_blank" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
		</a>
	</div>
	<div class="dppaFooter">
		<?php require_once('logo-dppa-footer.php'); ?>
	</div>

</footer>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider-min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts-min.js"></script>
<script>
	AOS.init();
</script>
<?php wp_footer(); ?>
</body>

</html>