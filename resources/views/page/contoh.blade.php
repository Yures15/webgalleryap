@extends('include.master')
@section('content')


    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Gallery</h3>
        </div>
    </section>
    @if ($message = Session::get('success'))
        <div class="flex justify-center mt-4">
            <div id="toast-undo" class="flex items-center justify-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="text-sm font-normal text-blue-600">
                {{ $message }}
                </div>
                <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif
    <form action="update" method="POST" enctype="multipart/form-data">
        @csrf
    <section class="max-w-screen-md mx-auto mt-4 ">
        <div class="flex flex-wrap justify-between flex-container">
            <div class="flex flex-col items-center w-2/6 h-72 bg-white rounded-md shadow-md max-[480px]:w-full">
                <img src="{{ asset('assets/'.$user->picture)}}" alt="" class="rounded-full w-36 h-36" >
                <input type="file" name="picture" class="items-center w-48 h-10 mt-4 border rounded-md">

            </div>
            <div class="w-3/5 max-[480px]:w-full">
                <div class="bg-white rounded-md shadow-md ">
                    <div class="flex flex-col px-4 py-4 ">
                        <h5 class="text-3xl text-center font-serif">Profile</h5>
                        <h5>Nama Lengkap</h5>
                        <input type="text" name="nama_lengkap" value="{{ $user->nama_lengkap }}" class="py-1 rounded-md">
                        <h5>Username</h5>
                        <input type="text" name="username" value="{{ $user->username }}" class="py-1 rounded-md">
                        </select>
                        <h5>Alamat</h5>
                        <input type="text" name="alamat" value="{{ $user->alamat }}
                        " class="py-1 rounded-md">

                        <button type="submit" class="py-2 mt-4 text-white rounded-md bg-green-500">Perbaharui</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    @endsection

    @extends('layouts.master')
@section('content')
<section class="mt-32">
    <div class="items-center max-w-screen-md mx-auto ">
        <h3 class="text-5xl text-center font-fontutama">RyuKyu</h3>
    </div>
</section>
<form action="/uploadfoto" method="POST" enctype="multipart/form-data">
    @csrf
<section class="mt-10">
    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap px-2 flex-container justify-center">
            <!-- <div class="w-3/5 max-[480px]:w-full">
                <div class="flex justify-center px-3">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                        class="font-semibold">Click to upload</span></p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF (MAX. 800x400px)
                                </p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                </div>
            </div> -->
            <div class="w-2/5  max-[480px]:w-full px-2">
                <div class="flex flex-col flex-wrap px-2">
                    @if ($message = Session::get('success'))
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
                    <h3 class="font-fontutama">Judul Foto</h3>
                    <input type="text" name="judul_foto" id="" class="border py-1 rounded-md border-slate-500">
                    <h3 class="font-fontutama mt-4">Deskripsi</h3>
                    <textarea name="deskripsi_foto" id="" cols="30" rows="10"
                        class="border w-full h-36 border-slate-500 rounded-xl"></textarea>

                    <label class="mt-5 block mb-3 text-sm font-fontutama text-gray-900 dark:text-white"
                        for="file_input">Upload file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file" name="url">
                        <h3 class="mt-2">Pilih Album</h3>
                        <select type="text" name="album" id="" class="mt-2 border py-1 rounded-md border-slate-500">
                            <option value="" >PilihAlbum</option>
                            @foreach ($albums as $album)
                                <option value="{{$album->id}}">{{$album->nama_album}}</option>
                            @endforeach
                        </select>
                    {{-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or
                        GIF (MAX. 800x400px).</p>

                    <label for="">Date</label>
                    <input type="date" class="border py-1 rounded border-slate-500"> --}}
                    <div class="flex flex-row justify-between">
                        <button type="submit" class="px-6 py-1 mt-4 text-white rounded-sm bg-red-600">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
@endsection

    