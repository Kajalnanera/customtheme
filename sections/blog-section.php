<!-- Start Blog Section -->
<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title"><?php echo get_sub_field('blog_title');?></h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<?php 
							$view_all_post = get_sub_field('view_all_post_link'); 

								if ($view_all_post) : 
									$view_all_now_url = $view_all_post['url'];
									$view_all_now_title = $view_all_post['title'];
									$view_all_now_target = $view_all_post['target'] ? $view_all_post['target'] : '_self';
								?>
									<a href="<?php echo esc_url($view_all_now_url); ?>" target="<?php echo esc_attr($view_all_now_target); ?>" class="more">
									<?php echo $view_all_now_title; ?>
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