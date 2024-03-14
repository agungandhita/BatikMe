@extends('client.layouts.main')



@section('container')
    <div class="text-center mt-2">
        <h1 class="font-bold text-md md:text-3xl text-black px-4">Cari Sesuai Keinginan Anda</h1>
        <h5 class="text-xs md:text-xl font-serif text-black px-4">disini kami menyediakan berbagai macam kategori seperti di bawah
            ini</h5>


        <div class="grid grid-cols-2 md:grid md:grid-cols-4 w-full gap-x-5 pt-4 md:pl-8 justify-center items-center px-4">


            <a href="#" class="h-60">
                <div class="transition-transform duration-300 ease-in-out transform hover:scale-105">
                    <img class="h-[60%] " src="{{ asset('img/aa.jpeg') }}" alt="" />
                    <div class="p-2">

                        <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                    </div>
                </div>
            </a>
            <a href="#" class="h-60">
                <div class="transition-transform duration-300 ease-in-out transform hover:scale-105">
                    <img class="h-[60%]" src="{{ asset('img/aa.jpeg') }}" alt="" />
                    <div class="p-2">

                        <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                    </div>
                </div>
            </a>

            <a href="#" class="h-60">
                <div class="transition-transform duration-300 ease-in-out transform hover:scale-105">
                    <img class  ="h-[60%]" src="{{ asset('img/aa.jpeg') }}" alt="" />
                    <div class="p-2">

                        <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                    </div>
                </div>
            </a>

            <a href="#" class="h-60">
                <div class="transition-transform duration-300 ease-in-out transform hover:scale-105">
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

        <div class="">
            @include('client.home._produkRekomendasi')
        </div>

      
        <div id="animated-segment" class="mt-4 md:mt-20 mb-2">
            <P class="text-black font-semibold text-xl md:text-3xl ">
                Artikel
            </P>
        </div>

        <div class="md:flex gap-x-4">

            @include('client.home._berita')
            
        </div>


    </div>
@endsection