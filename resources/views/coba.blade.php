<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nasi Cokot ID — Landing Page GSAP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: '#c94f2d',
              brandDark: '#a53c21',
              cream: '#f7f3ee',
              sand: '#efdfc3',
              ink: '#30251f',
              soft: '#7c6d63',
              footer: '#c93116',
              tealCard: '#8dc7c1',
              coralCard: '#eca19b',
              mangoCard: '#f2b487',
            },
            boxShadow: {
              soft: '0 22px 60px rgba(48, 37, 31, 0.12)',
              float: '0 28px 40px rgba(48, 37, 31, 0.18)',
            },
            fontFamily: {
              sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
          },
        },
      };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <style>
      html {
        scroll-behavior: smooth;
      }

      body {
        overflow-x: hidden;
      }

      .grain {
        background-image:
          radial-gradient(circle at 20% 20%, rgba(201, 79, 45, 0.06) 0, transparent 22%),
          radial-gradient(circle at 80% 10%, rgba(201, 79, 45, 0.05) 0, transparent 20%),
          radial-gradient(circle at 10% 85%, rgba(201, 79, 45, 0.05) 0, transparent 18%),
          radial-gradient(circle at 90% 80%, rgba(201, 79, 45, 0.04) 0, transparent 24%);
      }

      .menu-card {
        transform-origin: center bottom;
      }

      .product-shell svg,
      .drink-shell svg {
        display: block;
        width: 100%;
        height: auto;
      }

      .floating-shadow {
        filter: drop-shadow(0 30px 28px rgba(48, 37, 31, 0.18));
      }

      .hide-scrollbar::-webkit-scrollbar {
        display: none;
      }

      .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>
  </head>
  <body class="bg-cream font-sans text-ink selection:bg-brand/20">
    <div class="fixed inset-x-0 top-5 z-[80] flex justify-center px-4">
      <div class="nav-shell flex w-full max-w-6xl items-center justify-between gap-4 rounded-full border border-white/70 bg-white/85 px-3 py-2 shadow-soft backdrop-blur md:px-4">
        <a href="#hero" class="flex items-center gap-3">
          <span class="grid h-10 w-10 place-items-center rounded-full bg-brand text-sm font-bold text-white">NC</span>
          <div class="hidden leading-none sm:block">
            <p class="text-sm font-semibold tracking-[0.14em] text-brand">NASI COKOT ID</p>
            <p class="text-[11px] text-soft">simple food, strong flavor</p>
          </div>
        </a>

        <nav class="rounded-full bg-[#f8f5f1] p-1.5 shadow-inner">
          <ul id="navMenu" class="relative flex items-center gap-1">
            <span id="navIndicator" class="pointer-events-none absolute left-0 top-0 h-full rounded-full bg-white shadow-sm transition-all duration-300 ease-out"></span>
            <li><a href="#hero" class="nav-item relative z-10 block rounded-full px-4 py-2 text-xs font-medium text-soft transition hover:text-ink md:px-5">Beranda</a></li>
            <li><a href="#menu" class="nav-item relative z-10 block rounded-full px-4 py-2 text-xs font-medium text-soft transition hover:text-ink md:px-5">Menu</a></li>
            <li><a href="#cta" class="nav-item relative z-10 block rounded-full px-4 py-2 text-xs font-medium text-soft transition hover:text-ink md:px-5">Pesan</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <main>
      <section id="hero" class="relative h-[430vh]">
        <div class="sticky top-0 h-screen overflow-hidden">
          <div class="story-bg grain absolute inset-0 bg-cream"></div>
          <div class="beige-panel absolute inset-x-0 bottom-0 h-0 bg-sand"></div>
          <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9),transparent_48%)]"></div>

          <div class="absolute inset-0 mx-auto max-w-7xl px-6 md:px-10 lg:px-12">
            <div class="relative h-full">
              <div class="absolute inset-y-0 left-0 flex w-full items-center md:w-[46%]">
                <div class="hero-copy max-w-xl pt-16 md:pt-24">
                  <p class="hero-kicker mb-4 inline-flex rounded-full border border-brand/25 bg-brand/5 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.24em] text-brand">
                    Nasi Cokot ID
                  </p>
                  <h1 class="hero-title text-4xl font-extrabold leading-tight tracking-tight text-ink md:text-6xl lg:text-[70px] lg:leading-[1.02]">
                    Simple, Murah, <br class="hidden md:block" />Bikin Kenyang
                  </h1>
                  <p class="hero-sub mt-5 max-w-lg text-sm leading-7 text-soft md:text-base">
                    Nasi kepal isi ayam gurih dengan rasa rumahan, praktis buat sarapan, bekal, sampai teman kerja yang nggak mau ribet.
                  </p>
                  <div class="hero-cta mt-8 flex flex-wrap gap-4">
                    <a href="#cta" class="rounded-full border border-brand px-6 py-3 text-sm font-semibold text-brand transition hover:bg-brand hover:text-white">
                      Pesan Sekarang
                    </a>
                    <a href="#menu" class="rounded-full border border-transparent px-4 py-3 text-sm font-medium text-soft transition hover:text-ink">
                      Lihat Menu ↓
                    </a>
                  </div>
                </div>
              </div>

              <div class="circle-blob absolute left-[8%] top-1/2 h-[270px] w-[270px] -translate-y-1/2 rounded-full bg-[#d99a52]/75 opacity-0 blur-[1px] md:h-[360px] md:w-[360px]"></div>
              <div class="circle-blob-small absolute left-[16%] top-[14%] h-16 w-16 rounded-full bg-brand/8 opacity-0"></div>
              <div class="circle-blob-large absolute right-[6%] top-[10%] h-24 w-24 rounded-full bg-brand/7 opacity-100"></div>

              <div class="product-wrap absolute left-1/2 top-1/2 z-20 w-[265px] -translate-x-[2%] -translate-y-[42%] md:w-[420px] lg:w-[500px]">
                <div class="product-shell floating-shadow">
                  <svg viewBox="0 0 420 300" xmlns="http://www.w3.org/2000/svg" aria-label="Ilustrasi nasi cokot">
                    <defs>
                      <linearGradient id="riceTop" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#ffffff" />
                        <stop offset="100%" stop-color="#ebe8e0" />
                      </linearGradient>
                      <linearGradient id="riceBottom" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#faf7f1" />
                        <stop offset="100%" stop-color="#dfdbd1" />
                      </linearGradient>
                      <linearGradient id="fillA" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#f09453" />
                        <stop offset="100%" stop-color="#c45121" />
                      </linearGradient>
                    </defs>
                    <ellipse cx="208" cy="252" rx="126" ry="18" fill="rgba(48,37,31,0.12)" />
                    <ellipse cx="210" cy="110" rx="108" ry="74" fill="url(#riceTop)" />
                    <ellipse cx="210" cy="118" rx="96" ry="62" fill="#f8f8f4" opacity="0.82" />
                    <path d="M115 145c26 8 60 13 95 13s68-5 95-13c14 9 23 21 23 33 0 10-5 19-15 28-21 8-55 18-103 18s-82-10-103-18c-10-9-15-18-15-28 0-12 9-24 23-33Z" fill="url(#fillA)" />
                    <path d="M102 163c32 24 63 33 108 33s76-9 108-33" fill="none" stroke="#f2a25f" stroke-width="8" stroke-linecap="round" opacity="0.85" />
                    <path d="M118 174c21 8 38 11 92 11s71-3 92-11" fill="none" stroke="#8e341a" stroke-width="6" stroke-linecap="round" opacity="0.55" />
                    <ellipse cx="210" cy="210" rx="116" ry="42" fill="url(#riceBottom)" />
                    <ellipse cx="210" cy="204" rx="104" ry="30" fill="#f4f0e7" opacity="0.95" />
                    <circle cx="199" cy="82" r="6" fill="#c45121" />
                    <circle cx="211" cy="74" r="8" fill="#e07a2d" />
                    <circle cx="223" cy="83" r="6" fill="#c45121" />
                    <circle cx="216" cy="92" r="5" fill="#f2b04b" />
                  </svg>
                </div>
              </div>

              <div class="taste-copy absolute right-0 top-1/2 z-30 w-full max-w-[520px] -translate-y-1/2 pt-16 opacity-0 md:w-[42%] md:pt-24">
                <p class="mb-4 inline-flex rounded-full bg-white/80 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.24em] text-brand shadow-sm">
                  Kenapa Nasi Cokot?
                </p>
                <h2 class="text-3xl font-extrabold leading-tight text-ink md:text-5xl">
                  Nikmat di setiap <br />gigitan!
                </h2>
                <p class="mt-5 max-w-md text-sm leading-7 text-soft md:text-base">
                  Kami menggabungkan nasi pulen, ayam berbumbu hangat, dan tampilan yang ringkas supaya produk terasa cepat, akrab, dan gampang diingat.
                </p>
                <div class="mt-7 grid max-w-md grid-cols-2 gap-3 text-left">
                  <div class="rounded-3xl border border-white/60 bg-white/70 p-4 shadow-sm backdrop-blur">
                    <p class="text-2xl font-extrabold text-brand">+3k</p>
                    <p class="mt-1 text-sm text-soft">porsi terjual</p>
                  </div>
                  <div class="rounded-3xl border border-white/60 bg-white/70 p-4 shadow-sm backdrop-blur">
                    <p class="text-2xl font-extrabold text-brand">15m</p>
                    <p class="mt-1 text-sm text-soft">siap saji</p>
                  </div>
                </div>
              </div>

              <div id="menu" class="menu-block absolute inset-x-0 bottom-[12%] z-30 opacity-0">
                <div class="menu-head mb-8 text-center">
                  <p class="mb-3 text-xs font-semibold uppercase tracking-[0.28em] text-brand">Pilihan Favorit</p>
                  <h2 class="text-3xl font-extrabold text-ink md:text-5xl">Menu Kami</h2>
                  <p class="mx-auto mt-3 max-w-xl text-sm text-soft md:text-base">Dibuat ringkas, gampang dipilih, dan tetap terlihat hidup saat di-scroll.</p>
                </div>

                <div class="mx-auto grid max-w-5xl gap-4 md:grid-cols-3 md:gap-6">
                  <article class="menu-card rounded-[30px] bg-tealCard px-5 pb-5 pt-6 shadow-soft">
                    <div class="mb-4 w-28">
                      <div class="scale-[0.58] origin-top-left">
                        <div class="product-shell">
                          <svg viewBox="0 0 420 300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <ellipse cx="208" cy="252" rx="126" ry="18" fill="rgba(48,37,31,0.12)" />
                            <ellipse cx="210" cy="110" rx="108" ry="74" fill="#f7f6f2" />
                            <path d="M115 145c26 8 60 13 95 13s68-5 95-13c14 9 23 21 23 33 0 10-5 19-15 28-21 8-55 18-103 18s-82-10-103-18c-10-9-15-18-15-28 0-12 9-24 23-33Z" fill="#cf6232" />
                            <ellipse cx="210" cy="210" rx="116" ry="42" fill="#f1eee7" />
                            <circle cx="211" cy="74" r="8" fill="#e07a2d" />
                          </svg>
                        </div>
                      </div>
                    </div>
                    <h3 class="text-lg font-bold">Nasi Cokot Original</h3>
                    <p class="mt-2 text-sm leading-6 text-ink/75">Isi ayam gurih dengan rasa aman buat semua lidah.</p>
                    <div class="mt-5 flex items-center justify-between text-sm">
                      <span class="font-semibold text-ink">Rp10.000</span>
                      <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-medium">Best Seller</span>
                    </div>
                  </article>

                  <article class="menu-card rounded-[30px] bg-coralCard px-5 pb-5 pt-6 shadow-soft md:translate-y-8">
                    <div class="mb-4 w-28">
                      <div class="scale-[0.58] origin-top-left">
                        <div class="product-shell">
                          <svg viewBox="0 0 420 300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <ellipse cx="208" cy="252" rx="126" ry="18" fill="rgba(48,37,31,0.12)" />
                            <ellipse cx="210" cy="110" rx="108" ry="74" fill="#f7f6f2" />
                            <path d="M115 145c26 8 60 13 95 13s68-5 95-13c14 9 23 21 23 33 0 10-5 19-15 28-21 8-55 18-103 18s-82-10-103-18c-10-9-15-18-15-28 0-12 9-24 23-33Z" fill="#b94924" />
                            <path d="M118 174c21 8 38 11 92 11s71-3 92-11" fill="none" stroke="#7f2217" stroke-width="6" stroke-linecap="round" opacity="0.55" />
                            <ellipse cx="210" cy="210" rx="116" ry="42" fill="#f1eee7" />
                            <circle cx="211" cy="74" r="8" fill="#e07a2d" />
                          </svg>
                        </div>
                      </div>
                    </div>
                    <h3 class="text-lg font-bold">Nasi Cokot Pedas</h3>
                    <p class="mt-2 text-sm leading-6 text-ink/75">Ayam pedas hangat buat yang suka rasa lebih nendang.</p>
                    <div class="mt-5 flex items-center justify-between text-sm">
                      <span class="font-semibold text-ink">Rp12.000</span>
                      <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-medium">Hot Pick</span>
                    </div>
                  </article>

                  <article class="menu-card rounded-[30px] bg-mangoCard px-5 pb-5 pt-6 shadow-soft">
                    <div class="mb-4 w-28">
                      <div class="drink-shell w-[88px]">
                        <svg viewBox="0 0 150 240" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <ellipse cx="74" cy="214" rx="35" ry="10" fill="rgba(48,37,31,0.12)" />
                          <path d="M36 34h75l-8 148c-1.2 20-11 32-28 32H72c-18 0-27-12-28-32L36 34Z" fill="#eca344" />
                          <path d="M42 50h63l-4 48c-8 6-18 10-28 10-13 0-24-5-32-12l1-46Z" fill="#ffd290" opacity="0.85" />
                          <path d="M54 12h10l12 30h-10L54 12Z" fill="#f5f2ec" />
                          <path d="M84 12h10L82 42H72l12-30Z" fill="#f5f2ec" />
                          <ellipse cx="73" cy="34" rx="39" ry="8" fill="#f7e3b6" />
                          <ellipse cx="73" cy="34" rx="31" ry="5" fill="#fff2d0" opacity="0.8" />
                        </svg>
                      </div>
                    </div>
                    <h3 class="text-lg font-bold">Es Teh Manis</h3>
                    <p class="mt-2 text-sm leading-6 text-ink/75">Teman paling aman buat nemenin nasi cokot kapan pun.</p>
                    <div class="mt-5 flex items-center justify-between text-sm">
                      <span class="font-semibold text-ink">Rp5.000</span>
                      <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-medium">Bundle</span>
                    </div>
                  </article>
                </div>
              </div>

              <div id="cta" class="final-copy absolute right-0 top-1/2 z-30 w-full max-w-[520px] -translate-y-1/2 opacity-0 md:w-[42%]">
                <p class="mb-4 text-xs font-semibold uppercase tracking-[0.28em] text-brand">Call To Action</p>
                <h2 class="text-3xl font-extrabold leading-tight text-ink md:text-5xl">
                  Segera Rasakan <br />Kenikmatannya!
                </h2>
                <p class="mt-5 max-w-md text-sm leading-7 text-soft md:text-base">
                  Landing page ini sengaja dibikin dengan pola scroll yang terasa presentasional: produk jadi fokus utama, lalu manfaat, menu, dan penutup muncul berurutan.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                  <a href="https://wa.me/6281234567890" class="rounded-full border border-brand px-6 py-3 text-sm font-semibold text-brand transition hover:bg-brand hover:text-white">
                    Pesan Sekarang
                  </a>
                  <a href="#hero" class="rounded-full px-4 py-3 text-sm font-medium text-soft transition hover:text-ink">
                    Kembali ke atas ↑
                  </a>
                </div>
              </div>
            </div>
          </div>

          <footer class="footer-band absolute inset-x-0 bottom-0 z-40 translate-y-full bg-footer px-6 py-7 text-white">
            <div class="mx-auto flex max-w-6xl flex-col items-start justify-between gap-5 md:flex-row md:items-center">
              <div>
                <p class="text-sm font-semibold tracking-[0.24em]">Nasi Cokot ID</p>
                <p class="mt-2 text-xs text-white/75">Praktis, gurih, dan siap jadi hero product di landing page kamu.</p>
              </div>
              <div class="text-left text-xs text-white/85 md:text-right">
                <p>@nasicokot.id</p>
                <p>WhatsApp: 0812-3456-7890</p>
              </div>
            </div>
          </footer>
        </div>
      </section>

      <section class="bg-footer px-6 py-12 text-center text-xs text-white/70">
        Area ekstra ini sengaja pendek supaya scroll setelah animasi utama tetap terasa selesai, tidak patah mendadak.
      </section>
    </main>

    <script>
      gsap.registerPlugin(ScrollTrigger);

      const navItems = document.querySelectorAll('.nav-item');
      const navIndicator = document.getElementById('navIndicator');
      const navMenu = document.getElementById('navMenu');

      function moveIndicator(target) {
        if (!target || !navIndicator || !navMenu) return;
        const targetRect = target.getBoundingClientRect();
        const menuRect = navMenu.getBoundingClientRect();
        navIndicator.style.width = `${targetRect.width}px`;
        navIndicator.style.height = `${targetRect.height}px`;
        navIndicator.style.transform = `translateX(${targetRect.left - menuRect.left}px)`;
      }

      navItems.forEach((item, index) => {
        if (index === 0) {
          item.classList.add('text-ink');
          moveIndicator(item);
        }

        item.addEventListener('mouseenter', () => moveIndicator(item));
        item.addEventListener('click', () => {
          navItems.forEach((link) => link.classList.remove('text-ink'));
          item.classList.add('text-ink');
          moveIndicator(item);
        });
      });

      navMenu.addEventListener('mouseleave', () => {
        const activeItem = [...navItems].find((item) => item.classList.contains('text-ink')) || navItems[0];
        moveIndicator(activeItem);
      });

      window.addEventListener('resize', () => {
        const activeItem = [...navItems].find((item) => item.classList.contains('text-ink')) || navItems[0];
        moveIndicator(activeItem);
        ScrollTrigger.refresh();
      });

      gsap.set('.product-wrap', {
        xPercent: 8,
        yPercent: -4,
        scale: 1,
      });

      gsap.from('.nav-shell', {
        y: -28,
        autoAlpha: 0,
        duration: 0.8,
        ease: 'power3.out',
      });

      gsap.from(['.hero-kicker', '.hero-title', '.hero-sub', '.hero-cta'], {
        y: 28,
        autoAlpha: 0,
        stagger: 0.1,
        duration: 0.9,
        ease: 'power3.out',
        delay: 0.15,
      });

      gsap.from('.product-wrap', {
        x: 60,
        autoAlpha: 0,
        scale: 0.82,
        duration: 1.2,
        ease: 'power3.out',
        delay: 0.15,
      });

      const desktop = window.matchMedia('(min-width: 1024px)').matches;

      if (desktop) {
        const storyTl = gsap.timeline({
          scrollTrigger: {
            trigger: '#hero',
            start: 'top top',
            end: 'bottom bottom',
            scrub: 1.1,
          },
        });

        storyTl
          .to('.hero-copy', {
            autoAlpha: 0,
            x: -160,
            duration: 1,
          }, 0.35)
          .to('.product-wrap', {
            xPercent: -26,
            yPercent: -2,
            scale: 1.2,
            duration: 1.2,
            ease: 'none',
          }, 0.35)
          .to('.circle-blob', {
            autoAlpha: 1,
            scale: 1,
            duration: 0.9,
          }, 1.15)
          .to('.circle-blob-small', {
            autoAlpha: 1,
            scale: 1,
            duration: 0.7,
          }, 1.2)
          .fromTo('.taste-copy', {
            autoAlpha: 0,
            x: 120,
          }, {
            autoAlpha: 1,
            x: 0,
            duration: 0.9,
          }, 1.25)
          .to('.product-wrap', {
            xPercent: -88,
            yPercent: 0,
            scale: 0.92,
            duration: 0.9,
            ease: 'none',
          }, 1.35)
          .to('.story-bg', {
            backgroundColor: '#fffdfa',
            duration: 0.8,
          }, 1.25)
          .to('.taste-copy', {
            autoAlpha: 0,
            x: 80,
            duration: 0.7,
          }, 2.35)
          .to('.circle-blob', {
            xPercent: -38,
            yPercent: 42,
            scale: 0.66,
            duration: 1,
            ease: 'none',
          }, 2.45)
          .to('.circle-blob-small', {
            autoAlpha: 0,
            duration: 0.5,
          }, 2.45)
          .to('.beige-panel', {
            height: '100%',
            duration: 1,
            ease: 'power1.inOut',
          }, 2.45)
          .fromTo('.menu-block', {
            autoAlpha: 0,
            y: 120,
          }, {
            autoAlpha: 1,
            y: 0,
            duration: 1,
          }, 2.95)
          .from('.menu-card', {
            autoAlpha: 0,
            y: 100,
            rotate: (index) => [-6, 0, 6][index],
            stagger: 0.12,
            duration: 0.9,
          }, 3.05)
          .to('.product-wrap', {
            xPercent: -122,
            yPercent: 44,
            scale: 0.58,
            duration: 1,
            ease: 'none',
          }, 2.95)
          .to('.menu-card', {
            autoAlpha: 0,
            y: -40,
            stagger: 0.08,
            duration: 0.45,
          }, 4.15)
          .to('.menu-head', {
            autoAlpha: 0,
            y: -30,
            duration: 0.45,
          }, 4.15)
          .fromTo('.final-copy', {
            autoAlpha: 0,
            x: 120,
          }, {
            autoAlpha: 1,
            x: 0,
            duration: 0.9,
          }, 4.2)
          .to('.product-wrap', {
            xPercent: -110,
            yPercent: 55,
            scale: 0.76,
            duration: 0.9,
            ease: 'none',
          }, 4.2)
          .to('.footer-band', {
            yPercent: 0,
            duration: 0.8,
          }, 4.55);
      } else {
        gsap.set(['.taste-copy', '.menu-block', '.final-copy', '.footer-band'], { clearProps: 'all' });

        gsap.utils.toArray(['.taste-copy', '.menu-block', '.final-copy']).forEach((item) => {
          gsap.fromTo(item, {
            autoAlpha: 0,
            y: 40,
          }, {
            autoAlpha: 1,
            y: 0,
            duration: 0.8,
            scrollTrigger: {
              trigger: item,
              start: 'top 80%',
            },
          });
        });
      }

      const sections = [
        { id: 'hero', el: document.querySelector('a[href="#hero"]') },
        { id: 'menu', el: document.querySelector('a[href="#menu"]') },
        { id: 'cta', el: document.querySelector('a[href="#cta"]') },
      ];

      sections.forEach((section) => {
        const target = document.getElementById(section.id);
        if (!target || !section.el) return;

        ScrollTrigger.create({
          trigger: target,
          start: 'top center',
          end: 'bottom center',
          onEnter: () => {
            navItems.forEach((link) => link.classList.remove('text-ink'));
            section.el.classList.add('text-ink');
            moveIndicator(section.el);
          },
          onEnterBack: () => {
            navItems.forEach((link) => link.classList.remove('text-ink'));
            section.el.classList.add('text-ink');
            moveIndicator(section.el);
          },
        });
      });
    </script>
  </body>
</html>