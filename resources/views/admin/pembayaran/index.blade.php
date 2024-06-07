@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-6 bg-slate-200 dark:bg-gray-800">
        <div
            class=" p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">

            <div class="w-full mb-1">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Status pembayaran dan kelola
                        pesanan
                    </h1>
                </div>
            </div>

        </div>
    </div>



    <div class="px-4 pt-2 bg-slate-200 dark:bg-gray-800">
        <div
            class=" p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for users">
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tujuan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pemesan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status pembayaran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">


                        {{-- @dd($item) --}}

                        <td scope="row"
                            class="flex items-center space-x-6 px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10" src="{{ asset('produk/' . $item->produk->produkImage[0]->image) }}"
                                alt="Jese image">
                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                <div class="text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $item->produk->nama_produk }}

                                </div>
                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                    {{ $item->produk->model }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Rp {{ $item->amount }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $item->alamat }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $item->user->username }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @if ($item->payment_status === 'PAID')
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                @elseif($item->payment_status === 'PENDING')
                                    <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 me-2"></div>
                                @else
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                                @endif
                                {{ $item->payment_status }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                Status</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
