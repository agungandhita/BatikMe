@extends('admin.layouts.main')

@section('container')
    <div class="px-4 pt-10 bg-slate-200 dark:bg-gray-800">
        <div class="pb-20">
            <h1 class="text-gray-900 dark:text-white font-semibold text-xl">Berita</h1>

            <form class="mt-10" action="/admin/berita">
                <label for="default-search"
                    class="mb-2 text-sm font-med\ium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" name="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main dark:focus:border-main"
                        placeholder="Cari Berita" value="{{ request('search') }}">
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-main hover:bg-main focus:ring-4 focus:outline-none focus:ring-main font-medium rounded-lg text-sm px-4 py-2 dark:bg-main dark:hover:bg-main dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

            <div class="flex mt-4 gap-4">
                <a href="/berita/tambah"
                    class="bg-white hover:bg-gray-100 dark:bg-gray-700 p-2 inline-block dark:hover:bg-gray-600 rounded-lg text-gray-900 dark:text-white font-semibold">Tambah
                    Berita</a>

            </div>



            <div class="mt-10 grid grid-cols-1 gap-y-4">
                {{-- @use('Carbon\Carbon') --}}
                @foreach ($data as $key => $item)
                    @php
                        $date = Carbon\Carbon::parse($item->created_at)
                            ->locale('id')
                            ->isoFormat('D MMMM YYYY');

                    @endphp
                    <div
                        class="flex flex-col sm:flex-row gap-4 border-b-2 pb-4 bg-white dark:bg-gray-700 p-4 rounded-lg dark:border-none">
                        <img src="{{ asset('image/' . $item->image) }}" alt=""
                            class="object-cover w-full sm:w-[25%]">
                        <div>
                            <div class="flex gap-x-2 mb-2">
                                <div class="flex gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="mt-[2px] h-[14px] md:h-[1em] fill-gray-900 dark:fill-white">
                                        <path
                                            d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                    </svg>
                                    <h1 class="text-sm md:text-base text-gray-900 dark:text-white">{{ $date }}</h1>
                                </div>
                            </div>
                            <h1
                                class="font-semibold text-base lg:text-lg xl:text-xl line-clamp-2 text-gray-900 dark:text-white">
                                {{ $item->judul }}</h1>

                            <h1 class="mt-4 text-gray-900 dark:text-white font-semibold capitalize">Kategori :
                                {{ $item->kategori }}</h1>

                                <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                                    <p id="text-{{ $item->id }}" class="truncate">
                                        {!! Str::limit($item->isi, 100, '...') !!}
                                    </p>
                                    <button id="toggle-button-{{ $item->id }}" class="mt-2 text-blue-500">
                                        Lihat selengkapnya
                                    </button>
                                </div>
                                


                            <div class="flex gap-x-4 mt-10">
                                <button>
                                    <a href="/admin/berita/edit/{{ $item->berita_id }}"
                                        class="p-2 rounded-lg bg-lime-600 hover:bg-lime-700 font-semibold inline-block text-white">Edit</a>
                                </button>

                                <button
                                    class="p-2 rounded-lg bg-red-600 hover:bg-red-700 font-semibold inline-block text-white"
                                    onclick="delete_{{ $key }}.showModal()">Hapus</button>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>


        </div>

    </div>
@endsection

@foreach ($data as $key => $hapus)
    <dialog id="delete_{{ $key }}" class="modal modal-bottom sm:modal-middle ">
        <form action="/admin/berita/delete/{{ $hapus->berita_id }}" method="POST"
            class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
            @csrf

            <p class="py-4">Apakah kamu yakin mau menghapus data ini ?</p>
            <div class="modal-action">
                <label for="closeDelete" class="btn bg-red-600 text-white hover:bg-red-700 border-none">Tidak</label>
                <button class="btn bg-lime-600 text-white hover:bg-lime-700 border-none">Hapus</button>
            </div>
        </form>
        <form method="dialog" class="modal-box bg-white dark:bg-gray-700 text-gray-900 dark:text-white hidden">
            <p class="py-4">Apakah kamu yakin mau menghapus data ini ?</p>
            <div class="modal-action">
                <button class="btn" id="closeDelete">Close</button>
            </div>
        </form>
    </dialog>
@endforeach
<script>
document.addEventListener("DOMContentLoaded", function() {
    const text = document.getElementById('text-{{ $item->id }}');
    const toggleButton = document.getElementById('toggle-button-{{ $item->id }}');
    const fullText = `{!! addslashes($item->isi) !!}`;
    const truncatedText = `{!! Str::limit(addslashes($item->isi), 100, '...') !!}`;

    toggleButton.addEventListener('click', function () {
        if (text.classList.contains('truncate')) {
            text.classList.remove('truncate');
            text.innerHTML = fullText;
            toggleButton.textContent = 'Lihat lebih sedikit';
        } else {
            text.classList.add('truncate');
            text.innerHTML = truncatedText;
            toggleButton.textContent = 'Lihat selengkapnya';
        }
    });
});

</script>