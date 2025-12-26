<header class="p-6">
{{-- header --}}
  <div class="bg-linear-to-tl from-[#6C9D50] to-[#1B601E] rounded-4xl relative overflow-hidden">

    <div class="flex items-center justify-between mb-6">

      {{-- logo --}}
      <div class="text-2xl font-bold text-green-300 px-6">
        <img src="{{ asset('images/FeedGo.png') }}" alt="Feed-Go" class="h-8 inline-block mr-2" />
      </div>

      {{-- navbar --}}
      <nav class="hidden md:flex gap-8 text-white font-bold">
        <a href="{{ route('beranda') }}" class="hover:text-yellow-300 text-yellow-400">Beranda</a>
        <a href="{{ route('produk') }}" class="hover:text-yellow-300">Produk</a>
        <a href="{{ route('tentangkami') }}" class="hover:text-yellow-300">Tentang Kami</a>
        <a href="{{ route('artikel') }}" class="hover:text-yellow-300">Artikel</a>
      </nav>
      
      {{-- auth --}}
      <div class="flex items-center gap-4 p-5">
        @auth
        <a href="{{ url('/dashboard') }}" class="bg-yellow-400 text-green-800 px-4 py-2 rounded-full text-sm font-semibold hover:bg-yellow-300">Dashboard</a>
        @else
        <a href="{{ route('register') }}" class="text-yellow-400 text-sm hover:text-yellow-200">Daftar Sekarang</a>
        <a href="{{ route('login') }}" class="bg-yellow-400 text-green-800 px-4 py-2 rounded-full text-sm font-semibold hover:bg-yellow-300">
          Masuk</a>
        @endauth
      </div>        
    </div>

    @yield('header-content')
  </div>
</header>