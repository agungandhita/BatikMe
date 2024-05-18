@extends('client.layouts.two')

@section('container')
    <!-- Blog post with featured image -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($data as $item)
            <div class="max-w-3xl mx-auto">
                <!-- Blog post header -->
                <div class="py-8">

                    <h1 class="text-3xl font-bold mb-2">{{ $item->judul }}</h1>
                    <p class="text-gray-500 text-sm">Published on <time>{{ $item->created_at->format('d-m-Y') }}</time></p>
                </div>

                <!-- Featured image -->
                <img src="{{ asset('image/' . $item->image) }}"
                    class="w-full h-auto mb-8">

                <!-- Blog post content -->
                <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                    <p>{!! $item->isi !!}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
