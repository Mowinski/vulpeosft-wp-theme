<?php get_header(); ?>

<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
    <div id="main" class="site-main" role="main">
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h3 class="font-semi-bold"><?php echo __("What's new"); ?></h3>
            </div>
        </div>
        <div class="row">
            <?php get_template_part('template-parts/news'); ?>
        </div>
        <?php
//        if ( have_posts() ) :
//            while ( have_posts() ) : the_post();
//                /*
//                 * Include the Post-Format-specific template for the content.
//                 * If you want to override this in a child theme, then include a file
//                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//                 */
//                get_template_part( 'template-parts/content', get_post_format() );
//
//            endwhile;
//
//            the_posts_navigation();
//        else :
//            get_template_part( 'template-parts/content', 'none' );
//        endif;
        ?>
    </div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
