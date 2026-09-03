@extends('layouts.app')

@section('title', 'Vespa GTS - Dealer Vespa')

@section('content')

<section class="min-h-screen bg-gray-100 py-20">

    <div class="container mx-auto px-4">

        <!-- Tombol Kembali -->
        <a
            href="{{ url('/products') }}"
            data-aos="fade-down"
            class="inline-block mb-8 text-green-700 hover:underline">

            ← Kembali ke Produk

        </a>


        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">


            <!-- ========================= -->
            <!-- GAMBAR PRODUK -->
            <!-- ========================= -->

            <div
                class="flex justify-center"
                data-aos="fade-right">

                <div class="flex flex-col items-center w-full">

                    <div class="relative w-full max-w-lg">

                        <img
                            src="{{ asset('images/gts/white-right.png') }}"
                            alt="Vespa GTS"
                            class="w-full h-96 object-contain">

                    </div>


                    <!-- ========================= -->
                    <!-- INFORMASI WARNA -->
                    <!-- ========================= -->

                    <div
                        class="mt-6 text-center"
                        data-aos="fade-up"
                        data-aos-delay="200">

                        <p class="font-semibold mb-3">

                            Warna

                        </p>


                        <span
                            class="inline-block px-5 py-2 rounded-lg
                                   border border-gray-300 bg-white">

                            White

                        </span>

                    </div>

                </div>

            </div>



            <!-- ========================= -->
            <!-- DETAIL PRODUK -->
            <!-- ========================= -->

            <div data-aos="fade-left">

                <span class="text-green-700 font-semibold uppercase">

                    Vespa Series

                </span>


                <h1 class="text-5xl font-bold mt-3">

                    Vespa GTS

                </h1>


                <p
                    class="mt-6 text-gray-600 leading-8"
                    data-aos="fade-up"
                    data-aos-delay="150">

                    Vespa GTS hadir dengan desain elegan dan karakter
                    yang kuat. Menggabungkan performa bertenaga,
                    kenyamanan berkendara, serta teknologi modern
                    untuk memberikan pengalaman berkendara premium.

                </p>


                <!-- ========================= -->
                <!-- SPESIFIKASI -->
                <!-- ========================= -->

                <div
                    class="mt-8 space-y-3"
                    data-aos="fade-up"
                    data-aos-delay="250">


                    <div class="flex justify-between border-b pb-2">

                        <span class="font-semibold">

                            Mesin

                        </span>

                        <span>

                            300 cc HPE

                        </span>

                    </div>


                    <div class="flex justify-between border-b pb-2">

                        <span class="font-semibold">

                            Tenaga

                        </span>

                        <span>

                            23.8 HP

                        </span>

                    </div>


                    <div class="flex justify-between border-b pb-2">

                        <span class="font-semibold">

                            Transmisi

                        </span>

                        <span>

                            CVT Otomatis

                        </span>

                    </div>


                    <div class="flex justify-between border-b pb-2">

                        <span class="font-semibold">

                            Warna

                        </span>

                        <span>

                            White

                        </span>

                    </div>


                </div>


                <!-- ========================= -->
                <!-- HARGA -->
                <!-- ========================= -->

                <div
                    class="mt-10"
                    data-aos="fade-up"
                    data-aos-delay="350">

                    <h2 class="text-3xl font-bold text-green-700">

                        Mulai Rp80.000.000

                    </h2>

                </div>


                <!-- ========================= -->
                <!-- BUTTON -->
                <!-- ========================= -->

                <div
                    class="mt-8 flex flex-wrap gap-4"
                    data-aos="fade-up"
                    data-aos-delay="450">


                    <!-- WhatsApp -->

                    <a
                        href="https://wa.me/6281234567890?text=Halo%20Sales,%20saya%20tertarik%20dengan%20Vespa%20GTS"
                        target="_blank"
                        class="bg-green-700 text-white px-6 py-3
                               rounded-lg hover:bg-green-800 transition">

                        Hubungi Sales

                    </a>


                    <!-- Kembali -->

                    <a
                        href="{{ url('/products') }}"
                        class="border border-green-700 text-green-700
                               px-6 py-3 rounded-lg
                               hover:bg-green-700 hover:text-white
                               transition">

                        Kembali

                    </a>


                </div>

            </div>

        </div>

    </div>

</section>

@endsection