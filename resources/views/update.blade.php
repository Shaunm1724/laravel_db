<x-form pageTitle="Update Note">
    <form action="{{ route('update-note', ['id' => $id]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="title" class="block text-gray-200 mb-2">Title</label>
            <input type="text" name="title" id="title" required="true" value="{{ $title }}"
                    class="w-full px-3 py-2 bg-dark-100 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white">
        </div>
        
        <div class="mb-6">
            <label for="content" class="block text-gray-200 mb-2">Content</label>
            <textarea name="content" id="content" rows="4"
                        class="w-full px-3 py-2 bg-dark-100 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white">{{ $content }}</textarea>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" 
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition-colors flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                Update Note
            </button>
        </div>
    </form>
</x-form>