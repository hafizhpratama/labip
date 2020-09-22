<?php
get_header();
?>
<!-- SECTION IMAGE FULLSCREEN -->
<div class="row full-top-image-header" data-height-xs="360">
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen" style="background-image:url(<?php echo get_field('gambar_1') ?>); background-size: cover; background-position: center center;">
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
        <section class="fullscreen" style="background-image:url(<?php echo get_field('gambar_2') ?>); background-size: cover; background-position: center center;">
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
        <?php

        the_mitra();

        ?>
    </div>
</section>
<!-- end: Mitra Kami -->
<!-- BLOG -->
<section class="content">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>Berita</h2>
        </div>
        <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">
        <?php the_berita(); ?>
        </div>
    </div>
</section>
<!-- end: BLOG -->
<?php
get_footer();
?>