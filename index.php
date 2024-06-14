<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Your_Custom_Theme
 */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        // Your loop content goes here
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <?php
                // Output post meta information, categories, tags, etc.
                ?>
            </footer>
        </article>
        <?php
    endwhile;

    the_posts_pagination();

else :
    ?>
    <p><?php esc_html_e('No content found', 'your-custom-theme'); ?></p>
    <?php
endif;

get_footer();
