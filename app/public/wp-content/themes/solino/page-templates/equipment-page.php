<?php
/*
Template Name: Equipment Page
Template Post Type: page
*/
get_header(); ?>

<section class="start-detail fadeup">
	<div class="head">
		<h1>
			<?php _e( 'Equipment', 'solino'); ?>
		</h1>
		<a href="#start" class="scroll-down fadeup">
			<i class="primary">
				<svg class="scroll-dowm" width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.36007 8.67112L5.76338 12.2681L5.76338 0H4.85867L4.85867 12.2681L1.26108 8.67142L0.621674 9.31054L5.31054 14L10 9.31054L9.36007 8.67112Z"/>
				</svg>
			</i>
		</a>
	</div>
</section>

<!--<div class="head-item type-3 fadeup">
	<small>
		DONANIMLARIMIZ
	</small>
</div>-->

<ul class="content-tab-menu fadeup">
	<li class="<?php if (is_page("inverter")) { echo "active"; } ?>">
		<a href="/inverter"><?php _e( 'Inverter', 'solino'); ?></a>
	</li>
	<li class="<?php if (is_page("batarya")) { echo "active"; } ?>">
		<a href="/batarya"><?php _e( 'Battery', 'solino'); ?></a>
	</li>
	<li class="<?php if (is_page("panel")) { echo "active"; } ?>">
		<a href="/panel"><?php _e( 'Panel', 'solino'); ?></a>
	</li>
	<!--<li class="<?php if (is_page("pil")) { echo "active"; } ?>">
		<a href="/pil">Pil</a>
	</li>-->
</ul>

<?php the_field('equip_content'); ?>


<?php if(ICL_LANGUAGE_CODE=='en'): ?>
	<?php get_template_part('partials/form_en'); ?>
<?php elseif(ICL_LANGUAGE_CODE=='tr'): ?>
	<?php get_template_part('partials/form'); ?>
<?php endif; ?>

<?php get_footer(); ?>