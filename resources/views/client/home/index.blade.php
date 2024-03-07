@extends('client.layouts.main')



@section('container')
    <div class="text-center mt-2">
        <h1 class="font-bold text-md md:text-3xl text-black">Cari Sesuai Keinginan Anda</h1>
        <h5 class="text-xs md:text-xl font-serif text-black">disini kami menyediakan berbagai macam kategori seperti di bawah ini</h5>
    </div>


    <div class="md:grid md:grid-cols-4 w-full gap-x-5 pt-4 border ">


        <a href="#" class="h-60">
            <div class="">
                <img class  ="h-[60%]" src="{{ asset('img/aa.jpeg') }}" alt="" />
                <div class="p-2">

                    <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                </div>
            </div>
        </a>

        <a href="#" class="h-60">
            <div class="bg-white border border-gray-200 rounded-lg shadow-best3 ">
                <img class  ="rounded-t-lg" src="{{ asset('img/aa.jpeg') }}" alt="" />
                <div class="p-2">

                    <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                </div>
            </div>
        </a>

        <a href="#" class="h-60">
            <div class="bg-white border border-gray-200 rounded-lg shadow-best3 ">
                <img class  ="rounded-t-lg" src="{{ asset('img/aa.jpeg') }}" alt="" />
                <div class="p-2">

                    <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                </div>
            </div>
        </a>

        <a href="#" class="h-60">
            <div class="bg-white border border-gray-200 rounded-lg shadow-best3 ">
                <img class  ="rounded-t-lg" src="{{ asset('img/aa.jpeg') }}" alt="" />
                <div class="p-2">

                    <p class="text-md mb-3 font-bold md:text-xl text-gray-700 text-center">women</p>


                </div>
            </div>
        </a>
    </div>
@endsection
