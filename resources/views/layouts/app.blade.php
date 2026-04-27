<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SepedaKu - Toko Sepeda Online')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .bg-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar Sticky -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-bicycle text-3xl text-blue-600"></i>
                        <span class="ml-2 text-xl font-bold text-gray-800">Sepeda<span class="text-blue-600">Ku</span></span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition duration-300 font-medium {{ request()->routeIs('home') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">Beranda</a>
                    <a href="{{ route('products') }}" class="text-gray-700 hover:text-blue-600 transition duration-300 font-medium {{ request()->routeIs('products') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">Produk</a>
                    <a href="{{ route('location') }}" class="text-gray-700 hover:text-blue-600 transition duration-300 font-medium {{ request()->routeIs('location') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">Lokasi Toko</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 transition duration-300 font-medium {{ request()->routeIs('contact') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">Kontak Kami</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="{{ route('products') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600">Produk</a>
                <a href="{{ route('location') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600">Lokasi Toko</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600">Kontak Kami</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-bicycle text-2xl text-blue-400"></i>
                        <span class="ml-2 text-xl font-bold">SepedaKu</span>
                    </div>
                    <p class="text-gray-400">Toko sepeda terpercaya dengan berbagai pilihan sepeda berkualitas untuk semua kebutuhan Anda.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-400 transition">Beranda</a></li>
                        <li><a href="{{ route('products') }}" class="hover:text-blue-400 transition">Produk</a></li>
                        <li><a href="{{ route('location') }}" class="hover:text-blue-400 transition">Lokasi Toko</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-blue-400 transition">Kontak Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> +62 123 4567 890</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@sepedaku.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition text-2xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition text-2xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition text-2xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition text-2xl"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 SepedaKu. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if(mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
