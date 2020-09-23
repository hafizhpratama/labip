<?php /* Template Name: Mitra */ ?>

<?php
get_header();
?>
<!-- SECTION IMAGE FULLSCREEN -->
<div class="row" style="top: -80px; position: relative;">
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen" style="background-image:url(<?php echo get_field('mitra_gambar_1') ?>); background-size: cover; background-position: center center;">
        </section>
    </div>

    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen background-yellow">
            <div class="">
                <div class="col-10 ml-5 mt-5 text-black">
                    <h2 class="margin-bottom-0">
                        <?php echo get_field('mitra_judul_1') ?>
                    </h2>
                    <p>
                        <?php echo get_field('mitra_deskripsi_1') ?>

                    </p>
                    <div data-animate="fadeInUp" data-animate-delay="900"></div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen">
            <div class="">
                <div class="col-10 ml-5 mt-5 text-black">
                    <h2 class="margin-bottom-0">
                        <?php echo get_field('mitra_judul_2') ?>
                    </h2>
                    <p>
                        <?php echo get_field('mitra_deskripsi_2') ?>
                    </p>
                    <div data-animate="fadeInUp" data-animate-delay="900"></div>
                    <a href="<?php echo get_field('link_button_1') ?> " class="btn background-yellow border-0"><?php echo get_field('mitra_button_1') ?></a>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen" style="background-image:url(<?php echo get_field('mitra_gambar_2') ?>); background-size: cover; background-position: center center;">
        </section>
    </div>
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen" style="background-image:url(<?php echo get_field('mitra_gambar_3') ?>); background-size: cover; background-position: center center;">
        </section>
    </div>

    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen background-yellow">
            <div class="">
                <div class="col-10 ml-5 mt-5 text-black">
                    <h2 class="margin-bottom-0">
                        <?php echo get_field('mitra_judul_3') ?>
                    </h2>
                    <p>
                        <?php echo get_field('mitra_deskripsi_3') ?>
                    </p>
                    <div data-animate="fadeInUp" data-animate-delay="900"></div>
                    <a href="<?php echo get_field('link_button_1') ?> " class="btn background-black border-0"><?php echo get_field('mitra_button_2') ?></a>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end: SECTION IMAGE FULLSCREEN -->
<!-- Mitra Kami -->
<section>
    <div class="container">
        <div class="heading-text heading-section">
            <h2>
                <?php echo get_field('judul_mitra') ?>
            </h2>
            <span class="lead">
                <?php echo get_field('keterangan_mitra') ?>
            </span>
        </div>
        <?php the_mitra() ?>
    </div>
</section>
<!-- end: Mitra Kami -->
<!-- Testimonial Carousel -->
<section>
    <section class="background-yellow">
        <div class="container">
            <div class="heading-text heading-section">
                <h2>
                    <?php the_field('mitra_judul_testimoni') ?>
                </h2>
                <span class="lead"><?php the_field('mitra_deskripsi_testimoni') ?></span>
            </div>
            <!-- Testimonials -->
            <?php the_testimoni() ?>
    </section>
</section>
<!-- end: Testimonial -->
<!-- BLOG -->
<section class="content">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>
                <?php the_field('mitra_judul_berita') ?>
            </h2>
        </div>
        <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">
            <?php the_berita(); ?>
        </div>
    </div>
</section>
<!-- end: BLOG -->
<!-- Footer -->
<?php
get_footer();
?>