<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            100: '#374151',
                            200: '#1F2937',
                            300: '#111827',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-300 text-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <h3 class="text-2xl font-bold mb-6 text-cyan-400 border-b border-gray-700 pb-2">Notes</h3>
            
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
                                    <a href="{{ route('update-route', ['id' => $note->id]) }}" 
                                       class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="{{ route('delete-note', ['id' => $note->id]) }}" 
                                       class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        Delete
                                    </a>
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
    </div>
</body>
</html>