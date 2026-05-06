<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasicokot-ID</title>

    <link rel="icon" type="image/png" href="{{ asset('img/Nasicokot.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        html,
        body {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        html::-webkit-scrollbar,
        body::-webkit-scrollbar {
            display: none;
        }

        .fade-in {
            animation: fadeIn 0.25s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.97);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media print {
            body * {
                visibility: hidden;
            }

            #ticket-print,
            #ticket-print * {
                visibility: visible;
            }

            #ticket-print {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body class="bg-[#fff0cf] font-['Inter'] text-[#3D3427]">
    <header
        id="navWrapper"
        class="fixed left-1/2 top-5 z-50 flex w-[92%] max-w-[1500px] -translate-x-1/2 items-center justify-between transition-transform duration-300 ease-in-out">
        <a href="#beranda" class="shrink-0">
            <img
                src="{{ asset('img/Nasicokot.png') }}"
                alt="Logo Nasi Cokot"
                class="h-24 w-24 rounded-full object-cover ">
        </a>

        <nav class="rounded-full bg-white/95 px-2 py-2 shadow-lg backdrop-blur">
            <div id="navMenu" class="relative flex items-center gap-1 whitespace-nowrap">
                <span
                    id="highlight"
                    class="absolute bottom-0 left-0 top-0 rounded-full bg-[#321c04]/10 transition-all duration-300 ease-in-out"></span>

                <a href="#beranda" class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]">
                    Beranda
                </a>

                <a href="#menu" class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]">
                    Menu
                </a>

                <a href="#pesan" class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]">
                    Pesan
                </a>
            </div>
        </nav>
    </header>

    <main class="overflow-hidden">
        <section id="beranda" class="relative min-h-screen overflow-hidden bg-[#efefef] px-6 pt-32 md:px-12 lg:px-16">
            <div class="mx-auto flex min-h-[calc(100vh-8rem)] max-w-7xl flex-col items-center justify-center gap-10 lg:flex-row lg:gap-16">

                <div class="w-full lg:w-1/2">
                    <h1 class="max-w-[700px] text-4xl font-bold leading-tight text-[#2b2b2b] md:text-5xl lg:text-[64px]">
                        Simple, Murah, Bikin Kenyang
                    </h1>

                    <p class="mt-5 max-w-[680px] text-lg leading-relaxed text-[#2b2b2b] md:text-2xl">
                        Nasi Cokot kekinian mulai 5K. Cocok untuk sekolah, kerja, atau santai.
                    </p>

                    <a
                        href="#pesan"
                        class="mt-10 inline-flex rounded-full border-2 border-red-500 px-10 py-4 text-xl font-medium text-red-500 transition duration-300 hover:bg-red-500 hover:text-white">
                        Pesan Sekarang!
                    </a>
                </div>

                <div class="relative flex w-full items-center justify-center overflow-visible lg:w-1/2">
                    <div class="absolute bottom-[-40px] h-[280px] w-[280px] rounded-full bg-white/80 blur-3xl"></div>

                    <img
                        src="{{ asset('img/nc.png') }}"
                        alt="Nasi Cokot"
                        class="relative z-10 w-[420px] max-w-none object-contain drop-shadow-[0_25px_35px_rgba(0,0,0,0.18)] md:w-[560px] lg:w-[760px]">
                </div>
            </div>
        </section>
        <section class="relative overflow-hidden bg-[#efefef] px-6 py-24 md:px-12 lg:px-16">
            <div class="mx-auto flex min-h-screen max-w-7xl flex-col items-center justify-center gap-12 lg:flex-row lg:gap-16">

                <div class="relative flex w-full items-center justify-center lg:w-1/2">
                    <div class="relative flex h-[340px] w-[340px] items-center justify-center rounded-[40%_60%_55%_45%_/_45%_35%_65%_55%] bg-[#f79a63] shadow-[0_15px_40px_rgba(0,0,0,0.18)] md:h-[420px] md:w-[420px]">
                        <img
                            src="{{ asset('img/ncb.png') }}"
                            alt="Nasi Cokot"
                            class="w-[290px] max-w-none object-contain drop-shadow-[0_20px_25px_rgba(0,0,0,0.2)] md:w-[360px]">
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold leading-tight text-[#2b2b2b] md:text-5xl lg:text-[55px]">
                        Nikmat di setiap <br> gigitan!
                    </h2>

                    <p class="mt-6 max-w-[620px] text-lg leading-[1.8] text-[#2b2b2b] md:text-[22px]">
                        Kami menyajikan nasi cokot yang disajikan dengan hangat.
                        Dengan memperhatikan rasa di setiap gigitan,
                        kami berkomitmen untuk membuat Anda menikmati nasi cokot kami setulusnya.
                    </p>
                </div>
            </div>
        </section>
        <section class="relative min-h-screen overflow-hidden">
            <div class="absolute inset-x-0 top-0 h-1/2 bg-[#efefef]"></div>
            <div class="absolute inset-x-0 bottom-0 h-1/2 bg-[url('{{ asset('img/kayub.png') }}')] bg-cover bg-center"></div>

            <div class="relative z-10 mx-auto flex min-h-screen max-w-7xl flex-col justify-center px-6 py-24 md:px-12 lg:px-16">

                <h2 class="mb-14 text-center text-4xl font-bold text-[#2b2b2b] md:text-5xl lg:mb-20 lg:text-[60px]">
                    Kenapa Harus Kami?
                </h2>
                <div class="relative hidden w-full items-center justify-between lg:flex">
                    <div class="h-[350px] w-[280px] rounded-[18px] bg-orange-500 p-7 text-white shadow-[0_18px_35px_rgba(0,0,0,0.18)]">
                        <h3 class="text-[22px] font-bold leading-tight">Cepat & Praktis</h3>
                        <p class="mt-3 text-[15px] leading-relaxed">
                            Cocok untuk kamu yang butuh makan tanpa ribet, tinggal pesan dan siap dinikmati
                        </p>

                        <h3 class="mt-8 text-[22px] font-bold leading-tight">Ramah di Kantong</h3>
                        <p class="mt-3 text-[15px] leading-relaxed">
                            Harga mulai 5K, tetap kenyang tanpa bikin kantong kosong
                        </p>
                    </div>

                    <div class="h-[350px] w-[280px] rounded-[18px] bg-emerald-500 p-7 text-white shadow-[0_18px_35px_rgba(0,0,0,0.18)]">
                        <h3 class="text-[22px] font-bold leading-tight">Fresh Setiap Hari</h3>
                        <p class="mt-3 text-[15px] leading-relaxed">
                            Dibuat langsung saat order, bukan stok lama.
                        </p>

                        <h3 class="mt-8 text-[22px] font-bold leading-tight">Bisa Ambil atau Delivery</h3>
                        <p class="mt-3 text-[15px] leading-relaxed">
                            Pesan sekarang, ambil di tempat atau kirim ke lokasi kamu.
                        </p>
                    </div>

                    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-[45%]">
                        <img
                            src="{{ asset('img/nc.png') }}"
                            alt="Nasi Cokot"
                            class="block w-[420px] object-contain drop-shadow-[0_30px_40px_rgba(0,0,0,0.24)] xl:w-[500px]">
                    </div>
                </div>
            </div>
        </section>
        <section class="relative bg-[#fff0cf]">
            <div id="menu" class="relative min-h-screen overflow-hidden rounded-t-[28px] bg-[#fff0cf] px-6 py-20 md:px-12 lg:px-16">
                <div class="mx-auto max-w-7xl">

                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-[#242424] md:text-5xl lg:text-[44px]">
                            Menu Kami
                        </h2>
                        <p class="mt-5 text-[17px] font-medium text-[#242424]">
                            Dibuat dengan sepenuh hati
                        </p>
                    </div>

                    <div class="mt-20 grid grid-cols-1 gap-x-20 gap-y-28 md:grid-cols-2 lg:grid-cols-3">
                        <div class="relative mx-auto flex h-[300px] w-full max-w-[300px] flex-col justify-end rounded-[18px] bg-gradient-to-br from-[#55bea0] to-[#138266] px-5 pb-10 text-white shadow-[0_18px_32px_rgba(0,0,0,0.18)]">
                            <img
                                src="{{ asset('img/nc.png') }}"
                                alt="Nasi Cokot Nautica"
                                class="absolute left-1/2 top-[-90px] w-[260px] -translate-x-1/2 object-contain drop-shadow-[0_18px_25px_rgba(0,0,0,0.20)]">

                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-[18px] font-bold leading-snug">
                                    Nasi Cokot<br>Nautica
                                </h3>
                                <p class="whitespace-nowrap text-[17px] font-semibold">
                                    IDR 9K
                                </p>
                            </div>

                            <p class="mt-5 max-w-[210px] text-[14px] font-medium leading-snug">
                                Nasi cokot dengan tambahan rumput laut, cocok untuk kamu yang ingin citarasa gurih lebih
                            </p>
                        </div>
                        <div class="relative mx-auto flex h-[300px] w-full max-w-[300px] flex-col justify-end rounded-[18px] bg-gradient-to-br from-[#fb6f61] to-[#c93c31] px-5 pb-10 text-white shadow-[0_18px_32px_rgba(0,0,0,0.18)]">
                            <img
                                src="{{ asset('img/nc.png') }}"
                                alt="Nasi Cokot OG"
                                class="absolute left-1/2 top-[-88px] w-[245px] -translate-x-1/2 object-contain drop-shadow-[0_18px_25px_rgba(0,0,0,0.20)]">

                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-[18px] font-bold leading-snug">
                                    Nasi Cokot OG
                                </h3>
                                <p class="whitespace-nowrap text-[17px] font-semibold">
                                    IDR 7K
                                </p>
                            </div>

                            <p class="mt-5 max-w-[210px] text-[14px] font-medium leading-snug">
                                Nasi cokot original, cocok untuk kamu yang sederhana dan mengenyangkan
                            </p>
                        </div>
                        <div class="relative mx-auto flex h-[300px] w-full max-w-[300px] flex-col justify-end rounded-[18px] bg-gradient-to-br from-[#ff874f] to-[#d44d10] px-5 pb-10 text-white shadow-[0_18px_32px_rgba(0,0,0,0.18)] md:col-span-2 lg:col-span-1">
                            <img
                                src="{{ asset('img/esteh.png') }}"
                                alt="Es Teh Maniss"
                                class="absolute left-1/2 top-[-120px] w-[190px] -translate-x-1/2 object-contain drop-shadow-[0_18px_25px_rgba(0,0,0,0.20)]">

                            <div class="flex items-start justify-between gap-4">
                                <h3 class="text-[18px] font-bold leading-snug">
                                    Es Teh Maniss
                                </h3>
                                <p class="whitespace-nowrap text-[17px] font-semibold">
                                    IDR 5K
                                </p>
                            </div>

                            <p class="mt-5 max-w-[210px] text-[14px] font-medium leading-snug">
                                Segelas es teh dengan rasa manis yang menyegarkan dan menghidrasi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pesan" class="relative min-h-screen overflow-hidden bg-[#fff0cf] px-6 pb-[300px] pt-20 md:px-12 lg:px-16">
                <div class="mx-auto max-w-7xl">
                    <h2 class="text-center text-4xl font-bold text-[#242424] md:text-5xl lg:text-[42px]">
                        Pesan
                    </h2>

                    <div class="mt-20 grid grid-cols-1 items-center gap-10 lg:grid-cols-2 lg:gap-20">

                        <div class="rounded-[32px] bg-gradient-to-br from-[#4cff79] via-[#1ee446] to-[#0dc93c] px-8 py-8 text-center text-white shadow-[0_18px_35px_rgba(0,0,0,0.12)] md:px-12">
                            <h3 class="text-2xl font-bold md:text-[30px]">
                                Pesan Via <span class="text-[#14a64d]">WhatsApp</span>
                            </h3>

                            <p class="mt-5 text-[16px] font-medium md:text-[18px]">
                                Langsung chat, cepat, tanpa ribet
                            </p>

                            <a
                                href="https://wa.me/6281234567890"
                                target="_blank"
                                class="mx-auto mt-7 flex h-[45px] w-full max-w-[310px] items-center justify-center gap-4 rounded-full bg-white text-[15px] font-medium text-[#10c647] shadow-[0_8px_20px_rgba(0,0,0,0.12)] transition hover:scale-105">
                                <i class="fa-brands fa-whatsapp text-[22px]"></i>
                                Pesan Sekarang
                            </a>
                        </div>

                        <div class="rounded-[32px] bg-white/95 px-8 py-8 text-center text-[#444] shadow-[0_10px_18px_rgba(0,0,0,0.24)] md:px-12">
                            <h3 class="text-2xl font-bold md:text-[30px]">
                                Pesan di Website
                            </h3>

                            <p class="mt-5 text-[16px] font-medium md:text-[18px]">
                                Isi form pesanan langsung di sini
                            </p>

                            <button
                                type="button"
                                onclick="openModal()"
                                class="mx-auto mt-8 flex h-[38px] w-full max-w-[310px] items-center justify-center gap-3 rounded-full border border-[#555] bg-white text-[15px] font-medium text-[#222] transition hover:scale-105 hover:bg-[#f5f5f5]">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>

                <footer class="absolute bottom-0 left-0 right-0 z-20 bg-[#d90911] px-6 py-8 md:px-12 lg:px-16">
                    <div class="mx-auto max-w-7xl">
                        <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">

                            <div class="flex flex-col items-start">
                                <p class="text-[18px] font-bold text-white md:text-[20px]">
                                    Sego Cokot Mas Fahmi
                                </p>

                                <div class="mt-5 flex flex-col gap-3">
                                    <a href="#beranda" class="text-[16px] font-medium text-white transition hover:translate-x-1">
                                        Beranda <span class="ml-1">→</span>
                                    </a>

                                    <a href="#menu" class="text-[16px] font-medium text-white transition hover:translate-x-1">
                                        Menu <span class="ml-1">→</span>
                                    </a>
                                
                                    <a href="#" class="text-[16px] font-medium text-white transition hover:translate-x-1">
                                        Dashboard <span class="ml-1">→</span>
                                    </a>
                                </div>

                                <a
                                    href="#pesan"
                                    class="mt-6 inline-flex h-[54px] min-w-[175px] items-center justify-center rounded-full border-2 border-white px-8 text-[16px] font-medium text-white transition hover:bg-white hover:text-[#d90911]">
                                    Pesan Sekarang
                                </a>
                            </div>

                            <div class="text-center md:absolute md:bottom-8 md:left-1/2 md:-translate-x-1/2">
                                <p class="text-[12px] leading-6 text-white">
                                    © 2026 Sego Cokot Mas Fahmi.<br>
                                    All Rights Reserved.
                                </p>
                            </div>

                            <div class="flex justify-end">
                                <a
                                    href="#beranda"
                                    aria-label="Kembali ke atas"
                                    class="flex h-[56px] w-[56px] items-center justify-center rounded-full border-2 border-white text-[24px] text-white transition hover:bg-white hover:text-[#d90911]">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </section>
    </main>

    <div
        id="overlay"
        onclick="closeModalOutside(event)"
        class="fixed inset-0 z-[999] hidden items-center justify-center bg-black/60 p-4">
        <div id="modal" class="fade-in relative w-full max-w-md rounded-2xl bg-white shadow-xl">

            <div class="flex justify-center">
                <span
                    id="badge"
                    class="absolute -top-3 rounded-full border border-amber-300 bg-amber-50 px-4 py-1 text-xs font-semibold tracking-widest text-amber-600 transition-all duration-300">
                    FORM BELUM TERISI
                </span>
            </div>

            <div id="form-view" class="p-8 md:p-10">
                <h2 class="mb-1 text-center text-2xl font-bold text-black">
                    Pesan via Website
                </h2>

                <div class="mb-8 flex justify-center">
                    <span class="rounded-md bg-[#2b2b2b] px-3 py-1 text-xs font-bold text-white">
                        Pickup Only
                    </span>
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-[18px] font-bold text-[#2b2b2b]">
                        Nama
                    </label>
                    <input
                        id="nama"
                        type="text"
                        placeholder="Masukkan nama Anda di sini"
                        oninput="validate()"
                        class="h-[46px] w-full rounded-xl border border-[#444] bg-white px-4 text-sm text-[#2b2b2b] placeholder:text-[#555] focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-[18px] font-bold text-[#2b2b2b]">
                        Nomor Telepon
                    </label>
                    <input
                        id="telp"
                        type="tel"
                        placeholder="Masukkan no. telepon Anda di sini"
                        oninput="validate()"
                        class="h-[46px] w-full rounded-xl border border-[#444] bg-white px-4 text-sm text-[#2b2b2b] placeholder:text-[#555] focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-[18px] font-bold text-[#2b2b2b]">
                        Waktu Pengambilan
                    </label>
                    <input
                        id="waktu"
                        type="datetime-local"
                        oninput="validate()"
                        class="h-[46px] w-full rounded-xl border border-[#444] bg-white px-4 text-sm text-[#2b2b2b] focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>

                <div class="mb-3">
                    <label class="mb-2 block text-[18px] font-bold text-[#2b2b2b]">
                        Pesanan
                    </label>
                    <input
                        id="pesanan"
                        type="text"
                        placeholder="Masukkan pesanan Anda di sini"
                        oninput="validate()"
                        class="h-[46px] w-full rounded-xl border border-[#444] bg-white px-4 text-sm text-[#2b2b2b] placeholder:text-[#555] focus:outline-none focus:ring-2 focus:ring-gray-300">
                </div>

                <div class="flex items-end justify-between gap-4">
                    <div class="text-sm font-semibold leading-tight text-[#555]">
                        <p>Ingin delivery?</p>
                        <a
                            href="https://wa.me/6281234567890"
                            target="_blank"
                            class="text-[#14d64a] transition hover:underline">
                            Pesan via WhatsApp
                        </a>
                    </div>

                    <button
                        id="btn-beli"
                        type="button"
                        onclick="submitForm()"
                        disabled
                        class="h-[42px] min-w-[72px] cursor-not-allowed rounded-xl border border-[#444] bg-white px-5 text-sm font-medium text-[#2b2b2b] opacity-40 transition hover:bg-gray-100">
                        Beli
                    </button>
                </div>
            </div>

            <div id="ticket-view" class="hidden p-4">
                <div id="ticket-print" class="mx-auto w-full max-w-[420px] rounded-2xl bg-white p-6">

                    <div class="mb-6 flex flex-col items-center text-center">
                        <div class="mb-4 flex h-[72px] w-[72px] items-center justify-center rounded-full bg-green-100">
                            <i class="fa-solid fa-check text-[34px] leading-none text-green-600"></i>
                        </div>

                        <h2 class="text-[22px] font-bold text-gray-900">
                            Pesanan Berhasil
                        </h2>

                        <div class="mt-3 flex flex-col items-center gap-1">
                            <span id="ticket-id" class="font-mono text-sm font-semibold text-gray-400"></span>
                            <p id="out-time" class="text-sm text-gray-400"></p>
                        </div>
                    </div>

                    <hr class="mb-5 border-dashed border-gray-300">

                    <div class="mb-5 space-y-4">
                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-user w-5 text-gray-400"></i>
                            <span id="out-nama" class="text-[15px] font-medium text-gray-800"></span>
                        </div>

                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-phone w-5 text-gray-400"></i>
                            <span id="out-telp" class="text-[15px] text-gray-800"></span>
                        </div>

                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-calendar-days w-5 text-gray-400"></i>
                            <span id="out-waktu" class="text-[15px] text-gray-800"></span>
                        </div>
                    </div>

                    <hr class="mb-5 border-dashed border-gray-300">

                    <div>
                        <p class="mb-3 text-center text-[15px] font-semibold text-gray-700">
                            Menu yang dipesan
                        </p>

                        <div class="min-h-[84px] rounded-2xl border border-gray-200 bg-gray-50 p-4">
                            <p id="out-pesanan" class="text-[15px] leading-relaxed text-gray-700"></p>
                        </div>
                    </div>

                    <div class="my-6 flex items-center gap-3">
                        <div class="flex-1 border-t border-dashed border-gray-300"></div>
                        <i class="fa-solid fa-circle text-[10px] text-gray-300"></i>
                        <div class="flex-1 border-t border-dashed border-gray-300"></div>
                    </div>
                    <div class="no-download flex items-center gap-3">
                        <p class="flex-1 text-center text-xs text-gray-400">
                            Tunjukkan struk ini kepada penjual
                        </p>

                        <button
                            type="button"
                            onclick="downloadTicket()"
                            class="rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-100 active:scale-95">
                            <i class="fa-solid fa-download mr-1"></i>
                            Unduh
                        </button>

                        <button
                            type="button"
                            onclick="selesai()"
                            class="rounded-xl bg-gray-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-gray-700 active:scale-95">
                            Selesai
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const navItems = document.querySelectorAll(".nav-item");
        const highlight = document.getElementById("highlight");
        const navMenu = document.getElementById("navMenu");
        const navWrapper = document.getElementById("navWrapper");

        let activeIndex = 0;
        let lastScrollY = window.scrollY;

        function moveHighlight(index) {
            const item = navItems[index];
            if (!item || !highlight) return;

            highlight.style.left = item.offsetLeft + "px";
            highlight.style.width = item.offsetWidth + "px";
            highlight.style.height = item.offsetHeight + "px";
        }

        navItems.forEach((item, index) => {
            item.addEventListener("mouseenter", () => {
                moveHighlight(index);
            });

            item.addEventListener("click", () => {
                activeIndex = index;
                moveHighlight(activeIndex);
            });
        });

        if (navMenu) {
            navMenu.addEventListener("mouseleave", () => {
                moveHighlight(activeIndex);
            });
        }

        window.addEventListener("load", () => {
            moveHighlight(activeIndex);
            validate();
        });

        window.addEventListener("resize", () => {
            moveHighlight(activeIndex);
        });

        window.addEventListener("scroll", () => {
            if (!navWrapper) return;

            const currentScrollY = window.scrollY;

            if (currentScrollY <= 10) {
                navWrapper.classList.remove("-translate-y-32");
                navWrapper.classList.add("translate-y-0");
            } else if (currentScrollY > lastScrollY) {
                navWrapper.classList.remove("translate-y-0");
                navWrapper.classList.add("-translate-y-32");
            } else {
                navWrapper.classList.remove("-translate-y-32");
                navWrapper.classList.add("translate-y-0");
            }

            lastScrollY = currentScrollY;
        });

        function openModal() {
            const overlay = document.getElementById("overlay");
            if (!overlay) return;

            resetModalViewOnly();

            overlay.classList.remove("hidden");
            overlay.classList.add("flex");
        }

        function closeModal() {
            const overlay = document.getElementById("overlay");
            if (!overlay) return;

            overlay.classList.add("hidden");
            overlay.classList.remove("flex");
        }

        function closeModalOutside(event) {
            const overlay = document.getElementById("overlay");

            if (event.target === overlay) {
                closeModal();
            }
        }

        function validate() {
            const nama = document.getElementById("nama");
            const telp = document.getElementById("telp");
            const waktu = document.getElementById("waktu");
            const pesanan = document.getElementById("pesanan");
            const btn = document.getElementById("btn-beli");
            const badge = document.getElementById("badge");

            if (!nama || !telp || !waktu || !pesanan || !btn || !badge) return;

            const filled =
                nama.value.trim() &&
                telp.value.trim() &&
                waktu.value.trim() &&
                pesanan.value.trim();

            btn.disabled = !filled;

            if (filled) {
                btn.classList.remove("opacity-40", "cursor-not-allowed");
                btn.classList.add("cursor-pointer");

                badge.textContent = "FORM SUDAH KEISI";
                badge.className =
                    "absolute -top-3 rounded-full border border-green-300 bg-green-50 px-4 py-1 text-xs font-semibold tracking-widest text-green-600 transition-all duration-300";
            } else {
                btn.classList.add("opacity-40", "cursor-not-allowed");
                btn.classList.remove("cursor-pointer");

                badge.textContent = "FORM BELUM KEISI";
                badge.className =
                    "absolute -top-3 rounded-full border border-amber-300 bg-amber-50 px-4 py-1 text-xs font-semibold tracking-widest text-amber-600 transition-all duration-300";
            }
        }

        function generateTicketId() {
            const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            let id = "#";

            for (let i = 0; i < 8; i++) {
                id += chars[Math.floor(Math.random() * chars.length)];
            }

            return id;
        }

        function formatWaktuPengambilan(value) {
            if (!value) return "-";

            const date = new Date(value);

            if (isNaN(date.getTime())) {
                return value;
            }

            return date.toLocaleDateString("id-ID", {
                weekday: "long",
                year: "numeric",
                month: "long",
                day: "numeric"
            }) + " • " + date.toLocaleTimeString("id-ID", {
                hour: "2-digit",
                minute: "2-digit"
            });
        }

        function submitForm() {
            const nama = document.getElementById("nama").value.trim();
            const telp = document.getElementById("telp").value.trim();
            const waktu = document.getElementById("waktu").value.trim();
            const pesanan = document.getElementById("pesanan").value.trim();

            if (!nama || !telp || !waktu || !pesanan) {
                validate();
                return;
            }

            document.getElementById("out-nama").textContent = nama;
            document.getElementById("out-telp").textContent = telp;
            document.getElementById("out-waktu").textContent = formatWaktuPengambilan(waktu);
            document.getElementById("out-pesanan").textContent = pesanan;
            document.getElementById("ticket-id").textContent = generateTicketId();

            const now = new Date();

            document.getElementById("out-time").textContent =
                now.toLocaleDateString("id-ID", {
                    weekday: "long",
                    year: "numeric",
                    month: "long",
                    day: "numeric"
                }) +
                " • " +
                now.toLocaleTimeString("id-ID", {
                    hour: "2-digit",
                    minute: "2-digit"
                });

            document.getElementById("form-view").classList.add("hidden");
            document.getElementById("badge").classList.add("hidden");
            document.getElementById("ticket-view").classList.remove("hidden");
        }

        function selesai() {
            resetForm();
            closeModal();
        }

        function resetModalViewOnly() {
            const ticketView = document.getElementById("ticket-view");
            const formView = document.getElementById("form-view");
            const badge = document.getElementById("badge");

            if (ticketView) ticketView.classList.add("hidden");
            if (formView) formView.classList.remove("hidden");
            if (badge) badge.classList.remove("hidden");

            validate();
        }

        function resetForm() {
            ["nama", "telp", "waktu", "pesanan"].forEach((id) => {
                const input = document.getElementById(id);
                if (input) input.value = "";
            });

            resetModalViewOnly();
        }

        function downloadTicket() {
            const ticket = document.getElementById("ticket-print");
            const hiddenItems = ticket.querySelectorAll(".no-download");

            if (!ticket) return;

            hiddenItems.forEach((item) => {
                item.style.display = "none";
            });

            setTimeout(() => {
                html2canvas(ticket, {
                    scale: 2,
                    backgroundColor: "#ffffff",
                    useCORS: true,
                    scrollX: 0,
                    scrollY: 0,
                    width: ticket.scrollWidth,
                    height: ticket.scrollHeight,
                    windowWidth: ticket.scrollWidth,
                    windowHeight: ticket.scrollHeight
                }).then((canvas) => {
                    const link = document.createElement("a");
                    const ticketId = document.getElementById("ticket-id")?.textContent.replace("#", "") || "struk";

                    link.download = `struk-nasi-cokot-${ticketId}.png`;
                    link.href = canvas.toDataURL("image/png");
                    link.click();

                    hiddenItems.forEach((item) => {
                        item.style.display = "";
                    });
                });
            }, 100);
        }
    </script>
</body>

</html>