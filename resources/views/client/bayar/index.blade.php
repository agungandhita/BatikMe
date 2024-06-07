@extends('client.layouts.two')

@section('container')
    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
        <div class="flex justify-start item-start space-y-2 flex-col">
            <h1 class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Detail
                Pesanan
            </h1>
            <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600">21st Mart 2021 at 10:34 PM</p>
        </div>
        <div
            class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                <div
                    class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                    <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">
                        Keranjang</p>

                    <div
                        class="mt-6 md:mt-0 flex justify-start flex-col md:flex-row items-start md:items-center space-y-4 md:space-x-6 xl:space-x-8 w-full">
                        <div class="w-full md:w-40">
                            <img class="w-full hidden md:block h-28 object-contain"
                                src="{{ asset('produk/' . $produk->produkImage[0]->image) }}" alt="dress" />
                            <img class="w-full md:hidden" src="https://i.ibb.co/BwYWJbJ/Rectangle-10.png" alt="dress" />
                        </div>
                        <div class="flex justify-between items-start w-full flex-col md:flex-row space-y-4 md:space-y-0">
                            <div class="w-full flex flex-col justify-start items-start space-y-8">
                                <h3 class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800">
                                    {{ $produk->nama_produk }}</h3>
                                <div class="flex justify-start items-start flex-col space-y-2">
                                    <p class="text-sm dark:text-white leading-none text-gray-800"><span
                                            class="dark:text-gray-400 text-black">model: </span> {{ $produk->model }}
                                    </p>
                                    <p class="text-sm dark:text-white leading-none text-gray-800"><span
                                            class="dark:text-gray-400 text-black">Ukuran: </span> {{ $ukuranPesan->size }}
                                    </p>
                                    <p class="text-sm dark:text-white leading-none text-gray-800"><span
                                            class="dark:text-gray-400 text-black">Kategori: </span>
                                        {{ $produk->kategori->nama_kategori }}</p>

                                 

                                </div>
                            </div>
                            <div class="flex justify-between space-x-8 items-start w-full">
                                <p class="text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800">Rp.
                                    {{ number_format($produk->harga, 0, '.', ',') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @dd($detailPesan) --}}
                <div
                    class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                    <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Total</h3>
                        <div
                            class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                            <div class="flex justify-between w-full">
                                <p class="text-base dark:text-white leading-4 text-gray-800">Jumlah Pesanan</p>
                                <p class="text-base dark:text-gray-300 leading-4 text-gray-600">{{ $detailPesan['qty'] }}
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                            <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">
                                {{ number_format($produk->harga * $detailPesan['qty'], 0, '.', ',') }}</p>
                        </div>
                    </div>

                </div>
            </div>
            <div
                class="bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
                <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Detail Pemesan</h3>
                <div
                    class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                    <div class="flex flex-col justify-start items-start flex-shrink-0">
                        <div
                            class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">
                            <div class="flex justify-start items-start flex-col space-y-2">
                                <p class="text-base dark:text-white font-semibold leading-4 text-left text-gray-800">
                                    {{ auth()->user()->username }}</p>
                                <p class="text-sm dark:text-gray-300 leading-5 text-gray-600">{{ auth()->user()->no_tlpn }}
                                </p>
                            </div>
                        </div>

                        <div
                            class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1.svg" alt="email">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1dark.svg"
                                alt="email">
                            <p class="cursor-pointer text-sm leading-5 ">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                        <div
                            class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                            <div
                                class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                                <p
                                    class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">
                                    alamat pemesan</p>
                                <p
                                    class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">
                                    {{ auth()->user()->alamat }}</p>
                            </div>

                        </div>
                        <form class=" w-full justify-center items-center md:justify-start md:items-start" method="POST"
                            action="{{ route('bayar', ['id' => $produk->produk_id]) }}">
                            @csrf
                            <label for="" class="text-sm font-semibold text-black mb-2">
                                catatan
                                <input type="text" name="note" id=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white mb-2"
                                    placeholder="Request" />
                            </label>
                            <div class="hidden">
                                <div class="hidden">
                                    <input type="text" name="qty" class="hidden" value="{{ $detailPesan['qty'] }}">
                                    <input type="text" name="ukuran" class="hidden"
                                        value="{{ $detailPesan['ukuran'] }}">
                                </div>
                            </div>
                            <button type="submit"
                                class="mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 w-96 xl:w-40 text-base font-medium leading-4 text-gray-800">Bayar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- alamat Modal --}}

    {{-- <dialog id="create_alamat" class="modal modal-bottom sm:modal-middle ">
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
    </dialog> --}}
@endsection

{{-- 
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('alamatModal');
        var bayarButton = document.getElementById('bayarButton');

        bayarButton.addEventListener('click', function (event) {
            var alamat = "{{ Auth::user()->alamat }}";
            if (!alamat) {
                event.preventDefault();
                modal.showModal();
            }
        });
    });
</script> --}}
