<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9">





			<h1>404 (Not Found)</h1>
			<p>There's nothing here. You may have entered the address incorrectly or followed a broken link. Would you like to try a search?</p>
			<?php get_search_form(); ?>

	

		</div>
		<div class="col-sm-3">
				<?php get_sidebar(); ?>
			</div>
	</div>
</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>