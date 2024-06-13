<?php
get_header();
?>

<div class="content">
    <?php
    // Check if the flexible content field has content
    if (have_rows('page_content')):

        // Loop through the rows of data
        while (have_rows('page_content')): the_row();

            // Hero Section
            if (get_row_layout() == 'hero_section'):
                get_template_part('sections/hero-section');

            // Products Section
            elseif (get_row_layout() == 'products_section'):
                get_template_part('sections/products-section');

            // Why choose us Section
            elseif (get_row_layout() == 'why_choose_us_section'):
                get_template_part('sections/why-choose-us-sec');

            // We Help Section
            elseif (get_row_layout() == 'we_help_section'):
                get_template_part('sections/we-help-section');  

            // Product details Section
            elseif (get_row_layout() == 'product_details_section'):
                get_template_part('sections/product-details-sec');  

            // Testimonials Section
            elseif (get_row_layout() == 'testimonials'):
                get_template_part('sections/testimonial');

            // Blog Section
            elseif (get_row_layout() == 'blog_section'):
                get_template_part('sections/blog-section');

            // Team Section
            elseif (get_row_layout() == 'team_section'):
                get_template_part('sections/team-section');

            // Contact Section
            elseif (get_row_layout() == 'contact_details'):
                get_template_part('sections/contact-details');

            // Add more sections as needed
            endif;

        endwhile;

    else:

        // No layouts found
        echo '<p>No content found</p>';

    endif;
    ?>
</div>

<?php get_footer(); ?>
