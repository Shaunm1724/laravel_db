<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
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
    <nav class="bg-dark-200 border-b border-gray-700">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="/" class="text-white font-bold text-xl">{{ config('app.name', 'Laravel') }}</a>
                </div>
                
                {{-- <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="text-gray-300 hover:bg-dark-100 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    </div>
                </div> --}}
                
                <div>
                    @guest
                        <div class="flex space-x-2">
                            <a href="{{ route('login') }}" class="text-gray-300 hover:bg-dark-100 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                            <a href="{{ route('register') }}" class="text-gray-300 hover:bg-dark-100 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                        </div>
                    @else
                    <div class="relative">
                        <button onclick="toggleDropdown()" class="flex items-center text-sm font-medium text-gray-300 hover:text-white focus:outline-none px-3 py-2 rounded-md">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="userDropdown" class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-dark-100 ring-1 ring-black ring-opacity-5 z-10 hidden">
                            <div class="py-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-dark-200 hover:text-white">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <div class="container mx-auto px-4 py-8">
        {{ $slot }}
    </div>
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('userDropdown');
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        }

        window.addEventListener('click', function(e) {
            const dropdown = document.getElementById('userDropdown');
            const button = document.querySelector('button[onclick="toggleDropdown()"]');
            
            if (dropdown && !dropdown.contains(e.target) && !button.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</body>