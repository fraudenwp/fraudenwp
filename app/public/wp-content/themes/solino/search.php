<?php
get_header(); ?>

<section class="detail-header">
    <div class="head-content">
        <h1 letters-fade-in="" text-split="">
            <strong>Search</strong>
            <i>Result</i>
        </h1>
        <p>
            <?php printf( esc_html__( '"%s" results', 'blankslate' ), get_search_query() ); ?>       
        </p>
    </div>
</section>

<section class="content-padding">

    <?php if ( have_posts() ) : ?>

    <div class="cards-list fadeup">
        <div class="row">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="col-4 item">
                    <figure class="image-cover image-h before">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                           <img class="imageScale" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>">
                            <figcaption>
                            </figcaption>
                        </a>
                    </figure>
                    <p>
                        <?php the_title(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="button border">
                        <span class="button-text">Discover More</span>
                        <div class="fill-container"></div>
                    </a>
                </div>

            <?php endwhile; ?>
            
        </div>
    </div>

    <?php else : ?>
    
    <h4><?php esc_html_e('Result Not Found', 'blankslate' ); ?></h4>
    
    <p><?php esc_html_e( 'No results were found matching the value you were looking for. Please try again.', 'blankslate' ); ?></p>

    <?php get_search_form(); ?>

    <?php endif; ?>

    <!--
    <div class="pagination light">
        <a href="" class="page-prev">
            <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.0146122 6.58285L0.0144272 5.88285L0.0146122 7.28285V6.58285ZM6.52068 0.386434C6.52068 3.32805 3.71087 5.88285 0.0146122 5.88285V7.28285C4.27806 7.28285 7.92068 4.2923 7.92068 0.386434H6.52068ZM0.0147972 7.28285C3.71072 7.28187 6.52068 9.83749 6.52068 12.7793H7.92068C7.92068 8.87354 4.27821 5.88172 0.0144272 5.88285L0.0147972 7.28285ZM1.47053 7.28249L18.25 7.28249V5.88249L1.47053 5.88249V7.28249Z" fill="#3E3E3E"/>
            </svg> 
        </a>
        <a href="" class="link">1</a>
        <a href="" class="link">2</a>
        <a href="" class="link">3</a>
        <a href="" class="link">...</a>
        <a href="" class="link">4</a>
        <a href="" class="page-next">
            <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.3973 6.82926L18.3974 7.52926L18.3973 6.12926V6.82926ZM11.8912 13.0257C11.8912 10.0841 14.701 7.52926 18.3973 7.52926V6.12926C14.1338 6.12926 10.4912 9.1198 10.4912 13.0257L11.8912 13.0257ZM18.3971 6.12926C14.7011 6.13024 11.8912 3.57462 11.8912 0.632813L10.4912 0.632813C10.4912 4.53857 14.1337 7.53039 18.3974 7.52926L18.3971 6.12926ZM16.9413 6.12962L0.161865 6.12962L0.161865 7.52962L16.9413 7.52962V6.12962Z" fill="#3E3E3E"/>
            </svg>
        </a>
    </div>
    -->
</section>


<?php get_template_part('partials/newslatter'); ?>

<?php get_footer(); ?>