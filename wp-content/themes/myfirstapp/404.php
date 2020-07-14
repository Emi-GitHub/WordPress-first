<?php get_header(); ?>
    <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div class="error-404">
    <header>
        <h1><?php e_('Page not found', 'learnwp'); ?></h1>
        <?php the_widget('WP_Widget_Recent_Posts', array( 'title' => 'Latest Posts', 'number' => 3)); ?> replace with: <?php the_widget('WP_Widget_Recent_Posts', array( 'title' => __('Latest Posts', 'learnwp'), 'number' => 3)); ?>
    </header>
    <div class="error">
        <p>How about doing a search</p>
        <?php get_search_form(); ?>
        <?php the_widget('WP_Widget_Recent_Posts', array( 'title' => 'Latest Posts', 'number' => 3)); ?>
    </div>
    </div>
<?php get_footer(); ?> 