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

<body class="font-['Inter'] text-[#3D3427] [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
<div
    id="navWrapper"
    class="fixed top-5 left-1/2 z-50 flex w-[92%] max-w-[1300px] -translate-x-1/2 items-center justify-between transition-transform duration-300 ease-in-out"
>
    <a href="#" class="shrink-0">
        <img
            src="{{ asset('img/Nasicokot.png') }}"
            alt="Logo"
            class="h-20 w-20 rounded-full object-cover"
        />
    </a>

    <nav class="rounded-full bg-white px-2 py-2 shadow-lg">
        <div id="navMenu" class="relative flex items-center gap-1 whitespace-nowrap">
            <span
                id="highlight"
                class="absolute top-0 bottom-0 left-0 rounded-full bg-[#321c04]/10 transition-all duration-300 ease-in-out"
            ></span>

            <a
                href="index.html"
                class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]"
            >
                Beranda
            </a>

            <a
                href="./photobooth/photobooth.html"
                class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]"
            >
                Menu
            </a>

            <a
                href="contact.html"
                class="nav-item relative z-10 block rounded-full px-5 py-3 text-[15px] font-medium text-[#321c04]"
            >
                Pesan
            </a>
        </div>
    </nav>
</div>

<section>
    <div class="relative h-screen w-full overflow-hidden">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-black px-4">
                <h1 class="text-4xl text-black md:text-6xl font-bold mb-4">Selamat Datang di Nasicokot-ID</h1>
                <p class="text-lg text-black md:text-2xl mb-8">Nikmati cita rasa nasi kotak terbaik untuk setiap acara Anda!</p>
                <a href="./photobooth/photobooth.html" class="inline-block rounded-full bg-[#321c04] px-6 py-3 text-lg font-medium text-white hover:bg-[#321c04]/90 transition-colors duration-300">Lihat Menu</a>
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