<?php
/*
Template Name: Faq (SSS) - Page
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
	<small>
		
	</small>
</div>

<section class="fadeup">
	<div class="faq container">
		<ul class="accordion-menu">
		
			<?php if( have_rows('sss') ): ?>
				<?php while( have_rows('sss') ): the_row(); ?>
					
					<li class="">
						<div class="dropdownlink">
							<?php the_sub_field('sss_tit'); ?>
							<i class="primary">
								<div class="icon-open">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20.959 10.9574C20.959 10.7456 20.7725 10.5602 20.5594 10.5602H11.2371V1.29222C11.2371 1.08038 11.0506 0.89502 10.8375 0.89502C10.6244 0.89502 10.438 1.08038 10.438 1.29222V10.5602H1.38195C1.16887 10.5602 0.982422 10.7456 0.982422 10.9574C0.982422 11.1693 1.16887 11.3546 1.38195 11.3546H10.438V20.3578C10.438 20.5697 10.6244 20.755 10.8375 20.755C11.0506 20.755 11.2371 20.5697 11.2371 20.3578V11.3546H20.5594C20.7725 11.3546 20.959 11.1693 20.959 10.9574Z" stroke="black" stroke-miterlimit="10"/>
									</svg>
								</div>
								<div class="icon-close">
									<svg width="22" height="2" viewBox="0 0 22 2" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.149902" y="0.138306" width="21.6413" height="1.66471" rx="0.832356" fill="black"/>
									</svg>
								</div>
							</i>
						</div>
						<ul class="submenuItems" style="display: none;">
							<li>
								<p>
									<?php the_sub_field('sss_cont'); ?>
								</p>
							</li>
						</ul>
					</li>
					
				<?php endwhile; ?>
			<?php endif; ?>

		</ul>
	</div>
</section>

<?php if(ICL_LANGUAGE_CODE=='en'): ?>
	<?php get_template_part('partials/form_en'); ?>
<?php elseif(ICL_LANGUAGE_CODE=='tr'): ?>
	<?php get_template_part('partials/form'); ?>
<?php endif; ?>

<?php get_footer(); ?>
