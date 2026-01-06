<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main class="flex-1 overflow-y-auto">
        @if(auth()->user()->role === 'admin')
        <x-admin-header />
        @endif
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
