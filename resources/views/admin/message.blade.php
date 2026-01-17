@section('title', 'Kotak Masuk')

<x-layouts.app :title="__('Kotak Masuk')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div>
            <h1 class="font-semibold text-3xl">Kotak Masuk FeedGo</h1>
            <span class="font-light">Kelola pesan pelanggan, pesanan, dan komplain</span>
        </div>
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border col-span-2 border-neutral-200 dark:border-neutral-700">

            </div>
        </div>
    </div>
</x-layouts.app>