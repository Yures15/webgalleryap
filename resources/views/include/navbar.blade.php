<nav class="fixed top-0 z-20 w-full bg-blue-100 shadow-md">
    <div class="flex flex-wrap items-center justify-center max-w-screen-xl p-4 mx-auto">
        <img src="/assets/ryukyu-gallery-high-resolution-logo-transparent (1).png" alt="" class="w-10 h-10 mr-4">
        {{-- <a href="" class="font-fontutama mr-5 text-3xl text-red-600">RyuKyu</a> --}}
        <a href="/explore" class="font-fontutama mr-4 px-5 py-1 text-gray-600 rounded shadow-md bg-white hover:bg-gray-400">Beranda</a>
        <a href="/upload" class="font-fontutama mr-4 px-5 py-1 text-gray-600 rounded shadow-md bg-white hover:bg-gray-300">Upload</a>
        <form action="/explore" method="get">
        <input type="text" class="px-4 py-1 mr-4 rounded" placeholder="Search ..." name="cari" value="{{ request('cari')}}" >
        </form>
        <a href="/album" class="font-fontutama mr-4 px-5 py-1 text-gray-600 rounded shadow-md bg-white hover:bg-blue-200">Album</a>
        <div class="flex items-center space-x-1 md:order-2 md:space-x-0 rtl:space-x-reverse overflow-hidden">
            <img src="{{ asset('assets/'. auth()->user()->avatar)}}" alt="" class="w-10 h-10 rounded-full " data-dropdown-toggle="user-dropdown-menu">
            <!-- Drop Down -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow "
                id="user-dropdown-menu">
                <ul class="py-2" role="none">
                    <li>
                        <a href="/mypinprofil"
                            class="px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 flex justify-center"
                            role="menuitem">
                            <div class="font-fontutama inline-flex items-center">
                                Profile
                            </div>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="/ubahpassword"
                            class="px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 flex justify-center"
                            role="menuitem">
                            <div class="font-fontutama inline-flex items-center">
                                Change Password
                            </div>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a href="/profil"
                            class="px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 flex justify-center"
                            role="menuitem">
                            <div class="font-fontutama inline-flex items-center">
                                Edit Profil
                            </div>
                        </a>
                    </li> --}}
                    <li>
                        <a href="/logout" onclick="return confirm('Apakah Anda Yakin Ingin LogOut?')"
                            class="px-4 py-2 font-semibold text-red-700 hover:bg-gray-100 flex justify-center hover:bg-gray-300"
                            role="menuitem">
                            <div class="font-fontutama  inline-flex items-center">
                                LogOut
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Navigation -->
        </div>
    </div>
</nav>
