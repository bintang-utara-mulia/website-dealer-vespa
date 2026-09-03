@extends('layouts.app')

@section('title', 'Home - Dealer Vespa')

@section('content')

<!-- ========================= -->
<!-- HERO -->
<!-- ========================= -->

<section class="min-h-screen flex items-center bg-gray-100 pt-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Text -->

            <div data-aos="fade-right">

                <span class="text-green-700 font-semibold uppercase">

                    Dealer Resmi Vespa

                </span>

                <h1 class="text-4xl md:text-6xl font-bold mt-4 leading-tight">

                    Rasakan Sensasi
                    Berkendara Bersama
                    Vespa

                </h1>

                <p
                    class="mt-6 text-gray-600 leading-8"
                    data-aos="fade-up"
                    data-aos-delay="150">

                    Temukan Vespa pilihan Anda dengan desain elegan,
                    performa terbaik, dan pengalaman berkendara yang berbeda.

                </p>

                <div
                    class="mt-8 flex flex-col sm:flex-row gap-4"
                    data-aos="fade-up"
                    data-aos-delay="250">

                    <a
                        href="{{ url('/products') }}"
                        class="bg-green-700 text-white px-6 py-3 rounded-lg
                               hover:bg-green-800 hover:scale-105
                               transition duration-300 text-center">

                        Lihat Produk

                    </a>

                    <a
                        href="{{ url('/contact') }}"
                        class="border border-green-700 text-green-700 px-6 py-3
                               rounded-lg hover:bg-green-700 hover:text-white
                               hover:scale-105 transition duration-300 text-center">

                        Hubungi Sales

                    </a>

                </div>

            </div>


            <!-- Image -->

            <div
                class="flex justify-center"
                data-aos="fade-left">

                <img
                    src="{{ asset('images/electrica.png') }}"
                    alt="Vespa"
                    class="w-full max-w-lg mx-auto object-contain">

            </div>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- TENTANG KAMI -->
<!-- ========================= -->

<section class="bg-white py-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Text -->

            <div data-aos="fade-right">

                <span class="text-green-700 font-semibold uppercase">

                    Tentang Kami

                </span>

                <h2 class="text-3xl md:text-4xl font-bold mt-3">

                    Partner Perjalanan Vespa Anda

                </h2>

                <p class="mt-6 text-gray-600 leading-8">

                    Kami hadir untuk membantu Anda menemukan Vespa
                    yang sesuai dengan kebutuhan dan gaya berkendara.
                    Dengan berbagai pilihan model dan pelayanan yang
                    profesional, kami siap memberikan pengalaman terbaik.

                </p>

                <a
                    href="{{ url('/about') }}"
                    class="inline-block mt-7 bg-green-700 text-white
                           px-6 py-3 rounded-lg
                           hover:bg-green-800 transition">

                    Selengkapnya

                </a>

            </div>


            <!-- Card -->

            <div
                class="bg-gray-100 rounded-3xl p-10 text-center shadow-lg"
                data-aos="fade-left">

                <div class="text-5xl font-bold text-green-700">

                    Vespa

                </div>

                <p class="mt-4 text-gray-600">

                    Style • Performance • Elegance

                </p>

            </div>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- PRODUK UNGGULAN -->
<!-- ========================= -->

<section class="bg-gray-100 py-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div
            class="text-center mb-14"
            data-aos="fade-down">

            <span class="text-green-700 font-semibold uppercase">

                Produk

            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-3">

                Vespa Pilihan

            </h2>

            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">

                Jelajahi pilihan Vespa dengan karakter, desain,
                dan performa yang berbeda.

            </p>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">


            <!-- Sprint -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl hover:-translate-y-2
                       transition duration-300"
                data-aos="fade-up"
                data-aos-delay="100">

                <div class="bg-gray-50 p-6">

                    <img
                        src="{{ asset('images/sprint.png') }}"
                        alt="Vespa Sprint"
                        class="w-full h-56 object-contain">

                </div>

                <div class="p-6">

                    <h3 class="text-2xl font-bold">

                        Vespa Sprint

                    </h3>

                    <p class="mt-3 text-gray-600">

                        Sporty, modern, dan lincah.

                    </p>

                    <a
                        href="{{ url('/products/sprint') }}"
                        class="inline-block mt-5 text-green-700
                               font-semibold hover:underline">

                        Lihat Detail →

                    </a>

                </div>

            </div>


            <!-- Primavera -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl hover:-translate-y-2
                       transition duration-300"
                data-aos="fade-up"
                data-aos-delay="250">

                <div class="bg-gray-50 p-6">

                    <img
                        src="{{ asset('images/primavera.png') }}"
                        alt="Vespa Primavera"
                        class="w-full h-56 object-contain">

                </div>

                <div class="p-6">

                    <h3 class="text-2xl font-bold">

                        Vespa Primavera

                    </h3>

                    <p class="mt-3 text-gray-600">

                        Klasik, elegan, dan modern.

                    </p>

                    <a
                        href="{{ url('/products/primavera') }}"
                        class="inline-block mt-5 text-green-700
                               font-semibold hover:underline">

                        Lihat Detail →

                    </a>

                </div>

            </div>


            <!-- GTS -->

            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden
                       hover:shadow-2xl hover:-translate-y-2
                       transition duration-300"
                data-aos="fade-up"
                data-aos-delay="400">

                <div class="bg-gray-50 p-6">

                    <img
                        src="{{ asset('images/gts/white-right.png') }}"
                        alt="Vespa GTS"
                        class="w-full h-56 object-contain">

                </div>

                <div class="p-6">

                    <h3 class="text-2xl font-bold">

                        Vespa GTS

                    </h3>

                    <p class="mt-3 text-gray-600">

                        Bertenaga, elegan, dan premium.

                    </p>

                    <a
                        href="{{ url('/products/gts') }}"
                        class="inline-block mt-5 text-green-700
                               font-semibold hover:underline">

                        Lihat Detail →

                    </a>

                </div>

            </div>

        </div>


        <div
            class="text-center mt-10"
            data-aos="fade-up"
            data-aos-delay="450">

            <a
                href="{{ url('/products') }}"
                class="inline-block bg-green-700 text-white
                       px-7 py-3 rounded-lg
                       hover:bg-green-800 transition">

                Lihat Semua Produk

            </a>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- PROMO -->
