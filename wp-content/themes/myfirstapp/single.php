<?php get_header(); ?>
<div id="primary">
    <div id="main">
        <div class="container">
            <?php 
            while( have_posts()): 
                the_post();
                ?>
                <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                <header>
                    <h1><?php the_title(); ?></h1>
                    <div class="meta-info">
                        <p>Posted in <?php echo get_the_date(); ?>by <?php the_author_posts_link(); ?></p>
                        <p>Categories: <?php the_category('');?></p>
                        <p><?php the_tags('Tags:', ', '); ?></p>
                    </div>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
            <!--pagination-->
            <div class="row">
                <div class="pages col-6 text-left"><?php next_post_link('&laquo; %link'); ?></div>
                <div class="pages col-6 text-right"><?php previous_post_link('%link &raquo; '); ?></div>
            </div>
            <?php
                if( comments_open() || get_comments_number() ):
                    comments_template();
                endif;
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>