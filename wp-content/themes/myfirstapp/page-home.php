<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        <?php motoPressSlider( "home-slider" ) ?>
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                <?php $hero = get_field('hero'); ?>
                    <h1><?php echo $hero['small_title']; ?></h1>
                    <h3 class="text-center"><?php echo $hero['main_title']; ?></h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services-item">
                                <!--Advanced Custom Fields-->
                                <?php
                                if(is_active_sidebar('service-1')){
                                    dynamic_sidebar('service-1');
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services-item">
                                <?php
                                if(is_active_sidebar('service-2')){
                                    dynamic_sidebar('service-2');
                                }
                                ?></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services-item">
                                <?php
                                if(is_active_sidebar('service-3')){
                                    dynamic_sidebar('service-3');
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-3 h-100">
                            <?php get_sidebar('home') ?>
                        </aside>
                        <div class="news col-md-9">
                            <div class="container">
                                <div class="row">
                                <?php
                                    $featured = new WP_Query('post_type=post&posts_per_page=1&cat=6,12');
                                        if( $featured->have_posts() ):
                                        while( $featured->have_posts() ): $featured->the_post();
                                        ?>
                                        <div class="col-12">
                                            <article <?php post_class( array('class' => 'featured') ); ?>>
                                                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                                <div class="thumbnail">
                                                    <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                                                </div>

                                                <div class="meta-info">
                                                    <p>
                                                        by  <span><?php the_author_posts_link(); ?></span> 
                                                        Categories: <span><?php the_category(' ');?></span>
                                                        <?php the_tags(' Tags: <span>', ', ', '</span>'); ?>
                                                    </p>
                                                    <p><span><?php echo get_the_date(); ?></span></p>
                                                </div>
                                                <p><?php the_excerpt(); ?></p>
                                            </article>
                                        </div>
                                        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    //second loop
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 2,
                                        'category__not_in' => array ( 1 ),
                                        'category__in' => array (5,11),
                                        'offset' => 1
                                    );
                                    $secondary = new WP_Query( $args );
                            
                                    if( $secondary->have_posts() ):
                                        while( $secondary->have_posts() ): 
                                            $secondary->the_post();
                                    ?>
                                    <div class="col-sm-6">
                                        <article <?php post_class( array('class' => 'secondary') ); ?>>
                                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                            <div class="thumbnail">
                                                <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                                            </div>

                                            <div class="meta-info">
                                                <p>
                                                    by  <span><?php the_author_posts_link(); ?></span> 
                                                    Categories: <span><?php the_category(' ');?></span>
                                                    <?php the_tags(' Tags: <span>', ', ', '</span>'); ?>
                                                </p>
                                                <p><span><?php echo get_the_date(); ?></span></p>
                                            </div>
                                            <p><?php the_excerpt(); ?></p>
                                        </article>
                                    </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>