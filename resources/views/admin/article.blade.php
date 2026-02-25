@section('title', 'Artikel')

<x-layouts.app :title="__('Artikel')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div>
            <h1 class="font-semibold text-3xl">Artikel FeedGo</h1>
            <span class="font-light">Kelola artikel edukasi, tips, dan informasi seputar pakan ternak</span>
        </div>
        <div class="relative flex flex-col rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="shrink-0 rounded-t-xl bg-white dark:bg-neutral-700 shadow-sm
                       p-4 flex flex-col gap-4
                       md:flex-row md:items-center md:justify-between">

                <div class="flex flex-col gap-4 md:flex-row md:items-center md:gap-4">
                
                    <div class="flex items-center gap-4">
                        <input
                            type="checkbox"
                            class="w-5 h-5 rounded border-gray-300 text-green-600 focus:ring-green-500"
                        />
                    
                        <div class="flex items-center gap-2 font-medium">
                            <span class="text-sm text-black dark:text-white">Daftar Artikel</span>
                            <span class="text-xs text-gray-400">{{ $articles->count() }} artikel</span>
                        </div>
                    </div>
                
                    <div class="relative w-full md:w-60">
                        <svg
                            class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35z"/>
                        </svg>
                    
                        <input
                            type="text"
                            placeholder="Cari Artikel"
                            class="w-full pl-10 pr-4 py-2 text-sm rounded-full
                                   bg-gray-100 dark:bg-neutral-600
                                   focus:bg-white dark:focus:bg-neutral-500
                                   border border-transparent focus:border-green-500 focus:outline-none"
                        />
                    </div>
                </div>
            
                <div class="flex flex-wrap items-center gap-3 justify-end">
                    
                    <button
                        onclick="window.dispatchEvent(new CustomEvent('open-add-article-category'))"
                        class="flex items-center gap-2 text-sm bg-green-600 hover:bg-green-700
                               text-white px-4 py-2 rounded-xl font-medium transition"
                    >
                        <span class="text-xl leading-none">+</span>
                        <span class="hidden sm:inline">Tambahkan Kategori</span>
                    </button>
                    <button
                        onclick="window.dispatchEvent(new CustomEvent('open-add-article'))"
                        class="flex items-center gap-2 text-sm bg-green-600 hover:bg-green-700
                               text-white px-4 py-2 rounded-xl font-medium transition"
                    >
                        <span class="text-xl leading-none">+</span>
                        <span class="hidden sm:inline">Tambahkan Artikel</span>
                    </button>
                
                </div>
            
            </div>
            <livewire:admin.articles.article-table />
            <livewire:admin.articles.add-article />
            <livewire:admin.articles.add-article-category />
            <livewire:admin.articles.edit-article />
            <livewire:admin.articles.delete-article />
        </div>
    </div>

<script>
document.addEventListener('trix-change', function (event) {
    Livewire.dispatch('trix-updated', event.target.value)
})
</script>

</x-layouts.app>
