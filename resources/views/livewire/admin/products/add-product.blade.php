<div>
@if ($open)
<div class="fixed inset-0 z-50 flex items-center justify-center" wire:ignore.self>

    <div class="fixed inset-0 bg-black/40" wire:click="close"></div>

    <div class="relative z-10 bg-white dark:bg-neutral-800 rounded-2xl
                w-full max-w-5xl p-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="space-y-4">

                <div class="rounded-xl border bg-gray-50 p-4 flex justify-center">
                    @if ($product_image)
                        <img src="{{ $product_image->temporaryUrl() }}"
                             class="w-64 rounded-lg object-contain">
                    @else
                        <img src="{{ asset('images/Produk1.png') }}"
                             class="w-64 rounded-lg object-contain">
                    @endif
                </div>

                <label
                    for="imageUpload"
                    class="border-2 border-dashed rounded-xl p-6 cursor-pointer
                           hover:bg-neutral-700 transition
                           flex flex-col items-center justify-center space-y-2"
                >
                    <input type="file" wire:model="product_image" class="hidden" id="imageUpload">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="40" height="40" fill="none" viewBox="0 0 24 24"
                         class="text-blue-600">
                        <path d="M12 16V8M8 12h8"
                              stroke="currentColor" stroke-width="2"
                              stroke-linecap="round"/>
                    </svg>

                    <p class="text-sm font-medium">Produk Galeri</p>
                    <p class="text-xs text-gray-400">JPEG / PNG • Max 512 KB</p>
                </label>

                @error('product_image')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-4">

                <div>
                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
                    <input wire:model.defer="product_name"
                           class="w-full rounded-lg border p-2" placeholder="Ketik nama produk di sini">
                    @error('product_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300">
                        Kategori
                    </label>
                
                    <select
                        wire:model.defer="category_id"
                        class="w-full rounded-lg border p-2
                               bg-white dark:bg-neutral-700
                               border-gray-300 dark:border-neutral-600
                               text-gray-900 dark:text-white"
                    >
                        <option value="">Pilih kategori</option>
                
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->category }}
                            </option>
                        @endforeach
                    </select>
                
                    @error('category_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Harga</label>
                        <input type="number" wire:model.defer="product_price"
                               class="w-full rounded-lg border p-2" placeholder="Ketik harga di sini">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Stok</label>
                        <input type="number" wire:model.defer="product_stock"
                               class="w-full rounded-lg border p-2" placeholder="Ketik stok di sini">
                    </div>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                    <textarea wire:model.defer="product_description"
                              class="w-full rounded-lg border p-2 h-32" placeholder="Ketik deskripsi di sini"></textarea>
                </div>

                <div class="flex justify-end gap-3 pt-4">
                    <button wire:click="close"
                            class="px-4 py-2 rounded-lg bg-red-600 text-white">
                        KEMBALI
                    </button>
                    <button wire:click="save"
                            class="px-4 py-2 rounded-lg bg-yellow-400 font-semibold">
                        TAMBAHKAN
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
@endif
</div>
