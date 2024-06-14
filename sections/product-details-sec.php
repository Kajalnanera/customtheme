<!-- Start Popular Product -->
<div class="popular-product">
			<div class="container">
				<div class="row">

                <?php if( have_rows('product_details_read_more') ): ?>
                    <?php while( have_rows('product_details_read_more') ): the_row(); 
                        $product_image = get_sub_field('product-image');
                        $product_title = get_sub_field('product_title');
                        $product_desc = get_sub_field('product-desc');
                        $product_link = get_sub_field('product_link');
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="product-item-sm d-flex">
                            <div class="thumbnail">
                                <?php if( $product_image && is_array($product_image) ): ?>
                                    <img src="<?php echo esc_url($product_image['url']); ?>" alt="<?php echo esc_attr($product_image['alt']); ?>" class="img-fluid">
                                <?php else: ?>
                                    <img src="path/to/default-image.jpg" alt="Default Image" class="img-fluid">
                                <?php endif; ?>
                            </div>
                            <div class="pt-3">
                                <h3><?php echo $product_title; ?></h3>
                                <p><?php echo $product_desc; ?></p>
                                <p><a href="<?php echo esc_url($product_link); ?>">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>

					</div>


				</div>
			</div>
		</div>
		<!-- End Popular Product -->