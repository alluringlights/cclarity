<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9">





<?php if ( have_posts() ) : ?>

<h1>Search results for <em><?php the_search_query(); ?></em>.</h1>

<div class="grid">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>

	<?php while ( have_posts() ) : the_post(); ?>


<div class="col-sm-6 grid-item" id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<a href="<?php the_permalink(); ?>">	
			<h2><?php the_title(); ?></h2>
		</a>
		<p><?php echo get_the_date(); ?></p>
	</header>
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
	</a>
	<?php the_excerpt(); ?>
	<div class="fade-out"></div>
	<p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
				
			</div>


			<?php endwhile; ?> 

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