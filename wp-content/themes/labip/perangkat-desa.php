<?php /* Template Name: Perangkat Desa */ ?>
<?php
get_header();
?>
<!-- SECTION IMAGE FULLSCREEN -->
<div class="row">
    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen" style="background-image:url(images/photo-header.jpg); background-size: cover; background-position: center center;">
        </section>
    </div>

    <div class="col-lg-6 mx-0 px-0">
        <section class="fullscreen background-yellow">
            <div class="bottom-text">
                <div class="col-10 ml-5 mt-5 text-black">
                    <h2 class="margin-bottom-0">
                        Seleksi Perangkat Desa
                    </h2>
                    <p>
                        Perangkat desa yang baik lahir dari proses yang baik
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
            <h2>Urgensi</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <p>Aspek terpenting dalam penyelenggaraan pemerintahan desa adalah adanya Sumber Daya
                        Manusia (SDM) yang berintegritas, berkompeten, berwibawa, dan profesional dalam
                        melaksanakan tugas, kewajiban, dan fungsinya.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <p>Guna mendapatkan perangkat desa seperti yang dimaksud, perlu adanya sistem Seleksi
                        Perangkat Desa yang berkualitas dengan berpedoman pada peraturan yang berlaku di
                        masing-masing daerah. </p>
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
            <h2>Success Story</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="images/photo-header.jpg" alt="" style="width: 100%; background-size: cover; background-position: center center;">
            </div>
            <div class="col-lg-6">
                <!--Heading text-->
                <div class="">
                    <h2 class="text-yellow">Seleksi Perangkat Desa Banyurejo,
                        Tempel, Sleman</h2>
                    <p class="text-white pb-3">Laboratorium Ilmu Pemerintahan Universitas Muhammadiyah
                        Yogyakarta mendapat kepercayaan sebagai fasilitator Seleksi Perangkat Desa Banyurejo,
                        Tempel, Sleman pada Selasa (26/11/2019). </p>
                    <a href="#" class="btn background-yellow border-0">Selengkapnya</a>
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
            <h2>Mengapa Kami</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow">Berpengalaman</h4>
                    <p class="text-white">Banyaknya kegiatan seleksi perangkat desa yang telah kami laksanakan,
                        membuat pengalaman kami terus bertambah. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow">Profesional</h4>
                    <p class="text-white">Prinsip kejujuran dan keadilan sangat kami terapkan. Say No to
                        “Titip-titipan”. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow">Bagian dari pengabdian</h4>
                    <p class="text-white">Memfasilitasi seleksi perangkat desa merupakan sebuah kehormatan bagi
                        kami. Karena dengan itu, kami dapat turut serta berkontribusi memajukan desa dan
                        meningkatkan kesejahteraan masyarakat.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow">Sesuai Peraturan</h4>
                    <p class="text-white">Pelaksanaan seleksi perangkat desa yang kami laksanakan berpedoman
                        dengan peraturan di masing-masing daerah.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow">Penguji yang Handal </h4>
                    <p class="text-white">Penguji di setiap tahap ujian memiliki kapasitas yang tidak diragukan.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4 class="text-yellow">Terdokumentasi </h4>
                    <p class="text-white">Setiap desa yang bermitra dengan kami akan diberikan sebuah flashdisk
                        yang berisi foto dan video kegiatan. </p>
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
<!-- Testimonial Carousel -->
<section class="background-yellow">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>Testimoni</h2>
            <span class="lead">Apa kata mereka tentang Lab IP UMY</span>
        </div>
        <!-- Testimonials -->
        <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left" data-items="1" data-autoplay="true" data-loop="true" data-autoplay="3500">
            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="images/Testimoni/images-1-e1553669984436.png" alt="">
                <p class="text-black">Laboratorium IP UMY adalah laboratorium yang komplit. Karenanya,
                    Laboratorium IP UMY telah beberapa kali mendampingi pemilihan Pamong Desa</p>
                <span class="text-black">R. Muh Karmadi</span>
                <span class="text-black">Ketua Panitia Seleksi Pamong Pemerintah Tawangsari, Pengasih, Kulon
                    Progo</span>
            </div>
            <!-- end: Testimonials item-->
            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="images/team/9.jpg" alt="">
                <p>Polo is by far the most amazing template out there! I literally could not be happier that I
                    chose to buy this template!</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->
            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="images/team/9.jpg" alt="">
                <p>The world is a dangerous place to live; not because of the people who are evil, but because
                    of the people who don't do anything about it.</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->
        </div>
</section>
<!-- end: Testimonial -->
<!--call-to-action dark -->
<div class="call-to-action p-t-100 p-b-100  mb-0 background-green">
    <div class="container">
        <div class="row text-white">
            <div class="col-lg-10">
                <h3>
                    Daftar sekarang dan bergabung bersama desa sukses lainnya
                </h3>
                <p>
                    Daftar sekarang dan bergabung bersama desa sukses lainnya
                </p>
            </div>
            <div class="col-lg-2"><a class="btn background-yellow border-0" href="#">Call us now!</a></div>
        </div>
    </div>
</div>
<!--end: call-to-action dark -->
<!-- BLOG -->
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
<!-- end: BLOG -->
<!-- Footer -->
<?php
get_footer();
?>