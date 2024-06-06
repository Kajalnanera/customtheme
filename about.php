<?php /* Template Name: about page */ 
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
								<p><?php 
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
									<?php endif; ?></p>
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

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
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

		<!-- Start Team Section -->
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title"><?php echo get_field('team_section_title');?></h2>
					</div>
				</div>

				<div class="row">
    <?php
    // Query to get team members post type data
    $args = array(
        'post_type' => 'team', // Your custom post type name
        'posts_per_page' => 4 // Get all posts
    );
    $team_members = new WP_Query($args);

    // Loop through each team member
    if ($team_members->have_posts()) :
        while ($team_members->have_posts()) : $team_members->the_post();
            $name = get_the_title(); // Get name field from ACF
            $designation = get_field('team_designation'); // Get designation field from ACF
            $description = get_the_excerpt(); // Get description field from ACF
            $read_more_link = get_permalink(); // Get the post permalink

            ?>
            <!-- Start Column -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid mb-5"> <!-- Display team member image -->
                <h3><a href="<?php echo $read_more_link; ?>"><span><?php echo $name; ?></span></a></h3> <!-- Display name and designation -->
                <span class="d-block position mb-4"><?php echo $designation; ?></span> <!-- This could be replaced with the actual designation if needed -->
                <p><?php echo $description; ?></p> <!-- Display description -->
                <p class="mb-0"><a href="<?php echo $read_more_link; ?>" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p> <!-- Display read more link -->
            </div>
            <!-- End Column -->

    <?php
        endwhile;
        wp_reset_postdata(); // Reset the query
    endif;
    ?>
</div>

			</div>
		</div>
		<!-- End Team Section -->

		

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

<?php
get_footer();  // Includes footer.php
?>