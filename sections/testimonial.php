<!-- Start Testimonial Slider -->
<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title"><?php echo get_sub_field('testimonial_heading');?></h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<?php if( have_rows('client_testimonials') ): ?>
								<div class="testimonial-slider">
									<?php while( have_rows('client_testimonials') ): the_row(); 
										$testimonial_desc = get_sub_field('user_reviews');
										$client_image = get_sub_field('user_image');
										$client_name = get_sub_field('user_name');
										$client_designation = get_sub_field('user_designation');
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
														<h3 class="font-weight-bold"><?php echo $client_name; ?></h3>
														<span class="position d-block mb-3"><?php echo $client_designation; ?></span>
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