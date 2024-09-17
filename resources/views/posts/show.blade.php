<x-layout>
    <div class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 p-6 bg-slate-200 dark:bg-slate-900 rounded-lg shadow-md">
        <main>
            <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-gray-100">{{ $post->title }}</h1>
            <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $post->content }}</p>
            </div>

            <!-- Edit Button -->
            <div class="flex justify-end mt-4">
                <a href="{{ Route('posts.edit',$post->id)  }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit Content
                </a>
            </div>
            <div class="flex justify-end mt-4">
                <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Delete content
                    </button>
                </form>
            </div>
            
        </main>
    </div>
</x-layout>


