<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title"><?php echo get_sub_field('product_section_title');?></h2>
                <p class="mb-4"><?php echo get_sub_field('product-section-desc');?></p>
                <p>
				<?php 
									$explore_button = get_sub_field('product-explore-btn'); 

									if ($explore_button) : 
										$explore_now_url = $explore_button['url'];
										$explore_now_title = $explore_button['title'];
										$explore_now_target = $explore_button['target'] ? $explore_button['target'] : '_self';
									?>
										<a href="<?php echo esc_url($explore_now_url); ?>" target="<?php echo esc_attr($explore_now_target); ?>" class="btn">
											<?php echo $explore_now_title; ?>
										</a>
									<?php endif; ?>
									</p>
            </div>
            <!-- End Column 1 -->

            <?php while( have_rows('product_gallary') ): the_row(); 
                $product_image = get_sub_field('product-image');
                $product_name = get_sub_field('product_name');
                $product_price = get_sub_field('product_price');
            ?>
            <!-- Start Product Item -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="#">
                    <img src="<?php echo esc_url($product_image['url']); ?>" class="img-fluid product-thumbnail" alt="<?php echo esc_attr($product_image['alt']); ?>">
                    <h3 class="product-title"><?php echo $product_name; ?></h3>
                    <strong class="product-price"><?php echo $product_price; ?></strong>

                    <span class="icon-cross">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/cross.svg" alt="Description" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Product Item -->
            <?php endwhile; ?>
            
        </div>
    </div>
</div>
<!-- End Product Section -->