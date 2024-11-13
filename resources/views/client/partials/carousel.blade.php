<div id="default-carousel" class="relative w-full -z-50" data-carousel="slide">
    <!-- Carousel wrapper -->

    <div class="relative h-56 overflow-hidden md:h-screen">

        <!-- Item 1 -->
        @foreach ($gambar as $image)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('dashboard/' . $image->image) }}"
                class="object-cover absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
            </div>
        @endforeach

    </div>
    <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>

    </button>
    <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
    </button>
</div>
