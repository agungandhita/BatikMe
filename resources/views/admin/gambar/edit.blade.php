@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-20 mb-8">
        <h1 class="text-gray-900 dark:text-white font-semibold text-xl mb-8">Gambar Produk</h1>

        <button class="btn text-white font-semibold bg-blue-500 border-transparent"
            onclick="create_tambah.showModal()">Tambah</button>



        <div class="flex flex-wrap gap-4 mt-10">
            {{-- @dd($data->produkImage) --}}

            @foreach ($data->produkImage as $key => $item)
                <div class="bg-slate-200 border-none space-y-4 dark:bg-gray-700 p-2 rounded-lg w-40">
                    <img src="{{ asset('produk/' . $item->image) }}" class="object-cover h-40" alt="">
                    <div class="flex gap-x-2 justify-center">
                        <button class="btn text-black bg-transparent"
                            onclick="my_modal_{{ $key }}.showModal()">Edit</button>
                        <button class="text-red-600 btn" onclick="delete_{{ $key }}.showModal()">Hapus</button>
                    </div>
                </div>
            @endforeach

        </div>




        {{-- edit baru --}}
        @foreach ($data->produkImage as $key => $edit)
            <dialog id="my_modal_{{ $key }}" class="modal">
                <div class="modal-box bg-white">
                    <form action="/admin/produk-image/update/{{ $edit->gambarproduk_id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Gambar
                        </label>

                        <img src="{{ asset('produk/' . $edit->image) }}" alt="" class="h-80">

                        <input
                            class="mt-3 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file" name="image">
                        <div class="modal-action">
                            <button type="button" class="btn bg-red-600 hover:bg-red-700 text-white border-none"
                                onclick="document.getElementById('my_modal_{{ $key }}').close();">
                                Tidak
                            </button>
                            <button type="submit" class="btn bg-lime-600 text-white hover:bg-lime-700 border-none">
                                Edit
                            </button>
                        </div>
                    </form>
                    <div class="modal-action hidden">
                        <button type="button" class="btn"
                            onclick="document.getElementById('my_modal_{{ $key }}').close();">
                            Close
                        </button>
                    </div>
                </div>
            </dialog>
        @endforeach
    @endsection


    {{-- hapus --}}

    @foreach ($data->produkImage as $key => $hapus)
        <dialog id="delete_{{ $key }}" class="modal modal-bottom sm:modal-middle ">
            <form action="/admin/produk-image/delete/{{ $hapus->gambarproduk_id }}" method="POST"
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

    {{-- tambah --}}

    <dialog id="create_tambah" class="modal modal-bottom sm:modal-middle ">
        <form action="/admin/produk-image/create/{{ $produk_id }}" method="POST" enctype="multipart/form-data"
            class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            @csrf
            <input
                class="mt-3 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input" type="file" name="image">

            <div class="modal-action">
                <div class="modal-action">
                    <label for="closeDelete" class="btn bg-red-600 hover:bg-red-700 border-none">Tidak</label>
                    <button class="btn bg-lime-600 hover:bg-lime-700 border-none">Tambah</button>
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
