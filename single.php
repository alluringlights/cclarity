<?php get_header(); ?>

	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
				<?php the_title('<h1>', '</h1>'); ?>
				<?php the_date('F j, Y', '<p>', '</p>'); ?>
				<?php
					if (count(get_the_category()) > 0) { ?>
					<ul class="post-categories">
					<?php
					foreach (get_the_category() as $category) {
			    	if ( $category->name !== 'uncategorized' ) :
			        echo '<li><a href="' . get_category_link($category->term_id) . '">' .$category->name . '</a></li>';
			    	endif;
			    	} ?>
			    </ul>
					<?php 
				}
					?>
				<?php the_post_thumbnail(); ?>
			</header>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<div class="social-sharing wow fadeInUp">
				<p>Share this post</p>
			<ul>
			<li>
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" onclick="javascript:window.open(this.href,
			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php $bitly = getBitly(get_permalink($post->ID)); echo $bitly ?> via @SincerelyHayley" onclick="javascript:window.open(this.href,
			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>&description=<?php the_title(); ?>" onclick="javascript:window.open(this.href,
			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-pinterest"></i>
				</a>
			</li>
			<li>
				<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-google-plus"></i>
				</a>
			</li>
			<li>
				<a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
			'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-envelope"></i>
				</a>
			</li>
		</ul>
	</div><!-- social sharing -->
			


			
					<div class="row">
					<?php 
					$previousPost = get_previous_post();
                	$previousthumbnail = get_the_post_thumbnail($previousPost->ID, 'thumbnail');
                	$nextPost = get_next_post();
                	$nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'thumbnail');
                	?>


                	<?php

                	if ( get_next_post_link() ) : ?>
                	<div class="next-nav">
                	<p>Next Post</p>
                	<?php next_post_link( '%link', '%title' ); ?>
                </div>
                	<?php
                	endif;

                	if ( get_previous_post_link() ) : ?>
					<div class="previous-nav">
					<p>Previous Post</p>
                	<?php previous_post_link( '%link', '%title' ); ?> 
                </div>
                <div class="clearfix"></div>
                	<?php endif; 
                	if ( get_next_post_link() ) : ?>

                	<div class="next-nav wow fadeIn">
                		<?php next_post_link( '%link', $nextthumbnail ); ?> 
                	</div>

                	<?php endif;

                	if ( get_previous_post_link() ) : ?>
					<div class="previous-nav wow fadeIn">
						<?php previous_post_link( '%link', $previousthumbnail ); ?> 
					</div>
					<?php endif; ?>

					
					






			
</div>
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>




</div>



</div>
</div>
<?php get_footer(); ?>