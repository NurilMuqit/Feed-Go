@if ($paginator->hasPages())
    <nav class="flex items-center justify-between w-full mt-12">

        @if ($paginator->onFirstPage())
            <button class="px-5 py-2 rounded-full border border-gray-300 disabled text-gray-400 text-sm">
                ◀ Sebelumnya
            </button>
        @else
            <button
                wire:click="previousPage"
                class="px-5 py-2 rounded-full border border-[#D9D9D9] text-[#2D5016] hover:bg-[#E6E6E6] transition text-sm">
                ◀ Sebelumnya
            </button>
        @endif

        <div class="hidden sm:flex items-center gap-6 text-sm font-medium text-[#2D5016]">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="text-gray-400">…</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="w-10 h-10 flex items-center justify-center bg-[#D2EAC4] rounded-full font-semibold text-[#2D5016]">
                                {{ $page }}
                            </span>
                        @else
                            <button
                                wire:click="gotoPage({{ $page }})"
                                class="hover:underline">
                                {{ $page }}
                            </button>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        @if ($paginator->hasMorePages())
            <button
                wire:click="nextPage"
                class="px-5 py-2 rounded-full border border-[#D9D9D9] text-[#2D5016] hover:bg-[#E6E6E6] transition text-sm">
                Selanjutnya ▶
            </button>
        @else
            <button class="px-5 py-2 rounded-full border border-gray-300 disabled text-gray-400 text-sm">
                Selanjutnya ▶
            </button>
        @endif

    </nav>
@endif