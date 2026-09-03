@extends('layouts.app')

@section('title', 'Tentang Kami - Dealer Vespa')

@section('content')

<!-- ========================= -->
<!-- HERO ABOUT -->
<!-- ========================= -->

<section class="bg-gray-100 py-20">

    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Text -->

            <div data-aos="fade-right">

                <span class="text-green-700 font-semibold uppercase tracking-wide">

                    Tentang Kami

                </span>

                <h1 class="text-4xl md:text-5xl font-bold mt-3 leading-tight">

                    Temukan Vespa Impianmu Bersama Kami

                </h1>

                <p
                    class="mt-6 text-gray-600 leading-8"
                    data-aos="fade-up"
                    data-aos-delay="150">

                    Kami hadir sebagai dealer Vespa yang menyediakan
                    berbagai pilihan Vespa dengan desain ikonik,
                    teknologi modern, serta kualitas terbaik.

                </p>

                <p
                    class="mt-4 text-gray-600 leading-8"
                    data-aos="fade-up"
                    data-aos-delay="250">

                    Dengan pelayanan yang ramah dan profesional,
                    kami siap membantu Anda menemukan Vespa yang
                    sesuai dengan kebutuhan dan gaya berkendara Anda.

                </p>

                <a
                    href="{{ url('/products') }}"
                    data-aos="fade-up"
                    data-aos-delay="350"
                    class="inline-block mt-8 bg-green-700 text-white
                           px-7 py-3 rounded-lg
                           hover:bg-green-800 transition">

                    Lihat Produk

                </a>

            </div>


            <!-- Visual -->

            <div
                class="flex justify-center"
                data-aos="fade-left">

                <div class="bg-white rounded-3xl shadow-xl p-8 w-full max-w-lg">

                    <div class="text-center">

                        <div
                            class="text-6xl font-bold text-green-700">

                            Vespa

                        </div>

                        <p class="mt-4 text-gray-500">

                            Style • Performance • Elegance

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- MENGAPA MEMILIH KAMI -->
<!-- ========================= -->

<section class="bg-white py-20">

    <div class="container mx-auto px-4">

        <div
            class="text-center mb-14"
            data-aos="fade-down">

            <span class="text-green-700 font-semibold uppercase">

                Keunggulan Kami

            </span>

            <h2 class="text-4xl font-bold mt-3">

                Mengapa Memilih Kami?

            </h2>

            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">

                Kami memberikan pengalaman terbaik mulai dari
                pemilihan produk hingga pelayanan kepada pelanggan.

            </p>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">


            <!-- Card 1 -->

            <div
                class="bg-gray-50 rounded-2xl p-8 text-center
                       shadow-md hover:shadow-xl
                       transition duration-300"
                data-aos="fade-up"
                data-aos-delay="100">

                <div class="text-4xl mb-5">

                    🛵

                </div>

                <h3 class="text-xl font-bold">

                    Produk Berkualitas

                </h3>

                <p class="mt-4 text-gray-600 leading-7">

                    Menyediakan berbagai pilihan Vespa
                    dengan kualitas dan desain terbaik.

                </p>

            </div>



            <!-- Card 2 -->

            <div
                class="bg-gray-50 rounded-2xl p-8 text-center
                       shadow-md hover:shadow-xl
                       transition duration-300"
                data-aos="fade-up"
                data-aos-delay="250">

                <div class="text-4xl mb-5">

                    🤝

                </div>

                <h3 class="text-xl font-bold">

                    Pelayanan Profesional

                </h3>

                <p class="mt-4 text-gray-600 leading-7">

                    Tim kami siap membantu memberikan informasi
                    dan pelayanan terbaik kepada pelanggan.

                </p>

            </div>



            <!-- Card 3 -->

            <div
                class="bg-gray-50 rounded-2xl p-8 text-center
                       shadow-md hover:shadow-xl
                       transition duration-300"
                data-aos="fade-up"
                data-aos-delay="400">

                <div class="text-4xl mb-5">

                    ⭐

                </div>

                <h3 class="text-xl font-bold">

                    Pengalaman Terbaik

                </h3>

                <p class="mt-4 text-gray-600 leading-7">

                    Kami berkomitmen memberikan pengalaman
                    terbaik dalam memilih Vespa impian Anda.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- VISI & MISI -->
<!-- ========================= -->

<section class="bg-gray-100 py-20">

    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">


            <!-- VISI -->

            <div
                class="bg-white rounded-2xl shadow-lg p-8"
                data-aos="fade-right">

                <span class="text-green-700 font-semibold uppercase">

                    Visi

                </span>

                <h2 class="text-3xl font-bold mt-3">

                    Menjadi Dealer Vespa Pilihan

                </h2>

                <p class="mt-5 text-gray-600 leading-8">

                    Menjadi dealer Vespa yang dipercaya dan memberikan
                    pengalaman terbaik bagi setiap pelanggan dalam
                    menemukan kendaraan yang sesuai dengan kebutuhan
                    dan gaya hidup mereka.

                </p>

            </div>



            <!-- MISI -->

            <div
                class="bg-white rounded-2xl shadow-lg p-8"
                data-aos="fade-left">

                <span class="text-green-700 font-semibold uppercase">

                    Misi

                </span>

                <h2 class="text-3xl font-bold mt-3">

                    Memberikan Pelayanan Terbaik

                </h2>

                <p class="mt-5 text-gray-600 leading-8">

                    Memberikan informasi produk yang jelas, pelayanan
                    yang profesional, serta membantu pelanggan
                    mendapatkan Vespa yang sesuai dengan kebutuhan
                    mereka.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- CTA -->
<!-- ========================= -->

<section class="bg-green-700 py-16">

    <div
        class="container mx-auto px-4 text-center text-white"
        data-aos="zoom-in">

        <h2 class="text-3xl md:text-4xl font-bold">

            Siap Menemukan Vespa Impianmu?

        </h2>

        <p class="mt-4 text-green-100 max-w-2xl mx-auto">

            Jelajahi koleksi Vespa kami atau hubungi sales
            untuk mendapatkan informasi lebih lengkap.

        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">

            <a
                href="{{ url('/products') }}"
                class="bg-white text-green-700 px-7 py-3
                       rounded-lg font-semibold
                       hover:bg-gray-100 transition">

                Lihat Produk

            </a>

            <a
                href="{{ url('/contact') }}"
                class="border border-white text-white px-7 py-3
                       rounded-lg font-semibold
                       hover:bg-white hover:text-green-700
                       transition">

                Hubungi Kami

            </a>

        </div>

    </div>

</section>

@endsection