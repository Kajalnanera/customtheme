<?php if( have_rows('services_content') ): ?>
                            <?php while( have_rows('services_content') ): the_row(); 
                                $image = get_sub_field('service-icon');
                                $title = get_sub_field('service_title');
                                $description = get_sub_field('service_description');
                            ?>
                            <div class="col-6 col-md-6 col-lg-3 mb-4">
                                <div class="feature">
                                    <div class="icon">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid">
                                    </div>
                                    <h3><?php echo esc_html($title); ?></h3>
                                    <p><?php echo $description; ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>