<?php

get_header();

?>
<!-- Page Content -->
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- content -->
            <div class="content col-lg-9">
                <!-- Blog -->
                <div id="blog" class="single-post">
                    <!-- Post single item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

                                        <img alt="" src="<?php echo $image[0]; ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><?php
                                    echo get_the_title($post_id);

                                    ?></h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fas fa-calendar-alt"> </i><?php echo get_the_date(); ?></span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i><?php comments_number(); ?></a></span>
                                    <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>
                                            <?php the_tags(); ?> </a></span>
                                    <div class="post-meta-share">
                                        <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                            <i class="icon-mail"></i>
                                            <span>Mail</span>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        the_content();
                                    }
                                }
                                ?>
                            </div>
                            <div class="post-tags">
                                <a href="#"><?php the_tags(); ?></a>
                            </div>
                            <div class="post-navigation">
                                <!-- <a href="blog-single-slider.html" class="post-prev"> -->
                                <div class="post-next-title post-prev"><span>Next
                                        Post</span><?php previous_post_link(); ?></div>
                                <!-- </a> -->
                                <a href="blog-masonry-3.html" class="post-all">
                                    <i class="icon-grid"> </i>
                                </a>
                                <!-- <a href="blog-single-video.html" class="post-next"> -->
                                <div class="post-next-title post-next"><span>Next Post</span><?php next_post_link(); ?>
                                </div>
                                <!-- </a> -->
                            </div>

                        </div>
                    </div>
                    <!-- end: Post single item-->
                </div>
            </div>
            <!-- end: content -->
            <!-- Sidebar-->
            <?php get_sidebar(); ?>
            <!-- end: Sidebar-->
        </div>
    </div>
</section>
<!-- end: Page Content -->
<!-- Footer -->
<?php
get_footer();
?>