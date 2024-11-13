@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-20 mb-8">
        <h1 class="text-gray-900 dark:text-white font-semibold text-xl mb-8">Gambar Produk</h1>



        <div class="flex flex-wrap gap-4 mt-10">
            @foreach ($data as $item)
                <div class="bg-slate-100 border-none dark:bg-gray-700 p-2 rounded-lg w-60 h-40">

                        <img src="{{ asset('produk/' . $item->produkImage[0]->image) }}" class="w-full border h-20 object-cover"
                            alt="">
                        <h1 class="font-semibold text-gray-900 dark:text-white text-md md:text-xl text-center capitalize">
                            {{ $item->nama_produk }}</h1>
                    <div class="flex gap-x-2 mx-auto justify-center">
                        <a href="/admin/produk-image/update/{{ $item->produk_id }}" class="text-lime-600 text-sm md:text-xl">Edit</a>
                        <button class="text-red-600 text-sm md:text-xl" onclick="delete_.showModal()">Hapus</button>
                    </div>
                </div>
            @endforeach

        </div>



        {{-- edit kategori --}}

        <dialog id="my_modal_3" class="modal">
            <div class="modal-box">


                <form action="/produk/kategori/update/" method="POST">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Jenis Kategori Produk</label>
                    <input type="text" name="jenis" id="jenis"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="jenis kain atau pakaian" value="" required />


                    <div class="flex gap-x-4 mt-4">
                        <button type="submit" id="btn-select-file"
                            class="bg-green-600 py-2 px-4 rounded-md text-white">SEND</button>
                        <a href="/produk/kategori" class="bg-red-600 px-4 py-2 text-white rounded-md">UNDO</a>
                    </div>
                </form>



            </div>
        </dialog>
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
