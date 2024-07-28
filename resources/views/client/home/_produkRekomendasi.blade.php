<div class="px-8 grid grid-cols-2 md:grid-cols-4 gap-x-3">

    <!-- component -->
    @foreach ($tes as $item)

    {{-- @dd($item) --}}
        <a href="/produks/detail/{{ $item->produk_id }}">
            <div
                class=" mx-auto mt-11 w-40 md:w-80 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                <img class="h-48 w-full object-cover object-center"
                    src="{{ asset('produk/' . $item->produkImage[0]->image) }}" alt="Product Image" />
                <div class="relative mb-6 my-1">

                        <p class="absolute text-xs p-1 pl-1 text-white font-semibold  bg-blue-500 rounded-r-full">
                            Stock {{ $item->size_sum_qty }}
                        </p>

                </div>
                <div class="p-2">
                    <h2 class="mb-2 text-left text-lg md:text-xl font-medium text-gray-900">{{ $item->nama_produk }}</h2>
                    <p class="mb-2 text-left text-sm text-gray-700 line-clamp-1">{{ $item->deskripsi }}</p>
                    <div class="flex items-center justify-between">
                        <p class="mr-2 text-sm font-semibold text-green-500 ">{{ $item->numberFormat($item->harga) }}</p>
                        <p class="mr-2 text-xs font-normal md:text-base text-gray-500 ">{{ $item->terjual }}
                            <span>terjual</span>
                        </p>

                    </div>
                </div>
            </div>
        </a>
    @endforeach

</div>
