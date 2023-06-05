<x-app-layout>
  <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($posts as $post)
        <div class="overflow-hidden @if ($loop->first) md:col-span-2 @endif rounded-lg">
          <article
            class="w-full h-80 bg-cover bg-center hover:scale-105 origin-bottom transition duration-700"
            style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }} @else {{ asset('img/page_not_found.svg') }} @endif)">
            <div class="w-full h-full px-8 flex flex-col justify-center">
              <div>
                @foreach ($post->tags as $tag)
                  <a class="inline-block px-3 h-6 bg-{{ $tag->color }}-400 text-white rounded-full"
                    href="{{ route('posts.tag', $tag) }}">#{{ $tag->name }}</a>
                @endforeach
              </div>
              <a href="{{ route('posts.show', $post) }}">
              
                <h1 class="text-4xl text-white leading-8 font-bold my-2">
                  {{ $post->name }}
                </h1>
                <div class="text-gray-300">
                  <br> {!! $post->extract !!}
                </div>
              </a>
            </div>
          </article>
        </div>
      @endforeach
    </div>

    <div class="mt-4">
      {{ $posts->links() }}
    </div>

  </div>
</x-app-layout>
