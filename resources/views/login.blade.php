<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/build.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
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
        <div class="max-w-[364px] bg-blue-100 rounded-md shadow-md mx-auto px-6 py-4">
            @if ($message = Session::get('error'))
            <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="text-sm font-medium ms-3">
                  {{$message}}
                </div>
                  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
              </div>
            @endif
            <form action="/auth" method="POST">
                @csrf
            <div class="flex flex-col">
                <div class="flex items-center justify-center">
                    <img src="/assets/ryukyu-gallery-high-resolution-logo-transparent (1).png" alt="" class="w-10 h-10">
                    <h3 class="text-2xl font-fontutama text-red-600 ml-2">RyuKyu Gallery Login</h3>
                </div>
                <h4 class="font-fontutama mt-3">Username</h4>
                <input type="text" class="border font-fontutama py-1 rounded-md text-slate-700 p-3" name="username">
                <h4 class="font-fontutama mt-3">Password</h4>
                <input type="password" class="border py-1 rounded-md text-slate-700 p-3" name="password">
                <button type="submit" class="border font-fontutama py-1 mt-4 text-center text-white rounded bg-red-600">Login</button>
                <h5 class="mx-auto font-fontutama mt-4 text-1xl">Belum punya account, silahkan daftar <a href="/register" class="text-blue-600">disini.!</a></h5>
            </div>
        </form>
        </div>
    </section>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
