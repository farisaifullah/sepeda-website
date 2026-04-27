@extends('layouts.app')

@section('title', 'Lokasi Toko - SepedaKu')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Lokasi Toko</h1>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                <p class="text-gray-600 mt-4">Kunjungi toko fisik kami di lokasi berikut</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="flex items-start mb-4">
                            <i class="fas fa-store text-3xl text-blue-600 mr-4"></i>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Toko Pusat</h3>
                                <p class="text-gray-600 mb-2">Jl. Raya Sepeda No. 123</p>
                                <p class="text-gray-600 mb-2">Jakarta Selatan, 12345</p>
                                <p class="text-gray-600">Tel: (021) 1234-5678</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="flex items-start mb-4">
                            <i class="fas fa-store text-3xl text-blue-600 mr-4"></i>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Cabang Bandung</h3>
                                <p class="text-gray-600 mb-2">Jl. Sepeda Indah No. 45</p>
                                <p class="text-gray-600 mb-2">Bandung, 40123</p>
                                <p class="text-gray-600">Tel: (022) 8765-4321</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-start mb-4">
                            <i class="fas fa-clock text-3xl text-blue-600 mr-4"></i>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Jam Operasional</h3>
                                <p class="text-gray-600">Senin - Jumat: 09:00 - 20:00</p>
                                <p class="text-gray-600">Sabtu: 10:00 - 18:00</p>
                                <p class="text-gray-600">Minggu: Tutup</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white rounded-lg shadow-md p-4 h-96">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81956101476909!3d-6.194741395516317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6d316e4f5f5%3A0xb9f3e0f5b5e5f5f5!2sJakarta!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            class="rounded-lg">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
