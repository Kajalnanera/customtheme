<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">
                    <?php the_sub_field('products_title'); ?>
                </h2>
                <p class="mb-4">
                    <?php the_sub_field('products_desc'); ?>
                </p>
                <p>
                    <?php 
                    $button_link = get_sub_field('product_explore_btn');
                    if( $button_link ): 
                        $button_url = $button_link['url'];
                        $button_title = $button_link['title'];
                        $button_target = $button_link['target'] ? $button_link['target'] : '_self';
                    ?>
                        <a href="<?php echo esc_url($button_url); ?>" class="btn" target="<?php echo esc_attr($button_target); ?>">
                            <?php echo esc_url($button_title); ?>
                        </a>
                    <?php endif; ?>
                </p>
            </div>

            <?php

if (have_rows('products_list')): ?>
        <?php while (have_rows('products_list')): the_row();
            $product_image = get_sub_field('product_image');
            $product_name = get_sub_field('product_name');
            $product_price = get_sub_field('product_price');
            ?>
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="#">
                    <?php if ($product_image): ?>
                        <img src="<?php echo esc_url($product_image['url']); ?>" class="img-fluid product-thumbnail">
                    <?php endif; ?>
                    <h3 class="product-title"><?php echo esc_html($product_name); ?></h3>
                    <strong class="product-price"><?php echo esc_html($product_price); ?></strong>
                    <span class="icon-cross">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
        <?php endwhile; ?>
<?php endif; ?>
