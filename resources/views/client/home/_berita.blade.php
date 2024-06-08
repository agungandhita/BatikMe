<div class="p-6 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 text-left">
    <!--Card 1-->
    @foreach ($berita as $item)
    
    {{-- @dd($cek) --}}
    

    <a href="/blog/{{ $item->berita_id }}">
    <div class="rounded overflow-hidden shadow-lg">
      <img class="w-full h-60 object-contain" src="{{ asset('image/' . $item->image) }}" alt="Mountain">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $item->judul }}</div>
        <p class="text-gray-700 text-base line-clamp-1">
          {{-- {!! $item->isi !!} --}}
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
      </div>
    </div>
  </a>
    @endforeach
    <!--Card 2-->
    {{-- <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="{{ asset ('img/cek.jpg') }}" alt="Mountain">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Mountain</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
      </div>

    <!--Card 3-->
    <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="{{ asset ('img/cek.jpg') }}" alt="Mountain">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Mountain</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
      </div>
  </div> --}}
</div>
