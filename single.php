<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        while (have_posts()) : the_post(); ?>
        
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php
                    if ( has_post_thumbnail() ) {
                        echo '<div class="featured-image">';
                        the_post_thumbnail('full');
                        echo '</div>';
                    }
                    ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on">Posted on <?php echo get_the_date(); ?></span>
                        <span class="byline"> by <?php the_author_posts_link(); ?></span>
                    </div>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'textdomain'),
                        'after' => '</div>',
                    ));
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <div class="social-share">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Share on Facebook</a>
                        <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank">Share on Twitter</a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank">Share on LinkedIn</a>
                    </div>
                    <?php
                    the_post_navigation(array(
                        'prev_text' => '<span class="nav-subtitle">' . __('Previous:', 'textdomain') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . __('Next:', 'textdomain') . '</span> <span class="nav-title">%title</span>',
                    ));

                    edit_post_link(
                        sprintf(
                            wp_kses(
                                __('Edit <span class="screen-reader-text">%s</span>', 'textdomain'),
                                array('span' => array('class' => array()))
                            ),
                            get_the_title()
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </footer><!-- .entry-footer -->

            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
