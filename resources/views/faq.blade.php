@extends('layouts.app')

@section('title', 'FAQ - Dealer Vespa')

@section('content')

<!-- ========================= -->
<!-- HERO FAQ -->
<!-- ========================= -->

<section class="bg-gray-100 py-20">

    <div class="container mx-auto px-4">

        <div
            class="text-center max-w-3xl mx-auto"
            data-aos="fade-down">

            <span class="text-green-700 font-semibold uppercase tracking-wide">

                FAQ

            </span>

            <h1 class="text-4xl md:text-5xl font-bold mt-3">

                Frequently Asked Questions

            </h1>

            <p class="mt-5 text-gray-600 leading-7">

                Temukan jawaban dari beberapa pertanyaan yang
                sering ditanyakan mengenai produk dan layanan
                dealer Vespa kami.

            </p>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- FAQ -->
<!-- ========================= -->

<section class="bg-white py-20">

    <div class="container mx-auto px-4 max-w-4xl">

        <div class="space-y-5">


            <!-- FAQ 1 -->

            <div
                class="bg-gray-50 rounded-2xl shadow-md p-6
                       hover:shadow-lg transition"
                data-aos="fade-up"
                data-aos-delay="100">

                <h2 class="text-xl font-bold">

                    Apakah semua produk Vespa tersedia?

                </h2>

                <p class="mt-3 text-gray-600 leading-7">

                    Ketersediaan produk dapat berbeda-beda tergantung
                    model dan stok yang tersedia. Silakan hubungi sales
                    kami untuk mendapatkan informasi terbaru.

                </p>

            </div>



            <!-- FAQ 2 -->

            <div
                class="bg-gray-50 rounded-2xl shadow-md p-6
                       hover:shadow-lg transition"
                data-aos="fade-up"
                data-aos-delay="200">

                <h2 class="text-xl font-bold">

                    Bagaimana cara membeli Vespa?

                </h2>

                <p class="mt-3 text-gray-600 leading-7">

                    Anda dapat melihat produk yang tersedia melalui
                    halaman Produk, kemudian menghubungi sales untuk
                    mendapatkan informasi mengenai proses pembelian.

                </p>

            </div>



            <!-- FAQ 3 -->

            <div
                class="bg-gray-50 rounded-2xl shadow-md p-6
                       hover:shadow-lg transition"
                data-aos="fade-up"
                data-aos-delay="300">

                <h2 class="text-xl font-bold">

                    Apakah tersedia pilihan warna?

                </h2>

                <p class="mt-3 text-gray-600 leading-7">

                    Ya. Beberapa model Vespa memiliki beberapa pilihan
                    warna. Detail pilihan warna dapat dilihat pada
                    halaman masing-masing produk.

                </p>

            </div>



            <!-- FAQ 4 -->

            <div
                class="bg-gray-50 rounded-2xl shadow-md p-6
                       hover:shadow-lg transition"
                data-aos="fade-up"
                data-aos-delay="400">

                <h2 class="text-xl font-bold">

                    Apakah bisa menghubungi sales melalui WhatsApp?

                </h2>

                <p class="mt-3 text-gray-600 leading-7">

                    Tentu. Anda dapat langsung menghubungi sales melalui
                    tombol WhatsApp yang tersedia pada halaman produk
                    maupun halaman kontak.

                </p>

            </div>



            <!-- FAQ 5 -->

            <div
                class="bg-gray-50 rounded-2xl shadow-md p-6
                       hover:shadow-lg transition"
                data-aos="fade-up"
                data-aos-delay="500">

                <h2 class="text-xl font-bold">

                    Apakah tersedia layanan konsultasi?

                </h2>

                <p class="mt-3 text-gray-600 leading-7">

                    Ya. Sales kami siap membantu memberikan informasi
                    mengenai pilihan Vespa yang sesuai dengan kebutuhan
                    dan preferensi Anda.

                </p>

            </div>



            <!-- FAQ 6 -->

            <div
                class="bg-gray-50 rounded-2xl shadow-md p-6
                       hover:shadow-lg transition"
                data-aos="fade-up"
                data-aos-delay="600">

                <h2 class="text-xl font-bold">

                    Bagaimana cara mengetahui promo terbaru?

                </h2>

                <p class="mt-3 text-gray-600 leading-7">

                    Informasi mengenai promo dapat dilihat melalui
                    halaman Promo. Anda juga dapat menghubungi sales
                    untuk mendapatkan informasi terbaru.

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

            Masih Punya Pertanyaan?

        </h2>

        <p class="mt-4 text-green-100 max-w-2xl mx-auto">

            Jangan ragu untuk menghubungi kami. Tim sales siap
            membantu memberikan informasi yang Anda butuhkan.

        </p>

        <a
            href="{{ url('/contact') }}"
            class="inline-block mt-8 bg-white text-green-700
                   px-7 py-3 rounded-lg font-semibold
                   hover:bg-gray-100 transition">

            Hubungi Kami

        </a>

    </div>

</section>

@endsection