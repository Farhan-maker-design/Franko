<?php
/**
 * Template part for displaying a messsage that posts cannot be found
 */
?>
<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html__e( 'Nothing Found', 'Franko' ); ?></h1>
</header>
<div class="page-content">
    <?php
    if ( is_home() && current_user_can( 'publish_posts' ) ) :
        printf(
            '<p>' . wp_kses(
                /* translators: 1: link to WP admin new post page. */
                __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'Franko' ),
                array(
                    'a' => array(
                        'href' => array(),
                    ),
                )
        ). '</p>',
                esc_url( admin_url( 'post-new.php') )
                );
                elseif ( is_search() ) :
                    ?>
                    <p><?php esc_html__e( 'Sorry, but nothing matched yoursearch terms. Please try again with some different keywords.', 'Franko' ); ?></p>
                    <?php
                    get_search_form();

                else:
                    ?>
                    <p><?php esc_html__e( 'It seems we can&rsquo;re looking for. Perhaps searching can help.', 'Franko' ); ?></p>
                    <?php
                    get_search_form();
                endif;
                ?>
                </div>
            </section>
            