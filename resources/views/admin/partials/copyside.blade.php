<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width bg-black"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pb-4 overflow-y-auto">
            <div
                class="flex-1 px-3 space-y-1 pt-8 lg:pt-2 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-1 space-y-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="black" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search">
                            </div>
                        </form>
                    </li>
                    <li class="py-2">
                        <a href="/admin " class="flex items-center p-2 text-base text-black rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                                fill="black">
                                <path
                                    d="M3 12C3 12.5523 3.44772 13 4 13H10C10.5523 13 11 12.5523 11 12V4C11 3.44772 10.5523 3 10 3H4C3.44772 3 3 3.44772 3 4V12ZM3 20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V16C11 15.4477 10.5523 15 10 15H4C3.44772 15 3 15.4477 3 16V20ZM13 20C13 20.5523 13.4477 21 14 21H20C20.5523 21 21 20.5523 21 20V12C21 11.4477 20.5523 11 20 11H14C13.4477 11 13 11.4477 13 12V20ZM14 3C13.4477 3 13 3.44772 13 4V8C13 8.55228 13.4477 9 14 9H20C20.5523 9 21 8.55228 21 8V4C21 3.44772 20.5523 3 20 3H14Z">
                                </path>
                            </svg>
                            <span class="ml-3 font-semibold text-black dark:text-white "
                                sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                                fill="black">
                                <path
                                    d="M22 20V7L20 3H4L2 7.00353V20C2 20.5523 2.44772 21 3 21H21C21.5523 21 22 20.5523 22 20ZM4 9H20V19H4V9ZM5.236 5H18.764L19.764 7H4.237L5.236 5ZM15 11H9V13H15V11Z">
                                </path>
                            </svg>

                            <span
                                class="flex-1 ml-3 text-left whitespace-nowrap font-semibold text-black dark:text-white"
                                sidebar-toggle-item>Produk</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="black" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-example" class="hidden">
                            <li class="py-1">
                                <a href="/admin/produk"
                                    class="flex items-center w-full p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Kelola
                                    Produk</a>
                            </li>
                            <li>
                                <a href="/admin/kategori"
                                    class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">Kategori
                                    Produk</a>
                            </li>
                            {{-- <li>
                                <a href="/gambar/produk"
                                    class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">Gambar Produk</a>
                            </li> --}}


                        </ul>
                    </li>

                    <li class="">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-data" data-collapse-toggle="dropdown-data">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black"
                                class="w-6 h-6 text-gray-400">
                                <path
                                    d="M11 7V4C11 3.44772 11.4477 3 12 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V8C2 7.44772 2.44772 7 3 7H11ZM5 16V18H10V16H5ZM14 16V18H19V16H14ZM14 13V15H19V13H14ZM14 10V12H19V10H14ZM5 13V15H10V13H5Z">
                                </path>
                            </svg>

                            <span
                                class="flex-1 ml-3 text-left whitespace-nowrap font-semibold text-black dark:text-white"
                                sidebar-toggle-item>Data</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="black" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-data" class="hidden">
                            <li class="py-1">
                                <a href="/data-pesanan"
                                    class="flex items-center w-full p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Data
                                    Penjualan</a>
                            </li>

                            {{-- <li>
                                <a href="/gambar/produk"
                                    class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">Gambar Produk</a>
                            </li> --}}


                        </ul>
                    </li>

                    <li class="">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-penjualan" data-collapse-toggle="dropdown-penjualan">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" class="w-6 h-6 text-gray-400">
                                <path
                                    d="M22.0049 5.99979H15.0049C11.6912 5.99979 9.00488 8.68608 9.00488 11.9998C9.00488 15.3135 11.6912 17.9998 15.0049 17.9998H22.0049V19.9998C22.0049 20.5521 21.5572 20.9998 21.0049 20.9998H3.00488C2.4526 20.9998 2.00488 20.5521 2.00488 19.9998V3.99979C2.00488 3.4475 2.4526 2.99979 3.00488 2.99979H21.0049C21.5572 2.99979 22.0049 3.4475 22.0049 3.99979V5.99979ZM15.0049 7.99979H23.0049V15.9998H15.0049C12.7957 15.9998 11.0049 14.2089 11.0049 11.9998C11.0049 9.79065 12.7957 7.99979 15.0049 7.99979ZM15.0049 10.9998V12.9998H18.0049V10.9998H15.0049Z">
                                </path>
                            </svg>

                            <span
                                class="flex-1 ml-3 text-left whitespace-nowrap font-semibold text-black dark:text-white"
                                sidebar-toggle-item>Pembayaran</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="black" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-penjualan" class="hidden">
                            <li class="py-1">
                                <a href="/pembayaran"
                                    class="flex items-center w-full p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Status Pembayaran</a>
                            </li>

                            {{-- <li>
                                <a href="/gambar/produk"
                                    class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">Gambar Produk</a>
                            </li> --}}


                        </ul>
                    </li>



                    <li class="">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="black"
                                class="flex-shrink-0 w-6 h-6 text-gray-400" viewBox="0 0 640 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                            </svg>

                            <span
                                class="flex-1 ml-3 text-left whitespace-nowrap text-black font-semibold dark:text-white"
                                sidebar-toggle-item>user</span>

                            <svg sidebar-toggle-item class="w-6 h-6" fill="black" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-layouts" class="hidden py-1 space-y-1">
                            <li>
                                <a href="/profile"
                                    class="flex items-center p-1 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Data
                                    user</a>
                            </li>

                        </ul>
                    </li>


                    <li class="py-2">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-text" data-collapse-toggle="dropdown-text">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                                fill="black">
                                <path
                                    d="M3 3C2.44772 3 2 3.44772 2 4V20C2 20.5523 2.44772 21 3 21H21C21.5523 21 22 20.5523 22 20V4C22 3.44772 21.5523 3 21 3H3ZM6 7H12V13H6V7ZM8 9V11H10V9H8ZM18 9H14V7H18V9ZM14 13V11H18V13H14ZM6 17V15L18 15V17L6 17Z">
                                </path>
                            </svg>

                            <span
                                class="flex-1 ml-3 text-left whitespace-nowrap text-black font-semibold dark:text-white"
                                sidebar-toggle-item>Berita</span>

                            <svg sidebar-toggle-item class="w-6 h-6" fill="black" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-text" class="hidden py-1 space-y-1">
                            <li>
                                <a href="/berita"
                                    class="flex items-center p-1 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Kelola
                                    berita </a>
                            </li>

                        </ul>
                    </li>


                    <li class="py-2">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-cek" data-collapse-toggle="dropdown-cek">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                viewBox="0 0 576 512" fill="black">
                                <path
                                    d="M12 10C14.2091 10 16 8.20914 16 6 16 3.79086 14.2091 2 12 2 9.79086 2 8 3.79086 8 6 8 8.20914 9.79086 10 12 10ZM5.5 13C6.88071 13 8 11.8807 8 10.5 8 9.11929 6.88071 8 5.5 8 4.11929 8 3 9.11929 3 10.5 3 11.8807 4.11929 13 5.5 13ZM21 10.5C21 11.8807 19.8807 13 18.5 13 17.1193 13 16 11.8807 16 10.5 16 9.11929 17.1193 8 18.5 8 19.8807 8 21 9.11929 21 10.5ZM12 11C14.7614 11 17 13.2386 17 16V22H7V16C7 13.2386 9.23858 11 12 11ZM5 15.9999C5 15.307 5.10067 14.6376 5.28818 14.0056L5.11864 14.0204C3.36503 14.2104 2 15.6958 2 17.4999V21.9999H5V15.9999ZM22 21.9999V17.4999C22 15.6378 20.5459 14.1153 18.7118 14.0056 18.8993 14.6376 19 15.307 19 15.9999V21.9999H22Z">
                                </path>
                            </svg>
                            <span
                                class="flex-1 ml-3 text-left whitespace-nowrap text-black font-semibold dark:text-white"
                                sidebar-toggle-item>Team</span>

                            <svg sidebar-toggle-item class="w-6 h-6" fill="black" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-cek" class="hidden py-1 space-y-1">
                            <li>
                                <a href="/team"
                                    class="flex items-center p-1 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Kelola
                                    Team </a>
                            </li>

                        </ul>
                    </li>


                    <li class="py-2">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-about" data-collapse-toggle="dropdown-about">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                viewBox="0 0 576 512" fill="black">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>

                            <span
                                class="flex-1 ml-3 text-left whitespace-nowrap text-black font-semibold dark:text-white"
                                sidebar-toggle-item>About</span>

                            <svg sidebar-toggle-item class="w-6 h-6" fill="black" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-about" class="hidden py-1 space-y-1">
                            <li>
                                <a href="/about"
                                    class="flex items-center p-1 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">About</a>
                            </li>

                        </ul>
                    </li>

                    <li class="py-2">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-control" data-collapse-toggle="dropdown-control">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6"
                                fill="black">
                                <path
                                    d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM6 19H18V9.15745L12 3.7029L6 9.15745V19ZM8.59117 13.8089C8.52937 13.5486 8.49666 13.277 8.49666 12.9978C8.49666 12.7186 8.52936 12.4471 8.59115 12.1868L7.60001 11.6145L8.59952 9.88333L9.59136 10.456C9.98427 10.0843 10.4633 9.80273 10.9954 9.64436V8.49998H12.9945V9.64436C13.5266 9.80272 14.0056 10.0843 14.3985 10.4559L15.3904 9.88323L16.39 11.6144L15.3987 12.1867C15.4605 12.447 15.4932 12.7186 15.4932 12.9978C15.4932 13.277 15.4605 13.5485 15.3988 13.8088L16.39 14.381L15.3905 16.1122L14.3986 15.5396C14.0057 15.9112 13.5267 16.1928 12.9946 16.3512V17.4956H10.9955V16.3512C10.4634 16.1929 9.98437 15.9114 9.59144 15.5397L8.59957 16.1123L7.60001 14.3811L8.59117 13.8089ZM11.995 14.4971C12.823 14.4971 13.4942 13.8258 13.4942 12.9978C13.4942 12.1698 12.823 11.4985 11.995 11.4985C11.1669 11.4985 10.4957 12.1698 10.4957 12.9978C10.4957 13.8258 11.1669 14.4971 11.995 14.4971Z">
                                </path>
                            </svg>

                            <span
                                class="flex-1 ml-3 text-left whitespace-nowrap text-black font-semibold dark:text-white"
                                sidebar-toggle-item>Manage</span>

                            <svg sidebar-toggle-item class="w-6 h-6" fill="black" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-control" class="hidden py-1 space-y-1">
                            <li>
                                <a href="/admin/dashboard"
                                    class="flex items-center p-1 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Manage
                                    dashboard</a>
                            </li>

                        </ul>
                    </li>




                </ul>
            </div>
        </div>

    </div>
</aside>

<div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
