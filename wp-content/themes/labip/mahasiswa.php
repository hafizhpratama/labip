<?php /* Template Name: Mahasiswa */ ?>
<?php
get_header();
?>

<!-- SECTION IMAGE FULLSCREEN -->
<div class="row" style="top: -80px; position: relative;">
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen" style="background-image:url(<?php echo get_field('layanan_foto') ?>); background-size: cover; background-position: center center;">
        </section>
    </div>

    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen background-yellow">
            <div class="">
                <div class="col-10 ml-5 mt-5 text-black">
                    <h2 class="margin-bottom-0">
                        <?php echo get_field('layanan_judul') ?>
                    </h2>
                    <p>
                        <?php echo get_field('layanan_deskripsi') ?>
                    </p>
                    <div data-animate="fadeInUp" data-animate-delay="900"></div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end: SECTION IMAGE FULLSCREEN -->
<!-- end: Mitra Kami -->
<!-- Pilih Layanan -->
<section>
    <div class="container pt-5">
        <div class="tabs tabs-vertical">
            <div class="row">
                <div class="col-3">
                    <ul class="nav flex-column nav-tabs" id="myTab4" role="tablist" aria-orientation="vertical">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true"><?php echo get_field('jenis_layanan_1') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false"><?php echo get_field('jenis_layanan_2') ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    </div>
                    <div class="tab-content" id="myTabContent4">
                        <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab">
                            <p class="text-red text-bold"><?php echo get_field('deskripsi_layanan') ?></p>
                            <?php
                            $layanan = get_field('keterangan_layanan_1');
                            $layanan2 = get_field('keterangan_layanan_2');
                            if ($layanan) { ?>
                                <?php
                                foreach ($layanan as $post) :
                                ?>
                                    <a class="text-black" href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a><br>
                                <?php endforeach; ?>
                                <?php
                                wp_reset_postdata(); ?>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="text-red text-bold"><?php echo get_field('deskripsi_layanan') ?></p>

                            <?php if ($layanan2) { ?>
                                <?php
                                foreach ($layanan2 as $post2) :
                                ?>
                                    <a class="text-black" href="<?php echo get_the_permalink($post2->ID); ?>"><?php echo get_the_title($post2->ID); ?></a><br>
                                <?php endforeach; ?>
                                <?php
                                wp_reset_postdata(); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Pilih Layanan -->
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
<!-- Footer -->
<?php
get_footer();
?>