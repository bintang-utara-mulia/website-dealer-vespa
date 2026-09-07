@extends('layouts.app')

@section('title', 'Produk Vespa - Dealer Vespa')

@section('content')

<section class="min-h-screen bg-gray-100 py-20" data-aos="zoom-in">

    <div class="container mx-auto px-4">


        <!-- ========================= -->
        <!-- HEADER -->
        <!-- ========================= -->

        <div
            class="text-center mb-14"
            data-aos="fade-down">

            <span class="text-green-700 font-semibold uppercase tracking-wide">

                Vespa Collection

            </span>

            <h1 class="text-4xl md:text-5xl font-bold mt-3">

                Pilih Vespa Impianmu

            </h1>

            <p class="mt-5 text-gray-600 max-w-2xl mx-auto leading-7">

                Temukan berbagai pilihan Vespa dengan desain ikonik,
                teknologi modern, dan karakter yang berbeda untuk
                menemani setiap perjalanan Anda.

            </p>

        </div>



        <!-- ========================= -->
        <!-- PRODUCT GRID -->
        <!-- ========================= -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


            <!-- ========================= -->
            <!-- VESPA SPRINT -->
            <!-- ========================= -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl hover:-translate-y-2
                       transition duration-300">

                <div
                    data-aos="fade-up"
                    data-aos-delay="100">

                    <!-- Gambar -->

                    <div class="bg-gray-50">

                        <img
                            src="{{ asset('images/sprint.png') }}"
                            alt="Vespa Sprint"
                            class="w-full h-52 object-contain p-5
                                   hover:scale-105
                                   transition duration-300">

                    </div>


                    <!-- Informasi -->

                    <div class="p-5">

                        <span class="text-green-700 text-sm font-semibold uppercase">

                            Vespa Series

                        </span>


                        <h2 class="text-xl font-bold mt-2">

                            Vespa Sprint

                        </h2>


                        <p class="text-gray-600 mt-3 leading-6 text-sm">

                            Desain sporty dan modern dengan karakter
                            yang lincah serta elegan.

                        </p>


                        <!-- Harga -->

                        <div class="mt-5">

                            <p class="text-gray-500 text-sm">

                                Mulai dari

                            </p>

                            <p class="text-xl font-bold text-green-700">

                                Rp59.000.000

                            </p>

                        </div>


                        <!-- Button -->

                        <a
                            href="{{ url('/products/sprint') }}"
                            class="mt-5 inline-block w-full text-center
                                   bg-green-700 text-white px-5 py-2.5
                                   rounded-lg
                                   hover:bg-green-800
                                   hover:scale-105
                                   transition duration-300">

                            Lihat Detail

                        </a>

                    </div>

                </div>

            </div>



            <!-- ========================= -->
            <!-- VESPA PRIMAVERA -->
            <!-- ========================= -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl hover:-translate-y-2
                       transition duration-300">

                <div
                    data-aos="fade-up"
                    data-aos-delay="250">

                    <!-- Gambar -->

                    <div class="bg-gray-50">

                        <img
                            src="{{ asset('images/primavera.png') }}"
                            alt="Vespa Primavera"
                            class="w-full h-52 object-contain p-5
                                   hover:scale-105
                                   transition duration-300">

                    </div>


                    <!-- Informasi -->

                    <div class="p-5">

                        <span class="text-green-700 text-sm font-semibold uppercase">

                            Vespa Series

                        </span>


                        <h2 class="text-xl font-bold mt-2">

                            Vespa Primavera

                        </h2>


                        <p class="text-gray-600 mt-3 leading-6 text-sm">

                            Perpaduan desain klasik, elegan, dan modern
                            untuk perjalanan sehari-hari.

                        </p>


                        <!-- Harga -->

                        <div class="mt-5">

                            <p class="text-gray-500 text-sm">

                                Mulai dari

                            </p>

                            <p class="text-xl font-bold text-green-700">

                                Rp52.000.000

                            </p>

                        </div>


                        <!-- Button -->

                        <a
                            href="{{ url('/products/primavera') }}"
                            class="mt-5 inline-block w-full text-center
                                   bg-green-700 text-white px-5 py-2.5
                                   rounded-lg
                                   hover:bg-green-800
                                   hover:scale-105
                                   transition duration-300">

                            Lihat Detail

                        </a>

                    </div>

                </div>

            </div>



            <!-- ========================= -->
            <!-- VESPA GTS -->
            <!-- ========================= -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl hover:-translate-y-2
                       transition duration-300">

                <div
                    data-aos="fade-up"
                    data-aos-delay="400">

                    <!-- Gambar -->

                    <div class="bg-gray-50">

                        <img
                            src="{{ asset('images/gts/white-right.png') }}"
                            alt="Vespa GTS"
                            class="w-full h-52 object-contain p-5
                                   hover:scale-105
                                   transition duration-300">

                    </div>


                    <!-- Informasi -->

                    <div class="p-5">

                        <span class="text-green-700 text-sm font-semibold uppercase">

                            Vespa Series

                        </span>


                        <h2 class="text-xl font-bold mt-2">

                            Vespa GTS

                        </h2>


                        <p class="text-gray-600 mt-3 leading-6 text-sm">

                            Performa bertenaga dengan desain elegan
                            untuk pengalaman berkendara premium.

                        </p>


                        <!-- Harga -->

                        <div class="mt-5">

                            <p class="text-gray-500 text-sm">

                                Mulai dari

                            </p>

                            <p class="text-xl font-bold text-green-700">

                                Rp80.000.000

                            </p>

                        </div>


                        <!-- Button -->

                        <a
                            href="{{ url('/products/gts') }}"
                            class="mt-5 inline-block w-full text-center
                                   bg-green-700 text-white px-5 py-2.5
                                   rounded-lg
                                   hover:bg-green-800
                                   hover:scale-105
                                   transition duration-300">

                            Lihat Detail

                        </a>

                    </div>

                </div>

            </div>

        </div>



        <!-- ========================= -->
        <!-- CTA -->
        <!-- ========================= -->

        <div
            class="mt-16 bg-white rounded-2xl shadow-lg
                   p-8 text-center
                   hover:shadow-2xl
                   transition duration-300"
            data-aos="fade-up"
            data-aos-delay="500">


            <h2 class="text-3xl font-bold">

                Masih Bingung Memilih?

            </h2>


            <p class="mt-4 text-gray-600 max-w-xl mx-auto">

                Hubungi sales kami untuk mendapatkan informasi
                lebih lengkap mengenai Vespa yang sesuai dengan
                kebutuhan Anda.

            </p>


            <a
                href="{{ url('/contact') }}"
                class="mt-6 inline-block
                       bg-green-700 text-white px-7 py-3 rounded-lg
                       hover:bg-green-800
                       hover:scale-105
                       transition duration-300">

                Hubungi Kami

            </a>

        </div>


    </div>

</section>

@endsection