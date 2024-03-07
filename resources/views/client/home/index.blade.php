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

        <div class="mt-2 md:mt-44">
            <P class="text-black font-semibold text-xl md:text-3xl">
                Rekomendasi untuk anda
            </P>
        </div>

        <div class="grid grid-cols-3 md:flex justify-between px-8 gap-x-6 mb-4 mt-3">
            <button class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4">
                <p class="text-md md:text-xl px-2 py-2 font-semibold shadow-best rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
            <button class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4">
                <p class="text-md md:text-xl px-2 py-2 font-semibold shadow-best rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
            <button class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4">
                <p class="text-md md:text-xl px-2 py-2 font-semibold shadow-best rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
            <button class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4">
                <p class="text-md md:text-xl px-2 py-2 font-semibold shadow-best rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
            <button class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4">
                <p class="text-md md:text-xl px-2 py-2 font-semibold shadow-best rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>

            <button class="w-35 md:w-60 hover:bg-blue-400 hover:border rounded-lg my-4">
                <p class="text-md md:text-xl px-2 py-2 font-semibold shadow-best rounded-lg bg-blend-overlay hover hover:text-white">
                    Laki-Laki
                </p>
            </button>
        </div>

        <div class="container">

            <div class="card card-compact w-96 bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
