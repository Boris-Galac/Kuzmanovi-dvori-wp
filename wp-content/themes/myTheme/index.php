<?php get_header() ?>

<main class="main main--blogs">
    <!-- gallery -->
    <img class="gallery-overlay" src="/src/assets/images/ponuda-overlay.png" aria-hidden="true" />
    <section class="all-blogs">
        <h2 class="h2-heading blogs-h2-heading dark-ornament-heading">
            Svi blogovi
        </h2>
        <div class="container">
            <div class="blogs__wrapper">
                <?php
                
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); 
                     get_template_part('template-parts/content', 'blog-card');
                    } 
                } 
                ?>
            </div>
        </div>
    </section>
    <!-- contact section -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>

<?php get_footer() ?>