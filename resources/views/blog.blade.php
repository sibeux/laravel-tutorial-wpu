<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Your content -->
    @foreach ($posts as $post)
        <article class="py-8 max-w-3xl border-b border-gray-300">
            <a href="/blog/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-thight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div>
                <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
            </div class="text-base text-gray-500">
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 150) }}
            </p>
            <a href="/blog/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>
