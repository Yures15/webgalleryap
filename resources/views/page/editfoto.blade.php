@extends('layouts.master')
@section('content')
<section class="max-bg-gray-100 mt-20">
    <div class="container mx-auto px-8 py-12">
        <!-- <h2 class="flex justify-center text-3xl font font-fontutama font-bold mb-6">Create Your New Albums</h2> -->

        <!-- Create Album Form dengan border -->
        <div class="container mx-auto mt-10 create-album-form bg-blue-100 rounded-lg shadow-md p-8 max-w-md">
            <h2 class="flex justify-center text-2xl font-bold font-fontutama mb-4">Edit Foto</h2>
            <form action="/edit-postingan/{{$foto->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="font-fontdua block text-sm font-semibold text-gray-600">Judul Foto:</label>
                    <input type="text" name="judul_baru" id="" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded-md w-full px-4 py-2" placeholder="Enter judul foto baru">
                </div>
                <div class="mb-4">
                    <label class="font-fontdua block text-sm font-semibold text-gray-600">Description:</label>
                    <textarea name="deskripsi_baru" id="" rows="4" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded-md w-full px-4 py-2" placeholder="Enter description foto baru"></textarea>
                </div>
                <h3 class="mt-2 font-fontutama">Select Album</h3>
                <select type="text" name="album" id="" class="border font-fontutama py-2 rounded border-slate-500">
                    <option value="" >PilihAlbum</option>
                    @foreach ($albums as $album)
                        <option value="{{$album->id}}">{{$album->nama_album}}</option>
                    @endforeach
                </select>
                <div class="mt-6 flex justify-center">
                    <button type="submit" class="font-fontutama mr-4 px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-red-600 focus:outline-none focus:bg-blue-600">Perbaharui</button>
                    <a href="/mypinprofil" class="font-fontutama px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-red-600 focus:outline-none focus:bg-blue-600">Back Profil</a>
                </div>
            </form>
        </div>


    </div>
</section>
@endsection
