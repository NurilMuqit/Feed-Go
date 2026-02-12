<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class=" font-[poppins] min-h-screen antialiased bg-[radial-gradient(circle_at_35%_30%,#2E7D32_8%,#084A0B_75%)] ">
        <div class="relative flex items-center mb-6 p-5">
        
            {{-- logo --}}
            <div class="text-2xl font-bold text-green-300 px-6">
                <img src="{{ asset('images/FeedGo.webp') }}" alt="Feed-Go" class="h-12 inline-block mr-2" />
            </div>
        
            {{-- navbar --}}
            <nav class=" text-lg hidden md:flex gap-8 text-white absolute left-1/2 transform -translate-x-1/2">
                <a href="{{ route('beranda') }}" class="hover:text-yellow-300">Beranda</a>
                <a href="{{ route('produk') }}" class="hover:text-yellow-300">Produk</a>
                <a href="{{ route('tentangkami') }}" class="hover:text-yellow-300">Tentang Kami</a>
                <a href="{{ route('artikel') }}" class="hover:text-yellow-300">Artikel</a>
            </nav>
        
        </div>

        <div class="">
            {{ $slot }}
        </div>
        
        @fluxScripts
    </body>
</html>
