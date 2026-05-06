<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Nasi Cokot</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        html, body {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        html::-webkit-scrollbar,
        body::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-[#dddddd] text-[#2e2e2e]">

    @php
        $todayOrders = [
            [
                'code' => '#001',
                'name' => 'Evan Panepan',
                'items' => 'Nasi cokot OG 1, nasi cokot nautica 2, es teh 3',
                'time' => '09.54',
                'status' => 'Selesai',
                'statusColor' => 'green',
            ],
            [
                'code' => '#002',
                'name' => 'Karaky',
                'items' => 'nasi cokot og 10',
                'time' => '09.40',
                'status' => 'Menunggu',
                'statusColor' => 'yellow',
            ],
            [
                'code' => '#003',
                'name' => 'Afrizal',
                'items' => 'nasi cokot og 5, nasi cokot nautica 5, es teh 5',
                'time' => '09.35',
                'status' => 'Selesai',
                'statusColor' => 'green',
            ],
        ];

        $historyOrders = [
            [
                'date' => 'Kamis, 7 Mei 2026',
                'count' => '3 pesanan hari ini',
                'orders' => [
                    [
                        'code' => '#001',
                        'name' => 'Evan Panepan',
                        'items' => 'Nasi cokot OG 1, nasi cokot nautica 2, es teh 3',
                        'time' => '09.54',
                        'status' => 'Selesai',
                        'statusColor' => 'green',
                    ],
                    [
                        'code' => '#002',
                        'name' => 'Karaky',
                        'items' => 'nasi cokot og 10',
                        'time' => '09.40',
                        'status' => 'Menunggu',
                        'statusColor' => 'yellow',
                    ],
                    [
                        'code' => '#003',
                        'name' => 'Afrizal',
                        'items' => 'nasi cokot og 5, nasi cokot nautica 5, es teh 5',
                        'time' => '09.35',
                        'status' => 'Selesai',
                        'statusColor' => 'green',
                    ],
                ],
            ],
            [
                'date' => 'Rabu, 6 Mei 2026',
                'count' => '12 pesanan hari ini',
                'orders' => [
                    [
                        'code' => '#001',
                        'name' => 'Leroy',
                        'items' => '1x Nasi Cokot OG, 1 Es Teh',
                        'time' => '18.36',
                        'status' => 'Selesai',
                        'statusColor' => 'green',
                    ],
                ],
            ],
        ];

        function statusClasses($color) {
            return match($color) {
                'green' => 'bg-[#d9f0e8] text-[#4d9a84]',
                'yellow' => 'bg-[#f7efc8] text-[#c7a320]',
                'red' => 'bg-[#f6d7d7] text-[#c55b5b]',
                default => 'bg-gray-200 text-gray-600',
            };
        }

        function codeClasses($color) {
            return match($color) {
                'green' => 'bg-[#56c09a] text-white',
                'yellow' => 'bg-[#f8eed5] text-[#f4a04e]',
                'red' => 'bg-[#f6d7d7] text-[#c55b5b]',
                default => 'bg-gray-200 text-gray-600',
            };
        }
    @endphp

    <div class="flex min-h-screen">

        <aside class="w-[200px] shrink-0 bg-[#efefef] px-2 py-4 shadow-sm">
            <div class="flex h-full flex-col justify-between">
                <div>
                    <div class="flex justify-left">
                        <img
                            src="{{ asset('img/Nasicokot.png') }}"
                            alt="Logo"
                            class="h-[82px] w-[82px] rounded-full object-cover"
                        >
                    </div>

                    <div class="mt-4">
                        <button class="w-full rounded-lg border border-[#d4d4d4] bg-[#efefef] px-3 py-2 text-sm text-[#555] shadow-sm">
                            Menu
                        </button>
                    </div>

                    <nav class="mt-6 flex flex-col gap-2">
                        <button
                            id="btn-dashboard"
                            onclick="showPage('dashboard')"
                            class="menu-btn rounded-full bg-[#4aa583] px-3 py-2 text-left text-sm font-medium text-white shadow"
                        >
                            Dashboard Utama
                        </button>

                        <button
                            id="btn-riwayat"
                            onclick="showPage('riwayat')"
                            class="menu-btn rounded-full px-3 py-2 text-left text-sm font-medium text-[#333] transition hover:bg-[#d8d8d8]"
                        >
                            Riwayat
                        </button>
                    </nav>
                </div>

                <div class="flex items-center gap-2 px-2 text-sm text-[#444]">
                    <span>↪</span>
                    <span>Admin</span>
                </div>
            </div>
        </aside>

        <main class="flex-1 p-4">

            <section id="page-dashboard" class="page-section">
                <div class="rounded-[18px] border border-[#cfcfcf] bg-[#f5f5f5] px-5 py-4 shadow-sm">
                    <h1 class="text-[20px] font-bold leading-tight">Dashboard Admin</h1>
                    <p class="mt-1 text-sm text-[#555]">Kamis, 7 Mei 2026</p>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
                    <div class="rounded-[18px] border border-[#cfcfcf] bg-[#f5f5f5] p-4 shadow-sm">
                        <p class="text-[15px] font-semibold text-[#555]">Total Pesanan</p>
                        <h2 class="mt-8 text-[18px] font-bold text-[#2f2f2f]">2</h2>
                        <p class="mt-8 text-[15px] text-[#555]">Hari ini</p>
                    </div>

                    <div class="rounded-[18px] border border-[#cfcfcf] bg-[#f5f5f5] p-4 shadow-sm">
                        <p class="text-[15px] font-semibold text-[#555]">Selesai</p>
                        <h2 class="mt-8 text-[18px] font-bold text-[#2f2f2f]">5</h2>
                        <p class="mt-8 text-[15px] text-[#555]">Terkonfirmasi</p>
                    </div>

                    <div class="rounded-[18px] border border-[#cfcfcf] bg-[#f5f5f5] p-4 shadow-sm">
                        <p class="text-[15px] font-semibold text-[#555]">Pending</p>
                        <h2 class="mt-8 text-[18px] font-bold text-[#2f2f2f]">2</h2>
                        <p class="mt-8 text-[15px] text-[#555]">Menunggu kabar~</p>
                    </div>
                </div>

                <div class="mt-5 flex items-center justify-between gap-4">
                    <div class="w-full max-w-[215px] rounded-lg border border-[#d4d4d4] bg-[#f5f5f5] px-4 py-2 shadow-sm">
                        <p class="text-sm font-semibold">Pesanan Terkini</p>
                    </div>

                    <p class="text-sm text-[#7a7a7a]">Menampilkan 3 pesanan terbaru</p>
                </div>

                <div class="mt-4 space-y-4">
                    @foreach ($todayOrders as $order)
                        <div class="order-card rounded-[18px] border border-[#cfcfcf] bg-[#f8f8f8] px-4 py-4 shadow-sm">
                            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                <div class="flex min-w-0 items-center gap-4">
                                    <div class="flex h-[36px] w-[36px] shrink-0 items-center justify-center rounded-[12px] text-sm font-bold shadow {{ codeClasses($order['statusColor']) }}">
                                        {{ $order['code'] }}
                                    </div>

                                    <div class="min-w-0">
                                        <h3 class="truncate text-[15px] font-semibold">{{ $order['name'] }}</h3>
                                        <p class="mt-1 truncate text-xs text-[#555]">{{ $order['items'] }}</p>
                                    </div>
                                </div>

                                <div class="flex items-end justify-between gap-4 md:flex-col md:items-end">
                                    <p class="text-sm font-medium">{{ $order['time'] }}</p>

                                    <div class="flex flex-col items-end gap-1">
                                        <span class="rounded-full px-4 py-1 text-sm {{ statusClasses($order['statusColor']) }}">
                                            {{ $order['status'] }}
                                        </span>

                                        <button class="rounded-full bg-[#efefef] px-3 py-1 text-[11px] text-[#777] shadow-sm transition hover:bg-[#e3e3e3]">
                                            Invoice →
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section id="page-riwayat" class="page-section hidden">
                <div class="rounded-[18px] border border-[#cfcfcf] bg-[#f5f5f5] px-5 py-4 shadow-sm">
                    <h1 class="text-[20px] font-bold leading-tight">Dashboard Admin</h1>
                    <p class="mt-1 text-sm text-[#555]">Kamis, 7 Mei 2026</p>
                </div>

                <div class="mt-4 rounded-lg border border-[#d4d4d4] bg-[#f5f5f5] px-4 py-2 shadow-sm">
                    <p class="text-sm font-semibold">Semua Pesanan</p>
                </div>

                <div class="mt-4 space-y-4">
                    @foreach ($historyOrders as $group)
                        <div class="history-group">
                            <div class="mb-3 flex items-center justify-between gap-4">
                                <div class="w-full max-w-[170px] rounded-lg border border-[#d4d4d4] bg-[#f5f5f5] px-3 py-2 shadow-sm">
                                    <p class="text-sm">{{ $group['date'] }}</p>
                                </div>

                                <p class="text-sm text-[#7a7a7a]">{{ $group['count'] }}</p>
                            </div>

                            <div class="space-y-4">
                                @foreach ($group['orders'] as $order)
                                    <div class="order-card rounded-[18px] border border-[#cfcfcf] bg-[#f8f8f8] px-4 py-4 shadow-sm">
                                        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                            <div class="flex min-w-0 items-center gap-4">
                                                <div class="flex h-[36px] w-[36px] shrink-0 items-center justify-center rounded-[12px] text-sm font-bold shadow {{ codeClasses($order['statusColor']) }}">
                                                    {{ $order['code'] }}
                                                </div>

                                                <div class="min-w-0">
                                                    <h3 class="truncate text-[15px] font-semibold">{{ $order['name'] }}</h3>
                                                    <p class="mt-1 truncate text-xs text-[#555]">{{ $order['items'] }}</p>
                                                </div>
                                            </div>

                                            <div class="flex items-end justify-between gap-4 md:flex-col md:items-end">
                                                <p class="text-sm font-medium">{{ $order['time'] }}</p>

                                                <div class="flex flex-col items-end gap-1">
                                                    <span class="rounded-full px-4 py-1 text-sm {{ statusClasses($order['statusColor']) }}">
                                                        {{ $order['status'] }}
                                                    </span>

                                                    <button class="rounded-full bg-[#efefef] px-3 py-1 text-[11px] text-[#777] shadow-sm transition hover:bg-[#e3e3e3]">
                                                        Invoice →
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

        </main>
    </div>

    <script>
        function showPage(page) {
            const dashboardPage = document.getElementById('page-dashboard');
            const riwayatPage = document.getElementById('page-riwayat');

            const btnDashboard = document.getElementById('btn-dashboard');
            const btnRiwayat = document.getElementById('btn-riwayat');

            dashboardPage.classList.add('hidden');
            riwayatPage.classList.add('hidden');

            btnDashboard.className = 'menu-btn rounded-full px-3 py-2 text-left text-sm font-medium text-[#333] transition hover:bg-[#d8d8d8]';
            btnRiwayat.className = 'menu-btn rounded-full px-3 py-2 text-left text-sm font-medium text-[#333] transition hover:bg-[#d8d8d8]';

            if (page === 'dashboard') {
                dashboardPage.classList.remove('hidden');
                btnDashboard.className = 'menu-btn rounded-full bg-[#4aa583] px-3 py-2 text-left text-sm font-medium text-white shadow';
            } else {
                riwayatPage.classList.remove('hidden');
                btnRiwayat.className = 'menu-btn rounded-full bg-[#4aa583] px-3 py-2 text-left text-sm font-medium text-white shadow';
            }

            gsap.from('.page-section:not(.hidden) .order-card, .page-section:not(.hidden) .history-group, .page-section:not(.hidden) .menu-btn, .page-section:not(.hidden) .rounded-\\[18px\\]', {
                opacity: 0,
                y: 18,
                duration: 0.45,
                stagger: 0.06,
                ease: 'power2.out'
            });
        }

        window.addEventListener('load', () => {
            gsap.from('aside', {
                x: -30,
                opacity: 0,
                duration: 0.6,
                ease: 'power2.out'
            });

            gsap.from('#page-dashboard > *', {
                opacity: 0,
                y: 18,
                duration: 0.5,
                stagger: 0.08,
                ease: 'power2.out'
            });
        });
    </script>
</body>
</html>