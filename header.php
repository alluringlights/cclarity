<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<!-- typekit embed code -->
<script src="https://use.typekit.net/uqd2edb.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); bloginfo( name ); ?></title>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
	
	<header id="masthead" class="site-header" role="banner">

	<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo( get_header_image() ); ?>">
		<button id="nav-toggle">
						<i class="fa fa-navicon"></i>
					</button>
			<?php if( get_field('logo', 'option') ): 
			$logo = get_field('logo', 'option');
			//$metadata = wp_get_attachment_metadata($logo);
			$logoheight = $logo['height'];
			$logowidth = $logo['width'];
			$logoar = (($logoheight / $logowidth) * 100);
			?>
				
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="site-title has-logo" id="site-title" style="background-image: url(<?php echo $logo[url]; ?>);height:<?php echo $logoar*4; ?>px">
						<?php bloginfo( 'name' ); ?>
					</a>
			
			
		</div>
		<nav id="site-navigation" class="main-navigation container" role="navigation">
			
			<div class="responsive-nav">
				<button class="rnav-close"><i class="fa fa-close"></i></button>
			
			<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
	<ul class="social-links">
			<?php
	if( get_field('social_icons', 'option') ): ?>

	

	<?php
	    while ( has_sub_field('social_icons', 'option') ) :

			 if( get_row_layout() == 'facebook' ): ?>

			<li>
				<a href="<?php the_sub_field("facebook"); ?>" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
			</li>

	<?php
	        elseif( get_row_layout() == 'instagram' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("instagram"); ?>" target="_blank">
					<i class="fa fa-instagram"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'twitter' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("twitter"); ?>" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'pinterest' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("pinterest"); ?>" target="_blank">
					<i class="fa fa-pinterest-p"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'youtube' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("youtube"); ?>" target="_blank">
					<i class="fa fa-youtube-play"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'vimeo' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("vimeo"); ?>" target="_blank">
					<i class="fa fa-vimeo"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'bloglovin' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("bloglovin"); ?>" target="_blank">
					<i class="fa fa-heart"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'tumblr' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("tumblr"); ?>" target="_blank">
					<i class="fa fa-tumblr"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'lastfm' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("lastfm"); ?>" target="_blank">
					<i class="fa fa-lastfm"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'google_plus' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("google_plus"); ?>" target="_blank">
					<i class="fa fa-google-plus"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'etsy' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("etsy"); ?>" target="_blank">
					<i class="fa fa-etsy"></i>
				</a>
			</li>

			<?php
	        elseif( get_row_layout() == 'linkedin' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("linkedin"); ?>" target="_blank">
					<i class="fa fa-linkedin"></i>
				</a>
			</li>

			<?php
			elseif( get_row_layout() == 'custom_social' ): ?> 

	        	<li>
				<a href="<?php the_sub_field("custom_social"); ?>" target="_blank">
					<i class="fa <?php the_sub_field("custom_font_awesome"); ?>"></i>
				</a>
			</li>

	        <?php endif;
	    endwhile;
	endif; ?>
	<li>
		<i class="fa fa-search" id="search-toggle"></i>
</li>
</ul>
	<div class="clarity-search-form">
			<i class="fa fa-close search-x"></i>
			<?php get_search_form(); ?>
		</div>
		</div><!-- .row -->
		</nav><!-- #site-navigation -->
		<?php else: ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<h1 class="site-title no-logo" id="site-title">
				<?php bloginfo( 'name' ); ?>
			</h1>
		</a>
	<?php endif; ?>
		</div>	


		





		
	</header><!-- #masthead -->

	


