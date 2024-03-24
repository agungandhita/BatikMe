<div class="block shadow-best mt-3 border-t-0">
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
            <h1 class="py-1">
                Kategori
            </h1>
        </div>
        <div class="capitalize text-sm ">
            <h1 class="text-green-600 py-1 font-bold">
                Kemeja
            </h1>
            <h1 class="py-1 font-bold">
                XXL
            </h1>
            <h1 class="py-1 font-bold">
                300 gram
            </h1>
            <h1 class="py-1 font-bold">
                Batik Lengan panjang
            </h1>
        </div>
    </div>
    


</div>

<div class="mb-16 border mt-2 shadow-best">

    <h1 class="text-sm font-bold pt-2 capitalize">
        deskripsi produk
    </h1>

    <p class="text-sm font-serif text-black pt-2 md:text-lg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus repudiandae at sint eligendi consequuntur non nisi vitae, doloribus aliquid voluptatibus, nulla dolore quia repellat quas velit maxime beatae quidem molestiae.Illo tempora hic, quos veniam dolorem culpa molestias deleniti autem facilis. Voluptatem vel maiores quas? Excepturi fuga corrupti impedit earum iste recusandae accusamus dolor beatae labore, asperiores cumque ipsum exercitationem.
    </p>
</div>

<div class="fixed bottom-0 bg-white border justify-end w-full p-2 left-0">

    <div class="flex gap-x-2 justify-between">
        <button
            class="p-1 border border-blue-500 bg-white rounded-xl text-blue-600 font-semibold capitalize text-sm hover:rounded-xl flex gap-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 md:w-5 md:h-5" viewBox="0 0 24 24"
                fill="currentColor">
                <path
                    d="M4.00436 6.41686L0.761719 3.17422L2.17593 1.76001L5.41857 5.00265H20.6603C21.2126 5.00265 21.6603 5.45037 21.6603 6.00265C21.6603 6.09997 21.6461 6.19678 21.6182 6.29L19.2182 14.29C19.0913 14.713 18.7019 15.0027 18.2603 15.0027H6.00436V17.0027H17.0044V19.0027H5.00436C4.45207 19.0027 4.00436 18.5549 4.00436 18.0027V6.41686ZM6.00436 7.00265V13.0027H17.5163L19.3163 7.00265H6.00436ZM5.50436 23.0027C4.67593 23.0027 4.00436 22.3311 4.00436 21.5027C4.00436 20.6742 4.67593 20.0027 5.50436 20.0027C6.33279 20.0027 7.00436 20.6742 7.00436 21.5027C7.00436 22.3311 6.33279 23.0027 5.50436 23.0027ZM17.5044 23.0027C16.6759 23.0027 16.0044 22.3311 16.0044 21.5027C16.0044 20.6742 16.6759 20.0027 17.5044 20.0027C18.3328 20.0027 19.0044 20.6742 19.0044 21.5027C19.0044 22.3311 18.3328 23.0027 17.5044 23.0027Z">
                </path>
            </svg>
            tambahkan keranjang
        </button>
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" 
            class=" border border-blue-500 bg-white rounded-xl text-blue-600 font-semibold capitalize text-sm hover:rounded-xl w-20 text-center" >
            Beli
        </button>

    </div>

</div>

{{-- modal --}}

<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                 
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new product
                </button>
            </form>
        </div>
    </div>
</div> 