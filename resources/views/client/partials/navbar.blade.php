<nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
    <div
        class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
        <div class="flex items-center justify-start w-1/4 h-full pr-4">
            <a href="#_" class="flex items-center py-4 md:space-x-2 font-extrabold md:py-0">
                <img src="{{ asset('img/w.png') }}" class="flex items-center hidden md:block justify-center w-30 h-8 object-contain text-white rounded-full">
                <span class="text-gray-900">BatikMe.id</span>
            </a>
        </div>
        <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex"
            :class="{ 'flex fixed': showMenu, 'hidden': !showMenu }">
            <div
                class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                <a href="#_"
                    class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">
                    <svg class="w-auto h-5" viewBox="0 0 355 99" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path
                                d="M119.1 87V66.4h19.8c34.3 0 34.2-49.5 0-49.5-11 0-22 .1-33 .1v70h13.2zm19.8-32.7h-19.8V29.5h19.8c16.8 0 16.9 24.8 0 24.8zm32.6-30.5c0 9.5 14.4 9.5 14.4 0s-14.4-9.5-14.4 0zM184.8 87V37.5h-12.2V87h12.2zm22.8 0V61.8c0-7.5 5.1-13.8 12.6-13.8 7.8 0 11.9 5.7 11.9 13.2V87h12.2V61.1c0-15.5-9.3-24.2-20.9-24.2-6.2 0-11.2 2.5-16.2 7.4l-.8-6.7h-10.9V87h12.1zm72.1 1.3c7.5 0 16-2.6 21.2-8l-7.8-7.7c-2.8 2.9-8.7 4.6-13.2 4.6-8.6 0-13.9-4.4-14.7-10.5h38.5c1.9-20.3-8.4-30.5-24.9-30.5-16 0-26.2 10.8-26.2 25.8 0 15.8 10.1 26.3 27.1 26.3zM292 56.6h-26.6c1.8-6.4 7.2-9.6 13.8-9.6 7 0 12 3.2 12.8 9.6zm41.2 32.1c14.1 0 21.2-7.5 21.2-16.2 0-13.1-11.8-15.2-21.1-15.8-6.3-.4-9.2-2.2-9.2-5.4 0-3.1 3.2-4.9 9-4.9 4.7 0 8.7 1.1 12.2 4.4l6.8-8c-5.7-5-11.5-6.5-19.2-6.5-9 0-20.8 4-20.8 15.4 0 11.2 11.1 14.6 20.4 15.3 7 .4 9.8 1.8 9.8 5.2 0 3.6-4.3 6-8.9 5.9-5.5-.1-13.5-3-17-6.9l-6 8.7c7.2 7.5 15 8.8 22.8 8.8z"
                                id="a"></path>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <g fill="currentColor">
                                <path d="M19.742 49h28.516L68 83H0l19.742-34z"></path>
                                <path d="M26 69h14v30H26V69zM4 50L33.127 0 63 50H4z"></path>
                            </g>
                            <g fill-rule="nonzero">
                                <use fill="currentColor" xlink:href="#a"></use>
                                <use fill="currentColor" xlink:href="#a"></use>
                            </g>
                        </g>
                    </svg>
                </a>
                <div
                    class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center capitalize">
                    <a href="/home"
                        class="transform inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-black md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Beranda</a>
                    <a href="/produks"
                        class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">produk</a>
                    <a href="/tentang"
                        class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">tentang</a>
                    <a href="/galeri"
                        class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-black lg:mx-3 md:text-center">galeri</a>

                </div>
                @guest
                    <div
                        class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">

                        <a href="/login"
                            class="w-full px-6 py-2 mr-0 text-gray-700 md:px-3 md:mr-2 lg:mr-3 md:w-auto">login</a>
                        <a href="/register"
                            class="inline-flex items-center w-full px-5 px-6 py-3 text-sm font-medium leading-4 text-white bg-gray-900 md:w-auto md:rounded-full hover:bg-gray-800 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-800">register</a>
                    </div>
                @else
                    <div class="inline-flex items-center gap-2 list-none lg:ml-auto mr-8">
                        <div class="hidden md:block">
                            <div class="flex  space-x-5 items-center ">
                                {{-- tampilan dekstop --}}
                                {{-- <a href="" class="text-black font-bold  items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M17 17h-11v-14h-2" />
                                        <path d="M6 5l14 1l-1 7h-13" />
                                    </svg>
                                </a> --}}
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                    class="text-white font-medium rounded-lg text-sm inline-flex items-center "
                                    type="button">
                                    <img src="{{ asset('img/aa.jpeg') }}" alt=""
                                        class="w-10 rounded-full hidden md:block">
                                </button>
                            </div>
                        </div>
                        <div class="items-center gap-y-3  ml-6 mb-4 border gap-x-4 list-none lg:ml-auto md:hidden uppercase">
                            <a href="/user">
                                <button
                                    class="block uppercase text-sm text-black md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                                    profile
                                </button>
                            </a>
                            <form action="/logout" method="POST" class="inline">
                                @csrf
                                <button type="submit"
                                    class="block uppercase text-sm text-black md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                                    Logout
                                </button>
                            </form>
                        </div>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-60 absolute hidden border border-red-600 bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="/user" class="block px-4 py-2 hover:bg-gray-100 text-black">Profile</a>
                                </li>
                                <form action="/logout" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 hover:bg-gray-100 text-black">
                                        Logout
                                    </button>
                                </form>
                            </ul>
                        </div>


                    </div>
                @endguest
            </div>
        </div>
        <div @click="showMenu = !showMenu"
            class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
            <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </div>
    </div>
</nav>
