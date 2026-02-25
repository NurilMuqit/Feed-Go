<div>

    <div class="mb-6">
        <h2 class="text-[#2E7D32] font-semibold text-2xl mb-2">
          Produk Pakan Berbasis Riset dari Mitra Lokal
        </h2>
        <p class="text-[#0B460E] text-sm">
          Temukan produk pakan berkualitas premium berbasis riset dari mitra lokal terverifikasi.
        </p>
    </div>

    <div class="flex flex-wrap gap-4 items-center">
      <div class="flex item-center gap-2 flex-1 border-3 rounded-lg px-4 py-2 w-full focus-within:ring-0 focus-within:ring-[#2E7D32] focus-within:border-[#2E7D32] transition">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
        </svg>
        <input
        type="text"
        wire:model.live.debounce.300ms="search"
        placeholder="Cari produk pakan berbasis riset atau kategori..."
        class="text-sm w-full bg-transparent outline-none text-gray-700"
        />
      </div>
      
      <select 
        wire:model.live="selectedCategory"
        class="border-3 rounded-lg px-3 py-2 text-sm text-black hover:bg-neutral-300 transition">
        <option value="">Semua Kategori</option>
        @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category }}</option>
        @endforeach
      </select>
      
      <select 
        wire:model.live="sortBy"
        class="border-3 rounded-lg px-3 py-2 text-sm text-black hover:bg-neutral-300 transition">
        <option value="">Urutkan</option>
        <option value="terbaru">Terbaru</option>
        <option value="terlama">Terlama</option>
        <option value="termurah">Harga Termurah</option>
        <option value="termahal">Harga Termahal</option>
      </select>
      
      <button
        wire:click="resetFilter"
        class="border-3 px-4 py-2 rounded-lg text-sm hover:bg-neutral-300 transition">
        Reset
      </button>
    </div>

    <div class="max-w-7xl mx-auto px-6 mt-8">
      @if($products->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          @foreach ($products as $product)
          <a href="{{ route('product.show', $product->product_slug) }}" class="rounded-xl shadow hover:shadow-lg transition block">

            <div class="relative rounded-t-xl p-6 pb-8 bg-gradient-to-br from-[#CDEAC0] via-[#9BCF8A] to-[#6C9D50] text-white">
              @if($product->isNew())
              <span class="absolute top-2 w-9 h-9 left-2 text-[11px] bg-[#EAAA00] items-center justify-center flex px-2 py-0.5 rounded-full">
                Baru
              </span>
              @endif
              <img src="{{ asset('storage/' . $product->product_image1) }}"
                   class="h-38 mx-auto object-contain" alt="{{ $product->product_name }}"/>
              @if($product->hasDiscount)
              <span class="absolute bottom-2 left-2 text-[9px] bg-[#E81010] rounded-full px-2 py-0.5">{{ $product->discountPercentage }} % off</span>
              @endif
              <span class="absolute bottom-2 right-2 text-[9px]">{{ $product->product_weight }} {{ $product->product_unit }}</span>
            </div>

            <div class="p-2">
                <div class="flex justify-between">
                    <h3 class="font-semibold text-sm mb-1 text-black">{{ $product->category->category }}</h3>
                    <span class="text-xs font-semibold {{ $product->product_stock > 0 ? 'text-[#2E7D32]' : 'text-[#E81010]' }}">
                    &#9679;{{ $product->product_stock > 0 ? 'tersedia' : 'habis' }}</span>
                </div>
              <p class="text-xs font-semibold text-black mb-2 text-start opacity-45">{{ $product->product_name }}</p>    
              <div class="flex gap-3">
                <span class="font-semibold text-black text-sm">Rp {{ number_format($product->product_discount_price ?? $product->product_price, 0, ',', '.') }}</span>
                @if ($product->product_discount_price)
                <span class="line-through text-xs text-black opacity-40">
                    Rp {{ number_format($product->product_price, 0, ',', '.') }}
                </span>
                @endif
              </div>
            </div>

          </a>
          @endforeach
        </div>
      @else

        <div class="flex flex-col items-center justify-center py-16 px-4">
          <svg class="w-24 h-24 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
          </svg>
          
          @if($search || $selectedCategory)

            <h3 class="text-xl font-semibold text-gray-700 mb-2">Produk Tidak Ditemukan</h3>
            <p class="text-gray-500 text-center mb-4">
              Maaf, kami tidak menemukan produk yang sesuai dengan pencarian 
              @if($search)
                <span class="font-semibold">"{{ $search }}"</span>
              @endif
          @else

            <h3 class="text-xl font-semibold text-gray-700 mb-2">Belum Ada Produk</h3>
            <p class="text-gray-500 text-center">
              Saat ini belum ada produk yang tersedia. Silakan cek kembali nanti.
            </p>
          @endif
        </div>
      @endif
    </div>
    <div class="mt-6">
      {{ $products->links(data: ['scrollTo' => false]) }}
    </div>
</div>