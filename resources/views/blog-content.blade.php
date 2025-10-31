<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Your content -->
    <article class="py-8 max-w-3xl border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-thight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div>
            <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div class="text-base text-gray-500">
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back</a>
    </article>

</x-layout>
