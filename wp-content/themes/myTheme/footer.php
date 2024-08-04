<button class="back-to-top-btn" data-visible="false" aria-label="scroll to top of the page">
    <img src="/wp-content/themes/myTheme/src/assets/icons/top-icon.svg" alt="scroll to top icon" />
</button>
<div class="cookies-modal" aria-labelledby="modalTitle" role="dialog" aria-modal="true" aria-expanded="false">
    <p class="cookies-modal__paragraph">Web koristi kolačiće kako bi se osiguralo bolje korisničko iskustvo i
        funkcionalnost stranica. Više informacija o kolačićima možete potražiti <a href="#">ovdje</a>.</p>
    <button class="cookies-modal__btn">
        Prihvaćam
    </button>
</div>
<div class="overlay" data-active="false" aria-expanded="false">
    <?php get_search_form() ?>
</div>
<footer class="footer">
    <img src="/wp-content/themes/myTheme/src/assets/icons/logo.svg" class="footer__logo" alt="footer logo">
    <nav class="footer__logo">
        <ul class="footer__list">
            <li class="footer__item">
                <a href="#dvori" class="footer__link">O dvorima</a>
            </li>
            <li class="footer__item">
                <a href="#ponuda" class="footer__link">Kuzmanovi dvori</a>
            </li>
            <li class="footer__item">
                <a href="<?php echo site_url('gallery') ?>" class="footer__link">Galerija</a>
            </li>
            <li class="footer__item">
                <a href="#blog" class="footer__link">Blog</a>
            </li>
            <li class="footer__item">
                <a href="#recenzije" class="footer__link">Recenzije</a>
            </li>
            <li class="footer__item">
                <a href="#kontakt" class="footer__link">Kontakt</a>
            </li>
        </ul>
    </nav>
    <div class="footer__socials">
        <a href="https://www.facebook.com/profile.php?id=100090977297914" target="_blank"><img
                src="/wp-content/themes/myTheme/src/assets/icons/fb-icon.svg" alt="facebook icon"></a>
        <a href="mailto:kuzmanovidvori@gmail.com" target="_blank"><img
                src="/wp-content/themes/myTheme/src/assets/icons/gmail-icon.svg" alt="gmail icon"></a>
        <a href="https://www.instagram.com/kuzmanovi_dvori/" target="_blank"><img
                src="/wp-content/themes/myTheme/src/assets/icons/instagram-icon.svg" alt="instagram icon"></a>
    </div>
    <div class="copyright">
        <p>Copyright © 2024 - All Rights Reserved.</p>
        <p>Website kreirao i uredio: <a class="galac-design" target="_blank"
                href="https://www.galac-design.hr/">GALAC-DESIGN</a> </p>
    </div>
</footer>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php wp_footer() ?>

</body>

</html>