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
						<h2 class="section-title mb-4"><?php echo get_sub_field('we_help_sec_title');?></h2>
						<p><?php echo get_sub_field('we_help_desc');?></p>
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
								$explore_button = get_sub_field('we_help_explore_btn'); 

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
				</div>
			</div>
		</div>
		<!-- End We Help Section -->