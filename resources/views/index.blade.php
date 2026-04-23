<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasicokot-ID</title>
    <link rel="icon" type="image/png" href="{{ asset('img/Nasicokot.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>
<style>
    html,
    body {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    html::-webkit-scrollbar,
    body::-webkit-scrollbar {
        display: none;
    }
</style>

<body class="font-['Inter'] text-[#3D3427] [-ms-overflow-style:none] ">
    <div
        id="navWrapper"
        class="fixed top-5 left-1/2 z-50 flex w-[92%] max-w-[1400px] -translate-x-1/2 items-center justify-between transition-transform duration-300 ease-in-out">
        <a href="#" class="shrink-0">
            <img
                src="{{ asset('img/Nasicokot.png') }}"
                alt="Logo"
                class="h-20 w-20 rounded-full object-cover" />
        </a>

        <nav class="rounded-full bg-white px-2 py-2 shadow-lg">
            <div id="navMenu" class="relative flex items-center gap-1 whitespace-nowrap">
                <span
                    id="highlight"
                    class="absolute top-0 bottom-0 left-0 rounded-full bg-[#321c04]/10 transition-all duration-300 ease-in-out"></span>

                <a
                    href="index.html"
                    class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]">
                    Beranda
                </a>

                <a
                    href="./photobooth/photobooth.html"
                    class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]">
                    Menu
                </a>

                <a
                    href="contact.html"
                    class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]">
                    Pesan
                </a>
            </div>
        </nav>
    </div>

    <section class="relative min-h-screen overflow-hidden bg-[#efefef] px-6 pt-32 md:px-12 lg:px-16">
        <div class="mx-auto flex min-h-[calc(100vh-8rem)] max-w-7xl flex-col items-center justify-center gap-10 lg:flex-row lg:gap-16">

            <div class="w-full lg:w-1/2">
                <h1 class="max-w-[700px] text-4xl font-bold leading-tight text-[#2b2b2b] md:text-5xl lg:text-[64px]">
                    Simple, Murah, Bikin Kenyang
                </h1>

                <p class="mt-5 max-w-[680px] text-lg leading-relaxed text-[#2b2b2b] md:text-2xl">
                    Nasi Cokot kekinian mulai 5K. Cocok untuk sekolah, kerja, atau santai.
                </p>

                <a
                    href="./photobooth/photobooth.html"
                    class="mt-10 inline-flex rounded-full border-2 border-red-500 px-10 py-4 text-xl font-medium text-red-500 transition duration-300 hover:bg-red-500 hover:text-white">
                    Pesan Sekarang!
                </a>
            </div>

            <div class="relative flex w-full items-center justify-center overflow-visible lg:w-1/2 lg:justify-center">
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
                        class="w-[290px] max-w-none object-contain drop-shadow-[0_20px_25px_rgba(0,0,0,0.2)] md:w-[360px]" />
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-bold leading-tight text-[#2b2b2b] md:text-5xl lg:text-[55px]">
                    Nikmat di setiap <br> gigitan!
                </h2>

                <p class="mt-6 max-w-[620px] text-lg leading-[1.8] text-[#2b2b2b] md:text-[22px]">
                    Kami menyajikan nasi cokot yang disajikan dengan hangat.
                    Dengan memperhatikan rasa di setiap gigitan,
                    Kami berkomitmen untuk membuat Anda menikmati nasi
                    cokot kami setulusnya~
                </p>
            </div>
        </div>
    </section>

    


























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

            item.addEventListener("click", (e) => {
                activeIndex = index;
                moveHighlight(activeIndex);
            });
        });

        if (navMenu) {
            navMenu.addEventListener("mouseleave", () => {
                moveHighlight(activeIndex);
            });
        }

        window.addEventListener("load", () => moveHighlight(activeIndex));
        window.addEventListener("resize", () => moveHighlight(activeIndex));

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

        const marquee = document.getElementById("marquee");

        if (marquee) {
            let offset = 0;
            const speed = 0.8;

            function animateMarquee() {
                const firstTrack = marquee.querySelector(".marquee-track");
                if (!firstTrack) return;

                offset -= speed;

                const trackWidth = firstTrack.offsetWidth;

                if (Math.abs(offset) >= trackWidth) {
                    offset = 0;
                }

                marquee.style.transform = `translateX(${offset}px)`;
                requestAnimationFrame(animateMarquee);
            }

            animateMarquee();
        }

        // --- Carousel Navigation Logic ---
        const carouselTrack = document.getElementById("carouselTrack");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        if (carouselTrack && prevBtn && nextBtn) {
            // Function to calculate how far to scroll (1 card width + gap)
            const getScrollAmount = () => {
                const card = carouselTrack.querySelector('.carousel-card');
                // Card width + the 24px gap between cards
                return card.offsetWidth + 24;
            };

            nextBtn.addEventListener("click", () => {
                carouselTrack.scrollBy({
                    left: getScrollAmount(),
                    behavior: "smooth"
                });
            });

            prevBtn.addEventListener("click", () => {
                carouselTrack.scrollBy({
                    left: -getScrollAmount(),
                    behavior: "smooth"
                });
            });
        }
    </script>
</body>

</html>