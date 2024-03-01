@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-20 mb-8">
        <h1 class="text-gray-900 dark:text-white font-semibold text-xl mb-8">Kategori berita</h1>

        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Tambah Kategori
        </button>


        <div class="flex flex-wrap gap-4 mt-10">
            @foreach ($data as $no => $item)
                <div class="bg-white border-none dark:bg-gray-700 p-2 rounded-lg w-[20%]">
                    <h1 class="font-semibold text-gray-900 dark:text-white text-3xl text-center capitalize">
                        {{ $item->kategori }}</h1>
                    <div class="flex gap-x-2 mx-auto justify-center">
                        <button class="text-lime-600" onclick="my_modal_3{{ $no }}.showModal()">Edit</button>
                        <button class="text-red-600" onclick="delete_{{ $item->id }}.showModal()">Hapus</button>
                    </div>

                </div>
            @endforeach

        </div>

        {{-- add kategori --}}
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Tambahkan Kategori
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="/berita/kategori/add" method="POST">
                            @csrf
                            <div>
                                <label for="katgori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Jenis Kategori berita</label>
                                <input type="text" name="kategori" id="kategori"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="jenis kain atau pakaian" required />
                            </div>

                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah

                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- edit kategori --}}

        @foreach ($data as $update => $edit)
            <dialog id="my_modal_3{{ $update }}" class="modal">
                <div class="modal-box">


                    <form action="/berita/kategori/update/{{ $edit->berita_kategori_id }}" method="POST">
                        @csrf

                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Jenis Kategori Produk</label>
                        <input type="text" name="kategori" id="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="jenis kain atau pakaian" value="{{ $edit->kategori }}" required />


                        <div class="flex gap-x-4 mt-4">
                            <button type="submit" id="btn-select-file"
                                class="bg-green-600 py-2 px-4 rounded-md text-white">SEND</button>
                            <a href="/berita/kategori" class="bg-red-600 px-4 py-2 text-white rounded-md">UNDO</a>
                        </div>
                    </form>


                </div>
            </dialog>
        @endforeach
    @endsection

    <dialog id="delete_" class="modal modal-bottom sm:modal-middle ">
        <form action="/admin/kategori-berita/hapus/" method="POST"
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
