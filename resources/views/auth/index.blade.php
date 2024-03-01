@extends('auth.layouts.main')

@section('container')
    <div class="flex flex-col items-center justify-center px-6 pt-2 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <a href="" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-8 dark:text-white">
            <img src="{{ asset('img/w.png') }}" class="w-48" alt="FlowBite Logo">
            <span class="my-2 mt-6 border text-black">BatikMe.id</span>
        </a>
        <!-- Card -->
        <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                Sign in to platform
            </h2>
            <form class="mt-8 space-y-6" action="/login" method="POST">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" name="email" id="email" placeholder="agungandhita@gmail.com" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('email') peer @enderror' value="{{ old('email') }} />
                    @error('email')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
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
                <div class="flex items-start">
                    <button type="submit"
                    class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login
                    to your account</button>
                    
                    <a href="#" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500 my-6">Lost
                        Password?</a>
                
               
                </div>

                <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    Not registered? <a href="/register" class="text-primary-700 hover:underline dark:text-primary-500">Create account</a>
                </div>
            </form>
        </div>
    </div>
@endsection
