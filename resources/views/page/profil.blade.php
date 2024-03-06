@extends('layouts.master')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<section class="mt-32">
    <div class="items-center max-w-screen-md mx-auto ">
        <h3 class="text-5xl text-center font-hurricane"></h3>
    </div>
</section>

<form action="update" method="POST" enctype="multipart/form-data">
    @csrf
<section class="max-w-screen-md mx-auto mt-5">
    <div class="flex flex-wrap justify-between flex-container">
        <div class="flex flex-col items-center w-2/6 h-72 bg-white rounded-md shadow-md max-[480px]:w-full">
            <img src="{{ asset('assets/'.$user->avatar)}}" alt="" class="rounded-full w-36 h-36">
            <input type="file" name="avatar" class=" border items-center w-60 h-10 mt-4 rounded-md">
            {{-- <a href="/ubahpassword"><div class="w-48 py-1 mt-4 text-white text-center rounded font-fontutama semibold bg-blue-500">Change Your Password</div></a> --}}
            <a data-modal-target="default-modal" data-modal-toggle="default-modal"><div class="w-48 py-1 mt-4 text-white text-center rounded font-fontutama semibold bg-blue-500">Change Your Password</div></a>
        </div>

        <div class="w-3/5 max-[480px]:w-full bg-black rounded-md">
            <div class="bg-white rounded-md shadow-md ">
                <div class="flex flex-col px-4 py-4 ">
                    <h5 class="text-3xl text-center font-fontutama">Edit Your Profile</h5>
                    <h5 class="font-fontutama">Nama Lengkap</h5>
                    <input type="text" name="nama_lengkap" value="{{ $user->nama_lengkap }}" class="border font-fontutama py-1 p-2 rounded-md">
                    <h5 class="font-fontutama">No Telepon</h5>
                    <input type="text" name="no_telepon" value="{{ $user->no_telepon }}" class="border font-fontutama py-1 p-2 rounded-md">
                    <h5 class="font-fontutama">Jenis Kelamin</h5>
                    <select name="jenis_kelamin" id="" class="border font-fontutama py-1 p-2 rounded-md">
                        <option value="Laki-Laki" {{ $user->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <h5 class="font-fontutama">Alamat</h5>
                    <textarea type="text" name="alamat" class="border font-fontutama py-2 p-2 rounded-md">{{ $user->alamat}}</textarea>
                    <h5 class="font-fontutama">Bio</h5>
                    <textarea type="text" name="bio" class="border font-fontutama py-2 p-2 rounded-md">{{ $user->bio }}</textarea>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-purple-600 px-4 py-1 rounded mb-5 mt-5 text-white font-fontutama semibold hover:bg-red-600">Perbaharui</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>

<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-fontutama font-semibold text-gray-900 dark:text-white">
                    Change Your Password
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="mx-2 my-2">
                <form action="/update-password" method="POST">
                    @csrf
                    <div class="mb-3 font-fontutama">
                        <label for="">Old Password</label>
                        <input name="password_lama" type="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50 ">
                    </div>
                    <div class="mt-3 font-fontutama">
                        <label for="">New Password</label>
                        <input name="password_baru" type="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50">
                    </div>
                    <div class="mt-3 font-fontutama">
                        <label for="">Confirm Password</label>
                        <input name="confirm_password" type="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50">
                    </div>

            </div>

                <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="submit" class="font-fontutama text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Perbaharui</button>
                <button data-modal-hide="default-modal" type="button" class="font-fontutama py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-red-600 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
