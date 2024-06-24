<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row my-5">

            <?php
            // Check if the repeater field has rows of data
            if( have_rows('Why_Choose_Us_full') ):
                // Loop through the rows of data
                while ( have_rows('Why_Choose_Us_full') ) : the_row();
                    // Get subfield values
                    $icon = get_sub_field('sec-icons');
                    $name = get_sub_field('sec-title');
                    $description = get_sub_field('sec-description');
            ?>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="img-fluid">
                    </div>
                    <h3><?php echo esc_html($name); ?></h3>
                    <p><?php echo $description; ?></p>
                </div>
            </div>

            <?php
                endwhile;
            else :
                // No rows found
            endif;
            ?>

        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->
