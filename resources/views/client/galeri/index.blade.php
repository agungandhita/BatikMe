@extends('client.layouts.two')

@section('container')
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
            @foreach ($data as $item)
                <img class="w-full h-auto object-cover"src="{{ asset('produk/' . $item->image) }}" alt="Image Description">
            @endforeach
        </div>
    </div>
@endsection
