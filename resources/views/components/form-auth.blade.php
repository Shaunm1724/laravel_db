<x-layout pageTitle="{{ $pageTitle }}" :navbar="false">
    <div class="max-w-xl mx-auto">
        <div class="flex items-center mb-6">
            <h3 class="text-2xl font-bold text-cyan-400">{{ $pageTitle }}</h3>
        </div>
        
        <div class="bg-dark-200 rounded-lg shadow-lg p-6">
            {{ $slot }}
        </div>
    </div>
</x-layout>