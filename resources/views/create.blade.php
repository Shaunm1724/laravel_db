<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Note</title>
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
        <div class="max-w-xl mx-auto">
            <div class="flex items-center mb-6">
                <a href="{{ url()->previous() }}" class="mr-4 text-cyan-400 hover:text-cyan-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </a>
                <h3 class="text-2xl font-bold text-cyan-400">Create Note</h3>
            </div>
            
            <div class="bg-dark-200 rounded-lg shadow-lg p-6">
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
            </div>
        </div>
    </div>
</body>
</html>