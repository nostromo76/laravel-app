<x-layout>
    <x-header>Post Index Page</x-header>

    <section class="p-6 bg-slate-200 dark:bg-slate-900">
        <div class="flex justify-end mb-6">
            <a href="{{ Route('posts.create')  }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Post Content
            </a>
        </div>
    </section>

    <div class="max-w-7xl mx-auto p-6 bg-slate-200 dark:bg-slate-900 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-gray-100">Posts</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $post->content }}</p>
                    <a href="/posts/{{$post->id}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read More
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
