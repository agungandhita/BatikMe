<div class="">
    <h1 class="text-lg capitalize font-semibold pt-2 text-black pb-3 md:hidden">
        detail produk </h1>

    <div class="flex gap-x-8">
        <div class="capitalize font-semibold text-gray-500">
            <h1 class="my-4 text-lg">
                Kategori
            </h1>
            <h1 class="my-4 text-lg">
                Size
            </h1>
            <h1 class="my-4 text-lg">
                Berat
            </h1>

            <h1 class="my-4 text-lg">
                Review
            </h1>
        </div>
        <div class="capitalize text-sm ">
            <h1 class="text-green-600 my-4 font-semibold text-lg">
                {{ $data->kategori->nama_kategori }}
            </h1>
            <div class="flex gap-4"> 
                @foreach($data->size as $item)
                <h1 class="font-semibold text-lg">
                    {{ $item->size }}
                </h1>
                @endforeach
            </div>
            <h1 class="my-4 font-semibold text-lg">
                {{ $data->berat }} gram
            </h1>

            <h1 class="my-4 font-semibold text-lg">
                0 Review
            </h1>
        </div>
    </div>
    {{-- <div class="">

        <h1 class="text-sm font-semibold pt-2 md:text-lg">
            deskripsi produk
        </h1>

        <p class="text-sm font-serif text-black pt-2 md:text-lg">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum eius aut temporibus odit aperiam quae vel ex, a amet quibusdam asperiores ipsa esse est dolorum eos ipsam! In, laborum. Quos.
        </p>
    </div> --}}

    <div class="grid grid-cols-2 gap-x-2 mb-2">
        <button
            class="btn top-0 border border-blue-500 bg-white rounded-xl text-blue-600 font-semibold md:p-2 capitalize text-sm hover:rounded-xl flex flex-wrap gap-x-3 text-xl"
            onclick="my_modal_3.showModal()">
            <svg xmlns="http://www.w3.org/2000/svg" class=" w-6 h-6 border" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M4.00436 6.41686L0.761719 3.17422L2.17593 1.76001L5.41857 5.00265H20.6603C21.2126 5.00265 21.6603 5.45037 21.6603 6.00265C21.6603 6.09997 21.6461 6.19678 21.6182 6.29L19.2182 14.29C19.0913 14.713 18.7019 15.0027 18.2603 15.0027H6.00436V17.0027H17.0044V19.0027H5.00436C4.45207 19.0027 4.00436 18.5549 4.00436 18.0027V6.41686ZM6.00436 7.00265V13.0027H17.5163L19.3163 7.00265H6.00436ZM5.50436 23.0027C4.67593 23.0027 4.00436 22.3311 4.00436 21.5027C4.00436 20.6742 4.67593 20.0027 5.50436 20.0027C6.33279 20.0027 7.00436 20.6742 7.00436 21.5027C7.00436 22.3311 6.33279 23.0027 5.50436 23.0027ZM17.5044 23.0027C16.6759 23.0027 16.0044 22.3311 16.0044 21.5027C16.0044 20.6742 16.6759 20.0027 17.5044 20.0027C18.3328 20.0027 19.0044 20.6742 19.0044 21.5027C19.0044 22.3311 18.3328 23.0027 17.5044 23.0027Z">
                </path>
            </svg>
            tambahkan keranjang
        </button>
        <button
            class="p-1 border border-blue-500 rounded-xl text-white font-semibold md:p-2 capitalize text-sm hover:rounded-xl bg-blue-600 gap-x-3 text-xl text-center">

            Beli
        </button>
    </div>

    {{-- modal --}}
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box bg-white">
            <h2 class="text-lg font-bold mb-4 text-black">Pilih ukuran</h2>
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <form action="">
                <div class="flex flex-wrap gap-x-6 border-b-2 pb-2">

                    <input type="button" value="XXL"
                        class="border p-1 hover:bg-blue-700 bg-slate-100 rounded-md text-black hover:text-white text-lg font-semibold">


                    <input type="button" value="XL"
                        class="border p-1 hover:bg-blue-700 bg-slate-100 rounded-md text-black hover:text-white text-lg font-semibold">

                    <input type="button" value="S"
                        class="border p-1 hover:bg-blue-700 bg-slate-100 rounded-md text-black hover:text-white text-lg font-semibold">

                    <input type="button" value="M"
                        class="border p-1 hover:bg-blue-700 bg-slate-100 rounded-md text-black hover:text-white text-lg font-semibold">
                </div>
                <!-- Tombol untuk menutup modal -->

                {{-- modal keranjang --}}

                <div class="mt-2 flex justify-between border-b-2 pb-3">
                    <div class="mt-2">
                        <h1 class="text-lg font-semibold text-black">
                            Jumlah
                        </h1>
                    </div>
                    <div class="flex gap-x-4">
                        <button id="btnDecrease" type="button"  class="text-white bg-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"
                                fill="currentColor">
                                <path d="M5 11V13H19V11H5Z"></path>
                            </svg>
                        </button>
                        <input class="w-10 bg-slate-200 text-center p-1  text-black" id="qty"
                            type="number" value="0">

                        <button class="text-white bg-blue-700" type="button" id="btnIncrease">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"
                                fill="currentColor">
                                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path>
                            </svg>
                        </button>
                    </div>

                </div>
                {{-- akhir modal keranjang --}}
                <div class="flex justify-between mt-3">
                    <h1 class="text-lg font-semibold capitalize text-black">
                        harga
                    </h1>
                 

                    <p id="total" class="text-blue-500 font-semibold text-xl">Rp {{ $data->harga }}</p>

                </div>
                <div class="mt-3">
                    <button class="text-center bg-blue-700 text-white font-semibold p-2 w-full">
                        Masukan keranjang
                    </button>
                </div>
            </form>
        </div>
    </dialog>

</div>
