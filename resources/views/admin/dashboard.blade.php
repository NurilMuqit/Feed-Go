@section('title', 'Dashboard')

<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div>
            <h1 class="font-semibold text-3xl">Dashboard FeedGo</h1>
            <span class="font-light">Kelola seluruh produk pakan FeedGo</span>
        </div>
        
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">

            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800">
                <div class="flex justify-between items-center p-3 mt-1">
                    <h1 class="font-bold text-gray-900 dark:text-white">Total Pesanan</h1>
                    <flux:button class="!bg-transparent !border-0" icon="ellipsis-vertical"></flux:button>
                </div>
                <div class="flex px-3 items-center justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <div class="bg-yellow-500 p-2 rounded-lg">
                            <x-svg.bag-icon class="text-white" />
                        </div>
                        <span class="font-semibold text-lg text-gray-900 dark:text-white">128 pesanan</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <x-svg.arrow-up-icon class="text-yellow-500" />
                        <span class="text-yellow-500 font-medium">18%</span>
                    </div>
                </div>
                <div class="px-3 pb-4 mt-2 flex justify-between text-sm">
                    <span class="text-green-700 dark:text-green-400">Total pesanan masuk</span>
                    <span class="text-gray-500 dark:text-gray-400">Dibanding bulan lalu</span>                    
                </div>
            </div>
        
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800">
                <div class="flex justify-between p-3 mt-1 items-center">
                    <h1 class="font-bold text-gray-900 dark:text-white">Pesanan Aktif</h1>
                    <flux:button class="!bg-transparent !border-0" icon="ellipsis-vertical"></flux:button>
                </div>
                <div class="flex px-3 items-center justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <div class="bg-yellow-500 p-2 rounded-lg">
                            <x-svg.bag-icon class="text-white" />
                        </div>
                        <span class="font-semibold text-lg text-gray-900 dark:text-white">23 pesanan</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <x-svg.arrow-up-icon class="text-yellow-500" />
                        <span class="text-yellow-500 font-medium">6%</span>
                    </div>
                </div>
                <div class="px-3 pb-4 mt-2 flex justify-between text-sm">
                    <span class="text-green-700 dark:text-green-400">Status: proses & dikirim</span>
                    <span class="text-gray-500 dark:text-gray-400">Dibanding bulan lalu</span>                    
                </div>
            </div>
        
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800">
                <div class="flex justify-between p-3 mt-1 items-center">
                    <h1 class="font-bold text-gray-900 dark:text-white">Pesanan Terkirim</h1>
                    <flux:button class="!bg-transparent !border-0" icon="ellipsis-vertical"></flux:button>
                </div>
                <div class="flex px-3 items-center justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <div class="bg-yellow-500 p-2 rounded-lg">
                            <x-svg.bag-icon class="text-white" />
                        </div>
                        <span class="font-semibold text-lg text-gray-900 dark:text-white">95 pesanan</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <x-svg.arrow-up-icon class="text-yellow-500" />
                        <span class="text-yellow-500 font-medium">12%</span>
                    </div>
                </div>
                <div class="px-3 pb-4 mt-2 flex justify-between text-sm">
                    <span class="text-green-700 dark:text-green-400">Aktivitas pesanan</span>
                    <span class="text-gray-500 dark:text-gray-400">Dibanding bulan lalu</span>                    
                </div>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-3"> 
            <div class=" lg:col-span-2 bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6 border border-neutral-200 dark:border-neutral-700">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-4">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Grafik Penjualan Pakan</h2>
                    <div class="flex gap-2">
                        <button 
                            onclick="window.changePeriod('weekly')" 
                            data-period="weekly"
                            class="period-btn px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-neutral-700 transition-colors duration-200">
                            MINGGUAN
                        </button>
                        <button 
                            onclick="window.changePeriod('monthly')" 
                            data-period="monthly"
                            class="period-btn px-4 py-2 rounded-lg text-sm font-medium bg-yellow-500 text-white hover:bg-yellow-600 transition-colors duration-200">
                            BULAN
                        </button>
                        <button 
                            onclick="window.changePeriod('yearly')" 
                            data-period="yearly"
                            class="period-btn px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-neutral-700 transition-colors duration-200">
                            TAHUNAN
                        </button>
                    </div>
                </div>
                <div class="border-t border-gray-300"></div>
                <div id="salesChart" class="w-full"></div>
            </div>
            <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6 border border-neutral-200 dark:border-neutral-700">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Produk Terlaris</h2>
                    <button class="text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                        </svg>
                    </button>
                </div>

                <div class="border-t border-gray-300"></div>

                <div class="space-y-10">

                    <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-neutral-700 transition-colors">
                        <img src="{{ asset('images/Produk1.png') }}" alt="Pakan Udang Grow" class="w-14 h-14 rounded-lg object-cover">
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 dark:text-white">Pakan Udang Grow</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Rp 100.000</p>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-gray-900 dark:text-white">Rp 100.000</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">1 sales</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-neutral-700 transition-colors">
                        <img src="{{ asset('images/Produk2.png') }}" alt="Pakan Udang Grow" class="w-14 h-14 rounded-lg object-cover">
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 dark:text-white">Pakan Udang Grow</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Rp 100.000</p>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-gray-900 dark:text-white">Rp 100.000</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">1 sales</p>
                        </div>
                    </div>
                </div>

                <button class="mt-6 w-full py-2.5 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-lg transition-colors duration-200">
                    LAPORAN PRODUK
                </button>
            </div>
        </div>
        <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm p-6 border border-neutral-200 dark:border-neutral-700">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Tabel Pesanan Terbaru</h2>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                    </svg>
                </button>
            </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-neutral-700">
                        <th class="text-left py-3 px-4">
                            <input type="checkbox" class="rounded border-gray-300">
                        </th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Produk</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">ID Pesanan</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Tanggal</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Customer Name</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Total</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-700">
                        <td class="py-4 px-4">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="py-4 px-4 text-sm text-gray-900 dark:text-white">Pakan Udang</td>
                        <td class="py-4 px-4 text-sm text-gray-600 dark:text-gray-400">#25426</td>
                        <td class="py-4 px-4 text-sm text-gray-600 dark:text-gray-400">7 Jan 2022</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-900 dark:text-white">Wang Lin</span>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">
                                <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                Selesai
                            </span>
                        </td>
                        <td class="py-4 px-4 text-sm font-semibold text-gray-900 dark:text-white">$1BTC</td>
                    </tr>

                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-700">
                        <td class="py-4 px-4">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="py-4 px-4 text-sm text-gray-900 dark:text-white">Pakan Kambing</td>
                        <td class="py-4 px-4 text-sm text-gray-600 dark:text-gray-400">#25425</td>
                        <td class="py-4 px-4 text-sm text-gray-600 dark:text-gray-400">8 Jan 2022</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-900 dark:text-white">Limuan</span>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-medium">
                                <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                                Diproses
                            </span>
                        </td>
                        <td class="py-4 px-4 text-sm font-semibold text-gray-900 dark:text-white">$1BTC</td>
                    </tr>

                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-700">
                        <td class="py-4 px-4">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="py-4 px-4 text-sm text-gray-900 dark:text-white">Pakan Udang</td>
                        <td class="py-4 px-4 text-sm text-gray-600 dark:text-gray-400">#25424</td>
                        <td class="py-4 px-4 text-sm text-gray-600 dark:text-gray-400">9 Jan 2022</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-900 dark:text-white">Xio Yan</span>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">
                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                Dikirim
                            </span>
                        </td>
                        <td class="py-4 px-4 text-sm font-semibold text-gray-900 dark:text-white">$1BTC</td>
                    </tr>

                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-700">
                        <td class="py-4 px-4">
                            <input type="checkbox" class="rounded border-gray-300">
                        </td>
                        <td class="py-4 px-4 text-sm text-gray-900 dark:text-white">Pakan Kambing</td>
                        <td class="py-4 px-4 text-sm text-gray-600 dark:text-gray-400">#25423</td>
                        <td class="py-4 px-4 text-sm text-gray-600 dark:text-gray-400">10 Jan 2022</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-900 dark:text-white">Ryan Philips</span>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="inline-flex items-center gap-1 px-2 py-1 bg-red-100 text-red-700 rounded-full text-xs font-medium">
                                <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                                Dibatalkan
                            </span>
                        </td>
                        <td class="py-4 px-4 text-sm font-semibold text-gray-900 dark:text-white">$1BTC</td>
                    </tr>
                </tbody>
            </table>
        </div>
       
    </div>
