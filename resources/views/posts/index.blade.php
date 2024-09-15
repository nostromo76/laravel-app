<x-layout>
    <x-header>Post index Page</x-header>

    <div class="max-w-2xl mx-auto p-4 bg-slate-200 dark:bg-slate-900 rounded-lg">
        <h1 class="text-xl font-semibold mb-4">Posts</h1>
        <ul class="list-disc list-inside">
            @foreach ($posts as $post)
                <li class="mb-4 p-4 bg-white rounded shadow">
                    <h2 class="text-lg font-bold">{{ $post->title }}</h2>
                    <p class="text-gray-700">{{ $post->content }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>