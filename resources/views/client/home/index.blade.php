@extends('client.layouts.main')



@section('container')
    <div class="text-center mt-6">
        <h1 class="font-bold text-md md:text-3xl text-black px-4">Cari Sesuai Keinginan Anda</h1>
        <h5 class="text-xs md:text-xl font-serif text-black px-4">disini kami menyediakan berbagai macam kategori seperti di
            bawah
            ini</h5>


        <div class="grid grid-cols-2 md:grid md:grid-cols-4 w-full gap-x-5 pt-2 md:pl-8 justify-center items-center px-4 ">

            {{-- @dd($produk) --}}
            @foreach ($produk as $key => $cek)
                @php
                    $image = count($cek->produk) > 0 ? $cek->produk[0]->produkImage[0]->image : 'aa.jpeg';
                @endphp



                <a href="/produks?kategori={{ $cek->kategori_id }}" class="h-60 border rounded-lg mt-6 ">
                    <div class="transition-transform duration-300 ease-in-out transform hover:scale-105 h-60 ">
                        <img class="h-60 md:h-70 md:mb-5 object-cover rounded-lg" src="{{ asset('produk/' . $image) }}"
                            alt="" />
                        <p class="text-md font-bold md:text-xl text-gray-700">{{ $cek->nama_kategori }}
                        </p>
                    </div>
                </a>
            @endforeach

        </div>

        <div id="animated-segment" class="mt-16 md:mt-24">
            <P class="text-black font-semibold text-xl md:text-3xl">
                Rekomendasi untuk anda
            </P>
        </div>

        

        <div class="mt-2">
            @include('client.home._produkRekomendasi')
        </div>


        <div id="animated-segment" class="mt-4 md:mt-20 mb-2">
            <P class="text-black font-semibold text-xl md:text-3xl ">
                Artikel
            </P>
        </div>

        <div class="md:flex gap-x-4">

            @include('client.home._berita')

        </div>


    </div>
@endsection
