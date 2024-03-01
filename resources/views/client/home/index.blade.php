@extends('client.layouts.main')



@section('container')
    <div class="relative w-full lg:h-screen">


        <div class="relative float-left w-full">
            <div class="bg-black/40 absolute inset-0"></div>
            <img src="{{ asset('img/cek.jpg') }}" class="block w-full h-screen object-cover" alt="Wild Landscape" />

            <div
                class="absolute rounded-xl right-12 inset-x-[60%] top-[50%] translate-y-[-70%] p-8 bg-[#FFF3E3] md:block border border-white">
                <h1 class='text-sm lg:text-xl font-sbold'>SIEBAT PARADILA</h1>
                <h1 class='text-sm lg:text-2xl font-bold  text-[#B88E2F] mt-1'>Be quick we only have a limited supply; once
                    they’re gone, they’re gone! </h1>

                <p class="pt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde,
                </p>
                <div class="mt-4">
                    <a href="" class="text-lg font-semibold  p-2 bg-[#B88E2F] text-white rounded-md">
                        Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h1 class="pt-8 font-bold text-3xl">Browse The Range</h1>
        <h5 class="text-xl font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores</h5>
    </div>


    <div class="grid grid-cols-3 w-full  container gap-x-5 object-cover pt-4">
        <div class="">
            <img src="{{ asset('img/aa.jpeg') }}" alt="" class="mx-auto mb-4">
            <h1 class="text-center">
                Baju
            </h1>
        </div>
        <div class="">
            <img src="{{ asset('img/cek.jpg') }}" alt="">
        </div>
        <div class="">
            <img src="{{ asset('img/cek.jpg') }}" alt="">
        </div>


    </div>
@endsection
