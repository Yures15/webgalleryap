@extends('layouts.master')
@section('content')
<section class="mt-32">
    <div class="items-center max-w-screen-md mx-auto">
        <h3 class="text-3xl text-center font-fontutama">Welcom To Your Album</h3>
        <p class="text-center text-2xl font-fontutama mt-4">{{ $album->deskripsi }}</p>
    </div>
    <div class="max-w-screen-md mx-auto mt-3">
        <a href="/album" class="inline-flex items-center bg-purple-500 hover:bg-red-600 text-white font-fontutama font-semibold py-1 px-1 rounded transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply" viewBox="0 0 16 16">
                <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.7 8.7 0 0 0-1.921-.306 7 7 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254l-.042-.028a.147.147 0 0 1 0-.252l.042-.028zM7.8 10.386q.103 0 .223.006c.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96z"/>
              </svg>
            Back to Album
        </a>
    </div>    
</section>

<section class="mt-10">
    <div class="max-w-screen-md mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($fotos as $foto)

            <div class="bg-white">
                <div class="px-2">
                    <a href="/exploredetail/{{ $foto->id }}">
                        <div class="w-full bg-bgcolor2 overflow-hidden">
                            <img src="{{asset('/assets/'.$foto->url)}}" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                        <div>
                            <div class="flex flex-col font-fontutama">
                                <div>
                                    {{ $foto->judul_foto }}
                                </div>
                                <div class="font-fonutama text-xs text-abuabu">
                                    {{ $foto->created_at->format('Y.m.d') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="bg-white">
                <div class="px-2">
                    <a href="explore-detail.html">
                        <div class="w-full bg-bgcolor2 overflow-hidden">
                            <img src="/assets/y.jpg" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
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
                    </div>
                </div>
            </div>
            <div class="bg-white">
                <div class="px-2">
                    <a href="explore-detail.html">
                        <div class="w-full bg-bgcolor2 overflow-hidden">
                            <img src="/assets/y.jpg" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
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
                    </div>
                </div>
            </div> --}}

            <!-- Repeat the above code two more times for the other two images -->

        </div>
    </div>
</section>
@endsection
