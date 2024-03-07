@extends('client.layouts.main')



@section('container')
    <div class="text-center mt-2">
        <h1 class="font-bold text-md md:text-3xl text-black">Cari Sesuai Keinginan Anda</h1>
        <h5 class="text-xs md:text-xl font-serif text-black">disini kami menyediakan berbagai macam kategori seperti di bawah
            ini</h5>


        <div class="grid grid-cols-2 md:grid md:grid-cols-4 w-full gap-x-5 pt-4 md:pl-8 justify-center items-center">


            <a href="#" class="h-60">
                <div class="">
                    <img class  ="h-[60%]" src="{{ asset('img/aa.jpeg') }}" alt="" />
                    <div class="p-2">

                        <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                    </div>
                </div>
            </a>
            <a href="#" class="h-60">
                <div class="">
                    <img class  ="h-[60%]" src="{{ asset('img/aa.jpeg') }}" alt="" />
                    <div class="p-2">

                        <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                    </div>
                </div>
            </a>

            <a href="#" class="h-60">
                <div class="">
                    <img class  ="h-[60%]" src="{{ asset('img/aa.jpeg') }}" alt="" />
                    <div class="p-2">

                        <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                    </div>
                </div>
            </a>

            <a href="#" class="h-60">
                <div class="">
                    <img class  ="h-[60%]" src="{{ asset('img/aa.jpeg') }}" alt="" />
                    <div class="p-2">

                        <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                    </div>
                </div>
            </a>
        </div>

        <div id="animated-segment" class="mt-2 md:mt-44">
            <P class="text-black font-semibold text-xl md:text-3xl">
                Rekomendasi untuk anda
            </P>
        </div>

        <div class="grid grid-cols-3 md:flex justify-between gap-x-5 px-8 mb-4 mt-3">
            <button
                class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4 animate-fade-up animate-duration-[900ms] animate-delay-200">
                <p
                    class="text-md md:text-xl px-2 py-2 font-semibold shadow-best text-black rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
            <button
                class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4 animate-fade-up animate-duration-[900ms] animate-delay-200">
                <p
                    class="text-md md:text-xl px-2 py-2 font-semibold shadow-best text-black rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
            <button
                class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4 animate-fade-up animate-duration-[900ms] animate-delay-200">
                <p
                    class="text-md md:text-xl px-2 py-2 font-semibold shadow-best text-black rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
            <button
                class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4 animate-fade-up animate-duration-[900ms] animate-delay-200">
                <p
                    class="text-md md:text-xl px-2 py-2 font-semibold shadow-best text-black rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
            <button
                class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4 animate-fade-up animate-duration-[900ms] animate-delay-200">
                <p
                    class="text-md md:text-xl px-2 py-2 font-semibold shadow-best text-black rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>

            <button
                class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4 animate-fade-up animate-duration-[900ms] animate-delay-200">
                <p
                    class="text-md md:text-xl px-2 py-2 font-semibold shadow-best text-black rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
        </div>

        <div class="px-8 grid grid-cols-2 md:grid-cols-4 gap-x-3 border mb-40">
            
            <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
                <div class="h-24 bg-gray-300 bg-center bg-cover rounded-lg " >
                    <img src="{{ asset ('img/dd.jpeg') }}" alt="">
                </div>
            
                <div class="w-30 mt-10 md:mt-20 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                    <h3 class="py-2 font-bold text-sm tracking-wide text-center text-gray-800 uppercase dark:text-white">Nike Revolt</h3>
            
                    <div class="flex items-center justify-between gap-x-5 px-3 py-2 bg-gray-200">
                        <span class="text-xs font-bold text-black">$129</span>
                        <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Add to cart</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
                <div class="h-44 bg-gray-300 bg-center bg-cover rounded-lg" >
                    <img src="{{ asset ('img/dd.jpeg') }}" alt="">
                </div>
            
                <div class="w-30 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                    <h3 class="py-2 font-bold text-sm tracking-wide text-center text-gray-800 uppercase dark:text-white">Nike Revolt</h3>
            
                    <div class="flex items-center justify-between gap-x-5 px-3 py-2 bg-gray-200">
                        <span class="text-xs font-bold text-black">$129</span>
                        <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Add to cart</button>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection