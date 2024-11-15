@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-6 bg-slate-200 dark:bg-gray-800">
        <div
            class=" p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="#"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">E-commerce</a>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                    aria-current="page">Products</span>
                            </div>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All products</h1>
                </div>
                <div class="items-center gap-x-8 block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <form class="sm:pr-3" action="#" method="GET">
                            <label for="products-search" class="sr-only">Search</label>
                            <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                                <input type="text" name="email" id="products-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search for products">
                            </div>
                        </form>

                    </div>

                    <button id="createProductButton"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        type="button" data-drawer-target="drawer-create-product-default"
                        data-drawer-show="drawer-create-product-default" aria-controls="drawer-create-product-default"
                        data-drawer-placement="right">
                        Tambah Produk
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <table
                            class="max-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600 justify-center items-center">
                            <thead class="bg-gray-100 dark:bg-gray-700 ">
                                <tr class="">

                                    <th scope="col "
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        nama Produk
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Kategori
                                    </th>

                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400 w-60">
                                        Size dan stock
                                    </th>

                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        deskripsi
                                    </th>

                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        harga
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=" bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @foreach ($data as $no => $user)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                        <td class="max-w-xl w-40 flex items-center p-4  space-x-3 ">
                                            <img class="w-20 h-20"
                                                src="{{ asset('produk/' . $user->produkImage[0]->image) }}">

                                            <div class=" ">
                                                <div class="text-sm font-semibold text-gray-900 dark:text-white">
                                                    {{ $user->nama_produk }}
                                                </div>
                                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    {{ $user->model }}
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="min-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:w-30 dark:text-white">

                                            {{ $user->kategori->nama_kategori }}</td>

                                        <td
                                            class="max-w-sm  p-1 overflow-hidden text-base font-normal text-gray-500  dark:text-white ">
                                            <a href="/admin/size/{{ $user->produk_id }}">
                                                lihat stock
                                            </a>
                                        </td>

                                        <td class="text-base max-w-xs h-32 font-medium text-gray-900 dark:text-white">

                                            <p id="text-{{ $user->id }}" class="truncate">
                                                {{ $user->deskripsi }}
                                            </p>

                                            <button id="toggle-button-{{ $user->id }}" class="mt-2 text-blue-500">
                                                Lihat selengkapnya
                                            </button>
                                        </td>

                                        <td
                                            class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex items-center">
                                                <p>Rp{{ number_format($user->harga, 0, ',', '.') }}</p>

                                            </div>
                                        </td>




                                        <td class="p-4 space-x-2 whitespace-nowrap">

                                            <button type="button"
                                                data-drawer-target="drawer-right-example{{ $no }}"
                                                data-drawer-show="drawer-right-example{{ $no }}"
                                                data-drawer-placement="right"
                                                aria-controls="drawer-right-example{{ $no }}"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Edit Produk
                                            </button>





                                            <button
                                                class="p-2 rounded-lg bg-red-600 hover:bg-red-700 font-semibold inline-block text-white"
                                                onclick="delete_{{ $no }}.showModal()">Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <!-- Edit Product Drawer -->
        @foreach ($data as $key => $produk)
            <div id="drawer-right-example{{ $key }}"
                class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
                tabindex="-1" aria-labelledby="drawer-right-label">

                <h5 id="drawer-label"
                    class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                    Tambah Produk</h5>
                <button type="button" data-drawer-dismiss="drawer-create-product-default"
                    aria-controls="drawer-create-product-default"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>


                <form action="/admin/produk/update/{{ $produk->produk_id }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-4">



                        <a href="/admin/produk-image/update/{{ $produk->produk_id }}"
                            class="btn btn-block bg-blue-700 text-white hover:bg-black">
                            Edit Gambar
                        </a>

                        <div>
                            {{-- @dd($kategori) --}}
                            <label for="kategori"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kategori</label>
                            <select id="" name="kategori"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                onclick="updateModel()">


                                @foreach ($kategori as $cek)
                                    <option class="uppercase" value="{{ $cek->kategori_id }}"
                                        {{ $cek->kategori_id === $produk->kategori_id ? 'selected' : '' }}>
                                        {{ $cek->nama_kategori }}
                                    </option>
                                @endforeach


                            </select>
                        </div>



                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="batik" required value="{{ $produk->nama_produk }}">
                        </div>

                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                            <input type="text" name="harga"
                                value="{{ number_format($produk->harga, 0, ',', '.') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name" required value="{{ $produk->harga }}">
                        </div>


                        <div>
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" rows="4" name="deskripsi"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Enter event description here" value>{{ $produk->deskripsi }}</textarea>
                        </div>



                        <div class="bottom-0 left-0 flex justify-center w-full pb-12 space-x-4 md:px-4 md:relative">
                            <button type="submit"
                                class="text-white w-full justify-center bg-primary-700 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm py-2.5 text-centerdark:focus:ring-primary-800">
                                edit produk
                            </button>
                            <button type="button" data-drawer-dismiss="drawer-create-product-default"
                                aria-controls="drawer-create-product-default"
                                class="inline-flex w-full justify-center items-center bg-red-600 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 text-white">
                                <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                batal
                            </button>
                        </div>

                    </div>

                </form>
            </div>
        @endforeach


        @foreach ($data as $no => $delete)
            <dialog id="delete_{{ $no }}" class="modal modal-bottom sm:modal-middle ">
                <form action="/admin/produk/delete/{{ $delete->produk_id }}" method="POST"
                    class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                    @csrf

                    <p class="py-4">Apakah kamu yakin mau menghapus data ini ?</p>
                    <div class="modal-action">
                        <label for="closeDelete" class="btn bg-red-600 hover:bg-red-700 border-none">Tidak</label>
                        <button class="btn bg-lime-600 hover:bg-lime-700 border-none">Hapus</button>
                    </div>
                </form>
                <form method="dialog" class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white hidden">
                    <p class="py-4">Apakah kamu yakin mau menghapus data ini ?</p>
                    <div class="modal-action">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn" id="closeDelete">Close</button>
                    </div>
                </form>
            </dialog>
        @endforeach


        <!-- Add Product Drawer -->


        <div id="drawer-create-product-default"
            class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800 mb-8"
            tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">

            <h5 id="drawer-label"
                class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                Tambah Produk</h5>
            <button type="button" data-drawer-dismiss="drawer-create-product-default"
                aria-controls="drawer-create-product-default"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <form action="/admin/produk/add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-4">
                    <div class="">

                        <label
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('image')
                        peer
                    @enderror"
                            for="file_input">Upload
                            file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file" name="image[]" multiple>
                        @error('image')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="batik" required="">
                    </div>

                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="number" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                    </div>

                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat</label>
                        <input type="numbe" name="berat" id="berat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                    </div>



                    <div>
                        <label for="kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kategori</label>
                        <select id="" name="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            onclick="updateModel()">

                            @foreach ($kategori as $cek)
                                <option class="uppercase" value="{{ $cek->kategori_id }}">{{ $cek->nama_kategori }}
                                </option>
                            @endforeach


                        </select>
                    </div>

                    <div>
                        <label for="model"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">model</label>
                        <input type="text" name="model" id="model"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Baju" required="">
                    </div>

                    <div>
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="4" name="deskripsi"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter event description here"></textarea>
                    </div>

                    <div>
                        <label for="select2"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                        <select name="size[]" multiple="multiple" id="select2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                            select2">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>


                    </div>
                    <div class="bottom-0 left-0 flex justify-center w-full pb-12 space-x-4 md:px-4 md:relative">
                        <button type="submit"
                            class="text-white w-full justify-center bg-primary-700 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm py-2.5 text-centerdark:focus:ring-primary-800">
                            Add product
                        </button>
                        <button type="button" data-drawer-dismiss="drawer-create-product-default"
                            aria-controls="drawer-create-product-default"
                            class="inline-flex w-full justify-center items-center bg-red-600 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 text-white">
                            <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Cancel
                        </button>
                    </div>


            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.select2').select2();
    </script>
@endpush

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const text = document.getElementById('text-{{ $user->id }}');
        const toggleButton = document.getElementById('toggle-button-{{ $user->id }}');

        toggleButton.addEventListener('click', function () {
            text.classList.toggle('truncate');

            if (text.classList.contains('truncate')) {
                toggleButton.textContent = 'Lihat selengkapnya';
            } else {
                toggleButton.textContent = 'Lihat lebih sedikit';
            }
        });
    });
</script>