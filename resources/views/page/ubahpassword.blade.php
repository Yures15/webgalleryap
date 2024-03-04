@extends('layouts.master')
@section('content')
<section class="max-w-screen-md flex justify-center mx-auto">

    <div class="border bg-white shadow-lg p-2 mx-auto mt-32 rounded-xl px-11">
        <h2 class="font font-fontutama text-xl text-center">Change Your Password</h2>
        <div class="mt-4">
            
            <form action="/update-password" method="POST">
                @csrf
                <div class="mb-3 font-fontutama">
                    <label for="">Old Password</label>
                    <input name="password_lama" type="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50 ">
                </div>
                <div class="mt-3 font-fontutama">
                    <label for="">New Password</label>
                    <input name="password_baru" type="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50">
                </div>
                <div class="mt-3 font-fontutama">
                    <label for="">Confirm Password</label>
                    <input name="confirm_password" type="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50">
                </div>
                <div class="flex justify-center font-fontutama">
                    <button class="bg-blue-600 px-4 py-1 rounded mb-5 mt-5 text-white hover:bg-green-700">Perbaharui</button>
                </div>

            </form>
        </div>
    </div>
</div>
</section>
@endsection
