@extends('layouts.app')

@section('title', 'SepedaKu - Toko Sepeda Online Terpercaya')

@section('content')
    <!-- Hero Carousel Full Image -->
    <div class="relative h-[480px] md:h-[550px] overflow-hidden">
        <!-- Carousel Container -->
        <div id="hero-carousel" class="relative w-full h-full">

            <!-- Slide 1 - Sepeda Gunung -->
            <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out">
                <div class="absolute inset-0 bg-black/50 z-10"></div>
                <img src="{{ asset('images/s5.jpg') }}" alt="Sepeda Gunung" class="w-full h-full object-cover">
                <div class="absolute inset-0 z-20 flex items-center justify-center text-center text-white px-4">
                    <div class="max-w-3xl mx-auto">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-fade-in-up">
                            Jelajahi Alam Dengan Sepeda Gunung
                        </h1>
                        <p class="text-lg md:text-xl mb-8 animate-fade-in-up animation-delay-200">
                            Rasakan sensasi petualangan sejati dengan koleksi sepeda gunung terbaik kami.
                            Dari pemula hingga profesional, semua tersedia di sini.
                        </p>
                        <div class="flex justify-center space-x-4 animate-fade-in-up animation-delay-400">
                            <a href="{{ route('products') }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                Lihat Produk
                            </a>
                            <a href="{{ route('contact') }}"
                                class="bg-white hover:bg-gray-100 text-gray-800 px-6 py-3 rounded-lg font-semibold transition duration-300">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 - Sepeda Lipat -->
            <div
                class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-0">
                <div class="absolute inset-0 bg-black/50 z-10"></div>
                <img src="{{ asset('images/s1.jpg') }}" alt="Sepeda Lipat" class="w-full h-full object-cover">
                <div class="absolute inset-0 z-20 flex items-center justify-center text-center text-white px-4">
                    <div class="max-w-3xl mx-auto">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">
                            Praktis Dengan Sepeda Lipat
                        </h1>
                        <p class="text-lg md:text-xl mb-8">
                            Mudah dilipat, dibawa kemana saja. Cocok untuk mobilitas perkotaan dan gaya hidup modern.
                            Hemat tempat, tetap stylish!
                        </p>
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('products') }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                Lihat Produk
                            </a>
                            <a href="{{ route('contact') }}"
                                class="bg-white hover:bg-gray-100 text-gray-800 px-6 py-3 rounded-lg font-semibold transition duration-300">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 - Sepeda Balap -->
            <div
                class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-0">
                <div class="absolute inset-0 bg-black/50 z-10"></div>
                <img src="{{ asset('images/s4.jpg') }}" alt="Sepeda Balap" class="w-full h-full object-cover">
                <div class="absolute inset-0 z-20 flex items-center justify-center text-center text-white px-4">
                    <div class="max-w-3xl mx-auto">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">
                            Kecepatan Tanpa Batas
                        </h1>
                        <p class="text-lg md:text-xl mb-8">
                            Rasakan kecepatan dan adrenalin dengan sepeda balap profesional kami.
                            Desain aerodinamis untuk performa maksimal.
                        </p>
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('products') }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                Lihat Produk
                            </a>
                            <a href="{{ route('contact') }}"
                                class="bg-white hover:bg-gray-100 text-gray-800 px-6 py-3 rounded-lg font-semibold transition duration-300">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 - Komunitas -->
            <div
                class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-0">
                <div class="absolute inset-0 bg-black/50 z-10"></div>
                <img src="{{ asset('images/s3.jpg') }}" alt="Komunitas Sepeda" class="w-full h-full object-cover">
                <div class="absolute inset-0 z-20 flex items-center justify-center text-center text-white px-4">
                    <div class="max-w-3xl mx-auto">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">
                            Bergabung Dengan Komunitas
                        </h1>
                        <p class="text-lg md:text-xl mb-8">
                            Bersama lebih seru! Ikuti event, touring, dan diskusi menarik bersama ribuan
                            pecinta sepeda di seluruh Indonesia.
                        </p>
                        <div class="flex justify-center space-x-4">
                            <a href="{{ route('contact') }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                Gabung Sekarang
                            </a>
                            <a href="{{ route('location') }}"
                                class="bg-white hover:bg-gray-100 text-gray-800 px-6 py-3 rounded-lg font-semibold transition duration-300">
                                Cari Event
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <button id="carousel-prev"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all duration-300 z-30">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="carousel-next"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all duration-300 z-30">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Indicator Dots -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 z-30">
            <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white/100 transition-all duration-300"
                data-slide="0"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white/100 transition-all duration-300"
                data-slide="1"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white/100 transition-all duration-300"
                data-slide="2"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white/100 transition-all duration-300"
                data-slide="3"></button>
        </div>
    </div>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .animation-delay-400 {
            animation-delay: 0.4s;
            opacity: 0;
        }
    </style>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        let autoSlideInterval;
        let isTransitioning = false;

        function showSlide(index) {
            if (isTransitioning) return;
            isTransitioning = true;

            // Hide all slides
            slides.forEach((slide, i) => {
                slide.style.opacity = '0';
            });

            // Show current slide
            setTimeout(() => {
                slides[index].style.opacity = '1';
                currentSlide = index;

                // Update dots
                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.add('bg-white');
                        dot.classList.remove('bg-white/50');
                    } else {
                        dot.classList.remove('bg-white');
                        dot.classList.add('bg-white/50');
                    }
                });

                setTimeout(() => {
                    isTransitioning = false;
                }, 700);
            }, 100);
        }

        function nextSlide() {
            if (isTransitioning) return;
            let next = currentSlide + 1;
            if (next >= slides.length) next = 0;
            showSlide(next);
        }

        function prevSlide() {
            if (isTransitioning) return;
            let prev = currentSlide - 1;
            if (prev < 0) prev = slides.length - 1;
            showSlide(prev);
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Event listeners
        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            nextBtn.addEventListener('click', () => {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            });
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                stopAutoSlide();
                startAutoSlide();
            });
        });

        // Start auto slide
        startAutoSlide();

        // Pause on hover
        const carouselContainer = document.getElementById('hero-carousel');
        if (carouselContainer) {
            carouselContainer.addEventListener('mouseenter', stopAutoSlide);
            carouselContainer.addEventListener('mouseleave', startAutoSlide);
        }

        // Show first slide
        showSlide(0);
    </script>

    <!-- Tentang Kami -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?w=500&h=400&fit=crop"
                        alt="Toko Sepeda" class="rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">SepedaKu - Mitra Bersepeda Anda</h3>
                    <p class="text-gray-600 mb-4">
                        Didirikan pada tahun 2020, SepedaKu hadir untuk memenuhi kebutuhan para penggemar sepeda di
                        Indonesia.
                        Kami menyediakan berbagai jenis sepeda dari merk-merk ternama dengan kualitas terbaik.
                    </p>
                    <p class="text-gray-600">
                        Dengan pelayanan yang ramah dan profesional, kami berkomitmen untuk memberikan pengalaman berbelanja
                        yang menyenangkan dan memuaskan bagi setiap pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Keunggulan -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Keunggulan Kami</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center hover-scale">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-truck text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Gratis Ongkir</h3>
                    <p class="text-gray-600">Gratis ongkir untuk pembelian di atas Rp 1.000.000</p>
                </div>
                <div class="text-center hover-scale">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Garansi Resmi</h3>
                    <p class="text-gray-600">Garansi resmi untuk semua produk yang dijual</p>
                </div>
                <div class="text-center hover-scale">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Layanan 24/7</h3>
                    <p class="text-gray-600">Layanan customer service siap membantu Anda</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Merk yang Bekerja Sama -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Merk yang Kami Jual</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                <p class="text-gray-600 mt-4">Merk-merk ternama pilihan terbaik untuk Anda</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center">
                <div class="text-center hover-scale">
                    <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-center h-24">
                        <img src="{{ asset('images/polygon.png') }}" alt="Polygon" class="max-h-16 object-contain">
                    </div>
                </div>
                <div class="text-center hover-scale">
                    <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-center h-24">
                        <img src="{{ asset('images/united.png') }}" alt="United" class="max-h-16 object-contain">
                    </div>
                </div>
                <div class="text-center hover-scale">
                    <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-center h-24">
                        <img src="{{ asset('images/giant.png') }}" alt="Giant" class="max-h-16 object-contain">
                    </div>
                </div>
                <div class="text-center hover-scale">
                    <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-center h-24">
                        <img src="{{ asset('images/specialized.png') }}" alt="Specialized"
                            class="max-h-16 object-contain">
                    </div>
                </div>
                <div class="text-center hover-scale">
                    <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-center h-24">
                        <img src="{{ asset('images/trek.png') }}" alt="Trek" class="max-h-16 object-contain">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kontak Kami Section -->
    <div class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Siap untuk Sepeda Baru?</h2>
            <p class="text-xl mb-8">Hubungi kami sekarang dan dapatkan penawaran terbaik!</p>
            <a href="{{ route('contact') }}"
                class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 inline-block">
                Kontak Kami
            </a>
        </div>
    </div>
@endsection
