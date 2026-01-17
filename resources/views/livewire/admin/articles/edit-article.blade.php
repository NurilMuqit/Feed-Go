<div>
@if($open)
<div class="fixed inset-0 z-50 flex items-center justify-center" wire:ignore.self>

    <div class="fixed inset-0 bg-black/40" wire:click="close"></div>

    <div class="relative z-10 bg-white dark:bg-neutral-800 rounded-2xl w-full max-w-5xl p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="rounded-xl border bg-gray-50 p-4 flex justify-center">
                    @if ($thumbnail)
                        <img src="{{ $thumbnail->temporaryUrl() }}"
                             class="w-64 rounded-lg object-contain">
                    @elseif ($old_thumbnail)
                        <img src="{{ asset('storage/'.$old_thumbnail) }}"
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
                    <input type="file" wire:model="thumbnail" class="hidden" id="imageUpload">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="40" height="40" fill="none" viewBox="0 0 24 24"
                         class="text-blue-600">
                        <path d="M12 16V8M8 12h8"
                              stroke="currentColor" stroke-width="2"
                              stroke-linecap="round"/>
                    </svg>

                    <p class="text-sm font-medium">Artikel Galeri</p>
                    <p class="text-xs text-gray-400">JPEG / PNG • Max 512 KB</p>
                </label>

                @error('thumbnail')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-4">

                <div>
                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Judul Artikel</label>
                    <input wire:model.defer="title"
                           class="w-full rounded-lg border p-2" placeholder="Ketik judul artikel di sini">
                    @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
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
                
                <div>
                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300">
                        Status
                    </label>
                
                    <select
                        wire:model.defer="status"
                        class="w-full rounded-lg border p-2
                               bg-white dark:bg-neutral-700
                               border-gray-300 dark:border-neutral-600
                               text-gray-900 dark:text-white"
                    >
                        <option value="">Pilih status</option>
                
                        @foreach (['draft', 'published'] as $status)
                            <option value="{{ $status }}">
                                {{ ucfirst($status) }}
                            </option>
                        @endforeach
                    </select>
                
                    @error('status')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div wire:ignore>
                    <label class="text-sm font-medium text-gray-700 dark:text-gray-300">
                        Deskripsi Artikel
                    </label>
                    <input id="content" type="hidden" name="content" wire:model.defer="content">
                    <trix-editor input="content"
                        class="trix-content mt-1 border border-biru rounded-md h-48 overflow-y-auto"></trix-editor>
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
<script>
document.addEventListener('trix-load', function (e) {
    const editor = document.querySelector('trix-editor')
    if (editor) {
        editor.editor.loadHTML(e.detail.content ?? '')
    }
})
</script>
</div>
