<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9">





<?php if ( have_posts() ) : ?>
	<h1 class="category-title">Posts about <?php single_cat_title(); ?></h1>
	<?php while ( have_posts() ) : the_post();?>


<div class="row">
	<div class="row">
<div class="col-sm-12 archive-post" id="post-<?php the_ID(); ?>">
	
		<div class="col-xs-4 col-sm-3">
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('thumbnail'); ?>
	</a>
</div>
		<div class="post-info col-xs-8 col-sm-9">
		<a href="<?php the_permalink(); ?>">	
			<h2><?php the_title(); ?></h2>
		</a>
		<p class="date"><?php echo get_the_date(); ?></p>

	
	<?php the_excerpt(); ?>

<a href="<?php the_permalink(); ?>">Read More</a>
</div>
				
			</div>
</div>
</div>

			<?php endwhile; ?> 

			</div>

			<div class="col-sm-3">
				<?php get_sidebar(); ?>
			</div>

	</div>
</div>
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>


		<?php else: ?>

			<h1>Sorry!</h1>

			<p>Nothing matched your search terms. You can try again or use one of the navigation links above.</p>
			<?php get_search_form(); ?>

			<?php endif;?>

	

		</div>
	</div>
</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>