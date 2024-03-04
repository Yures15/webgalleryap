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
{{-- <form class="max-w-sm mx-auto mt-5">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Select your Category</label>
    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

      <option>United States</option>
      <option>Canada</option>
      <option>France</option>
      <option>Germany</option>
      <option>Indonesia</option>
      <option>Monggolia</option>
      <option>Brazil</option>
      <option>Rusia</option>
    </select>
  </form> --}}
<section class="mt-10">
    @csrf
    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap items-center flex-container" id="exploredata">


        </div>
    </div>
</section>
@endsection
@push('footerjsexternal')
    <script src="/javascript/explore.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
@endpush
