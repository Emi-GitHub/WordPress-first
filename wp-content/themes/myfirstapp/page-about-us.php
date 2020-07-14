<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-3 h-100">Sidebar</aside>
                        <div class="news col-md-9">
                        <?php
                            if( have_posts() ):
                                while(have_posts()): the_post();
                        ?>
                                <article <?php post_class(); ?>>
                                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                    <div class="meta-info">
                                        <p>Posted in <?php echo get_the_date(); ?>by <?php the_author_posts_link(); ?></p>
                                        <p>Categories: <?php the_category('');?></p>
                                        <p><?php the_tags('Tags:', ', '); ?></p>
                                    </div>
                                    <p><?php the_content(); ?></p>
                                </article>
                                <?php
                                endwhile;
                                else:
                                ?>
                                <p>There's nothing yet to be displayed!</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">Map</div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>