</x-layouts.app>

<script>
    (function() {
        let chart;
        let currentPeriod = 'monthly';
        window.initChart = async function() {
            try {
                const response = await fetch(`/admin/sales-data?period=${currentPeriod}`);
                
                if (!response.ok) {
                    throw new Error('Failed to fetch data');
                }
                
                const data = await response.json();
                
                // Detect dark mode
                const isDark = document.documentElement.classList.contains('dark');
                const textColor = isDark ? '#D1D5DB' : '#6B7280';
                const gridColor = isDark ? '#374151' : '#F3F4F6';
                
                const options = {
                    series: [{
                        name: 'Penjualan',
                        data: data.data
                    }],
                    chart: {
                        type: 'area',
                        height: 260,
                        toolbar: { show: false },
                        zoom: { enabled: false },
                        background: 'transparent',
                        fontFamily: 'Poppins, sans-serif'
                    },
                    colors: ['#EAB308'],
                    dataLabels: { 
                        enabled: false 
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 3
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.4,
                            opacityTo: 0.1,
                        }
                    },
                    xaxis: {
                        categories: data.labels,
                        labels: {
                            style: { 
                                fontSize: '12px',
                                fontWeight: 600,
                                colors: textColor
                            }
                        },
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        }
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value) {
                                return 'Rp ' + (value / 1000).toFixed(0) + 'K';
                            },
                            style: {
                                colors: textColor,
                                fontSize: '12px'
                            }
                        }
                    },
                    tooltip: {
                        theme: isDark ? 'dark' : 'light',
                        y: {
                            formatter: function(value) {
                                return 'Rp ' + value.toLocaleString('id-ID');
                            }
                        }
                    },
                    grid: {
                        borderColor: gridColor,
                        strokeDashArray: 4,
                        xaxis: {
                            lines: {
                                show: false
                            }
                        },
                        yaxis: {
                            lines: {
                                show: true
                            }
                        },
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 10
                        }
                    }
                };
                if (chart) {
                    chart.destroy();
                }
                
                chart = new ApexCharts(document.querySelector("#salesChart"), options);
                await chart.render();
                
            } catch (error) {
                console.error('Error initializing chart:', error);
                const chartElement = document.querySelector("#salesChart");
                if (chartElement) {
                    chartElement.innerHTML = `
                        <div class="flex items-center justify-center py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-red-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-red-500 font-medium">Gagal memuat data grafik</p>
                                <p class="text-gray-500 text-sm mt-1">${error.message}</p>
                            </div>
                        </div>
                    `;
                }
            }
        }
        window.changePeriod = function(period) {
            currentPeriod = period;
            
            // Update button states
            document.querySelectorAll('.period-btn').forEach(btn => {
                const btnPeriod = btn.getAttribute('data-period');
                if (btnPeriod === period) {
                    btn.classList.remove('text-gray-600', 'hover:bg-gray-100', 'dark:text-gray-300', 'dark:hover:bg-neutral-700');
                    btn.classList.add('bg-yellow-500', 'text-white', 'hover:bg-yellow-600');
                } else {
                    btn.classList.remove('bg-yellow-500', 'text-white', 'hover:bg-yellow-600');
                    btn.classList.add('text-gray-600', 'hover:bg-gray-100', 'dark:text-gray-300', 'dark:hover:bg-neutral-700');
                }
            });
            
            // Reload chart
            window.initChart();
        }
        // Initialize on page load
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', window.initChart);
        } else {
            window.initChart();
        }
    })();
</script>