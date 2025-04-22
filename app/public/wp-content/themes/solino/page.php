<?php
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="start-detail center fadeup" id="post-<?php the_ID(); ?>">
	<a class="back" href="<?php echo get_home_url() ?>">
		<svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
			<mask id="mask0_25_4242" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="14" height="10">
				<path d="M4.68946 0.296387L5.32858 0.932068L1.73189 4.50866L14 4.50866L14 5.4081L1.73189 5.40809L5.32888 8.9838L4.68946 9.62L-4.07522e-07 4.9579L4.68946 0.296387Z" fill="white"/>
			</mask>
			<g mask="url(#mask0_25_4242)">
				<path d="M0 0.296387L14 0.296388L14 9.62L-8.15096e-07 9.62L0 0.296387Z" fill="black"/>
			</g>
		</svg> 
		Geri Dön
	</a>
	<div class="head">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>
	<div class="bottom">
		<?php echo get_the_date( 'j F Y' ); ?>
		<div class="share"></div>
		#GUNESENERJISI
	</div>
</section>

<section class="fadeup">
	<div class="container">
		<div class="blog-detail">
			<div class="detail fadeup">
				<?php if( get_field('det_img') ): ?>
				<figure>
					<img src="<?php the_field('det_img'); ?>" alt="" />
				</figure>
				<?php endif; ?>

				<?php the_content(); ?>   			
			</div>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>


<?php get_footer(); ?>