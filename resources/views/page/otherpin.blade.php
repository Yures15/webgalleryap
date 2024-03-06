@extends('layouts.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')
<section class="mt-32">
    {{-- <div class="items-center max-w-screen-md mx-auto ">
        <h3 class="text-5xl text-center font-hurricane">PinMe</h3>
    </div> --}}
</section>
<section>
    <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
        <div>
            <img src="/assets/p.png" alt="" class="w-20 h-20 max-w-full max-h-full rounded-full" id="imageUser">
        </div>
        <h3 class="text-xl font-semibold" id="namaUser">

        </h3>
        <small class="text-xs " id="bio"></small>
        <div class="flex flex-row mt-3">
            <a href="follower.html">
                <small class="mr-4 text-abuabu"></small>
            </a>
            <a href="following.html">
                <small class="text-abuabu"></small>
            </a>

        </div>
        {{-- <button class="px-4 mt-4 text-white bg-black rounded-full">Ikuti</button> --}}
    </div>
</section>
<section class="mt-2">
    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap items-center flex-container" id="exploredata">
            {{-- <div class="flex mt-2 bg-white">
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
            <div class="flex mt-2 bg-white">
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
            <div class="flex mt-2 bg-white">
                <div class="flex flex-col px-2">
                    <a href="explore-detail.html">
                        <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                            <img src="/assets/image5.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
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
            <div class="flex mt-2 bg-white">
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
    <script src="/javascript/otherpin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
@endpush
