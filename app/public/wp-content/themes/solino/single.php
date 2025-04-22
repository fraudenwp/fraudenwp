<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<section class="start-detail center fadeup">
		<?php if(ICL_LANGUAGE_CODE=='en'): ?>
			<a class="back" href="/en/haberler">
				<svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
					<mask id="mask0_25_4242" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="14" height="10">
					<path d="M4.68946 0.296387L5.32858 0.932068L1.73189 4.50866L14 4.50866L14 5.4081L1.73189 5.40809L5.32888 8.9838L4.68946 9.62L-4.07522e-07 4.9579L4.68946 0.296387Z" fill="white"/>
					</mask>
					<g mask="url(#mask0_25_4242)">
					<path d="M0 0.296387L14 0.296388L14 9.62L-8.15096e-07 9.62L0 0.296387Z" fill="black"/>
					</g>
				 </svg> 
				Back
			</a>
		<?php elseif(ICL_LANGUAGE_CODE=='tr'): ?>
			<a class="back" href="/haberler">
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
		<?php endif; ?>
		
		<div class="head">
			<h1>
				<?php the_title(); ?>
			</h1>
		</div>
		<div class="bottom fadeup">
			<?php echo get_the_date( 'j F Y' ); ?>
			
			<div class="share">
				<!--
				PAYLAŞ
				<ul>
					<li>
						<a href="/">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"></path></svg>
							</i>
						</a>
					</li>
					<li>
						<a href="/">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22.2125 5.65605C21.4491 5.99375 20.6395 6.21555 19.8106 6.31411C20.6839 5.79132 21.3374 4.9689 21.6493 4.00005C20.8287 4.48761 19.9305 4.83077 18.9938 5.01461C18.2031 4.17106 17.098 3.69303 15.9418 3.69434C13.6326 3.69434 11.7597 5.56661 11.7597 7.87683C11.7597 8.20458 11.7973 8.52242 11.8676 8.82909C8.39047 8.65404 5.31007 6.99005 3.24678 4.45941C2.87529 5.09767 2.68005 5.82318 2.68104 6.56167C2.68104 8.01259 3.4196 9.29324 4.54149 10.043C3.87737 10.022 3.22788 9.84264 2.64718 9.51973C2.64654 9.5373 2.64654 9.55487 2.64654 9.57148C2.64654 11.5984 4.08819 13.2892 6.00199 13.6731C5.6428 13.7703 5.27232 13.8194 4.90022 13.8191C4.62997 13.8191 4.36771 13.7942 4.11279 13.7453C4.64531 15.4065 6.18886 16.6159 8.0196 16.6491C6.53813 17.8118 4.70869 18.4426 2.82543 18.4399C2.49212 18.4402 2.15909 18.4205 1.82812 18.3811C3.74004 19.6102 5.96552 20.2625 8.23842 20.2601C15.9316 20.2601 20.138 13.8875 20.138 8.36111C20.138 8.1803 20.1336 7.99886 20.1256 7.81997C20.9443 7.22845 21.651 6.49567 22.2125 5.65605Z"></path></svg>
							</i>
						</a>
					</li>
					<li>
						<a href="/">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path></svg>
							</i>
						</a>
					</li>
				</ul>
				-->
			</div>
			<?php if(ICL_LANGUAGE_CODE=='en'): ?>
			#SOLARENERGY
			<?php elseif(ICL_LANGUAGE_CODE=='tr'): ?>
			#GUNESENERJISI
			<?php endif; ?>
		</div>
	</section>

	<section class="fadeup">
		<div class="container">
			<div class="blog-detail">
				<div class="detail fadeup">
				
					<?php if( get_field('cont_img') ): ?>
						<figure>
							<img src="<?php the_field('cont_img'); ?>" alt="" />
						</figure>
					<?php endif; ?>

					<?php the_content(); ?>
					
					<?php if( get_field('video_embed') ): ?>
					<div class="video-item">
						<div class="video">
							<?php the_field('video_embed'); ?>
						</div>
					</div>
					<?php endif; ?>
					
				</div>
			 </div>
		</div>
	</section>
	
	<!--
	<div class="carousel-slider fadeup">
		<div class="swiper cards news-carousel-swiper">
			<div class="swiper-wrapper">
			
				<?php
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?> 
					
						<a href="<?php the_permalink() ?>" class="swiper-slide item">
							<figure class="image-parallax aspect-1-1">
								<?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<img data-speed=".5" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
								<?php endif; ?>
								<figcaption class="fadeup">
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg>
									</i>
									<div class="info">
										<span>
											<?php the_title(); ?>
										</span>
										<div class="news-info">
											<p class="date"><?php echo get_the_date( 'j F Y' ); ?></p>
											<p class="date">#gunesenerjisi</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</a>

				<?php } wp_reset_postdata(); ?>

			</div>
		</div>
		
		<div class="slide-control">
			<div class="swiper-button-prev">
				<svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
					<mask id="mask0_5_1376" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="9">
					<path d="M5.21051 0.725098L5.92065 1.28734L1.92432 4.45074L15.5556 4.45074L15.5556 5.24626L1.92432 5.24626L5.92098 8.40887L5.21051 8.97157L-9.1092e-07 4.84807L5.21051 0.725098Z" fill="white"/>
					</mask>
					<g mask="url(#mask0_5_1376)">
					<path d="M0 0.725098L15.5556 0.7251L15.5556 8.97157L-1.82196e-06 8.97157L0 0.725098Z" fill="black"/>
					</g>
				 </svg>   
			</div>
			<div class="swiper-button-next">
				<svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
					<mask id="mask0_5_1369" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="9">
					<path d="M10.3452 8.97168L9.63502 8.40944L13.6313 5.24604L0.000109467 5.24604L0.000109423 4.45052L13.6313 4.45052L9.63468 1.2879L10.3452 0.725206L15.5557 4.8487L10.3452 8.97168Z" fill="white"/>
					</mask>
					<g mask="url(#mask0_5_1369)">
					<path d="M15.5557 8.97168L0.000109673 8.97168L0.000109217 0.725206L15.5557 0.725205L15.5557 8.97168Z" fill="black"/>
					</g>
				</svg>
			</div>
		</div>
	</div>
	-->

    <?php endwhile; endif; ?>

<?php get_footer(); ?>