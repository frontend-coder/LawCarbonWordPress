<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package law
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Law &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if(carbon_get_theme_option('image_favicon'))
$favicon_id = carbon_get_theme_option('image_favicon'); // получим ID картинки из опции темы
$favicon_url = wp_get_attachment_image_url( $favicon_id, 'full' );  // ссылка на полный размер картинки по ID вложения
{?>
<link rel="shortcut icon" href="<?php echo $favicon_url; ?>" type="image/x-icon">
<?php } ?>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

<!-- 	<div class="fh5co-loader"></div> -->

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
 <?php if(carbon_get_theme_option('text_logo')){?>
				<div id="fh5co-logo">
					<a href="<?php echo home_url('/'); ?>">
			<?php echo carbon_get_theme_option('text_logo'); ?><span>.</span></a>
				</div>
<?php } ?>
					</div>
					<div class="col-xs-10 text-right menu-1">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>


					<!-- 	<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="practice.html">Practice Areas</a></li>
							<li><a href="won.html">Won Cases</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Sign Up</span></a></li>
						</ul>
 -->


					</div>
				</div>

			</div>
		</div>
	</nav>























