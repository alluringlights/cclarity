<?php get_header(); ?>







<div class="container">
	<div class="row">
		<div class="col-md-9">


		    <?php
			//$args = array(
		        //'posts_per_page' => -1
		    //);
		    // $query = new WP_Query();
		    //while ( $query->have_posts() ) : $query->the_post(); 
		    //$terms = get_the_terms($post->ID, 'project_type');
		    

		    ?>
<?php if ( have_posts() ) : ?> 
<!-- <div class="row"> -->
<div class="grid">

	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	



	<?php while ( have_posts() ) : the_post(); ?>


			<div class="col-sm-6 grid-item wow fadeIn" data-wow-duration="1s" id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<a href="<?php the_permalink(); ?>" class="fade-underline">	
			<h2><?php the_title(); ?></h2>
		</a>
		<p><?php echo get_the_date(); ?></p>
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
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
	<?php endif; ?>
	<?php
	    if( strpos( $post->post_content, '<!--more-->' ) ) {
	        the_content();
	    }
	    else {
	        the_excerpt();
	    }
	?>
	<!-- <div class="fade-out"></div> -->
	<p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
				
			</div>

			<?php endwhile; ?> 

<!-- </div> -->
</div>


			<?php //posts_nav_link(); ?>
			<div class="col-xs-6 pagination"><?php next_posts_link('older'); ?></div>
			<div class="col-xs-6 pagination"><?php previous_posts_link('newer'); ?></div>


		<?php else: ?>
			<h1>Coming soon!</h1>
			<p>Check back here shortly.</p>


			<?php endif; ?>



</div>



<div class="col-md-3">
	<?php get_sidebar(); ?>
</div>
</div>

</div>


<?php if (get_field( 'parallax_section_1', 'option') ) : 

while ( has_sub_field( 'parallax_section_1', 'option') ) :
	if( get_row_layout() == 'parallax_section' ): 
	$innerimg = get_sub_field('inner_image');
		?>

<div class="parallax-window parallax-image-1" data-parallax="scroll" data-image-src="<?php the_sub_field( 'parallax_image' ); ?>">
	<?php if ( get_sub_field( 'text' ) || get_sub_field( 'inner_image' ) ) : 

	?>
	<div class="container">
		<div class="row">
			<?php if ( get_sub_field( 'text' ) && get_sub_field( 'inner_image' ) ) : ?>
			
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
				<?php if ($innerimg[height] > $innerimg[width]) : ?>
			<div class="img-circle portrait" style="margin-bottom:15px;">
				<img src="<?php echo $innerimg[url]; ?>" width="<?php echo $innerimg[height]/$innerimg[width]*100 ?>%">
			</div>
		<?php else : ?>
			<div class="img-circle landscape">
				<img src="<?php echo $innerimg[url]; ?>" width="<?php echo $innerimg[width]/$innerimg[height]*100 ?>%">
			</div>
		<?php endif; //conditional for image orientation ?>


			</div>
			<div class="col-sm-8 col-md-9">
				<div>
					<?php the_sub_field( 'text' ); ?>
				</div>
			</div>


		<?php elseif ( get_sub_field( 'text' ) && !get_sub_field( 'inner_image' ) ) : ?>
			
			
			<div class="col-sm-12">
				<div>
					<?php the_sub_field( 'text' ); ?>
				</div>
			</div>
		<?php else : ?> 

		<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<?php if ($innerimg[height] > $innerimg[width]) : ?>
			<div class="img-circle portrait">
				<img src="<?php echo $innerimg[url]; ?>" width="<?php echo $innerimg[height]/$innerimg[width]*100 ?>%">
			</div>
		<?php else : ?>
			<div class="img-circle landscape">
				<img src="<?php echo $innerimg[url]; ?>" width="<?php echo $innerimg[width]/$innerimg[height]*100 ?>%">
			</div>
		<?php endif; //conditional for image orientation ?>


			</div>
			

		<?php endif; //if text and image ?>
		</div>
	</div>

<?php endif; //if text or image?>





</div>
<?php endif; endwhile; endif; ?>



<?php get_footer(); ?>