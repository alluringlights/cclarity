	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php if (get_field('logo', 'option') ): 
			$logo = get_field('logo', 'option'); ?>
<img src="<?php echo $logo[url]; ?>" id="footer-logo">
<?php endif; ?>


<?php if ( is_active_sidebar('footer') ) : ?>

    <ul class="footer-widgets clearfix">

        <?php dynamic_sidebar('footer'); ?>

    </ul>

<?php endif; ?>



<p>Copyright &copy; <span class="current-year"></span> Hayley Ann Watters. All rights reserved.</p>

<?php
	if( get_field('social_icons', 'option') ): ?>

	<ul class="social-links">

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
	<p class="top-link"><a href="#top">Back to top</a></p>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>