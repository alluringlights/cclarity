<?php get_header(); ?>

	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
				<?php the_title('<h1>', '</h1>'); ?>
				<?php the_post_thumbnail(); ?>
			</header>
			<?php the_content(); ?>
		
			


			<?php endwhile; // end of the loop. ?>




</div>



</div>
</div>
<?php get_footer(); ?>