<!-- ========================= -->

<section class="bg-green-700 py-20">

    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        data-aos="zoom-in">

        <div class="text-center text-white">

            <span class="text-green-100 font-semibold uppercase">

                Promo Spesial

            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-3">

                Dapatkan Penawaran Menarik

            </h2>

            <p class="mt-5 text-green-100 max-w-2xl mx-auto leading-7">

                Jangan lewatkan berbagai penawaran dan promo menarik
                untuk memiliki Vespa impian Anda.

            </p>

            <a
                href="{{ url('/promo') }}"
                class="inline-block mt-8 bg-white text-green-700
                       px-7 py-3 rounded-lg font-semibold
                       hover:bg-gray-100 transition">

                Lihat Promo

            </a>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- KENAPA MEMILIH KAMI -->
<!-- ========================= -->

<section class="bg-white py-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div
            class="text-center mb-14"
            data-aos="fade-down">

            <span class="text-green-700 font-semibold uppercase">

                Keunggulan

            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-3">

                Kenapa Memilih Kami?

            </h2>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">


            <div
                class="text-center p-8 rounded-2xl bg-gray-50
                       shadow-md hover:shadow-xl transition"
                data-aos="fade-up"
                data-aos-delay="100">

                <div class="text-4xl">

                    🛵

                </div>

                <h3 class="text-xl font-bold mt-5">

                    Produk Berkualitas

                </h3>

                <p class="mt-3 text-gray-600 leading-7">

                    Berbagai pilihan Vespa dengan desain
                    dan kualitas terbaik.

                </p>

            </div>


            <div
                class="text-center p-8 rounded-2xl bg-gray-50
                       shadow-md hover:shadow-xl transition"
                data-aos="fade-up"
                data-aos-delay="250">

                <div class="text-4xl">

                    🤝

                </div>

                <h3 class="text-xl font-bold mt-5">

                    Pelayanan Profesional

                </h3>

                <p class="mt-3 text-gray-600 leading-7">

                    Kami siap membantu Anda mendapatkan
                    Vespa yang sesuai kebutuhan.

                </p>

            </div>


            <div
                class="text-center p-8 rounded-2xl bg-gray-50
                       shadow-md hover:shadow-xl transition"
                data-aos="fade-up"
                data-aos-delay="400">

                <div class="text-4xl">

                    ⭐

                </div>

                <h3 class="text-xl font-bold mt-5">

                    Pengalaman Terbaik

                </h3>

                <p class="mt-3 text-gray-600 leading-7">

                    Nikmati pengalaman memilih Vespa dengan
                    pelayanan yang nyaman dan mudah.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- FAQ SINGKAT -->
<!-- ========================= -->

<section class="bg-gray-100 py-20">

    <div class="max-w-4xl mx-auto px-4 text-center">

        <div data-aos="fade-up">

            <span class="text-green-700 font-semibold uppercase">

                FAQ

            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-3">

                Punya Pertanyaan?

            </h2>

            <p class="mt-4 text-gray-600">

                Temukan jawaban dari berbagai pertanyaan
                mengenai produk dan layanan kami.

            </p>

            <a
                href="{{ url('/faq') }}"
                class="inline-block mt-7 border border-green-700
                       text-green-700 px-7 py-3 rounded-lg
                       hover:bg-green-700 hover:text-white
                       transition">

                Lihat FAQ

            </a>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- CTA -->
<!-- ========================= -->

<section class="bg-white py-20">

    <div
        class="max-w-4xl mx-auto px-4 text-center"
        data-aos="zoom-in">

        <h2 class="text-3xl md:text-4xl font-bold">

            Siap Memiliki Vespa Impianmu?

        </h2>

        <p class="mt-5 text-gray-600 leading-7">

            Hubungi sales kami untuk mendapatkan informasi
            lebih lengkap mengenai Vespa pilihan Anda.

        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">

            <a
                href="{{ url('/products') }}"
                class="bg-green-700 text-white px-7 py-3
                       rounded-lg hover:bg-green-800 transition">

                Lihat Produk

            </a>

            <a
                href="{{ url('/contact') }}"
                class="border border-green-700 text-green-700
                       px-7 py-3 rounded-lg
                       hover:bg-green-700 hover:text-white
                       transition">

                Hubungi Kami

            </a>

        </div>

    </div>

</section>

@endsection