<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row"><?php motoPressSlider( "alias" ) ?></div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <div class="row">Services</div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <div class="news col-md-9">
                        <?php
                            if( have_posts() ):
                                while(have_posts()): the_post();
                        ?>
                                <article <?php post_class(); ?>>
                                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                    <?php echo get_post_format(); ?>
                                    <?php the_post_thumbnail(array(275, 275)); ?>
                                    <div class="meta-info">
                                        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                        <p>Categories: <?php the_category('');?></p>
                                        <p><?php the_tags('Tags:', ', '); ?></p>
                                    </div>
                                    <p><?php the_content(); ?></p>
                                </article>
                                <?php
                                endwhile;
                                ?>
                                <!--pagination-->
                                <div class="row">
                                    <div class="pages col-md-6 text-left">
                                        <?php previous_posts_link ("<< Newer posts"); ?>
                                    </div>
                                    <div class="pages col-md-6 text-right">
                                        <?php next_posts_link ("Older posts >>"); ?>
                                    </div>
                                </div>
                                <?php
                                else:
                                ?>
                                <p>There's nothing yet to be displayed!</p>
                            <?php endif; ?>
                        </div>
                        <aside class="sidebar col-md-3 h-100"><?php get_sidebar('blog') ?></aside>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>