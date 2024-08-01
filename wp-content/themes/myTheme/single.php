<?php get_header() ?>
<main class="main main--single-blog">
    <!-- gallery -->
    <img class="gallery-overlay" src="/wp-content/themes/myTheme/src/assets/images/ponuda-overlay.png"
        aria-hidden="true" />
    <section class="blogs">
        <h2 class="h2-heading blogs-h2-heading dark-ornament-heading">Blog</h2>
        <div class="container">
            <div class="single-blog__wrapper">
                <article class="single-blog-card">
                    <figure class="single-blog-card__thumbnail-wrapper">
                        <img src="/wp-content/themes/myTheme/src/assets/images/blog-cover-img.jpg" alt="blog image" />
                    </figure>
                    <div class="single-blog-card__content">
                        <h3 class="h3-heading single-blog-card-h3-heading">
                            <?php the_title()?>
                        </h3>
                        <div class="single-blog-card__inner-content">
                            <div class="single-blog-card__date">
                                <img class="icon" src="/wp-content/themes/myTheme/src/assets/icons/blog-date-icon.svg"
                                    alt="date icon" />
                                <div class="date"><?php the_time('F j, Y') ?></div>
                            </div>
                            <div class="single-post-paragraph">
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- contact section -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>
<?php get_footer() ?>