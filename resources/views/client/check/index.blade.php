@extends('client.layouts.two')

@section('container')
    <div class="md:px-52">
        <div class="px-2 border-b-2 mt-3 p-2">
            <h1 class="text-base font-semibold capitalize font-serif">
                Total Keranjang <span class="text-blue-600 font-semibold text-base">3</span>
            </h1>
        </div>

        <div class="px-2 py-2 border-b-2">
            <div class="flex items-center space-x-2 whitespace-nowrap ">
                <img class="w-20 h-20 p-1 rounded-lg" src="{{ asset('img/aa.jpeg') }}">

                <div class="text-xs font-normal text-gray-500 dark:text-gray-400">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">
                        <h1>
                            Lorem ipsum dolor sit amet consectetur,
                        </h1>
                    </div>
                    <div class="text-xs font-normal text-gray-500 dark:text-gray-400">
                        jumlah : 2
                    </div>
                    <div class="text-xs font-normal text-gray-500 dark:text-gray-400">
                        harga : 40
                    </div>
                </div>
            </div>




        </div>
        <div class="px-2 mt-2 flex justify-between border-b-2 p-2">
            <div class="">
                <h1 class="text-gray-500 text-xs font-inter">
                    Total Harga
                </h1>
                <h1 class="text-blue-700 text-lg font-inter font-semibold mt-2">
                    Rp <span class="text-base">200000</span>
                </h1>
            </div>
            <div class="my-4 pr-3">
                <button class="text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                </button>
            </div>
        </div>

        <div class="px-2 py-2 border-b-2">
            <div class="flex items-center space-x-2 whitespace-nowrap ">
                <img class="w-20 h-20 p-1 rounded-lg" src="{{ asset('img/aa.jpeg') }}">

                <div class="text-xs font-normal text-gray-500 dark:text-gray-400">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">
                        <h1>
                            Lorem ipsum dolor sit amet consectetur,
                        </h1>
                    </div>
                    <div class="text-xs font-normal text-gray-500 dark:text-gray-400">
                        jumlah : 2
                    </div>
                    <div class="text-xs font-normal text-gray-500 dark:text-gray-400">
                        harga : 40
                    </div>
                </div>
            </div>




        </div>
        <div class="px-2 mt-2 flex justify-between border-b-2 p-2">
            <div class="">
                <h1 class="text-gray-500 text-xs font-inter">
                    Total Harga
                </h1>
                <h1 class="text-blue-700 text-lg font-inter font-semibold mt-2">
                    Rp <span class="text-base">200000</span>
                </h1>
            </div>
            <div class="my-4 pr-3">
                <button class="text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                </button>
            </div>
        </div>

        <div class="px-2 mt-2 flex justify-between border-b-2 p-2 ">
            <div class="">
                <h1 class="text-gray-500 text-sm font-inter">
                    Jumlah Total :
                </h1>
                <h1 class="text-blue-700 text-lg font-inter font-semibold mt-2">
                    Rp <span class="text-base">200000</span>
                </h1>
            </div>
            <div class="my-4 pr-3">
                <button class="bg-blue-700 rounded-lg">
                   <h1 class="font-semibold text-sm text-white p-2">
                    Check out
                   </h1>
                    </button>
            </div>
        </div>
    </div>
    
@endsection
