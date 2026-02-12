@extends('app')

@section('title', 'Artikel')

@section('content')

@section('header-content')
<div class="relative w-full h-[400px] overflow-hidden">

    <img
        src="{{ asset('images/Sawah.webp') }}"
        alt="image"
        class="absolute inset-0 w-full h-full object-cover blur-sm"
    >

    <div class="absolute inset-0 flex flex-col items-center justify-center gap-3 text-center px-4">

        <h1 class="text-3xl md:text-4xl font-semibold text-white text-shadow-lg drop-shadow-lg">
            Artikel FeedGo
        </h1>

        <h2 class="text-white text-sm font-light">
            Wawasan pakan ternak berbasis riset untuk peternak Indonesia.
        </h2>

    </div>

</div>
@endsection
<section class="max-w-6xl mx-auto bg-[#F5F5F5] rounded-3xl -mt-20 relative z-20 p-10 text-center">
    <div class="mx-auto grid lg:grid-cols-2 grid-cols-1 gap-12 items-center">

        <div class="text-left lg:text-left text-center md:items-center">
            <h2 class="text-3xl lg:text-4xl font-semibold text-[#2D5016] leading-snug mb-4">
                Artikel FeedGo<br>
                edukasi pakan<br>
                berbasis riset untuk<br>
                peternak.
            </h2>

            <p class="text-[#6B7280] text-sm leading-relaxed mb-6 max-w-md mx-auto lg:mx-0">
                Artikel edukasi, tips, dan informasi seputar pakan udang dan
                pakan kambing untuk mendukung produktivitas dan
                keberlanjutan peternakan.
            </p>

            <p class="text-sm text-[#4D4D4D] mb-3 font-semibold">
                Cari artikel atau topik pakan ternak yang Anda butuhkan
            </p>

            <div class="flex gap-3 max-w-md mx-auto lg:mx-0">
                <input
                    type="text"
                    placeholder="Cari artikel....."
                    class="flex-1 bg-[#6C9D50] bg-opacity-90 text-white placeholder-white px-4 py-2 rounded-lg text-sm focus:outline-none"
                />
                <button class="bg-[#EAAA00] text-white px-5 py-2 rounded-lg text-sm font-medium">
                    Cari
                </button>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">

            <div class="relative rounded-xl overflow-hidden h-60 w-50 place-self-end">
                <img src="/images/Produk1.png" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/40"></div>
                <span class="absolute top-3 left-3 bg-[#2D5016] text-white text-xs px-3 py-1 rounded-full">
                    INFORMASI
                </span>
                <p class="absolute bottom-3 left-3 right-3 text-white text-sm font-semibold">
                    Kandungan Pakan Udang Terbaik
                </p>
            </div>

            <div class="relative rounded-xl overflow-hidden h-40 w-60 place-self-start self-end">
                <img src="/images/artikel2.jpg" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/40"></div>
                <span class="absolute top-3 left-3 bg-[#F4B000] text-white text-xs px-3 py-1 rounded-full">
                    TIPS
                </span>
                <p class="absolute bottom-3 left-3 right-3 text-white text-sm font-semibold">
                    Cara Memilih Pakan Udang
                </p>
            </div>

            <div class="relative rounded-xl overflow-hidden h-40 w-60 place-self-end self-start">
                <img src="/images/artikel3.jpg" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/40"></div>
                <span class="absolute top-3 left-3 bg-[#2D5016] text-white text-xs px-3 py-1 rounded-full">
                    EDUKASI
                </span>
                <p class="absolute bottom-3 left-3 right-3 text-white text-sm font-semibold">
                    Perbedaan Pakan Udang dan Pakan Kambing
                </p>
            </div>

            <div class="relative rounded-xl overflow-hidden h-60 w-50 place-self-start">
                <img src="/images/artikel4.jpg" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/40"></div>
                <span class="absolute top-3 left-3 bg-[#F4B000] text-white text-xs px-3 py-1 rounded-full">
                    TIPS
                </span>
                <p class="absolute bottom-3 left-3 right-3 text-white text-sm font-semibold">
                    Kesalahan Pemberian Pakan Udang
                </p>
            </div>
        </div>

    </div>
