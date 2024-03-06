<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/build.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Great+Vibes&family=Lobster&family=Racing+Sans+One&family=Sixtyfour&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Lobster&family=Racing+Sans+One&family=Sixtyfour&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        @media(max-width:768px) {
            .flex-container {
                flex-direction: column;
            }
            .fulwidth {
                width: 100%;
            }
            .fulheight {
                height: 100%;
            }
        }
        /* Fixed Navbar */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }
        /* Efek Parallax */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 50vh; /* Mengatur tinggi parallax */
            padding-top: 100px; /* Menambahkan padding atas */
            position: relative; /* Menambahkan posisi relatif */
        }
        .parallax-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna latar belakang dengan transparansi */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            padding: 0 20px;
        }
        .parallax h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInDown 1s ease-out;
        }
        .parallax h5 {
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out;
        }
        /* Animasi */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <nav class="bg-blue-100 border-gray-200 shadow-md dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-md p-4 mx-auto">
            <div class="flex items-center">
                <img src="/assets/ryukyu-gallery-high-resolution-logo-transparent (1).png" alt=""
                    class="w-10 h-10">
                <h3 class="text-2xl font-fontutama text-red-600 ml-2">RyuKyu Gallery</h3>
            </div>

            <div class="flex gap-3">
                <a href="/login"><button
                        class="font-fontutama px-5 py-2 text-white rounded bg-gray-500 transition duration-300 transform hover:scale-105 hover:bg-gray-600">Login</button></a>
                <a href="/register"><button
                        class="font-fontutama px-5 py-2 text-white rounded bg-red-600 transition duration-300 transform hover:scale-105 hover:bg-red-700">Register</button></a>
            </div>
        </div>
    </nav>

    <section class="parallax mt-32" style="background-image: url('/assets/cihuy.jfif');">
        <div class="parallax-overlay">
            <div class="container mx-auto">
                <h1 class="font-fontdua text-[63px] text-yellow-300 mb-0.5">Every Photo Has A</h1>
                <h5 class="font-fontdua text-[60px] text-yellow-300 mb-0.5"> Gallery</h5>
            </div>
        </div>
    </section>

    <div class="container mx-auto mt-5 p-4 bg-blue-100 rounded-lg shadow-md">
        <h2 class="flex justify-center text-3xl font-fontutama text-red-600 font-bold mb-4">About RyuKyu Gallery</h2>
        <p class="font-fontutama text-lg text-gray-700 leading-relaxed">
            RyuKyu Gallery is a platform dedicated to showcasing the beauty of photography. We believe that every
            photo tells a unique story and deserves to be celebrated. Our mission is to provide photographers with a
            space to exhibit their work and connect with a community of fellow enthusiasts. Whether you're a seasoned
            professional or just starting out, RyuKyu Gallery welcomes you to explore, share, and appreciate the art
            of photography.
        </p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
