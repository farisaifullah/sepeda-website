@extends('layouts.app')

@section('title', 'Produk - SepedaKu')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Produk Kami</h1>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                <p class="text-gray-600 mt-4">Pilihan sepeda terbaik untuk Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $products = [
                        [
                            'name' => 'Sepeda Gunung',
                            'price' => 'Rp 5.000.000',
                            'image' => asset('images/mountain.jpg'),
                            'description' => 'Cocok untuk medan berat',
                        ],
                        [
                            'name' => 'Sepeda Lipat',
                            'price' => 'Rp 3.500.000',
                            'image' => asset('images/folding.jpg'),
                            'description' => 'Praktis dan mudah dibawa',
                        ],
                        [
                            'name' => 'Sepeda Balap',
                            'price' => 'Rp 8.000.000',
                            'image' => asset('images/racing.jpg'),
                            'description' => 'Kecepatan maksimal',
                        ],
                        [
                            'name' => 'Sepeda BMX',
                            'price' => 'Rp 4.500.000',
                            'image' => asset('images/bmx.jpg'),
                            'description' => 'Untuk gaya dan trik',
                        ],
                        [
                            'name' => 'Sepeda Listrik',
                            'price' => 'Rp 12.000.000',
                            'image' => asset('images/electric.jpg'),
                            'description' => 'Dengan motor bantuan',
                        ],
                        [
                            'name' => 'Sepeda Anak',
                            'price' => 'Rp 2.500.000',
                            'image' => asset('images/kids.jpg'),
                            'description' => 'Aman untuk si kecil',
                        ],
                    ];
                @endphp

                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover-scale">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $product['name'] }}</h3>
                            <p class="text-gray-600 mb-4">{{ $product['description'] }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">{{ $product['price'] }}</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                    Beli Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
