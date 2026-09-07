<!DOCTYPE html>

<html lang="id">

<head>

    ```
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dealer Vespa')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html,
        body {
            overflow-x: hidden;
        }

        /*
    ==========================================
    PAGE TRANSITION
    ==========================================
    */

        body {
            opacity: 1;
            transform: translateY(0);
            transition:
                transform 0.8s cubic-bezier(0.65, 0, 0.35, 1),
                opacity 0.8s ease;
        }


        /*
    ==========================================
    HALAMAN MASUK DARI ATAS
    ==========================================
    */

        body.page-enter-down {
            transform: translateY(-100vh);
            opacity: 0;
        }


        /*
    ==========================================
    HALAMAN MASUK DARI BAWAH
    ==========================================
    */

        body.page-enter-up {
            transform: translateY(100vh);
            opacity: 0;
        }


        /*
    ==========================================
    HALAMAN KELUAR KE ATAS
    ==========================================
    */

        body.page-exit-up {
            transform: translateY(-100vh);
            opacity: 0;
        }


        /*
    ==========================================
    HALAMAN KELUAR KE BAWAH
    ==========================================
    */

        body.page-exit-down {
            transform: translateY(100vh);
            opacity: 0;
        }
    </style>
    ```

</head>

<body class="bg-gray-50 text-gray-900">

    ```
    @include('components.navbar')


    <main>

        @yield('content')

    </main>


    @include('components.footer')


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            /*
            ==========================================
            URUTAN HALAMAN
            ==========================================
            */

            const pages = {

                '/': 0,
                '/about': 1,
                '/products': 2,
                '/promo': 3,
                '/faq': 4,
                '/contact': 5

            };


            /*
            ==========================================
            AMBIL HALAMAN SEKARANG
            ==========================================
            */

            let currentPath = window.location.pathname;

            if (currentPath.length > 1) {

                currentPath = currentPath.replace(/\/$/, '');

            }


            let currentPage = pages[currentPath];


            if (currentPage === undefined) {

                currentPage = 0;

            }


            /*
            ==========================================
            ANIMASI SAAT HALAMAN BARU DIBUKA
            ==========================================
            */

            const pageDirection =
                sessionStorage.getItem('pageDirection');


            if (pageDirection === 'down') {

                /*
                Halaman baru masuk dari atas
                */

                document.body.classList.add('page-enter-down');

            } else if (pageDirection === 'up') {

                /*
                Halaman baru masuk dari bawah
                */

                document.body.classList.add('page-enter-up');

            }


            /*
            ==========================================
            MULAI ANIMASI MASUK
            ==========================================
            */

            requestAnimationFrame(function() {

                requestAnimationFrame(function() {

                    document.body.classList.remove(
                        'page-enter-down',
                        'page-enter-up'
                    );

                });

            });


            /*
            ==========================================
            HAPUS DATA TRANSISI
            ==========================================
            */

            sessionStorage.removeItem('pageDirection');


            /*
            ==========================================
            SEMUA LINK
            ==========================================
            */

            const links = document.querySelectorAll('a');


            links.forEach(function(link) {

                link.addEventListener('click', function(event) {

                    const href = link.getAttribute('href');


                    /*
                    ----------------------------------
                    LINK KOSONG
                    ----------------------------------
                    */

                    if (!href) {

                        return;

                    }


                    /*
                    ----------------------------------
                    ANCHOR
                    ----------------------------------
                    */

                    if (href.startsWith('#')) {

                        return;

                    }


                    /*
                    ----------------------------------
                    TAB BARU
                    ----------------------------------
                    */

                    if (link.target === '_blank') {

                        return;

                    }


                    /*
                    ----------------------------------
                    EXTERNAL LINK
                    ----------------------------------
                    */

                    if (
                        link.hostname &&
                        link.hostname !== window.location.hostname
                    ) {

                        return;

                    }


                    /*
                    ----------------------------------
                    AMBIL PATH TUJUAN
                    ----------------------------------
                    */

                    let targetPath;

                    try {

                        targetPath =
                            new URL(
                                href,
                                window.location.origin
                            ).pathname;

                    } catch (error) {

                        return;

                    }


                    /*
                    ----------------------------------
                    NORMALISASI PATH
                    ----------------------------------
                    */

                    if (targetPath.length > 1) {

                        targetPath =
                            targetPath.replace(/\/$/, '');

                    }


                    /*
                    ----------------------------------
                    CARI POSISI HALAMAN TUJUAN
                    ----------------------------------
                    */

                    const targetPage =
                        pages[targetPath];


                    /*
                    ----------------------------------
                    BUKAN HALAMAN UTAMA
                    ----------------------------------
                    */

                    if (targetPage === undefined) {

                        return;

                    }


                    /*
                    ----------------------------------
                    KLIK HALAMAN YANG SAMA
                    ----------------------------------
                    */

                    if (targetPage === currentPage) {

                        return;

                    }


                    /*
                    ----------------------------------
                    HENTIKAN PINDAH LANGSUNG
                    ----------------------------------
                    */

                    event.preventDefault();


                    /*
                    ==================================
                    TENTUKAN ARAH
                    ==================================
                    */

                    const goingDown =
                        targetPage > currentPage;


                    /*
                    ==================================
                    SIMPAN ARAH UNTUK HALAMAN BERIKUTNYA
                    ==================================
                    */

                    if (goingDown) {

                        /*
                        Contoh:
                        Home → Products
                        Products → Contact

                        Halaman berikutnya masuk
                        dari atas.
                        */

                        sessionStorage.setItem(
                            'pageDirection',
                            'down'
                        );

                    } else {

                        /*
                        Contoh:
                        Contact → Home
                        Products → About

                        Halaman berikutnya masuk
                        dari bawah.
                        */

                        sessionStorage.setItem(
                            'pageDirection',
                            'up'
                        );

                    }


                    /*
                    ==================================
                    ANIMASI HALAMAN SEKARANG
                    ==================================
                    */

                    if (goingDown) {

                        /*
                        Bergerak ke atas
                        */

                        document.body.classList.add(
                            'page-exit-up'
                        );

                    } else {

                        /*
                        Bergerak ke bawah
                        */

                        document.body.classList.add(
                            'page-exit-down'
                        );

                    }


                    /*
                    ==================================
                    PINDAH KE HALAMAN BARU
                    ==================================
                    */

                    setTimeout(function() {

                        window.location.href = href;

                    }, 800);

                });

            });

        });
    </script>
    ```

</body>

</html>