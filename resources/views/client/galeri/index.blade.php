@extends('client.layouts.two')

@section('container')

    
<div class="grid grid-cols-2 md:grid-cols-3 gap-4 container">
@foreach ($data as $item)
    <div>
        <img class="h-80 object-contain w-96 rounded-lg" src="{{ asset('produk/' . $item->image) }}" alt="">
    </div>
@endforeach
    
</div>

@endsection