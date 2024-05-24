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

                <a href="/user"
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
            </div>
        </aside>
        <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
            <div class="p-2 md:p-4">
                <div class="w-full">
                    <div class="flex justify-between">
                        <a href="#" class="text-left font-semibold">Pesanan Saya</a>
                        {{-- <a href="#" class="text-left font-semibold">Telah Di bayar</a>
                        <a href="#" class="text-left font-semibold">Di kemas</a>
                        <a href="#" class="text-left font-semibold">Selesai</a>
                        <a href="#" class="text-left font-semibold">Selesai</a> --}}
                    </div>
                    @foreach ($data as $item)
                        <div class="flex justify-between">
                            <div class="py-4 flex ">
                                <img class="h-16 w-16 mr-4"
                                    src="{{ asset('produk/' . $item->produk->produkImage[0]->image) }}" alt="Product image">
                                <div class="items-center">
                                    <h1 class="font-semibold text-sm mb-2">{{ $item->produk->nama_produk }}</h1>
                                    <h1 class="font-semibold text-sm mb-2">{{ $item->produk->model }}</h1>
                                </div>
                            </div>
                            <div class="py-4">
                                <h1>
                                    {{ $item->amount }}
                                </h1>
                            </div>
                            <div class="py-4">
                                <div class="flex items-center">

                                    <span class="text-center w-8" id="jumlah">{{ $item->alamat }}</span>

                                </div>
                            </div>
                            <div class="py-2 mt-4" id="harga">
                                <a href="{{ $item->payment_link }}"
                                    class="bg-blue-600 px-2 rounded-lg text-white font-semibold py-1">
                                    bayar
                                </a>

                                
                            </div>
                            <div class="py-4" id="harga">
                                <div class="text-center border">
                                    <div class="border">
                                        <button class="text-white bg-slate-500 font-semibold px-2 py-1 rounded-md">
                                            @if ($item->payment_status === 'PAID')
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                        @elseif($item->payment_status === 'PENDING')
                                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 me-2"></div>
                                        @else
                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                                        @endif
                                        {{ $item->payment_status }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- More product rows -->
                        </div>
                    @endforeach

                </div>
            </div>
        </main>
    </div>
@endsection
