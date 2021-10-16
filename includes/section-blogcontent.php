<!---------------------- Single Blog Page ---------------------->

<div class="blogs-single-container">  
        <!-- <div id="sidebar-primary" class="sidebar">
        <?php //if ( is_active_sidebar( 'general-sidebar' ) ) : ?>
                <?php //dynamic_sidebar( 'general-sidebar' ); ?>
        <?php //endif; ?>
        </div>  -->
    <style type="text/css">   @import url("<?php echo get_template_directory_uri(); ?>/css/blogs-css/blog-single.css"); </style>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h3><?php the_title();?></h3>
            <?php echo get_the_date(); ?>

            <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid img-thumbnail">
            <?php endif; ?> 

            <?php the_content(); ?>
            <?php echo get_the_author_meta("first_name") . ' ' . get_the_author_meta("last_name"); ?>

            <?php comments_template(); ?>

    <?php endwhile; endif; ?>
</div>