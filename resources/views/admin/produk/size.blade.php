@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-20 mb-8">
        <h1 class="text-gray-900 dark:text-white font-semibold text-xl mb-8">Kelola Size Dan Stock Produk</h1>



        <div class="flex flex-wrap gap-4 mt-10">

            @foreach ($data as $size => $ukuran)
                {{-- @foreach ($item->produkImage as $cok)
                <img src="{{ asset('produk/'.$cok->image) }}" alt="">
                @endforeach --}}
                @foreach ($ukuran->size as $cek)
                    <div class="bg-white border-none dark:bg-gray-700 p-2 rounded-lg w-40">


                        <h1 class="font-semibold text-gray-900 dark:text-white text-md md:text-xl text-center capitalize">
                            {{ $cek->size }} 
                            <span>
                                9
                            </span>
                        </h1>
                        <div class="flex gap-x-2 mx-auto justify-center">
                            <button class="text-lime-600 text-sm md:text-xl" onclick="my_modal_3{{ $size }}.showModal()">Edit</button>
                            <button class="text-red-600 text-sm md:text-xl" onclick="delete_.showModal()">Hapus</button>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>



        {{-- edit kategori --}}

        @foreach ($data as $stock => $size)
            
        
        <dialog id="my_modal_3{{ $stock }}" class="modal">
            <div class="modal-box">
                
                
                <form action="/admin/size/update/{{ $size->size_id }}" method="POST">
                    @csrf
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        stock</label>
                        <input type="number" name="qty" id="qty"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="jenis kain atau pakaian" value="" required />
                        
                        
                        <div class="flex gap-x-4 mt-4">
                            <button type="submit" id="btn-select-file"
                            class="bg-green-600 py-2 px-4 rounded-md text-white">SEND</button>
                            <a href="/admin/size" class="bg-red-600 px-4 py-2 text-white rounded-md">UNDO</a>
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
