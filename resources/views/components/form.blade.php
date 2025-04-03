<x-layout pageTitle="{{ $pageTitle }}">
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
            {{ $slot }}
        </div>
    </div>
</x-layout>