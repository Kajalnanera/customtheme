<?php /* Template Name: Page With ACF Content */ ?>
<?php get_header(); 

$page_id = get_the_ID();
?>

<?php if(have_rows('page_content')):?>

    <?php while( have_rows('page_content')): the_row(); 

    // Hero Section
            if (get_row_layout() == 'hero_section'):
                get_template_part('sections/hero-section');
            endif;

            // Products Section
            if (get_row_layout() == 'products_section'):
                get_template_part('sections/products-section');
            endif;

            // Why choose us Section
            if (get_row_layout() == 'why_choose_us_section'):
                get_template_part('sections/why-choose-us-sec');
            endif;

            // We Help Section
            if (get_row_layout() == 'we_help_section'):
                get_template_part('sections/we-help-section');  
            endif;

            // Product details Section
            if (get_row_layout() == 'product_details_section'):
                get_template_part('sections/product-details-sec');  
            endif;

            // Testimonials Section
            if (get_row_layout() == 'testimonials'):
                get_template_part('sections/testimonial');
            endif;

            // Blog Section
            if (get_row_layout() == 'blog_section'):
                get_template_part('sections/blog-section');
            endif;

            // Team Section
            if (get_row_layout() == 'team_section'):
                get_template_part('sections/team-section');
            endif;

            // Contact Section
            if (get_row_layout() == 'contact_details'):
                get_template_part('sections/contact-details');
            endif;

    endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>