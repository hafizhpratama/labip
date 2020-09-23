<?php /* Template Name: Perangkat Desa */ ?>
<?php
get_header();
?>
<!-- SECTION IMAGE FULLSCREEN -->
<div class="row" style="top: -80px; position: relative; margin-bottom: -80px;">
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen" style="background-image:url(<?php the_field('pd_gambar_heading') ?>); background-size: cover; background-position: center center;">
        </section>
    </div>

    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen background-yellow">
            <div class="">
                <div class="col-10 ml-5 mt-5 text-black">
                    <h2 class="margin-bottom-0">
                        <?php the_field('pd_judul_heading') ?>
                    </h2>
                    <p>
                        <?php the_field('pd_deskripsi_heading') ?>
                    </p>
                    <div data-animate="fadeInUp" data-animate-delay="900"></div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end: SECTION IMAGE FULLSCREEN -->
<!-- Urgensi -->
<section>
    <div class="container">
        <div class="heading-text heading-section">
            <h2><?php the_field('judul_urgensi') ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <p><?php the_field('deskripsi_urgensi') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Urgensi -->
<!-- Sukses Story -->
<section class="background-red">
    <div class="container">
        <div class="heading-text heading-section text-white">
            <h2><?php the_field('judul_sukses_story') ?></h2>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <img src="<?php the_field('gambar_sukses_story') ?>" alt="" style="width: 100%; background-size: cover; background-position: center center;">
            </div>
            <div class="col-lg-6">
                <!--Heading text-->
                <div class="">
                    <h2 class="text-yellow"><?php the_field('judul_sukses_story_1') ?></h2>
                    <p class="text-white pb-3"><?php the_field('deskripsi_sukses_story') ?></p>
                    <a href="<?php the_field('link_button_sukses_story') ?>" class="btn background-yellow border-0"><?php the_field('teks_button_sukses_story') ?></a>
                </div>
                <!--end: Heading text-->
            </div>
        </div>
    </div>
</section>
<!-- End: Sukses Story -->
<!-- Mengapa Kami -->
<section class="background-green">
    <div class="container">
        <div class="heading-text heading-section text-white">
            <h2><?php the_field('judul_mengapa_kami') ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow"><?php the_field('judul_mengapa_kami_1') ?></h4>
                    <p class="text-white"><?php the_field('deskripsi_mengapa_kami_1') ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow"><?php the_field('judul_mengapa_kami_2') ?></h4>
                    <p class="text-white"><?php the_field('deskripsi_mengapa_kami_2') ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow"><?php the_field('judul_mengapa_kami_3') ?></h4>
                    <p class="text-white"><?php the_field('deskripsi_mengapa_kami_3') ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow"><?php the_field('judul_mengapa_kami_4') ?></h4>
                    <p class="text-white"><?php the_field('deskripsi_mengapa_kami_4') ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow"><?php the_field('judul_mengapa_kami_5') ?></h4>
                    <p class="text-white"><?php the_field('deskripsi_mengapa_kami_5') ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow"><?php the_field('judul_mengapa_kami_6') ?></h4>
                    <p class="text-white"><?php the_field('deskripsi_mengapa_kami_6') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Mengapa Kami -->
<!-- Mitra Kami -->
<section>
    <div class="container">
        <div class="heading-text heading-section">
            <h2><?php echo get_field('pd_judul_mitra') ?></h2>
            <span class="lead"><?php echo get_field('pd_deskripsi_mitra') ?></span>
        </div>
        <!--Gallery Carousel -->
        <?php

        the_mitra();

        ?>
    </div>
</section>
<!-- end: Mitra Kami -->
<!-- Testimonial Carousel -->
<section class="background-yellow">
    <div class="container">
        <div class="heading-text heading-section">
            <h2><?php the_field('pd_judul_testimoni') ?></h2>
            <span class="lead"><?php the_field('pd_deskripsi_testimoni') ?></span>
        </div>
        <!-- Testimonials -->
        <?php the_testimoni() ?>
</section>
<!-- end: Testimonial -->
<!--call-to-action dark -->
<div class="call-to-action p-t-100 p-b-100  mb-0 background-green">
    <div class="container">
        <div class="row text-white">
            <div class="col-lg-10">
                <h3>
                    <?php the_field('pd_judul_call_us') ?>
                </h3>
                <p>
                    <?php the_field('pd_deskripsi_call_us') ?>
                </p>
            </div>
            <div class="col-lg-2"><a class="btn background-yellow border-0" href="<?php the_field('pd_link_button_call_us') ?>"><?php the_field('pd_button_call_us') ?></a></div>
        </div>
    </div>
</div>
<!--end: call-to-action dark -->
<!-- BLOG -->
<!-- BLOG -->
<section class="content">
    <div class="container">
        <div class="heading-text heading-section">
            <h2><?php the_field('pd_judul_berita') ?></h2>
        </div>
        <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">
            <?php the_berita(); ?>
        </div>
    </div>
</section>
<!-- end: BLOG -->
<!-- end: BLOG -->
<!-- Footer -->
<?php
get_footer();
?>