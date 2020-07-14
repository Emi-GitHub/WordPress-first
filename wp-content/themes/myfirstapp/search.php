<?php get_header(); ?>
<div id="primary">
    <div id="main">
        <div class="container">
        <h2>search results for <?php echo get_search_query(); ?></h2>
            <?php 
            get_search_form();
            while( have_posts()): 
                the_post();
                ?>
                    <article <?php post_class(); ?>>
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <div class="meta-info">
                            <p>Posted in <?php echo get_the_date(); ?>by <?php the_author_posts_link(); ?></p>
                            <?php if(has_category()): ?>
                                <p>Categories: <?php the_category('');?></p>
                            <?php endif ?>
                            <p><?php the_tags('Tags:', ', '); ?></p>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                <?php
                if( comments_open() || get_comments_number() ):
                    comments_template();
                endif;
            endwhile;
            /*pagination*/
            the_posts_pagination(
                array(
                    'prev_text' => 'Previous',
                    'next_text' => 'Next'
                )
            );
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>