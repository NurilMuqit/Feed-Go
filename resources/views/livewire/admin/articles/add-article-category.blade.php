<div>
@if ($open)
    <div class="fixed inset-0 z-50 flex items-center justify-center" wire:ignore.self>

        <div
            class="fixed inset-0 bg-black/40 dark:bg-black/60"
            wire:click="close"
        ></div>

        <div
            class="relative z-10 w-full max-w-md
                   rounded-2xl p-6
                   bg-white dark:bg-neutral-800
                   shadow-xl"
        >

            <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">
                Tambah Artikel Kategori
            </h2>

            <input
                wire:model.defer="category"
                class="w-full rounded-lg p-2
                       border border-gray-300 dark:border-neutral-600
                       bg-white dark:bg-neutral-700
                       text-gray-900 dark:text-white
                       focus:ring-2 focus:ring-green-500 focus:outline-none"
                placeholder="Nama produk kategori"
            />

            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div class="flex justify-end gap-3 mt-6">
                <button
                    wire:click="close"
                    class="px-4 py-2 rounded-lg
                           border border-gray-300 dark:border-neutral-600
                           text-gray-700 dark:text-gray-300
                           hover:bg-gray-100 dark:hover:bg-neutral-700"
                >
                    Batal
                </button>

                <button
                    wire:click="save"
                    class="px-4 py-2 rounded-lg
                           bg-green-600 hover:bg-green-700
                           text-white font-medium"
                >
                    Simpan
                </button>
            </div>

        </div>
    </div>
@endif
</div>
