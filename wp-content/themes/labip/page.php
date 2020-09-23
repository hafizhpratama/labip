<?php

get_header();

?>
<!-- Page title -->
<section id="page-title" data-bg-parallax="<?php echo get_template_directory_uri(); ?>/images/photo-header.jpg">
    <div class="container">
        <div class="page-title">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<!-- end: Page title -->
<!-- FULL WIDTH PAGE -->
<section>
    <div class="container">
    <?php the_content(); ?>
    </div>
</section>
<!-- end: FULL WIDTH PAGE -->
<!-- Footer -->
<?php
get_footer();
?>