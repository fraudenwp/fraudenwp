<?php
/*
Template Name: News - Page
Template Post Type: page
*/
get_header(); ?>


<section class="start-detail fadeup">
	<div class="head">
		<h1>
			<?php _e( 'News From Us', 'solino'); ?>
		</h1>
		
	</div>
</section>

<div class="head-item type-3 fadeup">
	
</div>

<div class="news">
	<!--
	<ul class="fadeup">
		<li class="active">
			<a href="/">2023</a>
		</li>
		<li>
			<a href="/">2022</a>
		</li>
		<li>
			<a href="/">2021</a>
		</li>
	</ul>
	-->

	<div class="news-items">
	
		<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                        
			<?php if ( $wpb_all_query->have_posts() ) : ?>

				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					
					<a href="<?php the_permalink(); ?>" class="card-item item-1">
                        <div class="caption">
                            <span>
                                <?php the_title(); ?>
                            </span>
                            <div class="info">
                                <small class="date">
                                    <?php echo get_the_date( 'j F Y' ); ?>
                                </small>
                                <small>
                                    #<?php _e( 'solarenergy', 'solino'); ?>
                                </small>
                            </div>
                            <i class="primary">
                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.3442 10.4204L9.63404 9.70995L13.6304 5.71264L-0.000867334 5.71264L-0.000867378 4.7074L13.6304 4.7074L9.63371 0.711078L10.3442 4.30225e-05L15.5547 5.21056L10.3442 10.4204Z" />
                                    </svg>
                                </i>
                        </div>
                        <figure>
							<?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
							<?php endif; ?>
                        </figure>
                    </a>

				<?php endwhile;
					wp_reset_postdata();
				?>

		<?php else : endif; ?>

	</div>
	
	<!--
	<div class="pagination border">
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
	</div>
	-->
</div>

<?php if(ICL_LANGUAGE_CODE=='en'): ?>
	<?php get_template_part('partials/form_en'); ?>
<?php elseif(ICL_LANGUAGE_CODE=='tr'): ?>
	<?php get_template_part('partials/form'); ?>
<?php endif; ?>

<?php get_footer(); ?>
