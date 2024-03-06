@extends('layouts.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane"></h3>
        </div>
    </section>
    <section>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div class="overflow-hidden">
                <img src="" alt="" class="w-20 h-20 rounded-full" id="fotoprofile">
            </div>
            <a href="">
                <h3 class="text-xl rounded font-fontutama font-semibold" id="nama">

                </h3>
            </a>
            <small class="text-xs font-fontutama " id="bio">
            </small>
            <div>
                <a href="/profil"><button
                        class="px-4 mt-4 text-gray-700 font-semibold font-fontutama bg-blue-100 rounded shadow-md">Edit
                        Profile</button></a>
            </div>
            {{-- <div class="flex flex-row mt-3">
            <small class="mr-4 text-abuabu">1000 follower</small>
            <small class="text-abuabu">6 following</small>
        </div> --}}
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="dataprofil">

            </div>
        </div>
    </section>
@endsection
@push('footerjsexternal')
    <script src="/javascript/profil.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
@endpush
