<?php
/**
 * the main template file.
 */

 get_header();
 ?>
 <div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/post/content', get_post_format() );
            endwhile;
            echo paginate_links( [
                'perv_text' => esc_html__( 'Prev', 'Franko' ),
                'next_text' => esc_html__( 'Next', 'Franko' ),
            ] );
            else :
                get_template_part( 'template-parts/page/content', 'none' );
            endif;
            ?>
            </main>
            <?php get_sidebar(); ?>
        </div>
        <?php           
 get_footer();