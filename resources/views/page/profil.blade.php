@extends('layouts.master')
@section('content')
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
            <a href="/ubahpassword"><div class="w-48 py-1 mt-4 text-white text-center rounded font-fontutama semibold bg-blue-500">Change Your Password</div></a>
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
                        <button type="submit" class="bg-blue-600 px-4 py-1 rounded mb-5 mt-5 text-white font-fontutama semibold hover:bg-green-700">Perbaharui</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
@endsection
