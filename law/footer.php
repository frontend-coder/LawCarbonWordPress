<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package law
 */

?>



	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>Attorney's Law</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Navigation</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Practice Areas</a></li>
						<li><a href="#">Won Cases</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About us</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://gettemplates.co">gettemplates.co</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Opening Hours</h4>
					<ul class="fh5co-footer-links">
						<li>Mon - Thu: 9:00 - 21 00</li>
						<li>Fri 8:00 - 21 00</li>
						<li>Sat 9:30 - 15: 00</li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">


<?php if(carbon_get_theme_option('footer_copyright')){?>
					<p>
		<small class="block"><?php echo carbon_get_theme_option('footer_copyright'); ?></small>
				</p>
<?php } ?>

					<p>







						<ul class="fh5co-social-icons">

        <?php
        $footer_socialpanel = carbon_get_theme_option('footer_socialpanel');
        ?>
     <?php
        if ( $footer_socialpanel ):
         foreach ( $footer_socialpanel as $fsp ): ?>
<li><a href="<?php echo $fsp['footer_social_links']; ?>" target="_blank"><i class="<?php echo $fsp['footer_social_icon']; ?>"></i></a></li>

        <?php endforeach; ?>
       <?php endif; ?>
	<!-- 						<li><a href="#"><i class="icon-twitter"></i></a></li>
	<li><a href="#"><i class="icon-facebook"></i></a></li>
<li><a href="#"><i class="icon-linkedin"></i></a></li>
<li><a href="#"><i class="icon-dribbble"></i></a></li> -->




						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!--
	<script src="js/jquery.min.js"></script>

	<script src="js/jquery.easing.1.3.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.stellar.min.js"></script>

	<script src="js/owl.carousel.min.js"></script>

	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/jquery.countTo.js"></script>

	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<script src="js/main.js"></script> -->


<?php wp_footer(); ?>
	</body>
</html>




























