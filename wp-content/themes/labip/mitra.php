<?php /* Template Name: Mitra */ ?>

<?php
get_header();
?>
<!-- SECTION IMAGE FULLSCREEN -->

<?php
$layanan = get_field('layanan');
if ($layanan) : ?>
    <?php $i = 1;
    foreach ($layanan as $post) :
    ?>
        <div class="row d-flex <?php echo ($i % 2 == 0) ? "flex-row-reverse" : '' ?> " style="top: -80px; position: relative;">
            <div class="col-lg-6 mx-0 px-0">
                <section class="fullscreen" style="background-image:url(<?php echo get_field('pd_gambar_heading', $post->ID) ?>); background-size: cover; background-position: center center;">
                </section>
            </div>

            <div class="col-lg-6 mx-0 px-0">
                <section class="fullscreen <?php echo ($i % 2 == 0) ? "" : 'background-yellow' ?>">
                    <div class="">
                        <div class="col-10 ml-5 mt-5 text-black">
                            <h2 class="margin-bottom-0">
                                <?php echo get_the_title($post->ID); ?>
                            </h2>
                            <p>
                                <?php echo get_field('pd_deskripsi_heading', $post->ID); ?>
                            </p>
                            <div data-animate="fadeInUp" data-animate-delay="900"></div>
                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="btn <?php echo ($i % 2 == 0) ? "background-yellow" : 'background-black' ?> border-0">Selengkapnya</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    <?php $i++;
    endforeach; ?>
    <?php
    wp_reset_postdata(); ?>
<?php endif; ?>
<!-- end: SECTION IMAGE FULLSCREEN -->
<!-- Mitra Kami -->
<section>
    <div class="container">
        <div class="heading-text heading-section">
            <h3>
                <?php echo get_field('judul_mitra') ?>
            </h3>
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
                <h3>
                    <?php the_field('mitra_judul_testimoni') ?>
                </h3>
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
            <h3>
                <?php the_field('mitra_judul_berita') ?>
            </h3>
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