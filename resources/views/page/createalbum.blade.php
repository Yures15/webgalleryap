@extends('layouts.master')
@section('content')
    <section class="bg-gray-100 mt-20">
        <div class="container mx-auto px-8 py-12">
            <!-- <h2 class="flex justify-center text-3xl font font-fontutama font-bold mb-6">Create Your New Albums</h2> -->

            <!-- Create Album Form dengan border -->
            <div class="container mx-auto mt-10 create-album-form bg-white rounded-lg shadow-md p-8 max-w-md">
                <h2 class="flex justify-center text-2xl font-bold font-fontutama mb-4">Create New Album</h2>

                <form action="/buat-album" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="font-fontdua block text-sm font-semibold text-gray-600">Album Name:</label>
                        <input type="text" name="nama_album" id=""
                            class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded-md w-full px-4 py-2"
                            placeholder="Enter album name">
                    </div>
                    <div class="mb-4">
                        <label class="font-fontdua block text-sm font-semibold text-gray-600">Description:</label>
                        <textarea name="deskripsi" id="" rows="4"
                            class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded-md w-full px-4 py-2"
                            placeholder="Enter album description"></textarea>
                    </div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400
                focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" name="foto" id="file_input" type="file">
                    <div class="mt-6 flex justify-center">
                        <button type="submit"
                            class="font-fontutama px-4 py-2 bg-pink-400 text-white rounded-md hover:bg-red-600 focus:outline-none focus:bg-blue-600">Create
                            Album</button>
                    </div>
                </form>
            </div>


        </div>
    </section>
@endsection
