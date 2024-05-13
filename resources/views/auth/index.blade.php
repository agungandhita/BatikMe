@extends('auth.layouts.main')

@section('container')
  

    <div class="py-16">
        <div class="flex bg-white rounded-lg shadow-best overflow-hidden mx-auto max-w-sm lg:max-w-4xl border ">
            <div class="hidden lg:block lg:w-1/2 bg-cover">
                <img src="{{ asset('img/back.jpg') }}" alt="" class="h-full">
            </div>
            <div class="w-full p-8 lg:w-1/2">
                <form class="mt-8 space-y-6" action="/login" method="POST">
                    @csrf
                    <h2 class="text-2xl font-semibold text-black text-center">BatikMe.ID</h2>
                    <p class="text-xl text-black text-center">Selamat datang kembali</p>
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <input name="email" id="email" required placeholder="example@gmail.com"
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="email" />
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            <a href="#" class="text-xs text-gray-500">Lupa Password?</a>
                        </div>
                        <input name="password" id="password" placeholder="••••••••" required
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="password" />
                    </div>
                    <div class="mt-8">
                        <button type="submit"
                            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Masuk</button>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="/register" class="text-xs text-gray-800 uppercase">or sign up</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
