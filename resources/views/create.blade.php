<x-form pageTitle="Create Note">
    <form action="{{ route('add-note') }}" method="POST">
        @csrf
        @method('POST')
        
        <div class="mb-4">
            <label for="title" class="block text-gray-200 mb-2">Title</label>
            <input type="text" name="title" id="title" required="true"
                    class="w-full px-3 py-2 bg-dark-100 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white">
        </div>
        
        <div class="mb-6">
            <label for="content" class="block text-gray-200 mb-2">Content</label>
            <textarea name="content" id="content" rows="4"
                        class="w-full px-3 py-2 bg-dark-100 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-white"></textarea>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" 
                    class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-md transition-colors flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Create Note
            </button>
        </div>
    </form>
</x-form>