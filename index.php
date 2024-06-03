<?php
get_header();  // Includes header.php
?>

<main class="site-main">
    <div class="container">
        <!-- Your main content goes here -->
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_title('<h1>', '</h1>');
                the_content();
            endwhile;
        else :
            echo '<p>No posts found</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();  // Includes footer.php
?>
