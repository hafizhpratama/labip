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
                </div>
                <!-- end: Page title -->
                <!-- Blog -->
                <?php the_berita_all() ?>
                <?php wp_pagenavi(); ?>
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