<?php if (!defined('ABSPATH')) exit; ?>

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
				<h1>
                    <?php if (get_sub_field('banner_title')): ?>
                        <?php echo get_sub_field('banner_title'); ?>
                    <?php endif; ?>
					</h1>
					<p class="mb-4">
                    <?php if (get_sub_field('hero_banner_desc')): ?>
                        <?php echo get_sub_field('hero_banner_desc'); ?>
                    <?php endif; ?>
					</p>

                    <p>
                        <?php 
                        $shop_now_button = get_sub_field('banner-shop-now-btn'); 
                        $explore_button = get_sub_field('banner-explore-btn'); 

                        if ($shop_now_button): 
                            $shop_now_url = $shop_now_button['url'];
                            $shop_now_title = $shop_now_button['title'];
                            $shop_now_target = $shop_now_button['target'] ? $shop_now_button['target'] : '_self';
                        ?>
                            <a href="<?php echo esc_url($shop_now_url); ?>" target="<?php echo esc_attr($shop_now_target); ?>" class="btn btn-secondary me-2">
                                <?php echo $shop_now_title; ?>
                            </a>
                        <?php endif; ?>

                        <?php if ($explore_button): 
                            $explore_url = $explore_button['url'];
                            $explore_title = $explore_button['title'];
                            $explore_target = $explore_button['target'] ? $explore_button['target'] : '_self';
                        ?>
                            <a href="<?php echo $explore_url; ?>" target="<?php echo esc_attr($explore_target); ?>" class="btn btn-white-outline">
                                <?php echo $explore_title; ?>
                            </a>
                        <?php endif; ?>
                    </p>

                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <?php if (get_sub_field('banner-image')): ?>
                        <img src="<?php echo get_sub_field('banner-image'); ?>" class="img-fluid" alt="<?php echo esc_attr(get_sub_field('banner_title')); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
