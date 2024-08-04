<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stara šokačka kuća sa 'četiri pendžera od druma' potpuno je obnovljena u raskošnu vilu 'Kuzmanovi dvori'. Ova stogodišnja ljepotica još uvijek gizdavo stoji i resi svoj šor. Kuća je zadržala je svoj izvorni vanjski izgled, a unutrašnjost je prilagođena potrebama suvremenog čovjeka.'' />
  <meta name=" robots" content="index, follow" />
    <meta name="keywords" content="Kuzmanovi dvori, kuća za odmor, turizam, slavonija, štitar, odmor" />
    <?php wp_head() ?>
</head>

<body <?php body_class()?>>
    <header class="header">
        <a href="<?php echo site_url() ?>" class="header__logo"><img
                src="/wp-content/themes/myTheme/src/assets/icons/logo.svg" alt="" /></a>
        <nav class="nav" id="nav" aria-expanded="false">
            <ul class="nav__list">
                <?php if(is_front_page()){ ?>
                <li class="nav__item"><a href="#dvori" class="nav__link">O dvorima</a></li>
                <li class="nav__item"><a href="#ponuda" class="nav__link">Ponuda</a></li>
                <li class="nav__item"><a href="<?php echo site_url('gallery') ?>" class="nav__link">Galerija</a></li>
                <li class="nav__item"><a href="#blog" class="nav__link">Blog</a></li>
                <li class="nav__item"><a href="#recenzije" class="nav__link">Recenzije</a></li>
                <li class="nav__item"><a href="#kontakt" class="nav__link">Kontakt</a></li>
                <?php } ?>
                <?php if(is_single()){ ?>
                <ul class="nav__list">
                    <li class="nav__item"><a href="<?php echo site_url('') ?>" class="nav__link">Početna</a></li>
                    <li class="nav__item"><a href="<?php echo site_url('blog') ?>" class="nav__link">Svi blogovi</a>
                    </li>
                </ul>
                <?php } ?>
                <?php if(is_home()){ ?>
                <ul class="nav__list">
                    <li class="nav__item"><a href="<?php echo site_url('') ?>" class="nav__link">Početna</a></li>
                    </li>
                </ul>
                <?php } ?>
            </ul>
        </nav>
        <div class="nav__right-col">
            <button class="search-btn">
                <img src="/wp-content/themes/myTheme/src/assets/icons/search-icon.svg" alt="search icon" />
            </button>
            <button class="ham-btn" aria-label="ham button" data-active="false" tabindex="0" aria-controls="nav">
                <div class="ham-line"></div>
                <div class="ham-line"></div>
                <div class="ham-line"></div>
            </button>
        </div>
    </header>