@extends('auth.layouts.main')

@section('container')
	<!-- Container -->
	<div class="mx-auto">
		<div class="flex justify-center my-4 ">
			<!-- Row -->
			<div class="w-full mt-8 xl:w-3/4 lg:w-11/12 flex shadow-best">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 object-cover rounded-l-lg">
                    <img src="{{ asset('img/k.jpg') }}" alt="" class="h-full rounded-l-xl">
                </div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 py-2 rounded-lg lg:rounded-l-none border">
					<h3 class="py-2 text-2xl text-center text-gray-800 dark:text-white">Buat Akun</h3>
					<form class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded"  action="/register/akun" method="POST">
                        @csrf
						<div class="mb-4">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="firstName">
                                    Username
                                </label>
								<input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    type="text" placeholder='Andhi Satria' name="username"
                                />
							</div>
						</div>
						<div class="mb-2">
							<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                Email
                            </label>
							<input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                type="email" name="email" placeholder="example@gmail.com"
                            />
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">
                                    Password
                                </label>
								<input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    type="password" name="password"
                                    placeholder="******************"
                                />
								{{-- <p class="text-xs italic text-red-500">Please choose a password.</p> --}}
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="c_password">
                                    Confirm Password
                                </label>
								<input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    type="password" name="password_confirmation"
                                    placeholder="******************"
                                />
							</div>
						</div>
						<div class="mb-1 text-center">
							<button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Register Account
                            </button>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800"
								href="#">
								Forgot Password?
							</a>
						</div>
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800"
								href="/login">
								Already have an account? Login!
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
