<nav class="fixed top-0 left-0 w-full bg-white shadow-md z-50">

    <div class="max-w-7xl mx-auto px-4">

        <div class="flex items-center justify-between h-16">

            <a href="#hero" class="text-2xl font-bold tracking-wide text-green-700">
                VESPA
            </a>

            <ul class="hidden md:flex items-center gap-8 font-medium">

                <li><a href="#hero" class="hover:text-green-700 transition">Home</a></li>
                <li><a href="#about" class="hover:text-green-700 transition">Tentang</a></li>
                <li><a href="#product" class="hover:text-green-700 transition">Produk</a></li>
                <li><a href="#promo" class="hover:text-green-700 transition">Promo</a></li>
                <li><a href="#testimonial" class="hover:text-green-700 transition">Testimoni</a></li>
                <li><a href="#faq" class="hover:text-green-700 transition">FAQ</a></li>
                <li><a href="#contact" class="hover:text-green-700 transition">Kontak</a></li>

            </ul>

            <div class="flex items-center">

                <!-- Tombol Hubungi Kami (Desktop) -->
                <a href="#contact"
                    class="hidden md:block bg-green-700 text-white px-5 py-2 rounded-lg hover:bg-green-800 hover:scale-105 transition duration-300">

                    Hubungi Kami

                </a>

                <!-- Tombol Hamburger (Mobile) -->
                <button id="menu-btn"
                    class="md:hidden ml-4 text-3xl text-green-700">

                    ☰

                </button>

            </div>

        </div>

    </div>

    <div id="mobile-menu"
        class="hidden md:hidden bg-white shadow-md">

        <a href="#hero" class="block px-6 py-3 hover:bg-gray-100">Home</a>

        <a href="#about" class="block px-6 py-3 hover:bg-gray-100">Tentang</a>

        <a href="#product" class="block px-6 py-3 hover:bg-gray-100">Produk</a>

        <a href="#promo" class="block px-6 py-3 hover:bg-gray-100">Promo</a>

        <a href="#testimonial" class="block px-6 py-3 hover:bg-gray-100">Testimoni</a>

        <a href="#faq" class="block px-6 py-3 hover:bg-gray-100">FAQ</a>

        <a href="#contact" class="block px-6 py-3 hover:bg-gray-100">Kontak</a>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

        });
    </script>

</nav>