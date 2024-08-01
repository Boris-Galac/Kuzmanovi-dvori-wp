<?php get_header() ?>

<main class="main main--blogs">
    <!-- gallery -->
    <img class="gallery-overlay" src="/src/assets/images/ponuda-overlay.png" aria-hidden="true" />
    <section class="blogs">
        <h2 class="h2-heading blogs-h2-heading dark-ornament-heading">
            Pronađeni blogovi
        </h2>
        <div class="container">
            <div class="blogs__wrapper">
                <?php
                
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); 
                     get_template_part('template-parts/content', 'blog-card');
                    } 
                } else{ ?>
                <div>
                    <h1 style="color: black;">Nažalost, nema traženih rezultata...</h1>
                    <div>
                        <span>Pretražite blgoove...</span>
                        <?php get_search_form() ?>
                    </div>
                </div>

                <?php }
                ?>
            </div>
        </div>
    </section>
    <!-- contact section -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>

<?php get_footer() ?>