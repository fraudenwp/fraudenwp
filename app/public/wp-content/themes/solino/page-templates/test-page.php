<?php
/*
Template Name: Form Test - Page
Template Post Type: page
*/
get_header(); ?>

<style>
	.video-content.content { height: 104vh; }
	.video-content:before { display: none; }
	.page-template-test-page form textarea { height: 6rem; }
</style>

<div class="start-content">
	<figure>
		<img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/pages/system/system.jpg">
	</figure>
	<div class="start-caption">
		<div class="caption fadeup">
			<div class="info">
				<span>
					<div class="split-text">
						Güneş Enerjisi Sistemleri Nasıl Çalışır?
					</div>
				</span>
				
			</div>
		</div>
	</div>
</div>


<?php get_template_part('partials/new-form'); ?>

<?php get_footer(); ?>
