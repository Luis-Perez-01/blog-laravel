<x-app-layout>

  <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-bold text-gray-300">{{ $post->name }}</h1>

    <div class="text-lg text-gray-400 mb-2">
      {!! $post->extract !!}
    </div>

    <div class="pt-4 pb-2">
      @foreach ($post->tags as $tag)
        <a href="{{ route('posts.tag', $tag) }}"
          class="inline-block bg-{{ $tag->color }}-400 rounded-lg px-3 py-1 text-sm text-gray-200 mr-2">#{{ $tag->name }}</a>
      @endforeach
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <div class="lg:col-span-2">
        <figure class="rounded-lg overflow-hidden">
          @if ($post->image)
            <img src="{{ Storage::url($post->image->url) }}"
              class="w-full h-80 object-cover object-center rounded-lg mb-4 hover:scale-105 origin-bottom transition duration-700"
              alt="">
          @else
            <img class="w-full h-80 object-cover object-center mb-4"
              src="https://cdn.pixabay.com/photo/2023/04/05/00/44/big-sur-7900408_1280.jpg" alt="">
          @endif
        </figure>

        <div class="text-base text-gray-400">{!! $post->body !!}</div>
      </div>
      <aside>
        <h1 class="text-2xl font-bold text-gray-300 mb-4">Artículos relacionados en {{ $post->category->name }}</h1>

        <ul>
          @foreach ($similares as $similar)
            <div class="overflow-hidden">
              <li class="mb-4 hover:scale-105 origin-top-left transition duration-300">
                <a class="flex" href="{{ route('posts.show', $similar) }}">
                  @if ($similar->image)
                    <img
                      class="flex-initial h-20 w-36 object-cover object-center mb-4 rounded-lg"
                      src="{{ Storage::url($similar->image->url) }}" alt="">
                  @else
                    <img
                      class="w-full h-80 object-cover object-center mb-4 rounded-lg"
                      src="{{ asset('img/page_not_found.svg') }}" alt="">
                  @endif
                  <span class="flex-1 ml-2 text-gray-400">{{ $similar->name }}</span>
                </a>
              </li>
            </div>
          @endforeach
        </ul>
      </aside>
    </div>
  </div>

</x-app-layout>
