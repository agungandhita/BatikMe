<div class="w-full mx-auto bg-white border-b 2xl:max-w-7xl shadow-best mb-1">
    <div x-data="{ open: false }"
        class="relative flex flex-col w-full p-5 mx-auto bg-white md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between lg:justify-start">
            <a class="text-lg tracking-tight text-black focus:outline-none focus:ring lg:text-2xl" href="/">
                <span class="lg:text-lg focus:ring-0">
                    BatikMe.id
                </span>
            </a>
            <button @click="open = !open"
                class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col items-center flex-grow hidden md:pb-0 md:flex md:justify-end md:flex-row">
            <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600 lg:ml-auto" href="/home">
                Beranda
            </a>
            <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="/produks">
                Produk
            </a>
            <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="/tentang">
                Tentang
            </a>
            {{-- <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="/keranjang">
                Keranjang
            </a> --}}
            {{-- <a class="px-2 py-2 text-sm text-gray-500 lg:px-6 md:px-3 hover:text-blue-600" href="/galeri">
              Galeri
            </a> --}}

            @guest
                <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
                    <a href="/login">
                        <button
                            class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                            Sign in
                        </button>
                    </a>
                    <a href="/register">
                        <button
                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-white bg-black rounded-full group focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-gray-700 active:bg-gray-800 active:text-white focus-visible:outline-black">
                            Sign up
                        </button>
                    </a>
                </div>
            @else
                <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-white font-medium rounded-lg text-sm text-center inline-flex items-center "
                        type="button">
                        <img src="{{ asset('img/aa.jpeg') }}" alt="" class="w-10 rounded-full hidden md:block">
                        </button>

                        <div class="inline-flex items-center gap-x-4 list-none lg:ml-auto md:hidden">
                          <a href="#">
                              <button class="block mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                                  Profile
                              </button>
                          </a>
                          <form action="/logout" method="POST" class="inline">
                              @csrf
                              <button type="submit" class="block mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                                  Logout
                              </button>
                          </form>
                      </div>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-60 absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/user"
                                    class="block px-4 py-2 hover:bg-gray-100 text-black">Profile</a>
                            </li>
                            <form action="/logout" method="POST" class="inline">
                                @csrf
                                <button type="submit"
                                    class="block px-4 py-2 hover:bg-gray-100 text-black">
                                    Logout
                                </button>
                            </form>
                        </ul>
                    </div>


                </div>
            @endguest
        </nav>
    </div>
</div>
