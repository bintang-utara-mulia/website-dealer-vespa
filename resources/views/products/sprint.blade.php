@extends('layouts.app')

@section('title', 'Vespa Sprint - Dealer Vespa')

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


                        <!-- Tombol Kiri -->
                        <button
                            type="button"
                            onclick="changeView(-1)"
                            class="absolute left-2 top-1/2 -translate-y-1/2 z-10
                                   bg-white shadow-lg rounded-full w-12 h-12
                                   flex items-center justify-center
                                   text-2xl hover:bg-gray-100 transition">

                            &#10094;

                        </button>


                        <!-- Gambar Vespa -->
                        <img
                            id="sprintImage"
                            src="{{ asset('images/sprint/green-front.png') }}"
                            alt="Vespa Sprint"
                            class="w-full h-96 object-contain">


                        <!-- Tombol Kanan -->
                        <button
                            type="button"
                            onclick="changeView(1)"
                            class="absolute right-2 top-1/2 -translate-y-1/2 z-10
                                   bg-white shadow-lg rounded-full w-12 h-12
                                   flex items-center justify-center
                                   text-2xl hover:bg-gray-100 transition">

                            &#10095;

                        </button>

                    </div>


                    <!-- ========================= -->
                    <!-- PILIHAN WARNA -->
                    <!-- ========================= -->

                    <div
                        class="mt-6 text-center"
                        data-aos="fade-up"
                        data-aos-delay="200">

                        <p class="font-semibold mb-3">
                            Pilih Warna
                        </p>


                        <div class="flex justify-center gap-3 flex-wrap">


                            <!-- Green -->
                            <button
                                type="button"
                                onclick="changeColor('green')"
                                class="px-5 py-2 rounded-lg border
                                       hover:bg-green-700 hover:text-white
                                       transition">

                                Green

                            </button>


                            <!-- Black -->
                            <button
                                type="button"
                                onclick="changeColor('black')"
                                class="px-5 py-2 rounded-lg border
                                       hover:bg-gray-900 hover:text-white
                                       transition">

                                Black

                            </button>


                            <!-- Grey -->
                            <button
                                type="button"
                                onclick="changeColor('grey')"
                                class="px-5 py-2 rounded-lg border
                                       hover:bg-gray-500 hover:text-white
                                       transition">

                                Grey

                            </button>


                        </div>

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

                    Vespa Sprint

                </h1>


                <p
                    class="mt-6 text-gray-600 leading-8"
                    data-aos="fade-up"
                    data-aos-delay="150">

                    Vespa Sprint hadir dengan desain sporty dan modern
                    yang memberikan pengalaman berkendara yang lincah,
                    nyaman, dan penuh gaya. Sangat cocok bagi pengendara
                    yang mengutamakan performa sekaligus tampilan elegan.

                </p>


                <!-- Spesifikasi -->

                <div
                    class="mt-8 space-y-3"
                    data-aos="fade-up"
                    data-aos-delay="250">


                    <div class="flex justify-between border-b pb-2">

                        <span class="font-semibold">
                            Mesin
                        </span>

                        <span>
                            155 cc i-get
                        </span>

                    </div>


                    <div class="flex justify-between border-b pb-2">

                        <span class="font-semibold">
                            Tenaga
                        </span>

                        <span>
                            12.9 HP
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
                            Green, Black, Grey
                        </span>

                    </div>


                </div>


                <!-- Harga -->

                <div
                    class="mt-10"
                    data-aos="fade-up"
                    data-aos-delay="350">

                    <h2 class="text-3xl font-bold text-green-700">

                        Mulai Rp59.000.000

                    </h2>

                </div>


                <!-- Tombol -->

                <div
                    class="mt-8 flex flex-wrap gap-4"
                    data-aos="fade-up"
                    data-aos-delay="450">


                    <!-- WhatsApp -->

                    <a
                        href="https://wa.me/6281234567890?text=Halo%20Sales,%20saya%20tertarik%20dengan%20Vespa%20Sprint"
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



<!-- ========================= -->
<!-- JAVASCRIPT PRODUCT VIEWER -->
<!-- ========================= -->

<script>
    const sprintViews = [
        'front',
        'right',
        'left'
    ];


    let currentView = 0;

    let currentColor = 'green';


    function updateSprintImage() {

        const image =
            document.getElementById('sprintImage');


        image.src =
            `/images/sprint/${currentColor}-${sprintViews[currentView]}.png`;

    }


    function changeView(direction) {

        currentView += direction;


        // Jika melewati gambar terakhir
        if (currentView >= sprintViews.length) {

            currentView = 0;

        }


        // Jika melewati gambar pertama ke arah kiri
        if (currentView < 0) {

            currentView = sprintViews.length - 1;

        }


        updateSprintImage();

    }


    function changeColor(color) {

        currentColor = color;

        // Set kembali ke tampilan depan
        currentView = 0;

        updateSprintImage();

    }
</script>

@endsection