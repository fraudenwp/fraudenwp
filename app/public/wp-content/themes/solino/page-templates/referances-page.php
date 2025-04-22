<?php
/*
Template Name: Referances - Page
Template Post Type: page
*/
get_header(); ?>


<section class="start-detail fadeup">
	<div class="head">
		<h1>
			<?php the_title(); ?>
		</h1>
		
	</div>
</section>

<div class="head-item type-3 fadeup">

</div>

<section class="fadeup">
	<div class="cards references row">
	
		<?php if( have_rows('referances') ): ?>
			<?php while( have_rows('referances') ): the_row(); ?>
			
				<div class="item col-6 fadeup">
					<figure>
						<img src="<?php the_sub_field('ref_img'); ?>" alt="<?php the_sub_field('ref_tit'); ?>" />
						<figcaption>
							<div class="info">
								<span>
									<?php the_sub_field('ref_tit'); ?>
								</span>
								<div class="items">
									<div class="item">
										<small>
											<?php _e( 'Installed Capacity', 'solino'); ?>:<br>
											<strong><?php the_sub_field('ref_kwp'); ?></strong>
										</small>

									</div>
									<div class="item">
										<small>
											<?php _e( 'Estimated Output', 'solino'); ?>:<br>
											<strong><?php the_sub_field('ref_waitkwp'); ?></strong>
										</small>
									</div>
								</div>
							</div>
						</figcaption>
					</figure>
				</div>
				
			<?php endwhile; ?>
		<?php endif; ?>
		
	</div>

	<!-- <div class="pagination border">
		<a href="/" class="prev">
			<svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
				<mask id="mask0_25_4185" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="14" height="10">
				<path d="M4.68946 0.296387L5.32858 0.932068L1.73189 4.50866L14 4.50866L14 5.4081L1.73189 5.40809L5.32888 8.9838L4.68946 9.62L-4.07522e-07 4.9579L4.68946 0.296387Z" fill="white"/>
				</mask>
				<g mask="url(#mask0_25_4185)">
				<path d="M0 0.296387L14 0.296388L14 9.62L-8.15096e-07 9.62L0 0.296387Z" fill="black"/>
				</g>
				</svg>
		</a>
		<a href="/">1</a>
		<a href="/">2</a>
		<a href="/">3</a>
		<a href="/" class="next">
			<svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
				<mask id="mask0_25_4174" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="10">
				<path d="M9.31151 9.62L8.67239 8.98431L12.2691 5.40772L0.000976562 5.40772V4.50829L12.2691 4.50829L8.67209 0.932579L9.31151 0.296381L14.001 4.95848L9.31151 9.62Z" fill="white"/>
				</mask>
				<g mask="url(#mask0_25_4174)">
				<path d="M14.001 9.62L0.000976562 9.62L0.000976563 0.296381L14.001 0.296381L14.001 9.62Z" fill="black"/>
				</g>
			</svg>
		</a>
	</div> -->
</section>


<?php if(ICL_LANGUAGE_CODE=='en'): ?>
	<?php get_template_part('partials/form_en'); ?>
<?php elseif(ICL_LANGUAGE_CODE=='tr'): ?>
	<?php get_template_part('partials/form'); ?>
<?php endif; ?>

<?php get_footer(); ?>
