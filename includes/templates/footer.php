<footer class="footer">
    <div class="contenedor">
        <div class="barra">
            <a class="logo" href="index.php">
                <h1 class="logo__nombre no-margin centrar-texto">Blog<span class="logo__bold">DeCafé</span></h1>
            </a>

            <nav class="navegacion">
                <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                <a href="cursos.php" class="navegacion__enlace">Cursos</a>
                <a href="contacto.php" class="navegacion__enlace">Contacto</a>
            </nav>
        </div>
    </div>
</footer>

<!-- AOS JS (Librería de Animaciones al Scroll) -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Swiper.js JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiperCursos = new Swiper('.swiper-cursos', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
</body>
</html>