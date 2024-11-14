<aside class="sidebar">
    <div class="popular-posts">
        <h3 class="popular-posts__title blog-title">Популярные новости</h3>
        <ul class="popular-posts__list list-reset">


            <?php
            $args = array( 'posts_per_page' => 3 );
            $myposts = pvc_get_most_viewed_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            
                <li class="popular-posts__item">
                    <article class="blog-post popular-posts__article">
                        <h3 class="blog-post__title blog-title">
                            <a href="<?php the_permalink(); ?>" class="blog-post__link">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <time class="blog-post__date"><?php echo get_the_date( 'j M Y ' ); ?></time>
                    </article>
                </li>
            <?php
            endforeach;
            wp_reset_postdata(); ?>

        </ul>
    </div>
    <div class="subscribe">
        <?php echo do_shortcode( '[newsletter_form form="1"]' ); ?>
    </div>
</aside>