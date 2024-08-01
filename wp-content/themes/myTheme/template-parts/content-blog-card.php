<article class="blog-card">
    <a href="<?php the_permalink() ?>" class="blog-card__thumbnail-wrapper">
        <img src="/wp-content/themes/myTheme/src/assets/images/blog-cover-img.jpg" alt="blog image">
    </a>
    <div class="blog-card__content">
        <h3 class="h3-heading blog-card-h3-heading"><?php the_title() ?></h3>
        <div class="blog-card__inner-content">
            <div class="blog-card__date">
                <img class="icon" src="/wp-content/themes/myTheme/src/assets/icons/blog-date-icon.svg" alt="date icon">
                <div class="date"><?php the_time('F j, Y') ?></div>
            </div>
            <p class="blog-card__paragraph">
                <?php  echo wp_trim_words(get_the_content(), 25);  ?>
            </p>
            <a href="<?php the_permalink() ?>" class="read-more-link">Pročitaj Više...</a>
        </div>
    </div>
</article>