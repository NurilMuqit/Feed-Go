<div class="overflow-x-auto bg-white dark:bg-neutral-800 rounded-xl shadow-sm">

    <table class="w-full text-sm border-separate border-spacing-y-2">
        <thead class="text-gray-400">
            <tr>
                <th class="px-4 py-3"><input type="checkbox"></th>
                <th class="px-4 py-3">No.</th>
                <th class="px-4 py-3">Nama Produk</th>
                <th class="px-4 py-3">Kategori</th>
                <th class="px-4 py-3">Harga</th>
                <th class="px-4 py-3">Stok</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Update terakhir</th>
                <th class="px-4 py-3">Deskripsi</th>
                <th class="px-4 py-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody class="text-center">
            @forelse ($this->products as $index => $product)
                <tr class="bg-white dark:bg-neutral-700 rounded-xl shadow-sm">

                    <td class="px-4 py-4">
                        <input type="checkbox" class="rounded border-gray-300">
                    </td>

                    <td class="px-4 py-4 font-medium">
                        {{ ($this->products->currentPage() - 1) * $this->products->perPage() + $index + 1 }}
                    </td>

                    <td class="px-4 py-4">
                        <div class="flex items-center gap-3">
                            <img
                                loading="lazy"
                                src="{{ asset('storage/'.$product->product_image) }}"
                                class="w-10 h-14 object-cover rounded-md"
                            >
                            <span class="font-semibold">
                                {{ $product->product_name }}
                            </span>
                        </div>
                    </td>

                    <td class="px-4 py-4">
                        {{ $product->category->category ?? '-' }}
                    </td>

                    <td class="px-4 py-4 font-semibold">
                        Rp {{ number_format($product->product_price, 0, ',', '.') }}
                    </td>

                    <td class="px-4 py-4">
                        {{ $product->product_stock }}
                    </td>

                    <td class="px-4 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold
                            {{ $product->product_status === 'available'
                                ? 'bg-green-100 text-green-700'
                                : 'bg-red-100 text-red-700' }}">
                            {{ $product->product_status === 'available'
                                ? 'Tersedia'
                                : 'Tidak Tersedia' }}
                        </span>
                    </td>

                    <td class="px-4 py-4 text-gray-500">
                        {{ $product->updated_at->format('d/m/Y') }}
                    </td>

                    <td class="px-4 py-4 max-w-xs truncate text-gray-500">
                        {{ $product->product_description }}
                    </td>

                    <td class="px-4 py-4">
                        <div class="flex justify-center gap-2">
                            <button
                                wire:click="$dispatch('open-edit-product', { id: {{ $product->id }} })"
                                class="p-2 rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200">
                                <x-svg.edit-icon/>
                            </button>

                            <button
                                wire:click="$dispatch('open-delete-product', { id: {{ $product->id }} })"
                                class="p-2 rounded-lg bg-red-100 text-red-600 hover:bg-red-200">
                                <x-svg.delete-icon/>
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center py-10 text-gray-400">
                        Produk belum tersedia
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4 px-4">
    {{ $this->products->links() }}
    </div>
</div>
