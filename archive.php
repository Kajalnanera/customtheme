<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
                // Display the archive title and description
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                
                // Check for custom post type and load the corresponding template part
                if ( get_post_type() == 'Team' ) {
                    get_template_part( 'template-parts/content', 'your_custom_post_type' );
                } else {
                    get_template_part( 'template-parts/content', get_post_type() );
                }
            
            endwhile;

            // Display navigation to next/previous set of posts
            the_posts_navigation();

        else :

            // If no content, load the "no content" template
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
