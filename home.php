<?php /* Template Name: Front Page */ 
get_header();  // Includes header.php
?>

<!-- Start Hero Section -->
<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1><?php echo get_field('banner_title');?></h1>
								<p class="mb-4"><?php echo get_field('hero_banner_desc');?></p>
								<p>
									<?php 
									$shop_now_button = get_field('banner-shop-now-btn'); 
									$explore_button = get_field('banner-explore-btn'); 

									if ($shop_now_button) : 
										$shop_now_url = $shop_now_button['url'];
										$shop_now_title = $shop_now_button['title'];
										$shop_now_target = $shop_now_button['target'] ? $shop_now_button['target'] : '_self';
									?>
										<a href="<?php echo esc_url($shop_now_url); ?>" target="<?php echo esc_attr($shop_now_target); ?>" class="btn btn-secondary me-2">
											<?php echo esc_html($shop_now_title); ?>
										</a>
									<?php endif; ?>
									
									<?php if ($explore_button) : 
										$explore_url = $explore_button['url'];
										$explore_title = $explore_button['title'];
										$explore_target = $explore_button['target'] ? $explore_button['target'] : '_self';
									?>
										<a href="<?php echo esc_url($explore_url); ?>" target="<?php echo esc_attr($explore_target); ?>" class="btn btn-white-outline">
											<?php echo esc_html($explore_title); ?>
										</a>
									<?php endif; ?>
								</p>

							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="<?php echo get_field('banner-image');?>" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<?php if( have_rows('product_gallary') ): ?>
