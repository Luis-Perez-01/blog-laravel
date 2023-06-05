<x-app-layout>
  <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <h1 class="uppercase text-center text-4xl font-bold mb-4 text-white">Categoría: {{ $category->name }}</h1>

    @foreach ($posts as $post)
        <x-card-post :post="$post"></x-card-post>
    @endforeach

    <div class="mt-4">{{ $posts->links() }}</div>
  </div>
</x-app-layout>
