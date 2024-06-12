<?php
get_header();  // Includes header.php
?>

<main class="site-main">
    <div class="container">
        <!-- Your main content goes here -->
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();?>
            <div class="row my-5">
            <?php if( have_rows('page_content') ): ?>
                <?php while( have_rows('page_content') ): the_row(); ?>
                    <?php if( get_row_layout() == 'team_section' ): 
                        get_template_part('sections/services-section');
                    endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- Start Product Section -->
		<div class="product-section pt-0">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
                    <?php if( have_rows('page_content') ): ?>
    <?php while( have_rows('page_content') ): the_row(); ?>
        <?php if( get_row_layout() == 'products_list' ): 
            get_template_part('sections/products-list');
        endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

           <?php endwhile;
        else :
            echo '<p>No posts found</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();  // Includes footer.php
?>