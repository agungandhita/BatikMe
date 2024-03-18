<div class=" md:grid grid-cols-2 gap-x-2 shadow-best">
    <div class="relative w-full border-red-900 glide-02">
        <!-- Slides -->
        <div class="overflow-hidden" data-glide-el="track">
            <ul
                class="relative w-full overflow-hidden whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                <li><img src="https://Tailwindmix.b-cdn.net/image-03.jpg" class="w-full max-w-full max-h-full m-auto" />
                </li>
                <li><img src="https://Tailwindmix.b-cdn.net/image-04.jpg" class="w-full max-w-full max-h-full m-auto" />
                </li>
                <li><img src="https://Tailwindmix.b-cdn.net/image-05.jpg" class="w-full max-w-full max-h-full m-auto" />
                </li>
                <li><img src="https://Tailwindmix.b-cdn.net/image-01.jpg" class="w-full max-w-full max-h-full m-auto" />
                </li>
                <li><img src="https://Tailwindmix.b-cdn.net/image-02.jpg" class="w-full max-w-full max-h-full m-auto" />
                </li>
            </ul>
        </div>
        <!-- Indicators -->
        {{-- <div class="absolute bottom-0 flex items-center justify-center w-full gap-2" data-glide-el="controls[nav]">
            <button class="p-4 group" data-glide-dir="=0" aria-label="goto slide 1"><span
                    class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=1" aria-label="goto slide 2"><span
                    class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=2" aria-label="goto slide 3"><span
                    class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=3" aria-label="goto slide 4"><span
                    class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
        </div> --}}
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

    {{-- detail produk --}}

    <div class="px-2">
        <h1 class="text-base md:text-3xl font-semibold text-black capitalize">
            batik pria lengan panjang motif bandeng lele
        </h1>

        <div class="flex pt-2 gap-x-2">
            <div class="">
                <h1 class="text-xs md:text-lg font-semibold text-black">
                    Stock
                    <span class="">
                        90
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
                        80
                    </span>
                </h1>
            </div>
        </div>

        <div
            class="mt-2 md:bg-gray-100 py-2 md:px-2 md:py-4 flex justify-between items-center 
        md:border-green-800 md:border-l-4">
            <span class="text-green-800 md:px-4 text-xl md:text-2xl font-bold">Rp 58.000</span>
        </div>

        @include('client.produk._spek')
        
    </div>
    
</div>
