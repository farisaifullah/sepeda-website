@extends('layouts.app')

@section('title', 'Kontak Kami - SepedaKu')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Kontak Kami</h1>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                <p class="text-gray-600 mt-4">Hubungi kami untuk informasi lebih lanjut</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="mb-6">
                            <i class="fas fa-phone-alt text-3xl text-blue-600 mb-4"></i>
                            <h3 class="text-xl font-semibold mb-2">Telepon</h3>
                            <p class="text-gray-600">+62 123 4567 890</p>
                            <p class="text-gray-600">+62 812 3456 7890</p>
                        </div>
                        <div class="mb-6">
                            <i class="fas fa-envelope text-3xl text-blue-600 mb-4"></i>
                            <h3 class="text-xl font-semibold mb-2">Email</h3>
                            <p class="text-gray-600">info@sepedaku.com</p>
                            <p class="text-gray-600">cs@sepedaku.com</p>
                        </div>
                        <div>
                            <i class="fab fa-whatsapp text-3xl text-blue-600 mb-4"></i>
                            <h3 class="text-xl font-semibold mb-2">WhatsApp</h3>
                            <p class="text-gray-600">+62 812 3456 7890</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-2xl font-semibold mb-4">Kirim Pesan</h2>
                        <form>
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                                    placeholder="Masukkan nama Anda">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Email</label>
                                <input type="email"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                                    placeholder="Masukkan email Anda">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 mb-2">Pesan</label>
                                <textarea rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                                    placeholder="Tulis pesan Anda"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
