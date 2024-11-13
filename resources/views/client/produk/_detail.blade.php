@extends('client.layouts.two')

@section('container')
    <div class="px-2 ">

        <div class=" md:grid grid-cols-2 gap-x-2 shadow-best">
            <div class="relative w-[80%] md:max-w-xl mx-auto glide-02">
                <!-- Slides -->
                <div class="overflow-hidden" data-glide-el="track">
                    <ul
                        class="relative w-full overflow-hidden whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                        @foreach ($data->produkImage as $item)
                            <li><img src="{{ asset('produk/' . $item->image) }}"
                                    class="w-full h-60 md:h-80 md:mt-10 object-contain" />
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

            <script>
                var glide02 = new Glide('.glide-02', {
                    type: 'slider',
                    focusAt: 'center',
                    perView: 1,
                    autoplay: 3500,
                    animationDuration: 700,
                    gap: 0,
                    classes: {
                        activeNav: '[&>*]:bg-slate-700',
                    },

                });

                glide02.mount();
            </script>
            <div class="px-2 mt-4">
                <h1 class="text-base md:text-3xl font-semibold text-black capitalize">
                    {{ $data->nama_produk }}
                </h1>

                <div class="flex gap-x-2">
                    <div class="">
                        <h1 class="text-xs md:text-lg font-semibold text-black">
                            Stock
                            <span class="">
                                {{ $data->size->sum('qty') }}
                            </span>
                        </h1>

                    </div>
                    <p class="text-xs md:text-lg">
                        |
                    </p>
                    <div class="">
                        <h1 class="text-xs md:text-lg font-semibold text-black">
                            Terjual
                            <span>
                                {{ $data->terjual }}
                            </span>

                        </h1>
                    </div>
                </div>

                <div
                    class="mt-2 md:mb-4 md:bg-gray-100 py-2 md:px-2 md:py-4 flex justify-between items-center 
        md:border-green-800 md:border-l-4">
                    <span class="text-green-800 md:px-4 text-xl md:text-2xl font-bold">Rp
                        {{ number_format($data->harga, 0, ',', '.') }}</span>
                </div>




                <div class="hidden md:block">
                    @include('client.produk._tes')
                </div>


            </div>

        </div>

        <div class="mb-2 border mt-2 px-10 hidden md:block">

            <h1 class="font-bold pt-2 capitalize text-black text-xl">
                deskripsi produk
            </h1>

            <p class="text-sm font-serif text-black pt-2 md:text-xl">
                {{ $data->deskripsi }}
            </p>
        </div>

        <div class="md:hidden">
            @include('client.produk._spek')
        </div>
    </div>

    <div class="pt-2">
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const totalPriceElement = document.getElementById("total");
            const quantityInput = document.getElementById("qty");
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
