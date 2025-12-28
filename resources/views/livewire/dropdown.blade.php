<div class="relative" wire:click.outside="close">
    
    <button
        wire:click="toggle"
        class="{{$buttonClass}}"
    ><span class="max-w-[120px] truncate">
         @if ($showGreeting)
            Hai,
        @endif
        {{ $label }}
        </span>
            <svg class="w-4 h-4 {{ $svgClass }} transition-transform {{ $open ? 'rotate-180' : '' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m19 9-7 7-7-7"/>
        </svg>
    </button>

    @if ($open)
        <div
            class="{{ $menuClass }}
                   {{ $align === 'left' ? 'left-0' : 'right-0' }}"
        >
            @foreach ($items as $item)
                @if (($item['action'] ?? null) === 'logout')
                    <button
                        wire:click="logout"
                        class="w-full text-left px-4 py-2 text-green-800 text-sm font-semibold hover:bg-yellow-300"
                    >
                        {{ $item['label'] }}
                    </button>
                @elseif (isset($item['route']))
                    <a
                        href="{{ route($item['route']) }}"
                        class="{{ $itemClass }}"
                    >
                        {{ $item['label'] }}
                    </a>
                @endif
            @endforeach
        </div>
    @endif
</div>