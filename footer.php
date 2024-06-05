<footer class="footer-section">
    <div class="container relative">

        <div class="sofa-img">
            <img src="<?php echo get_field('footer_sofa_image', 'option');?>" alt="Image" class="img-fluid">
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center">
                        <span class="me-1">
                            <img src="<?php echo get_field('footer_envelop', 'option');?>" alt="Image" class="img-fluid">
                        </span>
                        <span><?php echo get_field('newsletter-form-title', 'option');?></span>
                    </h3>
                    <?php echo do_shortcode('[contact-form-7 id="aa5eced" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap">
                    <a href="#" class="footer-logo"><?php echo get_field('Footer_logo', 'option');?><span>.</span></a>
                </div>
                <p class="mb-4"><?php echo get_field('footer_desc', 'option');?></p>
                <ul class="list-unstyled custom-social">
                    <?php
                    // Check if the social media icons repeater field has rows
                    if (have_rows('footer_social_icons', 'option')) :
                        // Loop through the rows of the repeater field
                        while (have_rows('footer_social_icons', 'option')) : the_row();
                            // Get the icon class and URL from the current row
                            $icon_class = get_sub_field('icon_font_awesome_class');
                            $social_url = get_sub_field('icon_link');
                            ?>
                            <li>
                                <a href="<?php echo esc_url($social_url); ?>" target="_blank" rel="noopener noreferrer">
                                    <span class="fa fa-brands <?php echo esc_attr($icon_class); ?>"></span>
                                </a>
                            </li>
                        <?php endwhile;
                    endif;
                    ?>
                </ul>

            </div>

            <div class="col-lg-8">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-3">
                    <ul class="list-unstyled">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu_1',
                            'container' => false, // Remove the default container
                            'items_wrap' => '%3$s', // Display only the list items
                        ) );
                        ?>
                    </ul>

                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                    <ul class="list-unstyled">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu_2',
                            'container' => false, // Remove the default container
                            'items_wrap' => '%3$s', // Display only the list items
                        ) );
                        ?>
                    </ul>

                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                    <ul class="list-unstyled">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu_3',
                            'container' => false, // Remove the default container
                            'items_wrap' => '%3$s', // Display only the list items
                        ) );
                        ?>
                    </ul>

                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                    <ul class="list-unstyled">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu_4',
                            'container' => false, // Remove the default container
                            'items_wrap' => '%3$s', // Display only the list items
                        ) );
                        ?>
                    </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; <?php echo get_field('footer_copyright', 'option');?> 
                    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                <ul class="list-unstyled d-inline-flex ms-auto">
                        <?php
                        // Check if the first link field has a value
                        $footer_link_1 = get_field('Footer_terms_and_cond', 'option');
                        if ($footer_link_1) :
                        ?>
                            <li class="me-4">
                                <a href="<?php echo esc_url($footer_link_1['url']); ?>"><?php echo esc_html($footer_link_1['title']); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php
                        // Check if the second link field has a value
                        $footer_link_2 = get_field('footer_privacy_policy', 'option');
                        if ($footer_link_2) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url($footer_link_2['url']); ?>"><?php echo esc_html($footer_link_2['title']); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>


                </div>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>
