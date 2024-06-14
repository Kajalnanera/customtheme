<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title"><?php echo get_sub_field('why_choose_us_title');?></h2>
						<p><?php echo get_sub_field('why_choose_us_desc');?></p>

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
                                        <h3><?php echo $icon_title; ?></h3>
                                        <p><?php echo $icon_description; ?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>

					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="<?php echo get_sub_field('why_choose_us_image');?>" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->