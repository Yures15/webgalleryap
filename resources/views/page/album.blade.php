@extends('layouts.master')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<section class="max-bg-gray-100  mt-32">
    <div class="container mx-auto px-8 py-12">
        <h2 class="text-3xl flex justify-center font-bold font font-fontutama mb-6">Albums</h2>
        <div class="mt-6 flex justify-center">
            <a href="/createalbum"><button type="" class="px-4 py-2 bg-purple-600 font-fontutama text-white rounded hover:bg-red-600">Create New Album</a></button>
        </div>
        <!-- Album Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 mt-5">
            @foreach ($albums as $album)


            <!-- Sample Album Cards -->
            <div class="bg-white rounded overflow-hidden shadow-lg">
                <a href="/detailalbum/{{$album->id}}">
                <img src="{{asset('/assets/'.$album->foto)}}" alt="" class="w-full h-48 object-cover">

                <div class="p-4 flex justify-between">
                    <div class="">
                        <h3 class="text-xl font-fontutama font-semibold mb-2">{{ $album->nama_album }}</h3>
                        <p class="font-fontutama text-gray-700">{{ $album->deskripsi }}</p>
                    </div>

                    <a href="/deletalbum/{{$album->id}}" onclick="return confirm('Apakah Anda yakin ingin menghapus album ini?')" class="inline-flex items-center bg-red-700 hover:bg-red-800 focus:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-300 text-white font-medium rounded-lg text-xs px-2 py-1 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-trash me-1" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                        Hapus
                    </a>
                </div>
            </a>
            </div>
            <!-- Add more album cards as needed -->
            @endforeach
        </div>

        <!-- Create Album Form -->
        <!-- <div class="mt-12">
            <h2 class="text-2xl font-bold mb-4">Create New Album</h2>
            <form action="#" method="POST" class="max-w-md">
                <div class="mb-4">
                    <label for="albumName" class="block text-sm font-semibold text-gray-600">Album Name:</label>
                    <input type="text" name="albumName" id="albumName" class="mt-1 p-2 block w-full border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="albumDescription" class="block text-sm font-semibold text-gray-600">Description:</label>
                    <textarea name="albumDescription" id="albumDescription" rows="4" class="mt-1 p-2 block w-full border-gray-300 rounded-md"></textarea>
                </div>

            </form>
        </div> -->
    </div>

    <!-- Edit Album Form -->
    {{-- <div class="mb-8 hidden">
        <h2 class="text-2xl font-bold mb-4">Edit Album</h2>
        <form action="#" method="POST" class="max-w-md">
            <div class="mb-4">
                <label for="editAlbumName" class="block text-sm font-semibold text-gray-600">Album Name:</label>
                <input type="text" name="editAlbumName" id="editAlbumName" class="mt-1 p-2 block w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="editAlbumDescription" class="block text-sm font-semibold text-gray-600">Description:</label>
                <textarea name="editAlbumDescription" id="editAlbumDescription" rows="4" class="mt-1 p-2 block w-full border-gray-300 rounded-md"></textarea>
            </div>
            <div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Update Album</button>
                <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 ml-2">Cancel</button>
            </div>
        </form>
    </div> --}}

    <!-- Delete Album Confirmation -->
    {{-- <div class="mb-8 hidden">
        <h2 class="text-2xl font-bold mb-4">Delete Album</h2>
        <p class="mb-4">Are you sure you want to delete this album?</p>
        <div>
            <button type="button" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
            <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 ml-2">Cancel</button>
        </div>
    </div> --}}
</div>
</section>
</section>
@endsection
