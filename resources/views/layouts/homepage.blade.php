@extends('app')

@section('title', 'Beranda')

@section('content')

@section('header-content')
{{-- search bar --}}
<div class="flex justify-center mb-6">
    <div class="bg-[#C8E6C9] rounded-full flex items-center px-4 py-2 w-full max-w-md shadow-lg">
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
<div class="grid md:grid-cols-2 gap-5 items-center font-[Inter]">
  
  <div class="text-white px-4 md:px-20">
    <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-4">
      Inovasi <span class="text-yellow-400">Pakan Ternak</span> Berbasis Riset
      untuk Masa Depan Agrikultur Indonesia
    </h1>
    <p class="text-green-100 mb-6 max-w-lg">
      Pakan efisien, ramah lingkungan, dan terjangkau—dikembangkan melalui riset
      Universitas Hasanuddin bersama sektor industri.
    </p>
    <a href="#" class="inline-flex items-center gap-2 bg-yellow-400 text-white px-6 py-3 rounded-full font-semibold mb-6">
      <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
      </svg>
      Pesan Sekarang
    </a>
    <ul class="space-y-2 text-sm text-white font-bold">
      <li>• Berbasis riset universitas</li>
      <li>• Ramah lingkungan</li>
      <li>• Efisien & terjangkau</li>
    </ul>
  </div>
  <div class="relative">
    <img
      src="{{ asset('images/Pakan.png') }}"
      alt="Pakan Ternak"
      class="w-full h-full"
    />
  </div>
</div>
@endsection

