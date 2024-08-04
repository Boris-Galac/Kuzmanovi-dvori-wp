<?php get_header() ?>
<main class="main">
    <!-- hero section -->
    <section class="hero">
        <!-- Swiper -->
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/wp-content/themes/myTheme/src/assets/images/hero-img-1.jpg" aria-hidden="true" />
                </div>
                <div class="swiper-slide">
                    <img src="/wp-content/themes/myTheme/src/assets/images/hero-img-2.jpg" aria-hidden="true" />
                </div>
                <div class="swiper-slide">
                    <img src="/wp-content/themes/myTheme/src/assets/images/hero-img-3.jpg" aria-hidden="true" />
                </div>
                <div class="swiper-slide">
                    <img src="/wp-content/themes/myTheme/src/assets/images/hero-img-4.jpg" aria-hidden="true" />
                </div>
                <div class="swiper-slide">
                    <img src="/wp-content/themes/myTheme/src/assets/images/hero-img-5.jpg" aria-hidden="true" />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hero__content-box">
                <p class="hero__subheadline-upper hidden-right" style="animation-delay: 1s;">kuća za odmor</p>
                <h1 class="hero__headline hidden-right" style="animation-delay: 1.5s;">kuzmanovi dvori</h1>
                <p class="hero__subheadline hidden-right" style="animation-delay: 2s;">
                    Doživite raskoš tradicije u vili "Kuzmanovi dvori" – gdje prošlost
                    susreće suvremenost.
                </p>
                <a href="#ponuda" class="hero__cta" role="button">istražite kuzmanove dvore
                    <div class="cta-slide"></div>

                    <img src="/wp-content/themes/myTheme/src/assets/icons/cta-arrow-right.svg" aria-hidden="true" />
                </a>
            </div>
        </div>
        <a href="#ponuda" class="scroll-down-btn">
            <img src="/wp-content/themes/myTheme/src/assets/icons/scroll-down-icon.svg" alt="scroll down btn" /></a>
    </section>
    <!-- dvori section -->
    <section class="dvori" id="dvori">
        <div class="container">
            <div class="dvori-row hidden-left">
                <img src="/wp-content/themes/myTheme/src/assets/images/dvori-imgs.png" alt="dvori image" />
            </div>
            <div class="dvori-row hidden-right">
                <h2 class="h2-heading">Dobrodošlica</h2>
                <p class="paragraph dark-text">
                    Stara šokačka kuća sa "četiri pendžera od druma" potpuno je
                    obnovljena u raskošnu vilu "Kuzmanovi dvori". Ova stogodišnja
                    ljepotica još uvijek gizdavo stoji i resi svoj šor. Kuća je
                    zadržala svoj izvorni vanjski izgled, a unutrašnjost je
                    prilagođena potrebama suvremenog čovjeka. Uz moderne i udobne
                    ležajeve, interijer krase izvorni komadi namještaja iz obiteljskog
                    nasljeđa te unikatni, masivni i ručno rađeni elementi.  Osjetite
                    dašak prošlosti. Uživajte u raskoši molovanih zidova i mirisu
                    stare hrastovine. Uživajte u pogledu kroz pendžer i u šetnji
                    avlijom i drumom. Odmorite duh i tijelo u prostoru koje zove na
                    predah od svakodnevice. Dođite u Štitar i doživite Slavoniju,
                    šokadiju, u punoj njenoj raskoši i u svom komforu koji vam je za
                    odmor potreban. Bit ćete nam dragi gosti.
                </p>
                <p class="paragraph dark-text potpis">Marija i Stjepan Živković</p>
            </div>
        </div>
    </section>
    <!-- ponuda section -->
    <section class="ponuda" id="ponuda">
        <div class="container">
            <h2 class="h2-heading ponuda__heading ornament-heading">
                Kuzmanovi dvori
            </h2>
            <div class="ponuda__wrapper">
                <article class="ponuda__article hidden-left">
                    <p class="paragraph">
                        Dvori se sastoje od dvije spavaće sobe, velikog dnevnog boravka s blagovaonicom, kuhinjom i
                        kupaonicom. Iz predsoblja i velike terase proteže se pogled na ograđeno i uređeno dvorište s
                        izvornom šokačkom arhitekturom.
                    </p>
                    <br /><br />
                    <p class="paragraph">
                        Opustiti se možete u spa zoni sa infracrvenom saunom i hidromasažnim bazenom.
                    </p>
                    <br /><br />
                    <p class="paragraph">
                        Možete uživati pod ljetnim paviljonom, ali i vozati se biciklima. Za vas možemo organizirati
                        vožnju konjima i zapregom kroz ušoreno slavonsko selo, gustu hrastovu šumu, plodna polja i
                        krivudavu rijeku Savu.
                    </p>
                    <br /><br />
                    <p class="paragraph">
                        Ovo nezaboravno iskustvo možete doživjeti samo u Štitaru.
                    </p>
                </article>
                <img src="/wp-content/themes/myTheme/src/assets/images/ponuda-img-1.png" alt="kuzmanovi dvori"
                    class="ponuda__img hidden-right" />
            </div>
        </div>
        <div class="ponuda__wrapper ponuda__wrapper--second hidden-fade">
            <img src="/wp-content/themes/myTheme/src/assets/images/ponuda-gallery-img.png" alt="gallery"
                class="gallery-block-image" />
            <a href="<?php echo site_url('gallery') ?>" class="gallery-btn">galerija
                <img src="/wp-content/themes/myTheme/src/assets/images/btn-img-ghallery.png" alt="btn gallery" /></a>
        </div>
        <div class="ponuda__wrapper container">
            <h3 class="h3-heading ornament-small-heading ponuda-h3-heading">
                Što sve nudimo
            </h3>
            <div class="ponuda__info">
                <div class="ponuda__info-row hidden-left">
                    <img src="/wp-content/themes/myTheme/src/assets/icons/offer-bad-icon.svg" alt="bad" />
                    <p class="ponuda-paragraph">
                        Noćenje za do 6 osoba sa slavonskim doručkom.
                    </p>
                </div>
                <div class="ponuda__separator"></div>
                <div class="ponuda__info-rows-big-wrapper">
                    <div class="ponuda__info-rows-wrapper">
                        <div class="ponuda__info-row hidden-left" style="animation-delay: .1s;">
                            <img src="/wp-content/themes/myTheme/src/assets/icons/offer-pool-icon.svg" alt="pool" />
                            <p class="ponuda-paragraph">Hidromasažni bazen</p>
                        </div>
                        <div class="ponuda__info-row hidden-left" style="animation-delay: .2s;">
                            <img src="/wp-content/themes/myTheme/src/assets/icons/offer-sauna-icon.svg" alt="sauna" />
                            <p class="ponuda-paragraph">Infracrvena sauna</p>
                        </div>
                        <div class="ponuda__info-row hidden-left" style="animation-delay: .3s;">
                            <img src="/wp-content/themes/myTheme/src/assets/icons/offer-playground-icon.svg"
                                alt="playground" />
                            <p class="ponuda-paragraph">Dječje igralište</p>
                        </div>
                    </div>
                    <div class="ponuda__info-rows-wrapper">
                        <div class="ponuda__info-row hidden-left" style="animation-delay: .4s;">
                            <img src="/wp-content/themes/myTheme/src/assets/icons/offer-bike-icon.svg"
                                alt="playground" />
                            <p class="ponuda-paragraph">Bicikli</p>
                        </div>
                        <div class="ponuda__info-row hidden-left" style="animation-delay: .5s;">
                            <img src="/wp-content/themes/myTheme/src/assets/icons/offer-grill-icon.svg"
                                alt="playground" />
                            <p class="ponuda-paragraph">Roštilj</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="h4-heading more-info-h4-heading">Dodatni opis</h4>
            <div class="more-info__wrapper">
                <div class="more-info__inner-wrapper">
                    <span class="info-row-heading">Plaćanje i napomene</span>
                    <div>
                        <p class="more-info-paragraph">Plaćanje po dolasku u apartman, uz akontaciju po dogovoru</p>
                        <div class="more-info__row">
                            <p class="more-info-paragraph">Boravišna pristojba je uključena u cijenu.</p>
                            <img src="/wp-content/themes/myTheme/src/assets/icons/little-checkmark-icon.svg"
                                alt="checkmark">
                        </div>
                    </div>
                </div>
                <div class="more-info__inner-wrapper">
                    <span class="info-row-heading">Politika otkazivanja</span>
                    <div>
                        <p class="more-info-paragraph">Ne vršimo povrat akontacije.</p>
                    </div>
                </div>
                <div class="more-info__inner-wrapper">
                    <span class="info-row-heading">Udaljenost od objekta</span>
                    <div class="udaljenost-wrapper">
                        <div class="udaljenost-inner-wrapper">
                            <div class="udaljenost-row">
                                <div>
                                    <img class="icon" src="/wp-content/themes/myTheme/src/assets/icons/centar-icon.svg"
                                        alt="icon">
                                    <span>Centar</span>
                                </div>
                                <span class="info-udaljenost-num">100m</span>
                            </div>
                            <div class="udaljenost-row">
                                <div>
                                    <img class="icon" src="/wp-content/themes/myTheme/src/assets/icons/doktor-icon.svg"
                                        alt="icon">
                                    <span>Doktor</span>
                                </div>
                                <span class="info-udaljenost-num">50m</span>
                            </div>
                            <div class="udaljenost-row">
                                <div>
                                    <img class="icon" src="/wp-content/themes/myTheme/src/assets/icons/pošta-icon.svg"
                                        alt="icon">
                                    <span>Pošta</span>
                                </div>
                                <span class="info-udaljenost-num">300m</span>
                            </div>
                        </div>
                        <div class="udaljenost-inner-wrapper">
                            <div class="udaljenost-row">
                                <div>
                                    <img class="icon"
                                        src="/wp-content/themes/myTheme/src/assets/icons/trgovina-icon.svg" alt="icon">
                                    <span>Trgovina</span>
                                </div>
                                <span class="info-udaljenost-num">100m</span>
                            </div>
                            <div class="udaljenost-row">
                                <div>
                                    <img class="icon"
                                        src="/wp-content/themes/myTheme/src/assets/icons/ljekarna-icon.svg" alt="icon">
                                    <span>Ljekarna</span>
                                </div>
                                <span class="info-udaljenost-num">5km</span>
                            </div>
                            <div class="udaljenost-row">
                                <div>
                                    <img class="icon"
                                        src="/wp-content/themes/myTheme/src/assets/icons/benzinska-icon.svg" alt="icon">
                                    <span>Benzinska crpka</span>
                                </div>
                                <span class="info-udaljenost-num">5km</span>
                            </div>
                        </div>
                        <div class="udaljenost-inner-wrapper">
                            <div class="udaljenost-row">
                                <div>
                                    <img class="icon"
                                        src="/wp-content/themes/myTheme/src/assets/icons/restoran-icon.svg" alt="icon">
                                    <span>Restoran</span>
                                </div>
                                <span class="info-udaljenost-num">200m</span>
                            </div>
                            <div class="udaljenost-row">
                                <div>
                                    <img class="icon" src="/wp-content/themes/myTheme/src/assets/icons/banka-icon.svg"
                                        alt="icon">
                                    <span>Banka</span>
                                </div>
                                <span class="info-udaljenost-num">5km</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- blog-feed section -->
    <section class="blog-feed" id="blog">
        <h2 class="h2-heading blog-feed-heading dark-text dark-ornament-heading">Blog</h2>
        <div class="blog-feed__inner-wrapper container">
            <?php
            $args = array(
                'posts_per_page' => 1, // Get only one post
                'orderby' => 'date',   // Order by post date
                'order' => 'DESC'      // Get the latest post
            );
            $latest_post_query = new WP_Query($args);

  

        if($latest_post_query->have_posts()){
            while($latest_post_query->have_posts()){
                $latest_post_query->the_post();

                get_template_part('template-parts/content', 'blog-card');
            ?> <a href="<?php echo site_url('blog') ?>" class="see-more-blogs-btn">Istraži cijeli blog <img
                    src="/wp-content/themes/myTheme/src/assets/icons/arrow-right-icon.svg" alt="arrow right"></a>
            <?php  }
        }else{ ?>
            <p class="no-blogs-found">Nema postavljenih blogova još...</p>
            <?php  }
            
        ?>

        </div>
    </section>
    <!-- recenzije section -->
    <section class="recenzije" id="recenzije">
        <h2 class="h2-heading recenzije-h2-heading dark-ornament-heading">Recenzije</h2>
        <div class="recenzije__wrapper container">
            <!-- Swiper -->
            <div class="swiper recenzija-swiper ">
                <div class="swiper-wrapper ">
                    <article class="recenzija-card swiper-slide">
                        <p class="paragraph">Kuća je top uređena, a domaćini su uslužni i sve se može dogovoriti. Ako
                            nas put opet
                            odvede u Slavoniju, svakako ćemo opet noćiti u Kuzmanovim dvorima!</p>
                        <div class="name">
                            <span><img src="/wp-content/themes/myTheme/src/assets/images/google-logo.png"
                                    alt="google"></span>
                            <h3 class="h3-heading">Ivana Mateša</h3>
                        </div>
                    </article>
                    <article class="recenzija-card swiper-slide">
                        <p class="paragraph">We arrived on January 1st after a 9-hour drive and in need of a break for
                            the night.
                            We gave a call couple of hours before to check if they could accommodate us. The owners were
                            kind enough
                            to welcome us, light a fire and warm the house for our arrival. Since everything was closed
                            that day,
                            they even prepared us dinner. Truly kind people. Thank you.
                        </p>
                        <div class="name">
                            <span><img src="/wp-content/themes/myTheme/src/assets/images/google-logo.png"
                                    alt="google"></span>
                            <h3 class="h3-heading">Boryana Stamenova</h3>
                        </div>
                    </article>
                    <article class="recenzija-card swiper-slide">
                        <p class="paragraph">We stayed the last weekend in Aug 2023. It was extremely hot(39°C) but we
                            never felt the discomfort due to the air conditioning, which worked well. The hosts were
                            very accommodating to any of our needs and even delivered an excellent slavonian breakfast
                            to us every morning. Kuzumanovi dvori is a spacious, comfortable and clean home that I can
                            highly recommend to anyone coming to the Županja area of Croatia.</p>
                        <div class="name">
                            <span><img src="/wp-content/themes/myTheme/src/assets/images/google-logo.png"
                                    alt="google"></span>
                            <h3 class="h3-heading">Gina Anderson</h3>
                        </div>
                    </article>
                    <article class="recenzija-card swiper-slide">
                        <p class="paragraph">Sve pohvale vlasnicima na ovom malom raju. Kao prvi gosti u Kuzmanovim
                            dvorima sa malom bebom imamo samo riječi pohvale za uređenje ,ekonomičnost,čistoću lokaciju
                            i naravno domaćine! Topao doček i sve informacije bile su dostupne za jedan tren,vrhunski
                            doručak bogat domaćim proizvodima.. Sam interijer je kompletno nov dok je jednim dijelom
                            zadržao onu starinsku dušu baš kao što mi mlađi volimo. Veliki dnevni boravak i vatrica daju
                            poseban ugođaj.. Imate naše preporuke ,a mi se sigurno vraćamo :)
                        </p>
                        <div class="name">
                            <span><img src="/wp-content/themes/myTheme/src/assets/images/google-logo.png"
                                    alt="google"></span>
                            <h3 class="h3-heading">Roko Pavlinušić</h3>
                        </div>
                    </article>
                    <article class="recenzija-card swiper-slide">
                        <p class="paragraph">Čistoća ambijenta, Urednost, funkcionalnost i udobnost. Idealno mjesto za
                            kratki i Duži odmor. Stogodišnji Kuzmanovi Dvori odražavaju Slavonski i Šokački duh, Mladi
                            vlasnici su očito spojili tradiciju sa modernim stilom, da se sve generacije gostiju ugodno
                            osjećaju. Posebno ističemo ljubaznost vlasnika.

                            Sve nas je oduševilo.</p>
                        <div class="name">
                            <span><img src="/wp-content/themes/myTheme/src/assets/images/booking-logo.png"
                                    alt="booking"></span>
                            <h3 class="h3-heading">Buzov</h3>
                        </div>
                    </article>
                    <article class="recenzija-card swiper-slide">
                        <p class="paragraph">Ova mirna lokacija nalazi se u selu odmah pored autoceste, što je idealno
                            za noćni odmor dok putujete. Objekt je vrlo prostran, čist i dobro održavan. Terasa s
                            hidromasažnom kadom i sunčano dvorište idealni su za opuštanje. U obližnjem restoranu
                            poslužuju se ukusna jela. Doručak je bio jako lijep, previše.
                        </p>
                        <div class="name">
                            <span><img src="/wp-content/themes/myTheme/src/assets/images/booking-logo.png"
                                    alt="booking"></span>
                            <h3 class="h3-heading">Lucie</h3>
                        </div>
                    </article>
                    <article class="recenzija-card swiper-slide">
                        <p class="paragraph">Ovaj vrlo čist, prostran i nedavno obnovljen objekt obuhvaća velik ograđeni
                            vrt u kojem se gosti mogu igrati, opustiti ili koristiti opremu za roštilj. Sve raspoloživo,
                            čak i za duži boravak. Vrlo topli i prijateljski domaćini koji pripremaju prekrasan doručak.
                            Objekt "dvori" nalazi se u malom selu koje je zadržalo svoj karakter, na idealnoj lokaciji
                            za one koji prolaze autocestom na putu prema jugu, na jednodnevnom izletu oko 800 km od
                            Münchena i 60 km od granice sa Srbijom. Bili smo četvero odraslih s dva psa i uživali smo u
                            boravku (također u restoranu Rustica, koji se nalazi iza ugla). Hvala vam na hrvatskom
                            gostoprimstvu!

                        </p>
                        <div class="name">
                            <span><img src="/wp-content/themes/myTheme/src/assets/images/booking-logo.png"
                                    alt="booking"></span>
                            <h3 class="h3-heading">Hans</h3>
                        </div>
                    </article>
                    <article class="recenzija-card swiper-slide">
                        <p class="paragraph">Prekrasna stara kuća na farmi, s ljubavlju obnovljena. Vrlo prostrana i
                            dobro opremljena. Udobno. Parkiranje ispred kuće. Dobar doručak u vrtu. Na raspolaganju je
                            jacuzzi za opuštanje. Vrlo prijateljski domaćica.
                        </p>
                        <div class="name">
                            <span><img src="/wp-content/themes/myTheme/src/assets/images/booking-logo.png"
                                    alt="booking"></span>
                            <h3 class="h3-heading">Johannes</h3>
                        </div>
                    </article>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- contact section -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>
<?php get_footer() ?>