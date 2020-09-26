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
                <div class="heading-text heading-section">
                    <h3>Berita</h3>
                </div>
                <!-- end: Page title -->
                <!-- Blog -->
                <?php the_berita_all() ?>
                <div class="row justify-content-center mb-5">
                    <?php wp_pagenavi(); ?>
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