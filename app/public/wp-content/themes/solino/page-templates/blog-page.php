<?php
/*
Template Name: Blog - Page
Template Post Type: page
*/
get_header(); ?>

<section class="start-detail fadeup">
	<div class="head">
		<h1>
			<?php _e( 'Blog', 'solino'); ?>
		</h1>
		
	</div>
</section>

<div class="head-item type-3 fadeup">
	
</div>

<div class="blog-grid">
    <div class="container">
        <div class="blog-posts">
            <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 9,
                'paged' => $paged
            );
            $blog_query = new WP_Query($args);
            
            if ($blog_query->have_posts()) : 
                while ($blog_query->have_posts()) : $blog_query->the_post(); 
            ?>
                <article class="blog-card animate-fade-up">
                    <div class="blog-card-inner">
                        <a href="<?php the_permalink(); ?>" class="blog-card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'featured-image')); ?>
                            <?php endif; ?>
                            <div class="image-overlay"></div>
                        </a>
                        <div class="blog-card-content">
                            <div class="post-meta">
                                <span class="post-date"><?php echo get_the_date('j F Y'); ?></span>
                            </div>
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="read-more">
                                <?php _e('Devamını Oku', 'solino'); ?>
                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.3442 10.4204L9.63404 9.70995L13.6304 5.71264L-0.000867334 5.71264L-0.000867378 4.7074L13.6304 4.7074L9.63371 0.711078L10.3442 4.30225e-05L15.5547 5.21056L10.3442 10.4204Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            <?php 
                endwhile;
                wp_reset_postdata();
            endif; 
            ?>
        </div>
    </div>
</div>

<div class="pagination">
    <?php
    echo paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $blog_query->max_num_pages,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type' => 'list',
        'end_size' => 3,
        'mid_size' => 3
    ));
    ?>
</div>

<style>
.blog-hero {
    padding: 100px 0;
    background: linear-gradient(to right, #f8f9fa, #e9ecef);
    text-align: center;
}

.blog-title {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    color: #333;
}

.blog-description {
    font-size: 1.2rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

.blog-grid {
    padding: 50px 0;
    width: 100%;
}

.blog-posts {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    max-width: 2000px;
    margin: 0 auto;
    padding: 0 40px;
    width: 100%;
}

.blog-card {
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    transition: transform 0.3s ease;
    background: #fff;
    min-height: 480px;
    display: flex;
    flex-direction: column;
}

.blog-card:hover {
    transform: translateY(-10px);
}

.blog-card-image {
    position: relative;
    display: block;
    aspect-ratio: 16/12;
    overflow: hidden;
    flex: 0 0 auto;
}

.featured-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.blog-card:hover .featured-image {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.3));
}

.blog-card-content {
    padding: 25px 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
    min-height: 180px;
}

.post-meta {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-bottom: 12px;
}

.post-date {
    font-size: 1.2rem;
    font-weight: 500;
    color: #555;
}

.post-title {
    font-size: 2.2rem;
    line-height: 1.2;
    margin-bottom: 12px;
    font-weight: 600;
}

.post-title a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.post-title a:hover {
    color: #007bff;
}

.post-excerpt {
    font-size: 1.3rem;
    line-height: 1.5;
    color: #444;
    margin-bottom: 12px;
    flex-grow: 1;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.read-more {
    display: inline-flex;
    align-items: center;
    color: #333;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.3rem;
    padding: 8px 0;
    transition: all 0.3s ease;
}

.read-more svg {
    width: 22px;
    height: 15px;
    margin-left: 12px;
    transition: transform 0.3s ease;
}

.read-more:hover {
    color: #007bff;
}

.read-more:hover svg {
    transform: translateX(8px);
}

.animate-fade-up {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.6s ease forwards;
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 1800px) {
    .blog-posts {
        max-width: 1700px;
        gap: 30px;
    }
    
    .blog-card {
        min-height: 450px;
    }
    
    .blog-card-content {
        min-height: 160px;
    }
    
    .post-title {
        font-size: 2.2rem;
    }
}

@media (max-width: 1400px) {
    .blog-posts {
        grid-template-columns: repeat(2, 1fr);
        max-width: 1200px;
        gap: 30px;
    }
    
    .blog-card {
        min-height: 420px;
    }
    
    .post-title {
        font-size: 2rem;
    }
    
    .post-excerpt {
        font-size: 1.3rem;
    }
}

@media (max-width: 768px) {
    .blog-posts {
        grid-template-columns: 1fr;
        padding: 0 25px;
        gap: 30px;
    }
    
    .blog-card {
        min-height: 400px;
    }
    
    .blog-card-content {
        min-height: 140px;
        padding: 20px;
    }
    
    .post-title {
        font-size: 1.8rem;
    }
    
    .post-excerpt {
        font-size: 1.2rem;
    }
    
    .post-date {
        font-size: 1.2rem;
    }
    
    .read-more {
        font-size: 1.3rem;
    }
}

.pagination {
    text-align: center;
    margin: 60px auto;
    padding: 20px;
    width: 100%;
    max-width: 2000px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pagination ul {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    gap: 15px;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.pagination a,
.pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 50px;
    height: 50px;
    padding: 0 20px;
    background: #FFC107;
    color: #333;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-size: 1.6rem;
    font-weight: 600;
    border: none;
}

.pagination a:hover {
    background: #FFB300;
    color: #333;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 193, 7, 0.3);
}

.pagination .current {
    background: #FFB300;
    color: #333;
    box-shadow: 0 4px 12px rgba(255, 193, 7, 0.3);
}

.pagination .dots {
    border: none;
    background: transparent;
    min-width: 30px;
    padding: 0;
}

.pagination .prev,
.pagination .next {
    padding: 0 25px;
}

@media (max-width: 1800px) {
    .blog-posts {
        max-width: 1700px;
        gap: 30px;
    }
}

@media (max-width: 1400px) {
    .blog-posts {
        grid-template-columns: repeat(2, 1fr);
        max-width: 1200px;
        gap: 30px;
    }
}

@media (max-width: 768px) {
    .blog-posts {
        grid-template-columns: 1fr;
        padding: 0 25px;
        gap: 30px;
    }
    
    .pagination a,
    .pagination span {
        min-width: 45px;
        height: 45px;
        padding: 0 15px;
        font-size: 1.4rem;
    }
    
    .pagination .prev,
    .pagination .next {
        padding: 0 20px;
    }
}
</style>

<?php if(ICL_LANGUAGE_CODE=='en'): ?>
    <?php get_template_part('partials/form_en'); ?>
<?php elseif(ICL_LANGUAGE_CODE=='tr'): ?>
    <?php get_template_part('partials/form'); ?>
<?php endif; ?>

<?php get_footer(); ?>