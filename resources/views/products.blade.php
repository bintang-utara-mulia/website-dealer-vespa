@extends('layouts.app')

@section('title', 'Produk Vespa - Dealer Vespa')

@section('content')

<section class="min-h-screen bg-gray-100 py-20">

    <div class="container mx-auto px-4">


        <!-- ========================= -->
        <!-- HEADER -->
        <!-- ========================= -->

        <div
            class="text-center mb-16"
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">


            <!-- ========================= -->
            <!-- VESPA SPRINT -->
            <!-- ========================= -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl transition duration-300
                       hover:-translate-y-2"
                data-aos="fade-up"
                data-aos-delay="100">

                <!-- Gambar -->

                <div class="bg-gray-50 p-8">

                    <img
                        src="{{ asset('images/sprint.png') }}"
                        alt="Vespa Sprint"
                        class="w-full h-64 object-contain">

                </div>


                <!-- Informasi -->

                <div class="p-7">

                    <span class="text-green-700 text-sm font-semibold uppercase">

                        Vespa Series

                    </span>


                    <h2 class="text-2xl font-bold mt-2">

                        Vespa Sprint

                    </h2>


                    <p class="text-gray-600 mt-4 leading-7">

                        Desain sporty dan modern dengan karakter
                        yang lincah serta elegan.

                    </p>


                    <div class="mt-6">

                        <p class="text-gray-500 text-sm">

                            Mulai dari

                        </p>

                        <p class="text-2xl font-bold text-green-700">

                            Rp59.000.000

                        </p>

                    </div>


                    <a
                        href="{{ url('/products/sprint') }}"
                        class="inline-block mt-6 w-full text-center
                               bg-green-700 text-white px-6 py-3
                               rounded-lg hover:bg-green-800
                               transition">

                        Lihat Detail

                    </a>

                </div>

            </div>



            <!-- ========================= -->
            <!-- VESPA PRIMAVERA -->
            <!-- ========================= -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl transition duration-300
                       hover:-translate-y-2"
                data-aos="fade-up"
                data-aos-delay="250">

                <!-- Gambar -->

                <div class="bg-gray-50 p-8">

                    <img
                        src="{{ asset('images/primavera.png') }}"
                        alt="Vespa Primavera"
                        class="w-full h-64 object-contain">

                </div>


                <!-- Informasi -->

                <div class="p-7">

                    <span class="text-green-700 text-sm font-semibold uppercase">

                        Vespa Series

                    </span>


                    <h2 class="text-2xl font-bold mt-2">

                        Vespa Primavera

                    </h2>


                    <p class="text-gray-600 mt-4 leading-7">

                        Perpaduan desain klasik, elegan, dan modern
                        untuk perjalanan sehari-hari.

                    </p>


                    <div class="mt-6">

                        <p class="text-gray-500 text-sm">

                            Mulai dari

                        </p>

                        <p class="text-2xl font-bold text-green-700">

                            Rp52.000.000

                        </p>

                    </div>


                    <a
                        href="{{ url('/products/primavera') }}"
                        class="inline-block mt-6 w-full text-center
                               bg-green-700 text-white px-6 py-3
                               rounded-lg hover:bg-green-800
                               transition">

                        Lihat Detail

                    </a>

                </div>

            </div>



            <!-- ========================= -->
            <!-- VESPA GTS -->
            <!-- ========================= -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl transition duration-300
                       hover:-translate-y-2"
                data-aos="fade-up"
                data-aos-delay="400">

                <!-- Gambar -->

                <div class="bg-gray-50 p-8">

                    <img
                        src="{{ asset('images/gts/white-right.png') }}"
                        alt="Vespa GTS"
                        class="w-full h-64 object-contain">

                </div>


                <!-- Informasi -->

                <div class="p-7">

                    <span class="text-green-700 text-sm font-semibold uppercase">

                        Vespa Series

                    </span>


                    <h2 class="text-2xl font-bold mt-2">

                        Vespa GTS

                    </h2>


                    <p class="text-gray-600 mt-4 leading-7">

                        Performa bertenaga dengan desain elegan
                        untuk pengalaman berkendara premium.

                    </p>


                    <div class="mt-6">

                        <p class="text-gray-500 text-sm">

                            Mulai dari

                        </p>

                        <p class="text-2xl font-bold text-green-700">

                            Rp80.000.000

                        </p>

                    </div>


                    <a
                        href="{{ url('/products/gts') }}"
                        class="inline-block mt-6 w-full text-center
                               bg-green-700 text-white px-6 py-3
                               rounded-lg hover:bg-green-800
                               transition">

                        Lihat Detail

                    </a>

                </div>

            </div>

        </div>



        <!-- ========================= -->
        <!-- CTA -->
        <!-- ========================= -->

        <div
            class="mt-20 bg-white rounded-2xl shadow-lg
                   p-10 text-center"
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
                class="inline-block mt-7 bg-green-700
                       text-white px-7 py-3 rounded-lg
                       hover:bg-green-800 transition">

                Hubungi Kami

            </a>

        </div>

    </div>

</section>

@endsection