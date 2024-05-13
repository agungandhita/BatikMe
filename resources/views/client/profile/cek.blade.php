@extends('client.layouts.two')

@section('container')
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet"> --}}



    <div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931]">
        <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
            <div class="sticky flex flex-col gap-2 p-4 text-sm border-r border-indigo-100 top-12">

                <h2 class="pl-3 mb-4 text-2xl font-semibold">Settings</h2>

                <a href="#"
                    class="flex items-center px-3 py-2.5 font-bold bg-white  text-indigo-900 border rounded-full">
                    Profile
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2.5 font-semibold  hover:text-indigo-900 hover:border hover:rounded-full">
                    Pesanan saya
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2.5 font-semibold hover:text-indigo-900 hover:border hover:rounded-full  ">
                    Notifications
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2.5 font-semibold hover:text-indigo-900 hover:border hover:rounded-full  ">
                    PRO Account
                </a>
            </div>
        </aside>
        <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
            <div class="p-2 md:p-4">
               <div class="">
                <table class="w-full">
                        <div class="flex justify-between">
                            <h1 class="text-left font-semibold">Menunggu di bayar</h1>
                            <h1 class="text-left font-semibold">Telah Di bayar</h1>
                            <h1 class="text-left font-semibold">Di kemas</h1>
                            <h1 class="text-left font-semibold">Selesai</h1>
                        </div>
                    <tbody>
                        <tr>
                            <td class="py-4">
                                <div class="flex items-center">
                                    <img class="h-16 w-16 mr-4" src="https://via.placeholder.com/150" alt="Product image">
                                    <span class="font-semibold">Nama Produk</span>
                                    
                                    <h2 class="font-semibold">Harga</h2>

                                </div>
                            </td>
                            <td class="py-4">$19.99</td>
                            <td class="py-4">
                                <div class="flex items-center">
                                    {{-- <button onclick="increment()" 
                                    class="border rounded-md py-2 px-4 mr-2">-</button> --}}
                                    <button onclick="increment()">+</button>
                                    <span class="text-center w-8" id="jumlah">1</span>
                                    <button onclick="decrement()">-</button>
                                    {{-- <button onclick="decrement()" class="border rounded-md py-2 px-4 ml-2">+</button> --}}
                                </div>
                            </td>
                            <td class="py-4" id="harga">Rp 19.99</td>
                            <td class="py-4" id="harga">
                                <div class="text-center border">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-8 h-8" viewBox="0 0 30 30">
                                        <path d="M 13 3 A 1.0001 1.0001 0 0 0 11.986328 4 L 6 4 A 1.0001 1.0001 0 1 0 6 6 L 24 6 A 1.0001 1.0001 0 1 0 24 4 L 18.013672 4 A 1.0001 1.0001 0 0 0 17 3 L 13 3 z M 6 8 L 6 24 C 6 25.105 6.895 26 8 26 L 22 26 C 23.105 26 24 25.105 24 24 L 24 8 L 6 8 z"></path>
                                        </svg>
                                </div>
                            </td>
                        </tr>
                        <!-- More product rows -->
                    </tbody>
                </table>
               </div>
            </div>
        </main>
    </div>
@endsection
