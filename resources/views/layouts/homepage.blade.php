@extends('app')

@section('title', 'homepage')

@section('content')
 <section class="max-w-8xl mx-auto p-6">

  {{-- header --}}
  <div class="bg-green-700 rounded-4xl relative overflow-hidden">

    <div class="flex items-center justify-between mb-6">

      {{-- logo --}}
      <div class="text-2xl font-bold text-green-300 px-6">
        <img src="{{ asset('images/FeedGo.png') }}" alt="Feed-Go" class="h-8 inline-block mr-2" />
      </div>

      {{-- navbar --}}
      <nav class="hidden md:flex gap-8 text-white">
        <a href="#" class="hover:text-yellow-300">Beranda</a>
        <a href="#" class="hover:text-yellow-300">Produk</a>
        <a href="#" class="hover:text-yellow-300">Tentang Kami</a>
        <a href="#" class="hover:text-yellow-300">Artikel</a>
      </nav>
      
      {{-- auth --}}
      <div class="flex items-center gap-4 p-5">
        @auth
        <a href="{{ url('/dashboard') }}" class="bg-yellow-400 text-green-800 px-4 py-2 rounded-full text-sm font-semibold hover:bg-yellow-300">Dashboard</a>
        @else
        <a href="{{ route('register') }}" class="text-white text-sm hover:text-yellow-300">Daftar Sekarang</a>
        <a href="{{ route('login') }}" class="bg-yellow-400 text-green-800 px-4 py-2 rounded-full text-sm font-semibold hover:bg-yellow-300">
          Masuk</a>
        @endauth
      </div>        
    </div>
    
    {{-- search bar --}}
    <div class="flex justify-center mb-6">
        <div class="bg-green-200 rounded-full flex items-center px-4 py-2 w-full max-w-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-4.35-4.35M16.65 10.65a6 6 0 11-12 0 6 6 0 0112 0z" />
        </svg>
        <input
            type="text"
            placeholder="Cari produk......"
            class="bg-transparent outline-none text-sm w-full text-green-900 placeholder-green-700"
        />
        </div>
    </div>

    {{-- main content --}}
    <div class="grid md:grid-cols-2 gap-5 items-center">
      
      <div class="text-white px-4 md:px-20">
        <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-4">
          Inovasi <span class="text-yellow-400">Pakan Ternak</span> Berbasis Riset
          untuk Masa Depan Agrikultur Indonesia
        </h1>
        <p class="text-green-100 mb-6 max-w-lg">
          Pakan efisien, ramah lingkungan, dan terjangkau—dikembangkan melalui riset
          Universitas Hasanuddin bersama sektor industri.
        </p>
        <a href="#" class="inline-flex items-center gap-2 bg-yellow-400 text-green-800 px-6 py-3 rounded-full font-semibold mb-6">
          🛒 Pesan Sekarang
        </a>
        <ul class="space-y-2 text-sm text-green-100">
          <li>• Berbasis riset universitas</li>
          <li>• Ramah lingkungan</li>
          <li>• Efisien & terjangkau</li>
        </ul>
      </div>

      <div class="relative">
        <img
          src="{{ asset('images/Gambar.png') }}"
          alt="Gedung Riset"
          class="w-full h-full"
        />
      </div>
    </div>

  </div>

</section>

{{-- products --}}
<section>
  <div class="container mx-auto text-center px-4">
      <h1 class="text-yellow-400 font-bold text-2xl sm:text-4xl mb-5 text-shadow-md" data-aos="fade-left">Produk</h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 m-5" data-aos="fade-up">
          @if ($products->isEmpty())
              <div class="col-span-3 text-center">
                  <p class="text-center text-gray-500 py-10">Tidak ada produk tersedia.</p>
              </div>
          @else
              @foreach ($products as $product)
                  <div class="rounded-lg shadow-lg p-6 flex flex-col items-center hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out bg-white">
                      <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="object-cover rounded-lg w-full h-44 sm:h-48">
                      <h1 class="text-biru text-base sm:text-lg mt-4 text-center">{{ $product->product_name }}</h1>
                  </div>
              @endforeach
          @endif
      </div>
      @if (!$products->isEmpty())
          <div class="mt-8">
              <a href="{{ route('product') }}" data-aos="fade-up"
                  class="bg-biru text-putihsusu shadow-md font-bold border border-putihsusu rounded-md py-2 px-8 hover:bg-blue-500 transition-colors">
                  View All Products
              </a>
          </div>
      @endif
  </div>
</section>
@endsection