<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title"><?php echo get_field('product_section_title');?></h2>
                <p class="mb-4"><?php echo get_field('product-section-desc');?></p>
                <p>
				<?php 
									$explore_button = get_field('product-explore-btn'); 

									if ($explore_button) : 
										$explore_now_url = $explore_button['url'];
										$explore_now_title = $explore_button['title'];
										$explore_now_target = $explore_button['target'] ? $explore_button['target'] : '_self';
									?>
										<a href="<?php echo esc_url($explore_now_url); ?>" target="<?php echo esc_attr($explore_now_target); ?>" class="btn">
											<?php echo esc_html($explore_now_title); ?>
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
                <a class="product-item" href="cart.html">
                    <img src="<?php echo esc_url($product_image['url']); ?>" class="img-fluid product-thumbnail" alt="<?php echo esc_attr($product_image['alt']); ?>">
                    <h3 class="product-title"><?php echo esc_html($product_name); ?></h3>
                    <strong class="product-price"><?php echo esc_html($product_price); ?></strong>

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
<?php endif; ?>

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title"><?php echo get_field('why_choose_us_title');?></h2>
						<p><?php echo get_field('why_choose_us_desc');?></p>

						<?php if( have_rows('why_choose_us') ): ?>
                            <div class="row my-5">
                                <?php while( have_rows('why_choose_us') ): the_row(); 
                                    $icon_image = get_sub_field('sec-icons');
                                    $icon_title = get_sub_field('sec-title');
                                    $icon_description = get_sub_field('sec-description');
                                ?>
                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <?php if( $icon_image && is_array($icon_image) ): ?>
                                                <img src="<?php echo esc_url($icon_image['url']); ?>" alt="<?php echo esc_attr($icon_image['alt']); ?>" class="img-fluid">
                                            <?php else: ?>
                                                <img src="path/to/default-icon.jpg" alt="Default Icon" class="img-fluid">
                                            <?php endif; ?>
                                        </div>
                                        <h3><?php echo esc_html($icon_title); ?></h3>
                                        <p><?php echo $icon_description; ?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>

					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="<?php echo get_field('why_choose_us_image');?>" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
                    <?php if( have_rows('images_grid_gallary') ): ?>
                        <div class="imgs-grid">
                            <?php 
                            $grid_classes = array('grid-1', 'grid-2', 'grid-3');
                            $index = 0;
                            while( have_rows('images_grid_gallary') ): the_row(); 
                                $grid_image = get_sub_field('grid_images');
                                $current_class = $grid_classes[$index % count($grid_classes)];
                                $index++;
                            ?>
                            <div class="grid <?php echo esc_attr($current_class); ?>">
                                <?php if( $grid_image && is_array($grid_image) ): ?>
                                    <img src="<?php echo esc_url($grid_image['url']); ?>" alt="<?php echo esc_attr($grid_image['alt']); ?>">
                                <?php else: ?>
                                    <img src="path/to/default-image.jpg" alt="Default Image">
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>

					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4"><?php echo get_field('we_help_sec_title');?></h2>
						<p><?php echo get_field('we_help_desc');?></p>
						<?php if( have_rows('we_help_list_sec') ): ?>
								<ul class="list-unstyled custom-list my-4">
									<?php while( have_rows('we_help_list_sec') ): the_row(); 
										// Get the sub field value.
										$list_item = get_sub_field('we_help_list');
									?>
									<li><?php echo $list_item; ?></li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>

							<p>
							<?php 
								$explore_button = get_field('we_help_explore_btn'); 

									if ($explore_button) : 
										$explore_now_url = $explore_button['url'];
										$explore_now_title = $explore_button['title'];
										$explore_now_target = $explore_button['target'] ? $explore_button['target'] : '_self';
									?>
									<a href="<?php echo esc_url($explore_now_url); ?>" target="<?php echo esc_attr($explore_now_target); ?>" class="btn">
										<?php echo esc_html($explore_now_title); ?>
									</a>
									<?php endif; ?>
									</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

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
                                <h3><?php echo esc_html($product_title); ?></h3>
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

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title"><?php echo get_field('testimonial_title');?></h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<?php if( have_rows('testimonials') ): ?>
								<div class="testimonial-slider">
									<?php while( have_rows('testimonials') ): the_row(); 
										$testimonial_desc = get_sub_field('testimonial-desc');
										$client_image = get_sub_field('client-image');
										$client_name = get_sub_field('client-name');
										$client_designation = get_sub_field('client-designation');
									?>
									<div class="item">
										<div class="row justify-content-center">
											<div class="col-lg-8 mx-auto">
												<div class="testimonial-block text-center">
													<blockquote class="mb-5">
														<p><?php echo $testimonial_desc; ?></p>
													</blockquote>

													<div class="author-info">
														<div class="author-pic">
															<?php if( $client_image && is_array($client_image) ): ?>
																<img src="<?php echo esc_url($client_image['url']); ?>" alt="<?php echo esc_attr($client_image['alt']); ?>" class="img-fluid">
															<?php else: ?>
																<img src="path/to/default-image.jpg" alt="Default Image" class="img-fluid">
															<?php endif; ?>
														</div>
														<h3 class="font-weight-bold"><?php echo esc_html($client_name); ?></h3>
														<span class="position d-block mb-3"><?php echo esc_html($client_designation); ?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endwhile; ?>
								</div>
								<?php endif; ?>


						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title"><?php echo get_field('blog_title');?></h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<?php 
							$view_all_post = get_field('view_all_post_link'); 

								if ($view_all_post) : 
									$view_all_now_url = $view_all_post['url'];
									$view_all_now_title = $view_all_post['title'];
									$view_all_now_target = $view_all_post['target'] ? $view_all_post['target'] : '_self';
								?>
									<a href="<?php echo esc_url($view_all_now_url); ?>" target="<?php echo esc_attr($view_all_now_target); ?>" class="more">
									<?php echo esc_html($view_all_now_title); ?>
									</a>
								<?php endif; ?>

					</div>
				</div>

				<div class="row">
					<?php
					// Query for the latest posts
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 3,
					);
					$query = new WP_Query($args);

					// The Loop
					if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post(); ?>
							<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
								<div class="post-entry">
									<a href="<?php the_permalink(); ?>" class="post-thumbnail">
										<?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
										<?php else : ?>
											<img src="<?php echo get_template_directory_uri(); ?>/images/default-image.jpg" alt="Default Image" class="img-fluid">
										<?php endif; ?>
									</a>
									<div class="post-content-entry">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<div class="meta">
											<span>by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
											<span>on <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata();
					else : ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
				</div>

			</div>
		</div>
		<!-- End Blog Section -->	
        <?php
get_footer();  // Includes footer.php
?>