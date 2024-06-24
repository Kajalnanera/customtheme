<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package customtheme
 */

get_header(); ?>

<div class="error-404 not-found">
  <div class="page-content">
    <h1 class="page-title">404</h1>
    <p>Oops! That page can’t be found.</p>
    <p>It looks like nothing was found at this location. Maybe try a search?</p>
    
    <?php get_search_form(); ?>

    <a href="<?php echo esc_url(home_url('/')); ?>" class="back-home">Back to Home</a>
  </div><!-- .page-content -->
</div><!-- .error-404 -->
<?php
get_footer(); ?>