</section>

<section class="bg-linear-to-tl from-[#6C9D50] to-[#1B601E] items-center text-center pb-15">
    <h1 class="text-white text-3xl font-medium p-5">
        Artikel Populer untuk Perternak
    </h1>

    <div class="max-w-6xl mx-auto bg-[#F5F5F5] rounded-3xl relative z-20 p-10 text-center grid lg:grid-cols-3 grid-cols-1 gap-8 items-sretch">

        <div class="lg:col-span-2 grid md:grid-cols-2 auto-rows-min gap-6">

            <div class="bg-white rounded-xl overflow-hidden border shadow-sm row-span-2">
                <div class="relative h-72">
                    <img src="/images/artikel1.jpg" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 bg-[#F4B000] text-white text-xs px-3 py-1 rounded-full">
                        TIPS
                    </span>
                </div>
            
                <div class="p-5">
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Pakan Berbasis Riset: Kesalahan Pemberian Pakan Udang
                    </h3>
                
                    <p class="text-sm text-gray-600 mb-4">
                        Kesalahan umum dalam pemberian pakan udang yang sering
                        menurunkan pertumbuhan dan efisiensi pakan.
                    </p>
                
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>01 Jun 2025</span>
                        <a href="#" class="text-[#F4B000] font-medium">Baca Artikel →</a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden border shadow-sm">
                <div class="relative h-52">
                    <img src="/images/artikel2.jpg" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 bg-[#F4B000] text-white text-xs px-3 py-1 rounded-full">
                        TIPS
                    </span>
                </div>
            
                <div class="p-5">
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Pakan Berbasis Riset: Cara Memilih Pakan Udang
                    </h3>
                
                    <p class="text-sm text-gray-600 mb-4">
                        Panduan praktis memilih pakan udang yang tepat dan aman.
                    </p>
                
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>07 Jun 2025</span>
                        <a href="#" class="text-[#F4B000] font-medium">Baca Artikel →</a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="flex flex-col h-full">

            <div class="bg-[#EAF4E4] rounded-xl p-5">
                <h4 class="font-semibold text-[#2D5016] mb-4">
                    Topik Sedang Dibahas
                </h4>

                <div class="space-y-4">

                    <div class="flex gap-3">
                        <img src="/images/artikel1.jpg" class="w-14 h-14 rounded-lg object-cover">
                        <div>
                            <p class="text-sm font-medium text-gray-800">
                                Kandungan Pakan Udang Terbaik
                            </p>
                            <span class="text-xs text-gray-500">
                                05 Jun 2025 · Baca Artikel →
                            </span>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <img src="/images/artikel2.jpg" class="w-14 h-14 rounded-lg object-cover">
                        <div>
                            <p class="text-sm font-medium text-gray-800">
                                Perbedaan Pakan Udang dan Pakan Kambing
                            </p>
                            <span class="text-xs text-gray-500">
                                05 Jun 2025 · Baca Artikel →
                            </span>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <img src="/images/artikel3.jpg" class="w-14 h-14 rounded-lg object-cover">
                        <div>
                            <p class="text-sm font-medium text-gray-800">
                                Kesalahan Umum dalam Pemberian Pakan Udang
                            </p>
                            <span class="text-xs text-gray-500">
                                05 Jun 2025 · Baca Artikel →
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <button class="mt-auto w-full bg-[#F4B000] text-white font-semibold py-3 rounded-lg flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 34 34" fill="none">
                    <path d="M10 26.6667C8.16667 26.6667 6.68333 28.1667 6.68333 30C6.68333 31.8333 8.16667 33.3333 10 33.3333C11.8333 33.3333 13.3333 31.8333 13.3333 30C13.3333 28.1667 11.8333 26.6667 10 26.6667ZM0 0V3.33333H3.33333L9.33333 15.9833L7.08333 20.0667C6.81667 20.5333 6.66667 21.0833 6.66667 21.6667C6.66667 23.5 8.16667 25 10 25H30V21.6667H10.7C10.4667 21.6667 10.2833 21.4833 10.2833 21.25L10.3333 21.05L11.8333 18.3333H24.25C25.5 18.3333 26.6 17.65 27.1667 16.6167L33.1333 5.8C33.2667 5.56667 33.3333 5.28333 33.3333 5C33.3333 4.08333 32.5833 3.33333 31.6667 3.33333H7.01667L5.45 0H0ZM26.6667 26.6667C24.8333 26.6667 23.35 28.1667 23.35 30C23.35 31.8333 24.8333 33.3333 26.6667 33.3333C28.5 33.3333 30 31.8333 30 30C30 28.1667 28.5 26.6667 26.6667 26.6667Z" fill="white"/>
                </svg> Lihat Produk FeedGo
            </button>

        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto items-center text-center">
    <livewire:user.new-article />
</section>

<section class="relative w-full h-[400px]">
    <img
        src="{{ asset('images/Tentang2.webp') }}"
        alt="image"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <div class="absolute inset-0 flex flex-col items-center justify-center gap-3 text-center px-4">

        <h1 class="text-3xl md:text-4xl font-semibold text-white text-shadow-lg drop-shadow-lg">
            Ikuti Perkembangan Riset FeedGo
        </h1>

        <h2 class="text-white text-sm font-light">
            Dapatkan insight, artikel edukasi, dan update riset pakan ternak yang dibagikan langsung oleh tim FeedGo.
        </h2>

        <form class="max-w-3xl mx-auto">
            <div
                class="flex items-center border-2 border-gray-200 rounded-full 
                             focus-within:border-green-500 transition bg-white">
    
                <input 
                    type="email" 
                    placeholder="Email"
                    class="flex-1 pl-4 py-3 bg-transparent 
                        focus:outline-none text-gray-700
                        placeholder:text-gray-400"
                        required/>
    
                <button 
                    type="submit"
                    class="bg-[#1B601E] hover:bg-green-600 text-white font-semibold 
                           px-6 py-3 rounded-full transition duration-300 
                           shadow-md whitespace-nowrap flex items-center gap-2">
                    Ikuti FeedGo
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                        <path d="M28.0938 15.5C28.0938 8.54498 22.455 2.90625 15.5 2.90625C8.54498 2.90625 2.90625 8.54498 2.90625 15.5C2.90625 22.455 8.54498 28.0938 15.5 28.0938C22.455 28.0938 28.0938 22.455 28.0938 15.5ZM15.2185 21.0316C15.1281 20.942 15.0563 20.8354 15.0071 20.7181C14.958 20.6007 14.9324 20.4748 14.9319 20.3476C14.9314 20.2204 14.956 20.0943 15.0042 19.9765C15.0524 19.8588 15.1234 19.7517 15.213 19.6614L18.3808 16.4688H10.293C10.036 16.4688 9.78963 16.3667 9.60796 16.185C9.42628 16.0033 9.32422 15.7569 9.32422 15.5C9.32422 15.2431 9.42628 14.9967 9.60796 14.815C9.78963 14.6333 10.036 14.5312 10.293 14.5312H18.3808L15.213 11.3386C15.1234 11.2482 15.0525 11.141 15.0043 11.0232C14.9561 10.9054 14.9316 10.7793 14.9321 10.652C14.9327 10.5247 14.9583 10.3987 15.0076 10.2814C15.0568 10.164 15.1287 10.0574 15.2191 9.96783C15.3095 9.87822 15.4166 9.8073 15.5345 9.75911C15.6523 9.71091 15.7784 9.6864 15.9057 9.68696C16.033 9.68752 16.1589 9.71315 16.2763 9.76238C16.3937 9.81161 16.5002 9.88348 16.5898 9.97389L21.3967 14.8176C21.5767 14.9991 21.6778 15.2444 21.6778 15.5C21.6778 15.7556 21.5767 16.0009 21.3967 16.1824L16.5898 21.0261C16.5002 21.1166 16.3936 21.1886 16.2762 21.2379C16.1587 21.2871 16.0327 21.3128 15.9053 21.3133C15.7779 21.3138 15.6517 21.2892 15.5338 21.2408C15.416 21.1925 15.3088 21.1214 15.2185 21.0316Z" fill="#E3B600"/>
                    </svg>
                </button>
                    
            </div>
        </form>
    </div>

</section>
@endsection