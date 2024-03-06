@extends('layouts.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')
<section class="mt-32">
    <div class="items-center max-w-screen-md mx-auto ">
        <h3 class="text-3xl text-center font-fontutama">Detail Foto</h3>
    </div>
</section>
<section class="mt-10">
    @csrf
    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap px-2 flex-container">
            <div class="w-3/5 max-[480px]:w-full">
                <div class="flex justify-center overflow-hidden">
                    <img src="" alt=""
                        class="w-full h-auto max-w-xl px-2 transition duration-500 ease-in-out hover:scale-105" id="fotodetail">
                </div>
                <div class="flex flex-col px-2">
                    <div class="font-fontutama font-semibold" id="judulfoto">
                        Judul Foto
                    </div>
                    <div>
                        <small class="font-fontdua text-abuabu" id="deskripsifoto"> Bawah </small>
                    </div>
                </div>
            </div>
            <div class="w-2/5  max-[480px]:w-full">
                <div class="flex flex-wrap items-center justify-between ">
                    <div class="flex flex-row items-center gap-2">
                        <div class="overflow-hidden">
                            <img src="" class="w-10 h-10 border-2 rounded-full" alt="" id="fotouser">
                        </div>
                        <div class="flex flex-col font-fontutama">
                            <a href="/otherpin" class="text-md" id="username"></a>
                            {{-- <small class="text-xs">100 Pengikut</small> --}}
                        </div>
                    </div>
                    {{-- <div>
                        <button class="bg-gray-500 px-4 py-1 rounded-full text-white">Ikuti</button>
                    </div> --}}
                </div>
                <div class="mt-[33px] font-fontutama">
                    Komentar :
                </div>
                <div class="relative flex flex-col overflow-y-auto h-[200px] scrollbar-hidden" id="listkomentar">


                </div>
                <div class="flex gap-2 mt-2">
                    <div class="w-3/4">
                        <input type="text" name="textkomentar" id="" class="border border-black w-full px-2 py-1 rounded">
                    </div>
                    <button class="px-4 rounded bg-red-600" onclick="kirimkomentar()"><span class="bi bi-send text-white"></span></button>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap mt-10 flex-container">
            {{-- <div class="flex mx-auto mt-2 bg-white">
                <div class="flex flex-col px-2">
                    <a href="explore-detail.html">
                        <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                            <img src="/assets/image3.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                        <div>
                            <div class="flex flex-col">
                                <div>
                                    Kebahagiaan
                                </div>
                                <div class="text-xs text-abuabu">
                                    15w
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="bi bi-tag-fill"></span>
                            <small>40</small>
                            <span class="bi bi-chat-left-text"></span>
                            <small>14</small>
                            <span class="bi bi-heart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mx-auto mt-2 bg-white">
                <div class="flex flex-col px-2">
                    <a href="explore-detail.html">
                        <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                            <img src="/assets/image3.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                        <div>
                            <div class="flex flex-col">
                                <div>
                                    Kebahagiaan
                                </div>
                                <div class="text-xs text-abuabu">
                                    15w
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="bi bi-tag-fill"></span>
                            <small>40</small>
                            <span class="bi bi-chat-left-text"></span>
                            <small>14</small>
                            <span class="bi bi-heart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mx-auto mt-2 bg-white">
                <div class="flex flex-col px-2">
                    <a href="explore-detail.html">
                        <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                            <img src="/assets/image2.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                        <div>
                            <div class="flex flex-col">
                                <div>
                                    Kebahagiaan
                                </div>
                                <div class="text-xs text-abuabu">
                                    15w
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="bi bi-tag-fill"></span>
                            <small>40</small>
                            <span class="bi bi-chat-left-text"></span>
                            <small>14</small>
                            <span class="bi bi-heart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mx-auto mt-2 bg-white">
                <div class="flex flex-col px-2">
                    <a href="explore-detail.html">
                        <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                            <img src="/assets/image2.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                        <div>
                            <div class="flex flex-col">
                                <div>
                                    Kebahagiaan
                                </div>
                                <div class="text-xs text-abuabu">
                                    15w
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="bi bi-tag-fill"></span>
                            <small>40</small>
                            <span class="bi bi-chat-left-text"></span>
                            <small>14</small>
                            <span class="bi bi-heart"></span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection
@push('footerjsexternal')
    <script src="/javascript/exploredetail.js"></script>
@endpush
