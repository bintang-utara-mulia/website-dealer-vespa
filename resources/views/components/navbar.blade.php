<nav class="fixed top-0 left-0 w-full bg-white shadow-md z-50">

    <div class="max-w-7xl mx-auto px-4">

        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a
                href="#hero"
                class="text-2xl font-bold tracking-wide text-black
           transition duration-300 hover:scale-105">

                VESPA

            </a>


            <!-- Desktop Menu -->
            <ul class="hidden md:flex items-center gap-8 font-medium">

                <li>
                    <a
                        href="{{ url('/') }}"
                        class="hover:text-green-700 transition duration-300">

                        Home

                    </a>
                </li>


                <li>
                    <a
                        href="{{ url('/about') }}"
                        class="hover:text-green-700 transition duration-300">

                        Tentang Kami

                    </a>
                </li>


                <li>
                    <a
                        href="{{ url('/products') }}"
                        class="hover:text-green-700 transition duration-300">

                        Produk

                    </a>
                </li>


                <li>
                    <a
                        href="{{ url('/promo') }}"
                        class="hover:text-green-700 transition duration-300">

                        Promo

                    </a>
                </li>


                <li>
                    <a
                        href="{{ url('/faq') }}"
                        class="hover:text-green-700 transition duration-300">

                        FAQ

                    </a>
                </li>


                <li>
                    <a
                        href="{{ url('/contact') }}"
                        class="hover:text-green-700 transition duration-300">

                        Kontak

                    </a>
                </li>

            </ul>


            <!-- Bagian Kanan -->
            <div class="flex items-center">

                <!-- Tombol Hubungi Kami -->
                <a
                    href="{{ url('/contact') }}"
                    class="hidden md:block
                           bg-green-700 text-white
                           px-5 py-2 rounded-lg
                           hover:bg-green-800
                           hover:scale-105
                           transition duration-300">

                    Hubungi Kami

                </a>


                <!-- Hamburger Mobile -->
                <button
                    id="menu-btn"
                    type="button"
                    class="md:hidden ml-4
                           text-3xl text-green-700
                           transition duration-300
                           hover:scale-110">

                    ☰

                </button>

            </div>

        </div>

    </div>


    <!-- Mobile Menu -->
    <div
        id="mobile-menu"
        class="hidden md:hidden bg-white shadow-md">

        <a
            href="{{ url('/') }}"
            class="block px-6 py-3
                   hover:bg-gray-100
                   hover:text-green-700
                   transition duration-300">

            Home

        </a>


        <a
            href="{{ url('/about') }}"
            class="block px-6 py-3
                   hover:bg-gray-100
                   hover:text-green-700
                   transition duration-300">

            Tentang Kami

        </a>


        <a
            href="{{ url('/products') }}"
            class="block px-6 py-3
                   hover:bg-gray-100
                   hover:text-green-700
                   transition duration-300">

            Produk

        </a>


        <a
            href="{{ url('/promo') }}"
            class="block px-6 py-3
                   hover:bg-gray-100
                   hover:text-green-700
                   transition duration-300">

            Promo

        </a>


        <a
            href="{{ url('/faq') }}"
            class="block px-6 py-3
                   hover:bg-gray-100
                   hover:text-green-700
                   transition duration-300">

            FAQ

        </a>


        <a
            href="{{ url('/contact') }}"
            class="block px-6 py-3
                   hover:bg-gray-100
                   hover:text-green-700
                   transition duration-300">

            Kontak

        </a>

    </div>


    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const menuBtn = document.getElementById('menu-btn');

            const mobileMenu = document.getElementById('mobile-menu');


            if (menuBtn && mobileMenu) {

                menuBtn.addEventListener('click', function() {

                    mobileMenu.classList.toggle('hidden');

                });


                const mobileLinks =
                    mobileMenu.querySelectorAll('a');


                mobileLinks.forEach(function(link) {

                    link.addEventListener('click', function() {

                        mobileMenu.classList.add('hidden');

                    });

                });

            }

        });
    </script>

</nav>