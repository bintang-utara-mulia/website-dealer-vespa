@extends('layouts.app')

@section('title', 'Kontak - Dealer Vespa')

@section('content')

<!-- ========================= -->
<!-- HERO CONTACT -->
<!-- ========================= -->

<section class="bg-gray-100 py-20">

    <div class="container mx-auto px-4">

        <div
            class="text-center max-w-3xl mx-auto"
            data-aos="fade-down">

            <span class="text-green-700 font-semibold uppercase tracking-wide">

                Kontak Kami

            </span>

            <h1 class="text-4xl md:text-5xl font-bold mt-3">

                Hubungi Kami

            </h1>

            <p class="mt-5 text-gray-600 leading-7">

                Punya pertanyaan mengenai Vespa, harga, promo,
                atau ingin berkonsultasi dengan sales?
                Silakan hubungi kami melalui informasi di bawah ini.

            </p>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- CONTACT INFORMATION -->
<!-- ========================= -->

<section class="bg-white py-20">

    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">


            <!-- ========================= -->
            <!-- INFORMASI KONTAK -->
            <!-- ========================= -->

            <div data-aos="fade-right">

                <span class="text-green-700 font-semibold uppercase">

                    Informasi

                </span>

                <h2 class="text-3xl font-bold mt-3">

                    Kami Siap Membantu Anda

                </h2>

                <p class="mt-5 text-gray-600 leading-7">

                    Tim sales kami siap memberikan informasi mengenai
                    produk Vespa, pilihan warna, harga, promo, dan
                    proses pembelian.

                </p>


                <!-- WhatsApp -->

                <div
                    class="mt-8 flex items-start gap-4"
                    data-aos="fade-up"
                    data-aos-delay="100">

                    <div
                        class="w-12 h-12 rounded-full bg-green-100
                               text-green-700 flex items-center
                               justify-center text-xl">

                        📱

                    </div>

                    <div>

                        <h3 class="font-bold text-lg">

                            WhatsApp

                        </h3>

                        <p class="text-gray-600 mt-1">

                            +62 812-3456-7890

                        </p>

                    </div>

                </div>


                <!-- Email -->

                <div
                    class="mt-6 flex items-start gap-4"
                    data-aos="fade-up"
                    data-aos-delay="200">

                    <div
                        class="w-12 h-12 rounded-full bg-green-100
                               text-green-700 flex items-center
                               justify-center text-xl">

                        ✉️

                    </div>

                    <div>

                        <h3 class="font-bold text-lg">

                            Email

                        </h3>

                        <p class="text-gray-600 mt-1">

                            info@dealervespa.com

                        </p>

                    </div>

                </div>


                <!-- Alamat -->

                <div
                    class="mt-6 flex items-start gap-4"
                    data-aos="fade-up"
                    data-aos-delay="300">

                    <div
                        class="w-12 h-12 rounded-full bg-green-100
                               text-green-700 flex items-center
                               justify-center text-xl">

                        📍

                    </div>

                    <div>

                        <h3 class="font-bold text-lg">

                            Alamat

                        </h3>

                        <p class="text-gray-600 mt-1">

                            Jl. Contoh No. 123, Indonesia

                        </p>

                    </div>

                </div>


                <!-- Jam Operasional -->

                <div
                    class="mt-6 flex items-start gap-4"
                    data-aos="fade-up"
                    data-aos-delay="400">

                    <div
                        class="w-12 h-12 rounded-full bg-green-100
                               text-green-700 flex items-center
                               justify-center text-xl">

                        🕐

                    </div>

                    <div>

                        <h3 class="font-bold text-lg">

                            Jam Operasional

                        </h3>

                        <p class="text-gray-600 mt-1">

                            Senin - Sabtu: 08.00 - 17.00

                        </p>

                    </div>

                </div>

            </div>



            <!-- ========================= -->
            <!-- CONTACT CARD -->
            <!-- ========================= -->

            <div
                class="bg-gray-50 rounded-3xl shadow-lg p-8 lg:p-10"
                data-aos="fade-left">

                <span class="text-green-700 font-semibold uppercase">

                    Konsultasi

                </span>

                <h2 class="text-3xl font-bold mt-3">

                    Tertarik Dengan Vespa?

                </h2>

                <p class="mt-5 text-gray-600 leading-7">

                    Hubungi sales kami melalui WhatsApp untuk
                    mendapatkan informasi lebih lengkap mengenai
                    Vespa yang Anda inginkan.

                </p>


                <!-- Tombol WhatsApp -->

                <a
                    href="https://wa.me/6281234567890?text=Halo%20Sales,%20saya%20ingin%20bertanya%20tentang%20Vespa"
                    target="_blank"
                    data-aos="zoom-in"
                    data-aos-delay="200"
                    class="mt-8 inline-flex items-center
                           justify-center gap-3 w-full
                           bg-green-700 text-white px-6 py-4
                           rounded-xl font-semibold
                           hover:bg-green-800 transition">

                    📱 Chat Dengan Sales

                </a>


                <!-- Produk -->

                <a
                    href="{{ url('/products') }}"
                    data-aos="fade-up"
                    data-aos-delay="300"
                    class="mt-4 inline-block w-full text-center
                           border border-green-700 text-green-700
                           px-6 py-4 rounded-xl font-semibold
                           hover:bg-green-700 hover:text-white
                           transition">

                    Lihat Produk Vespa

                </a>

            </div>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- MAP / LOCATION -->
<!-- ========================= -->

<section class="bg-gray-100 py-20">

    <div class="container mx-auto px-4">

        <div
            class="text-center mb-10"
            data-aos="fade-down">

            <span class="text-green-700 font-semibold uppercase">

                Lokasi

            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-3">

                Kunjungi Dealer Kami

            </h2>

            <p class="mt-4 text-gray-600">

                Kami siap menyambut Anda untuk melihat koleksi
                Vespa secara langsung.

            </p>

        </div>


        <!-- Map Placeholder -->

        <div
            class="bg-white rounded-3xl shadow-lg h-80
                   flex items-center justify-center"
            data-aos="zoom-in">

            <div class="text-center">

                <div class="text-5xl mb-4">

                    📍

                </div>

                <h3 class="text-2xl font-bold">

                    Lokasi Dealer Vespa

                </h3>

                <p class="mt-2 text-gray-500">

                    Jl. Contoh No. 123, Indonesia

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

            Siap Memiliki Vespa Impianmu?

        </h2>

        <p class="mt-4 text-green-100 max-w-2xl mx-auto">

            Jangan ragu untuk menghubungi kami dan dapatkan
            informasi terbaik mengenai Vespa pilihan Anda.

        </p>

        <a
            href="https://wa.me/6281234567890?text=Halo%20Sales,%20saya%20tertarik%20dengan%20Vespa"
            target="_blank"
            class="inline-block mt-8 bg-white text-green-700
                   px-7 py-3 rounded-lg font-semibold
                   hover:bg-gray-100 transition">

            Hubungi Sales

        </a>

    </div>

</section>

@endsection