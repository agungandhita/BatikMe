<div class="block shadow-best mt-3 ">
    <h1 class="text-lg capitalize font-semibold pt-2 text-black pb-3 md:hidden">
        detail produk </h1>

    <div class="flex gap-x-8">
        <div class="capitalize text-sm font-semibold text-gray-500">
            <h1 class="py-1">
                Kategori
            </h1>
            <h1 class="py-1">
                Size
            </h1>
            <h1 class="py-1">
                Berat
            </h1>
        </div>
        <div class="capitalize text-sm ">
            <h1 class="text-green-600 py-1 font-bold">
                {{ $data->kategori->nama_kategori }}
            </h1>
            <div class="flex gap-4"> 
                @foreach($data->size as $item)
            <h1 class="py-1 font-bold text-black">
                {{ $item->size }}
            </h1>
            @endforeach
        </div>
            <h1 class="py-1 font-bold text-black">
                {{ $data->berat }} gram
            </h1>
        </div>
    </div>



</div>

<div class="mb-5 border mt-2 shadow-best">

    <h1 class="text-sm font-bold pt-2 capitalize text-black text-xl">
        deskripsi produk
    </h1>

    <p class="text-md font-serif text-black pt-2 md:text-lg">
       {{ $data->deskripsi }}
    </p>
</div>

<div class="fixed bottom-0 bg-white border justify-end w-full p-2 left-0">

    <div class="flex gap-x-2 justify-between">
        <div x-data="{ isOpen: false }">

            <button @click="isOpen = true"
                class="p-1 border border-blue-500 bg-white rounded-xl text-blue-600 font-semibold capitalize text-sm hover:rounded-xl flex gap-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 md:w-5 md:h-5" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M4.00436 6.41686L0.761719 3.17422L2.17593 1.76001L5.41857 5.00265H20.6603C21.2126 5.00265 21.6603 5.45037 21.6603 6.00265C21.6603 6.09997 21.6461 6.19678 21.6182 6.29L19.2182 14.29C19.0913 14.713 18.7019 15.0027 18.2603 15.0027H6.00436V17.0027H17.0044V19.0027H5.00436C4.45207 19.0027 4.00436 18.5549 4.00436 18.0027V6.41686ZM6.00436 7.00265V13.0027H17.5163L19.3163 7.00265H6.00436ZM5.50436 23.0027C4.67593 23.0027 4.00436 22.3311 4.00436 21.5027C4.00436 20.6742 4.67593 20.0027 5.50436 20.0027C6.33279 20.0027 7.00436 20.6742 7.00436 21.5027C7.00436 22.3311 6.33279 23.0027 5.50436 23.0027ZM17.5044 23.0027C16.6759 23.0027 16.0044 22.3311 16.0044 21.5027C16.0044 20.6742 16.6759 20.0027 17.5044 20.0027C18.3328 20.0027 19.0044 20.6742 19.0044 21.5027C19.0044 22.3311 18.3328 23.0027 17.5044 23.0027Z">
                    </path>
                </svg>
                tambahkan keranjang
            </button>
            <div x-show="isOpen" @click.away="isOpen = false"
                class="fixed bottom-0 left-0 right-0 rounded-xl flex justify-center items-end ">
                <!-- Konten modal -->
                <div class="bg-white rounded-t-lg shadow-lg p-4 pb-10 w-full max-w-md">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-bold mb-4 text-black">Pilih ukuran</h2>
                        <button @click="isOpen = false" class="text-black font-bold mb-4  rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"
                                fill="text-black">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z">
                                </path>
                            </svg>
                        </button>
                    </div>
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
                                <button id="decreaseButton" type="button" class="text-white bg-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"
                                        fill="currentColor">
                                        <path d="M5 11V13H19V11H5Z"></path>
                                    </svg>
                                </button>
                                <input class="w-10 bg-slate-200 text-center p-1 px-2 text-black" id="jumlah"
                                    type="number" value="0">

                                <button class="text-white bg-blue-700" type="button" id="increaseButton"
                                    onclick="increaseValue()">
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
                         

                            <p id="semua" class="text-blue-500 font-semibold text-xl">Rp {{ $data->harga }}</p>

                        </div>
                        <div class="mt-3">
                            <button class="text-center bg-blue-700 text-white font-semibold p-2 w-full">
                                Masukan keranjang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <a href="/detail-pesanan/{{ $data->produk_id }}"
            class="p-1 border border-blue-500 bg-white rounded-xl text-blue-600 font-semibold capitalize text-sm hover:rounded-xl w-20 text-center">
            Beli
    </a>


    </div>

</div>

<div class="mb-12 border shadow-best rounded-md">
    <h1 class="mb-2 font-semibold text-lg text-black">
        penilain produk
    </h1>


    {{-- @include('client.produk._review') --}}
</div>


@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const totalPriceElement = document.getElementById("semua");
            const quantityInput = document.getElementById("jumlah");
            const increaseButton = document.getElementById("btnIncrease");
            const decreaseButton = document.getElementById("btnDecrease");
            
            function calculateTotalPrice() {
                let price = @json($data->harga);
                const quantity = parseInt(quantityInput.value);
                const totalPrice = price * quantity;
                return totalPrice.toLocaleString(); // Format angka ke format mata uang
            }

            // Update total harga saat halaman dimuat
            const totalPrice = calculateTotalPrice();
            totalPriceElement.innerText = `Rp ${totalPrice}`;

            // Event listener untuk tombol +
            increaseButton.addEventListener("click", function() {
                quantityInput.value++;
                const totalPrice = calculateTotalPrice();
                totalPriceElement.innerText = `Rp ${totalPrice}`;
            });

            // Event listener untuk tombol -
            decreaseButton.addEventListener("click", function() {
                if (quantityInput.value > 1) {
                    quantityInput.value--;
                    const totalPrice = calculateTotalPrice();
                    totalPriceElement.innerText = `Rp ${totalPrice}`;
                }
            });
        });
    </script>
@endpush
