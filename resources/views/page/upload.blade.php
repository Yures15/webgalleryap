@extends('layouts.master')
@section('content')
<section class="mt-32">
    <div class="items-center max-w-screen-md mx-auto">
        <h3 class="text-5xl text-center font-fontutama"></h3>
    </div>
</section>
<form action="/uploadfoto" method="POST" enctype="multipart/form-data">
    @csrf
<section class="mt-10">
    <div class="max-w-screen-md mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-6 bg-blue-100 rounded-lg shadow-md">
                <h3 class="text-5xl text-center font-fontutama">Upload Your Photo</h3>
                <h3 class="font-fontutama mt-3">Judul Foto</h3>
                <input type="text" name="judul_foto" id="" class="border font-fontutama py-1 rounded-md border-slate-500">
                <h3 class="font-fontutama mt-4">Deskripsi</h3>
                <textarea name="deskripsi_foto" id="" cols="30" rows="10"
                    class="border font-fontutama w-full h-36 border-slate-500 rounded-xl"></textarea>
                    <div class="max-w-screen-md mx-auto mt-4">
                        <a href="/explore" class="inline-flex items-center bg-purple-500 hover:bg-red-600 text-white font-fontutama font-semibold py-1 px-1 rounded transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply" viewBox="0 0 16 16">
                                <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.7 8.7 0 0 0-1.921-.306 7 7 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254l-.042-.028a.147.147 0 0 1 0-.252l.042-.028zM7.8 10.386q.103 0 .223.006c.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96z"/>
                              </svg>
                            Back to Beranda
                        </a>
                    </div>   
            </div>
            <div class="p-6 bg-blue-100 rounded-lg shadow-md">
                <h3 class="text-lg font-fontutama font-semibold mb-2">Upload File</h3>
                <label for="file_input"
                    class="block mb-2 font-fontutama text-sm font-medium text-gray-900 dark:text-white">Choose File</label>
                <div class="relative w-full h-48 bg-gray-100 border border-gray-300 rounded-md overflow-hidden">
                    <img src="" alt="" id="preview_image"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>
                <input id="file_input" type="file" name="url"
                    class="block w-full font-fontutama text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 mt-2"
                    onchange="previewImage(event)">
                    <h3 class="mt-2 font-fontutama">Select Album</h3>
                    <select type="text" name="album" id="" class="border font-fontutama py-2 rounded border-slate-500">
                        <option value="" >PilihAlbum</option>
                        @foreach ($albums as $album)
                            <option value="{{$album->id}}">{{$album->nama_album}}</option>
                        @endforeach
                    </select>
                <button type="submit" class="block font-fontutama font-semibold w-full px-4 py-2 mt-4 text-white rounded-md bg-purple-500 hover:bg-red-600 focus:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Upload</button>
            </div>
        </div>
    </div>
</section>
</form>
<script>
    function previewImage(event) {
        const preview = document.getElementById('preview_image');
        preview.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
@endsection
