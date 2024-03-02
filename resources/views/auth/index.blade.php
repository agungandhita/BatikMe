@extends('auth.layouts.main')

@section('container')

    <div class="flex flex-col items-center justify-center mx-auto md:h-screen lg:py-0 border py-20">
        <div
            class="w-full lg:w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Login
                </h1>
                <form class="mt-8 space-y-6" action="/login" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="mb-2 text-xs md:text-lg font-semibold text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" name="email" id="email" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('email') peer @enderror' value="{{ old('email') }} />
                        @error('email')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Your
                            password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                        @error('password')
            peer
          @enderror'
                    value="{{ old('password') }}" />
                        @error('password')
                            <p class="peer-invalid:visible text-red-700 font-light">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>
                    <div class="flex items-center">

                        <a href="#"
                            class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Lupa Password
                            ?</a>
                    </div>
                    <button type="submit"
                        class="  md:w-full  text-white md:text-xl bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
                    <p class="text-xs md:text-sm font-light text-gray-500 dark:text-gray-400">
                        Belum Punya Akun ? <a href="/register"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
