<x-layout pageTitle="Notes App">
    <div class="max-w-3xl mx-auto">
        @if (session('status'))
        <div id="status-message" class="bg-green-600 text-white px-4 py-3 rounded-lg mb-4 flex items-center shadow-lg transition-opacity">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            {{ session('status') }}
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const statusMessage = document.getElementById('status-message');
                if (statusMessage) {
                    setTimeout(function() {
                        statusMessage.style.opacity = '0';
                        setTimeout(function() {
                            statusMessage.style.display = 'none';
                        }, 300);
                    }, 3000);
                }
            });
        </script>
        @endif
        <div class="flex flex-col md:flex-row md:items-center justify-between border-b border-gray-700 pb-4 mb-6 gap-4">
            <h3 class="text-2xl font-bold text-cyan-400"><a href="{{ route('index') }}">Notes</a></h3>
            <form action="{{ route('search-note') }}" method="GET" class="w-full md:w-auto">
                <div class="relative">
                    <input 
                        type="text" 
                        name="query" 
                        placeholder="Search notes..." 
                        class="w-full md:w-64 lg:w-80 bg-dark-300 text-white border border-gray-700 rounded-md px-4 py-2 pl-10 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent"
                        @isset($query)
                        value="{{ $query }}"
                        @endisset
                        
                    >
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </form>
        </div>
        
        @if(count($notes) > 0)
            <div class="space-y-4">
                @foreach ($notes as $note)
                    <div class="bg-dark-200 rounded-lg shadow-lg p-4 transition-all hover:shadow-xl">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                            <div class="mb-2 sm:mb-0">
                                <h4 class="font-semibold text-lg text-white">{{ $note->title }}</h4>
                                <p class="text-gray-300">{{ $note->content }}</p>
                            </div>
                            <div class="flex space-x-2 mt-2 sm:mt-0">
                                <form action="{{ route('update-route', ['id' => $note->id]) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" 
                                        class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                        Edit
                                    </button>
                                </form>
                                <form action="{{ route('delete-note', ['id' => $note->id]) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" 
                                        class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-dark-200 rounded-lg p-4 text-center">
                <p class="text-gray-400">No notes yet. Create your first note!</p>
            </div>
        @endif
        <div class="mt-5">
            {{ $notes->onEachSide(1)->links() }}
        </div>    
        
        <div class="mt-8 text-center">
            <a href="{{ route('add-note-route') }}" 
                class="inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-md transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Create New Note
            </a>
        </div>
    </div>
</x-layout>