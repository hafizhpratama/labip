<?php
?>
<?php

get_header();

?>
<!-- Content -->
<section id="page-content">
    <div class="container">
        <!-- post content -->
        <!-- Page title -->
        <div class="page-title">
            <h1>Berita</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="/berita">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: Page title -->
        <!-- Blog -->
        <div id="blog" class="grid-layout post-2-columns m-b-30" data-item="post-item">
            <!-- Post item-->
            <?php
            if (have_posts()) {

                // Load posts loop.
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content/content');
                }

                // Previous/next page navigation.
                // twentynineteen_the_posts_navigation();

            } else {

                // If no content, include the "No posts found" template.
                get_template_part('template-parts/content/content', 'none');
            }
            ?>
            <!-- end: Post item-->
        </div>
    </div>
    <!-- end: post content -->
</section> <!-- end: Content -->
<!-- Footer -->
<?php
get_footer();
?>