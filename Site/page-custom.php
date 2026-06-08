<?php
/**
 * Template Name: Custom Full Width (Neonspec)
 * Description: Full-width page template for custom neonspec design pages
 *
 * This template uses custom header and footer without Kadence's default styling.
 * Perfect for the redesigned SmarterNerd pages.
 *
 * @package Kadence_Child_SmarterNerd
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Use custom header with neonspec styling
get_header( 'custom' );
?>

    <!-- Page Content -->
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php
                    the_content();
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kadence' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </main>

<?php
// Use custom footer with neonspec styling
get_footer( 'custom' );
