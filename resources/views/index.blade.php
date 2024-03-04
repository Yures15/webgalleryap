<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/build.css')}}" rel="stylesheet">
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
        </style>
</head>
<body>
    <nav class="bg-blue-100 border-gray-200 shadow-md dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-md p-4 mx-auto">
            <div class="flex items-center">
                <img src="/assets/ryukyu-gallery-high-resolution-logo-transparent (1).png" alt="" class="w-10 h-10">
                <h3 class="text-2xl font-fontutama text-red-600 ml-2">RyuKyu Gallery</h3>
            </div>
            
            <div class="flex gap-3">
                <a href="/login"><button class="font-fontutama px-5 py-1 text-white rounded bg-gray-500">Login</button></a>
                <a href="/register"><button
                        class="font-fontutama px-5 py-1 text-white rounded bg-red-600">Register</button></a>
            </div>
        </div>
    </nav>

    <section class="mt-32">
    <div class="container mx-auto mt-5">
        <div class="flex relative justify-center items-center">
            <img src="/assets/cihuy.jfif" alt="" class="rounded-xl w-[1295px] h-[300px] object-cover">
            <div class="flex absolute flex-col text-center">
                <h1 class="font-fontdua text-[63px] text-yellow-300 mb-0.5">Every Photo Has A</h1>
                <h5 class="font-fontdua text-[60px] text-yellow-300 mb-0.5"> Gallery</h5>
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-5">
            <!-- Sample Image Cards -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="/assets/y.jpg" alt="Gallery Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Image Title</h3>
                    <p class="text-gray-700">Description of the image goes here.</p>
                </div>
                <div class="flex p-4">
                    <small>40</small>
                    <span class="bi bi-chat-square-dots-fill"></span>
                    <small>40</small>
                    <span class="bi bi-heart-fill"></span>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="/assets/y.jpg" alt="Gallery Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Image Title</h3>
                    <p class="text-gray-700">Description of the image goes here.</p>
                </div>
                <div class="flex p-4">
                    <small>40</small>
                    <span class="bi bi-chat-square-dots-fill"></span>
                    <small>40</small>
                    <span class="bi bi-heart-fill"></span>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="/assets/y.jpg" alt="Gallery Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Image Title</h3>
                    <p class="text-gray-700">Description of the image goes here.</p>
                </div>
                <div class="flex p-4">
                    <small>40</small>
                    <span class="bi bi-chat-square-dots-fill"></span>
                    <small>40</small>
                    <span class="bi bi-heart-fill"></span>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="/assets/y.jpg" alt="Gallery Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Image Title</h3>
                    <p class="text-gray-700">Description of the image goes here.</p>
                </div>
                <div class="flex p-4">
                    <small>40</small>
                    <span class="bi bi-chat-square-dots-fill"></span>
                    <small>40</small>
                    <span class="bi bi-heart-fill"></span>
                </div>
            </div>
            <!-- Add more image cards as needed -->
        </div>
    </div> --}}
    </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
