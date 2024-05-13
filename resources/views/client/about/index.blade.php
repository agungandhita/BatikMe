@extends('client.layouts.two')

@section('container')
    <div class="py-14 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between">

            <div class="sm:w-6/12 order-last sm:order-first">
                <ul class="grid grid-cols-2 col-gap-5 row-gap-5 md:col-gap-10 md:row-gap-10">
                    @foreach ($team as $item)
                        
                    <li class="bg-gray-100 p-5 py-10 text-center">
                        <div class="flex flex-col items-center">
                            <div class="flex-shrink-0">
                                <a href="#"><img class="mb-3 rounded-full mx-auto h-24 w-24 object-cover"
                                    src="{{ asset('image/' . $item->image) }}"></a>
                                </div>
                                <div class="text-center">
                                    <h4
                                    class="text-lg leading-6 font-semibold text-gray-900 transition duration-500 ease-in-out">
                                    <a href="#" class="hover:text-indigo-600 transition duration-500 ease-in-out">{{ $item->nama }}</a>
                                    </h4>
                                    <p class="text-sm leading-6 text-gray-500 uppercase">
                                        {{ $item->jabatan }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                </ul>
            </div>

            <div class="text-left mb-10 sm:ml-10 md:ml-24 sm:w-6/12 order-first sm:order-last">
                <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                    Jajaran
                </p>
                <h3 class="text-3xl sm:text-5xl leading-normal font-extrabold tracking-tight text-gray-900">
                    Meet Our <span class="text-indigo-600">Team</span>
                </h3>
                <p class="mt-4 text-md leading-7 text-gray-500 font-light">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque,
                    iste dolor cupiditate blanditiis ratione.
                    <br><br> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>

            </div>

        </div>
    </div>

    <section class="bg-gray-100">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                @foreach ($data as $item)
                    <div class="max-w-lg">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">About Us</h2>
                        <p class="mt-4 text-gray-600 text-lg">{{ $item->isi }}</p>
                        <div class="mt-8">
                            <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Learn more about us
                                <span class="ml-2">&#8594;</span></a>
                        </div>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <img src="{{ asset('image/' . $item->image) }}" alt="About Us Image"
                            class="object-cover rounded-lg shadow-md">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
