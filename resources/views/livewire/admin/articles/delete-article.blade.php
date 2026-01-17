<div>
    @if($open)
    <div class="fixed inset-0 z-50 flex items-center justify-center">
    
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/40" wire:click="close"></div>
    
        <!-- Modal -->
        <div class="relative bg-white dark:bg-neutral-800 rounded-2xl p-6 w-full max-w-md z-10">
            <h2 class="text-lg font-semibold mb-2">
                Hapus Artikel
            </h2>
    
            <p class="text-sm text-gray-500 mb-6">
                Apakah kamu yakin ingin menghapus artikel ini?
                Tindakan ini tidak dapat dibatalkan.
            </p>
    
            <div class="flex justify-end gap-3">
                <button
                    wire:click="close"
                    class="px-4 py-2 rounded-lg border dark:border-neutral-600"
                >
                    Batal
                </button>
    
                <button
                    wire:click="delete"
                    class="px-4 py-2 rounded-lg bg-red-600 text-white"
                >
                    Hapus
                </button>
            </div>
        </div>
    </div>
    @endif

</div>
