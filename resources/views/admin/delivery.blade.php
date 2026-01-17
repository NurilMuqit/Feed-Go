@section('title', 'Pengiriman')

<x-layouts.app :title="__('Pengiriman')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div>
            <h1 class="font-semibold text-3xl">Pengiriman FeedGo</h1>
            <span class="font-light">Kelola status pengiriman pesanan pelanggan</span>
        </div>

        <div class="flex flex-wrap items-center gap-3 bg-gray-50 dark:bg-neutral-700/50 p-4 rounded-lg">
            <div class="flex flex-wrap items-center gap-3">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Filter By</span>
                </div>
            </div>
            
            <button class="flex items-center gap-2 px-4 py-2 text-sm border border-gray-300 dark:border-neutral-600 
                       rounded-lg bg-white dark:bg-neutral-800 text-gray-700 dark:text-gray-300
                       hover:bg-gray-50 dark:hover:bg-neutral-700 transition">
                <span>Tanggal</span>
            </button>

            <button class="flex items-center gap-2 px-4 py-2 text-sm border border-gray-300 dark:border-neutral-600 
                       rounded-lg bg-white dark:bg-neutral-800 text-gray-700 dark:text-gray-300
                       hover:bg-gray-50 dark:hover:bg-neutral-700 transition">
                <span>Kurir</span>
            </button>

            <select 
                    class="px-4 py-2 text-sm border border-gray-300 dark:border-neutral-600 
                           rounded-lg bg-white dark:bg-neutral-800 text-gray-700 dark:text-gray-300
                           focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">Status Pesanan</option>
                <option value="pending">Tertunda</option>
                <option value="processing">Diproses</option>
                <option value="completed">Selesai</option>
                <option value="cancelled">Dibatalkan</option>
            </select>

            <div class=" w-full md:w-auto ml-auto">
                <div class="relative max-w-md">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" 
                    placeholder="Cari ID Pesanan / Nama Pemesan"
                    class="px-4 pl-10 py-2 text-sm border border-gray-300 dark:border-neutral-600 
                           rounded-lg bg-white dark:bg-neutral-800 text-gray-700 dark:text-gray-300
                           focus:ring-2 focus:ring-blue-500 focus:border-transparent
                           placeholder:text-gray-400"/>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto bg-white dark:bg-neutral-800 rounded-xl shadow-sm">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 dark:bg-neutral-700/50 border-b border-gray-200 dark:border-neutral-700">
                    <tr>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            ID Pesanan
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Pembeli
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Alamat singkat
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Kurir
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Kode Resi
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-700/50 transition text-center">
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                            0001
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                            mirza
                        </td>   
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                            Sulses
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                            JNE
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                            JP1929
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                            diproses
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
                            12 mar 20203
                        </td>
                    </tr>
                    {{-- @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-gray-400 dark:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Belum ada pesanan
                        </td>
                    </tr>
                    @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
