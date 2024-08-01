<form method="get" title="Search" role="search" class="search-form" action="<?php echo home_url() ?>">
    <div class="search-input-wrapper">
        <input type="search" placeholder="Pretraži blogove..." name="s" aria-label="search" class="search-input"
            value="<?php echo get_search_query(); ?>" required>
        <button class="search-form__submit" type="submit">
            <img src="/wp-content/themes/myTheme/src/assets/icons/search-icon.svg" aria-hidden="true">
        </button>
    </div>
</form>