<nav class="bg-white shadow-md sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="relative flex items-center justify-between h-20">

            <!-- LOGO -->
            <div class="flex-shrink-0">

                <a href="{{ url('/') }}"
                    class="text-3xl font-bold tracking-wide text-gray-900">

                    Vespa

                </a>

            </div>


            <!-- DESKTOP MENU -->
            <div class="hidden md:flex absolute left-1/2
                        -translate-x-1/2 items-center gap-8">

                <a
                    href="{{ url('/') }}"
                    class="text-gray-700 hover:text-green-700
                           transition font-medium">

                    Home

                </a>


                <a
                    href="{{ url('/about') }}"
                    class="text-gray-700 hover:text-green-700
                           transition font-medium">

                    Tentang Kami

                </a>


                <a
                    href="{{ url('/products') }}"
                    class="text-gray-700 hover:text-green-700
                           transition font-medium">

                    Produk

                </a>


                <a
                    href="{{ url('/promo') }}"
                    class="text-gray-700 hover:text-green-700
                           transition font-medium">

                    Promo

                </a>


                <a
                    href="{{ url('/faq') }}"
                    class="text-gray-700 hover:text-green-700
                           transition font-medium">

                    FAQ

                </a>


                <a
                    href="{{ url('/contact') }}"
                    class="text-gray-700 hover:text-green-700
                           transition font-medium">

                    Kontak

                </a>

            </div>


            <!-- MOBILE BUTTON -->
            <button
                type="button"
                onclick="toggleMobileMenu()"
                class="md:hidden text-gray-700 text-2xl
                       focus:outline-none">

                ☰

            </button>

        </div>


        <!-- MOBILE MENU -->
        <div
            id="mobileMenu"
            class="hidden md:hidden pb-5">

            <div class="flex flex-col gap-2">

                <a
                    href="{{ url('/') }}"
                    class="px-4 py-3 rounded-lg
                           text-gray-700 hover:bg-gray-100
                           hover:text-green-700">

                    Home

                </a>


                <a
                    href="{{ url('/about') }}"
                    class="px-4 py-3 rounded-lg
                           text-gray-700 hover:bg-gray-100
                           hover:text-green-700">

                    Tentang Kami

                </a>


                <a
                    href="{{ url('/products') }}"
                    class="px-4 py-3 rounded-lg
                           text-gray-700 hover:bg-gray-100
                           hover:text-green-700">

                    Produk

                </a>


                <a
                    href="{{ url('/promo') }}"
                    class="px-4 py-3 rounded-lg
                           text-gray-700 hover:bg-gray-100
                           hover:text-green-700">

                    Promo

                </a>


                <a
                    href="{{ url('/faq') }}"
                    class="px-4 py-3 rounded-lg
                           text-gray-700 hover:bg-gray-100
                           hover:text-green-700">

                    FAQ

                </a>


                <a
                    href="{{ url('/contact') }}"
                    class="px-4 py-3 rounded-lg
                           text-gray-700 hover:bg-gray-100
                           hover:text-green-700">

                    Kontak

                </a>

            </div>

        </div>

    </div>

</nav>


<script>
    function toggleMobileMenu() {

        const menu = document.getElementById('mobileMenu');

        menu.classList.toggle('hidden');

    }
</script>