<?php

get_header();

?>
<!-- SECTION IMAGE FULLSCREEN -->
<div class="row full-top-image-header" data-height-xs="360">
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen"
            style="background-image:url(<?php echo get_field('gambar_1') ?>); background-size: cover; background-position: center center;">
            <div class="bottom-text">
                <div class="col-10 ml-5 mt-5 text-white">
                    <h2 class="margin-bottom-0">
                    <?php echo get_field('judul_1') ?>
                    </h2>
                    <p>
                    <?php echo get_field('keterangan_1') ?> 
                    </p>
                    <div data-animate="fadeInUp" data-animate-delay="900"></div>
                    <a href="<?php echo get_field('link_button_1') ?> " class="btn background-yellow border-0"><?php echo get_field('button_1') ?></a>
                </div>
                <!--end: Heading text-->
            </div>
        </section>
    </div>

    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen"
            style="background-image:url(<?php echo get_field('gambar_2') ?>); background-size: cover; background-position: center center;">
            <div class="bottom-text">
                <div class="col-10 ml-5 mt-5 text-white">
                    <h2 class="margin-bottom-0">
                    <?php echo get_field('judul_2') ?>
                    </h2>
                    <p>
                    <?php echo get_field('keterangan_2') ?> 
                    </p>
                    <div data-animate="fadeInUp" data-animate-delay="900"></div>
                    <a href="<?php echo get_field('link_button_2') ?> " class="btn background-yellow border-0"><?php echo get_field('button_2') ?></a>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end: SECTION IMAGE FULLSCREEN -->
<!-- Tentang Kami -->
<section class="background-yellow">
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="heading-text text-center">
                    <h2 style="font-size: 30px;"><?php echo get_field('judul_keterangan_1') ?></h2>
                    <span class="lead" style="font-size: 20px;"><?php echo get_field('keterangan_1') ?></span>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
</section>
<!-- END WHAT WE DO -->
<!-- PORTFOLIO -->
<section>
    <div class="container">
        <div class="heading-text heading-section">
            <h2><?php echo get_field('judul_layanan') ?></h2>
            <span class="lead"><?php echo get_field('keterangan_layanan') ?></span>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                <?php echo get_field('layanan_1') ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                <?php echo get_field('layanan_2') ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                <?php echo get_field('layanan_3') ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                <?php echo get_field('layanan_4') ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                <?php echo get_field('layanan_5') ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                <?php echo get_field('layanan_6') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: PORTFOLIO -->
<!-- Mitra Kami -->
<section>
    <div class="container">
        <div class="heading-text heading-section">
            <h2><?php echo get_field('judul_mitra') ?></h2>
            <span class="lead"><?php echo get_field('keterangan_mitra') ?></span>
        </div>
        <!--Gallery Carousel -->
                        <div class="carousel" data-items="3" data-dots="false" data-lightbox="gallery">
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="http://localhost/labip/wp-content/themes/labip/images/mitra/muh.png" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="http://localhost/labip/wp-content/themes/labip/images/mitra/muh.png" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="http://localhost/labip/wp-content/themes/labip/images/mitra/muh.png" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="http://localhost/labip/wp-content/themes/labip/images/mitra/muh.png" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="http://localhost/labip/wp-content/themes/labip/images/mitra/muh.png" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="http://localhost/labip/wp-content/themes/labip/images/mitra/muh.png" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                            <!-- portfolio item -->
                            <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                                <div class="portfolio-item-wrap">
                                    <div class="portfolio-image">
                                        <a href="#"><img src="http://localhost/labip/wp-content/themes/labip/images/mitra/muh.png" alt=""></a>
                                    </div>
                                    <div class="portfolio-description">
                                        <a title="Paper Pouch!" data-lightbox="gallery-image" href="http://localhost/labip/wp-content/themes/labip/images/mitra/muh.png" class="btn btn-light btn-rounded">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: portfolio item -->
                                                  
                        <!--Gallery Carousel -->
    </div>
</section>
<!-- end: Mitra Kami -->
<!-- BLOG -->
<section class="content">
    <div class="container">
        <div class="heading-text heading-section">
            <h2><?php echo get_field('judul_berita') ?></h2>
        </div>
        <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">

        <?php
        
        $args = array(

            'post_type' => 'post',
            'posts_per_page' => 4
        );

        $_posts =  new WP_Query($args);
        
        ?>

        <?php if($_posts->have_posts()):?>

            

                <?php while ($_posts->have_posts()): $_posts->the_post(); ?>

                <div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="#">
                <img alt="" src="<?php the_post_thumbnail_url(); ?>">
            </a>
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo get_the_date( 'Y-m-d' ); ?></span>
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

        
        <?php endif;?>
            
        </div>
    </div>
</section>
<!-- end: BLOG -->
<?php
    get_footer();
    ?>