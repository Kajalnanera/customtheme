<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium'); // You can specify a size, e.g., 'thumbnail', 'medium', 'large', 'full', or any custom size
        }
        ?>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        // Check the post type and display different content based on it
        $post_type = get_post_type();

        if ( $post_type == 'post' ) {
            // Content for standard posts
            the_content();
        } elseif ( $post_type == 'Team' ) {
            // Content for custom post type
            the_content();

            // Additional custom fields or meta boxes can be displayed here
            $designation = get_post_meta( get_the_ID(), 'team_designation', true );
            if ( $designation ) {
                echo '<div class="custom-field">' . esc_html( $designation ) . '</div>';
            }
        } else {
            // Default content for other post types
            the_content();
        }
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        // You can add common footer content for all post types here
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
