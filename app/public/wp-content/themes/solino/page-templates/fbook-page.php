<?php
/*
Template Name: FlipBook - Page
Template Post Type: page
*/
get_header(); ?>


<section class="start-detail center fadeup">
	<div class="head">
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="fadeup">
	<div class="blog-detail container bn">
		<div class="detail fadeup" style="flex-direction: row; justify-content: center;">

			 <?php the_content(); ?>
			
		</div>
	 </div>
</section>

<?php get_footer(); ?>