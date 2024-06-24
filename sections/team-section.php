<!-- Start Team Section -->
<div class="untree_co-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title"><?php echo get_sub_field('team_section_title');?></h2>
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