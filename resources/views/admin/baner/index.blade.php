@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-20 mb-4">
        <button class="btn mb-4 bg-blue-700 text-white font-semibold" onclick="my_modal3.showModal()">Tambah Gambar</button>

        {{-- Tambah --}}
        <dialog id="my_modal3" class="modal modal-bottom sm:modal-middle ">
            <form action="/admin/post" method="POST" enctype="multipart/form-data"
                class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                @csrf
                <input
                    class="mt-3 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file" name="image">
            
                <div class="modal-action">
                    <div class="modal-action">
                        <label for="closeDelete" class="btn bg-red-600 hover:bg-red-700 border-none">Tidak</label>
                        <button type="submit" class="btn bg-lime-600 hover:bg-lime-700 border-none">Tambah</button>
                    </div>
            </form>
            {{-- <form method="dialog" class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white hidden">
                <p class="py-4">Apakah kamu yakin mau menghapus data ini ?</p>
                <div class="modal-action">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn" id="closeDelete">Close</button>
                </div>
            </form> --}}
        </dialog>

<div class="flex justify-between">
        @foreach ($data as $cek => $item)
            <div class="card w-96 bg-neutral text-neutral-content">
                <img src="{{ asset('dashboard/' . $item->image) }}" alt="" class="w-full h-full">
                <div class="card-body items-center text-center">
                    <div class="card-actions">
                        <button class="btn btn-primary mt-0 text-white bg-blue-700"
                            onclick="my_modal_{{ $cek }}.showModal()">update</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    {{-- update --}}
    @foreach ($data as $cek => $edit)
        <dialog id="my_modal_{{ $cek }}" class="modal modal-bottom sm:modal-middle ">
                <form id="updateForm" action="/admin/update/{{ $edit->dashboard_id }}" method="POST" enctype="multipart/form-data" class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white">

                    @csrf
                    {{-- @method('PUT') --}}

                    <img id="oldImage" src="{{ asset('dashboard/' . $edit->image) }}" alt="Old Image" class="h-32 w-auto mb-4">
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

{{-- @push('script')
    <script>
        function previewImage(event) {
            const newImage = document.getElementById('newImage');
            const file = event.target.files[0];
            if (file) {
                newImage.src = URL.createObjectURL(file);
                newImage.classList.remove('hidden');
            } else {
                newImage.src = '#';
                newImage.classList.add('hidden');
            }
        }
    </script>
@endpush --}}

