<footer class="bg-gray-900 text-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">


            <!-- ========================= -->
            <!-- BRAND -->
            <!-- ========================= -->

            <div>

                <a
                    href="{{ url('/') }}"
                    class="text-3xl font-bold tracking-wide">

                    Vespa

                </a>

                <p class="mt-4 text-gray-400 leading-7">

                    Temukan Vespa impian Anda dengan desain ikonik,
                    teknologi modern, dan kualitas terbaik.

                </p>

            </div>



            <!-- ========================= -->
            <!-- NAVIGASI -->
            <!-- ========================= -->

            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Navigasi
                </h3>

                <div class="space-y-3">

                    <a
                        href="{{ url('/') }}"
                        class="block text-gray-400 hover:text-white transition">

                        Home

                    </a>


                    <a
                        href="{{ url('/about') }}"
                        class="block text-gray-400 hover:text-white transition">

                        Tentang Kami

                    </a>


                    <a
                        href="{{ url('/products') }}"
                        class="block text-gray-400 hover:text-white transition">

                        Produk

                    </a>


                    <a
                        href="{{ url('/promo') }}"
                        class="block text-gray-400 hover:text-white transition">

                        Promo

                    </a>


                    <a
                        href="{{ url('/faq') }}"
                        class="block text-gray-400 hover:text-white transition">

                        FAQ

                    </a>


                    <a
                        href="{{ url('/contact') }}"
                        class="block text-gray-400 hover:text-white transition">

                        Kontak

                    </a>

                </div>

            </div>



            <!-- ========================= -->
            <!-- PRODUK -->
            <!-- ========================= -->

            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Produk
                </h3>

                <div class="space-y-3">

                    <a
                        href="{{ url('/products/sprint') }}"
                        class="block text-gray-400 hover:text-white transition">

                        Vespa Sprint

                    </a>


                    <a
                        href="{{ url('/products/primavera') }}"
                        class="block text-gray-400 hover:text-white transition">

                        Vespa Primavera

                    </a>


                    <a
                        href="{{ url('/products/gts') }}"
                        class="block text-gray-400 hover:text-white transition">

                        Vespa GTS

                    </a>

                </div>

            </div>



            <!-- ========================= -->
            <!-- KONTAK -->
            <!-- ========================= -->

            <div>

                <h3 class="text-lg font-semibold mb-5">
                    Hubungi Kami
                </h3>

                <div class="space-y-4 text-gray-400">

                    <p>
                        📍 Jl. Contoh No. 123, Indonesia
                    </p>

                    <p>
                        📱 0812-3456-7890
                    </p>

                    <p>
                        ✉️ info@dealer-vespa.com
                    </p>

                    <a
                        href="https://wa.me/6281234567890?text=Halo%20Sales,%20saya%20ingin%20bertanya%20tentang%20Vespa"
                        target="_blank"
                        class="inline-block mt-2 bg-green-700
                               text-white px-5 py-2 rounded-lg
                               hover:bg-green-800 transition">

                        WhatsApp

                    </a>

                </div>

            </div>

        </div>


        <!-- ========================= -->
        <!-- COPYRIGHT -->
        <!-- ========================= -->

        <div class="border-t border-gray-700 mt-12 pt-6
                    flex flex-col md:flex-row
                    justify-between items-center gap-3">

            <p class="text-gray-500 text-sm">

                © {{ date('Y') }} Dealer Vespa.
                All rights reserved.

            </p>

            <p class="text-gray-500 text-sm">

                Vespa MultiPage Website

            </p>

        </div>

    </div>

</footer>