{{-- Why FeedGo --}}
<section class="relative flex flex-col items-center justify-center py-18 overflow-hidden">

  <div class="absolute inset-0 flex items-center justify-center">
    <div
      class="w-[1000px] h-[500px] rounded-full 
             bg-radial from-[#1D6220] from-30% to-[#F5F5F5]
             blur-3xl opacity-80">
    </div>
  </div>

  <div class="relative z-10 text-center mb-12">
    <span class="inline-block bg-[#6C9D50] text-white text-md px-7 py-1 rounded-full mb-3">
      Nilai Kami
    </span>
    <h2 class="text-4xl font-bold text-[#388E3C]">
      Mengapa FeedGo?
    </h2>
  </div>

  <div class="relative z-10 w-[1040px] h-[820px]">

    <div class="absolute inset-0 flex items-center justify-center">
      <img src="{{ asset('images/FeedGo.png') }}" alt="Logo FeedGo" class="h-48" />
    </div>

    <div class="absolute top-0 left-1/2 -translate-x-1/2">
      <div
        class="w-[240px] h-[240px] rounded-full 
               bg-gradient-to-b from-[#388E3C] to-[#EAAA00]
               flex items-center justify-center
               text-white font-semibold shadow-xl">
        Riset
      </div>
    </div>

    <div class="absolute left-0 top-1/2 -translate-y-1/2">
      <div
        class="w-[240px] h-[240px] rounded-full 
               bg-gradient-to-r from-[#388E3C] to-[#EAAA00]
               flex items-center justify-center
               text-white font-semibold shadow-xl">
        Lokal
      </div>
    </div>

    <div class="absolute right-0 top-1/2 -translate-y-1/2">
      <div
        class="w-[240px] h-[240px] rounded-full 
               bg-gradient-to-l from-[#388E3C] to-[#EAAA00]
               flex items-center justify-center
               text-white font-semibold shadow-xl">
        Efisien
      </div>
    </div>

    <div class="absolute bottom-0 left-[18%]">
      <div
        class="w-[240px] h-[240px] rounded-full 
               bg-gradient-to-tr from-[#388E3C] to-[#EAAA00]
               flex items-center justify-center
               text-white font-semibold shadow-xl">
        Produktif
      </div>
    </div>

    <div class="absolute bottom-0 right-[18%]">
      <div
        class="w-[240px] h-[240px] rounded-full 
               bg-gradient-to-tl from-[#388E3C] to-[#EAAA00]
               flex items-center justify-center
               text-white font-semibold shadow-xl text-center px-2">
        Berkelanjutan
      </div>
    </div>

  </div>
  
</section>

{{-- Product --}}
<section class="relative py-12 overflow-visible">

  <img src="/images/Daun.png"
       class="absolute top-0 right-0 w-50 pointer-events-none" />
  <img src="/images/Daun2.png"
       class="absolute -bottom-1 left-0 w-40 pointer-events-none" />

  <div class="text-center mb-8">
    <h2 class="text-4xl font-bold text-green-700 mb-4">
      Produk
    </h2>

    <span class="inline-block bg-[#92BD79] text-white 
                 px-6 py-2 rounded-full font-semibold text-sm">
      Pakan Udang
    </span>
  </div>

  <div class="flex justify-center gap-32">

    <div class="flex flex-col items-center">
      <div class="relative pt-[180px]">
        
        <img
          src="{{ asset('images/Produk1.png') }}"
          alt="Pakan Udang FeedGo"
          class="absolute top-5 left-1/2 -translate-x-1/2
                 w-[380px] object-contain z-20
                 drop-shadow-[0_35px_40px_rgba(0,0,0,0.3)]
                 hover:scale-105 transition-transform duration-300"
        />

        <div
          class="relative bg-gradient-to-b from-[#BBDFA6] to-[#6C9D50]
                 rounded-3xl w-80 h-62
                 shadow-xl overflow-hidden">
        </div>

      </div>
    </div>

    <div class="flex flex-col items-center">
      <div class="relative pt-[180px]">
        
        <img
          src="{{ asset('images/Produk2.png') }}"
          alt="Pakan Udang FeedGo"
          class="absolute top-14 left-1/2 -translate-x-1/2
                 w-[380px] object-contain z-20
                 drop-shadow-[0_35px_40px_rgba(0,0,0,0.3)]
                 hover:scale-105 transition-transform duration-300"
        />

        <div
          class="relative bg-gradient-to-b from-[#BBDFA6] to-[#6C9D50]
                 rounded-3xl w-80 h-62
                 shadow-xl overflow-hidden">
        </div>

      </div>
    </div>

  </div>

  <div class="flex justify-center gap-6 mt-20 mb-10">

    <span class="px-8 py-3 rounded-full text-white font-semibold 
                 bg-[#E3B600] shadow-md hover:shadow-lg 
                 hover:scale-105 transition-all duration-300 cursor-pointer">
      Nutrisi
    </span>

    <span class="px-8 py-3 rounded-full text-white font-semibold 
                 bg-[#D68A2D] shadow-md hover:shadow-lg 
                 hover:scale-105 transition-all duration-300 cursor-pointer">
      Efisiensi
    </span>

    <span class="px-8 py-3 rounded-full text-white font-semibold 
                 bg-[#5AB1C5] shadow-md hover:shadow-lg 
                 hover:scale-105 transition-all duration-300 cursor-pointer">
      Pertumbuhan
    </span>

  </div>

</section>

<section class="relative bg-gradient-to-b from-[#1B601E] to-[#6C9D50] py-40 overflow-hidden">

        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-yellow-400 mb-6">
                "Pakan Inovatif, Hasil Produktif."
            </h1>
            <p class="text-xl md:text-2xl text-white/80 font-light">
                Dikembangkan melalui riset nutrisi terukur
            </p>
        </div>
</section>

<section class="relative -mt-20 pb-24">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-2xl p-12 md:p-16">

            <h2 class="text-2xl md:text-3xl font-bold text-[#388E3C] text-center mb-4">
                Update Riset & Inovasi FeedGo
            </h2>
            
            <p class="text-center text-[#0B460E] text-lg mb-10">
                Dapatkan informasi terbaru seputar pengembangan pakan ternak berbasis riset dan teknologi.
            </p>

            <form class="max-w-2xl mx-auto">
                <div class="relative flex items-center">
                    <input 
                        type="email" 
                        placeholder="Email" 
                        class="w-full pl-6 pr-40 py-4 rounded-full border-2 border-gray-200 
                               focus:border-green-500 focus:outline-none text-gray-700
                               placeholder:text-gray-400"
                        required
                    />
                    <button 
                        type="submit"
                        class="absolute right-1 bg-green-700 hover:bg-green-800 text-white font-semibold 
                               px-8 py-3 rounded-full transition duration-300 
                               shadow-md hover:shadow-lg whitespace-nowrap">
                        Ikuti FeedGo
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection