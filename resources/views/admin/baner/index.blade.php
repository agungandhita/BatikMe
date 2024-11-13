@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-20 mb-4 min-h-screen">
        <h1 class="font-semibold text-2xl mb-4">Tambahkan Gambar untuk banner</h1>
        <button class="btn mb-4 bg-blue-700 hover:bg-black text-white font-semibold" onclick="my_modal3.showModal()">Tambah Gambar</button>

        {{-- Tambah --}}
        <dialog id="my_modal3" class="modal modal-bottom sm:modal-middle">
            <form action="/admin/post" method="POST" enctype="multipart/form-data"
                  class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                @csrf
                <input
                    class="mt-3 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file" name="image">
        
                <div class="modal-action">
                    <button type="button" class="btn bg-red-600 hover:bg-red-700 border-none text-white" onclick="document.getElementById('my_modal3').close()">Tidak</button>
                    <button type="submit" class="btn bg-lime-600 hover:bg-lime-700 border-none text-white">Tambah</button>
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
        

        <div class="flex gap-x-8">
            @foreach ($data as $cek => $item)
                <div class="card border w-96 bg-neutral text-neutral-content">
                    <img src="{{ asset('dashboard/' . $item->image) }}" alt="" class="w-full h-40 object-cover">
                    <button class="btn btn-primary mt-4 text-white bg-blue-700 w-20 mx-auto"
                        onclick="my_modal_{{ $cek }}.showModal()">update</button>
                </div>
            @endforeach
        </div>


        {{-- update --}}
        @foreach ($data as $cek => $edit)
            <dialog id="my_modal_{{ $cek }}" class="modal modal-bottom sm:modal-middle ">
                <form id="updateForm" action="/admin/update/{{ $edit->dashboard_id }}" method="POST"
                    enctype="multipart/form-data" class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white">

                    @csrf
                    {{-- @method('PUT') --}}

                    <img id="oldImage" src="{{ asset('dashboard/' . $edit->image) }}" alt="Old Image"
                        class="h-32 w-auto mb-4">
                    <input
                        class="mt-3 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="image">


                    <img id="newImage" src="#" alt="New Image Preview" class="h-32 w-auto mb-4 hidden">
                    <button type="submit"
                        class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Update</button>

                </form>
            </dialog>
        @endforeach
    @endsection

 