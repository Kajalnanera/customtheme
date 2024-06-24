<?php
/**
 * The template for displaying all single posts of Custom Post Type "Team"
 *
 * @package customtheme
 */

get_header(); ?>

<div class="single-team-member">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <h1 class="team-member-name"><?php the_title(); ?></h1>
                
                <?php if( has_post_thumbnail() ): ?>
                    <div class="team-member-photo">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <div class="team-member-meta">
                <p><strong>Designation:</strong> <?php the_field('team_designation'); ?></p>
                </div>
                <div class="team-member-content">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<?php
get_footer(); ?>