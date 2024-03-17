<div class="md:grid md:grid-cols-2 gap-x-2 border">
    <div class="relative w-[85%] border-red-900 glide-02">
        <!-- Slides -->
        <div class="overflow-hidden" data-glide-el="track">
            <ul
                class="relative w-full overflow-hidden whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                <li><img src="https://Tailwindmix.b-cdn.net/image-03.jpg" class="w-80 max-w-full max-h-full m-auto" />
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
        <div class="absolute bottom-0 flex items-center justify-center w-full gap-2" data-glide-el="controls[nav]">
            <button class="p-4 group" data-glide-dir="=0" aria-label="goto slide 1"><span
                    class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=1" aria-label="goto slide 2"><span
                    class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=2" aria-label="goto slide 3"><span
                    class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=3" aria-label="goto slide 4"><span
                    class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
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

    {{-- detail produk --}}

    <div class="pt-2">
        <h1 class="text-3xl font-semibold text-black capitalize">
            batik pria lengan panjang motif bandeng lele
        </h1>

        <div class="flex pt-2 gap-x-2">
            <div class="">
                <h1 class="text-lg font-semibold">
                    Stock
                    <span class="">
                        90
                    </span>
                </h1>

            </div>
            <p>
                |
            </p>
            <div class="">
                <h1 class="text-lg font-semibold">
                    Terjual
                    <span>
                        80
                    </span>
                </h1>
            </div>
        </div>

        <div class="w-full border mt-3">
            <p class="p-6">
                Rp 2000
            </p>
        </div>
    </div>
</div>
