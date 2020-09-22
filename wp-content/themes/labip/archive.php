<?php

get_header();

?>
<!-- Content -->
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class=" col-lg-9">
                <!-- post content -->
                <!-- Page title -->
                <div class="page-title">
                    <h1>Berita</h1>
                    <div class="breadcrumb float-left">
                        <ul>
                            <li><a href="/berita">Berita</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Page title -->
                <!-- Blog -->
                <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">

            <?php

            $args = array(

                'post_type' => 'post',
                'posts_per_page' => 4
            );

            $_posts =  new WP_Query($args);

            ?>

            <?php if ($_posts->have_posts()) : ?>



                <?php while ($_posts->have_posts()) : $_posts->the_post(); ?>

                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="<?php the_post_thumbnail_url(); ?>">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo get_the_date('Y-m-d'); ?></span>
                                <h2><a href="<?php the_permalink(); ?>" class="text-green">
                                        <?php

                                        the_title();

                                        ?>
                                    </a></h2>
                                <p>
                                    <?php
                                    echo the_excerpt();
                                    ?>
                            </div>
                        </div>
                    </div>


                <?php endwhile; ?>


            <?php endif; ?>

        </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <!-- end: post content -->
</section> <!-- end: Content -->
<!-- Footer -->
<?php
get_footer();
?>