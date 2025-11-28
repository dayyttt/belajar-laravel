@extends('layouts.app')
@section('content')
    <section id="plans" class="py-20 bg-[#f5f2e8]">
            <div class="container mx-auto px-4">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Rencana Harga yang Fleksibel</h2>
                    <p class="text-lg text-gray-600">Pilih paket yang paling sesuai dengan kebutuhan dan skala bisnis Anda.</p>
                </div>
                
                <!-- Pricing Cards Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-stretch">
                    
                    <!-- Card 1: Basic -->
                    <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 h-full flex flex-col transition duration-300 hover:shadow-2xl">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Basic</h3>
                        <p class="text-gray-600 mb-6">Untuk pengguna individu.</p>
                        
                        <div class="flex items-end mb-6">
                            <span class="text-5xl font-extrabold text-gray-900">$0</span>
                            <span class="text-gray-500 ml-2">/ selamanya</span>
                        </div>
                        
                        <ul class="list-none space-y-3 flex-grow">
                            <li class="flex items-start text-gray-700"><i class="fas fa-check-circle w-5 h-5 text-green-500 mr-2 flex-shrink-0"></i> 1 Pengguna</li>
                            <li class="flex items-start text-gray-700"><i class="fas fa-check-circle w-5 h-5 text-green-500 mr-2 flex-shrink-0"></i> 100 Tugas Otomatisasi</li>
                            <li class="flex items-start text-gray-700"><i class="fas fa-check-circle w-5 h-5 text-green-500 mr-2 flex-shrink-0"></i> Penyimpanan 1GB</li>
                            <li class="flex items-start text-gray-700 opacity-50"><i class="fas fa-times-circle w-5 h-5 text-red-500 mr-2 flex-shrink-0"></i> Dukungan Premium</li>
                        </ul>
                        
                        <div class="mt-8">
                            <a href="#contact" class="w-full py-3 rounded-xl font-semibold border border-gray-400 text-gray-700 hover:bg-gray-50 text-center block transition duration-300">
                                Mulai Gratis
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Pro (Highlighted) -->
                    <div class="bg-white/80 backdrop-blur-sm p-10 rounded-2xl shadow-2xl border-4 border-lime-500 relative z-10 transform scale-[1.03] shadow-lime-400/30 h-full flex flex-col transition duration-300">
                        <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-lime-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-md whitespace-nowrap">
                            PILIHAN TERBAIK
                        </span>
                        
                        <h3 class="text-4xl font-extrabold text-gray-900 mb-3">Pro</h3>
                        <p class="text-gray-600 mb-6">Untuk tim yang sedang berkembang.</p>
                        
                        <div class="flex items-end mb-6">
                            <span class="text-6xl font-extrabold text-gray-900">$49</span>
                            <span class="text-gray-500 ml-2">/ bulan</span>
                        </div>
                        
                        <ul class="list-none space-y-3 flex-grow">
                            <li class="flex items-start text-gray-800"><i class="fas fa-check-circle w-5 h-5 text-lime-600 mr-2 flex-shrink-0"></i> Hingga 10 Pengguna</li>
                            <li class="flex items-start text-gray-800"><i class="fas fa-check-circle w-5 h-5 text-lime-600 mr-2 flex-shrink-0"></i> Otomatisasi Tanpa Batas</li>
                            <li class="flex items-start text-gray-800"><i class="fas fa-check-circle w-5 h-5 text-lime-600 mr-2 flex-shrink-0"></i> Penyimpanan 500GB</li>
                            <li class="flex items-start text-gray-800"><i class="fas fa-check-circle w-5 h-5 text-lime-600 mr-2 flex-shrink-0"></i> Dukungan Prioritas 24/7</li>
                        </ul>
                        
                        <div class="mt-8">
                            <a href="#contact" class="gradient-button w-full py-3 rounded-xl font-semibold text-white text-center block">
                                Upgrade ke Pro
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Enterprise -->
                    <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 h-full flex flex-col transition duration-300 hover:shadow-2xl">
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">Enterprise</h3>
                        <p class="text-gray-600 mb-6">Untuk kebutuhan korporasi besar.</p>
                        
                        <div class="flex items-end mb-6">
                            <span class="text-5xl font-extrabold text-gray-900">Kustom</span>
                        </div>
                        
                        <ul class="list-none space-y-3 flex-grow">
                            <li class="flex items-start text-gray-700"><i class="fas fa-check-circle w-5 h-5 text-green-500 mr-2 flex-shrink-0"></i> Pengguna Tak Terbatas</li>
                            <li class="flex items-start text-gray-700"><i class="fas fa-check-circle w-5 h-5 text-green-500 mr-2 flex-shrink-0"></i> Kepatuhan Keamanan Khusus</li>
                            <li class="flex items-start text-gray-700"><i class="fas fa-check-circle w-5 h-5 text-green-500 mr-2 flex-shrink-0"></i> Solusi Kustomisasi</li>
                            <li class="flex items-start text-gray-700"><i class="fas fa-check-circle w-5 h-5 text-green-500 mr-2 flex-shrink-0"></i> Manajer Akun Khusus</li>
                        </ul>
                        
                        <div class="mt-8">
                            <a href="#contact" class="w-full py-3 rounded-xl font-semibold border border-indigo-500 text-indigo-600 hover:bg-indigo-50 text-center block transition duration-300">
                                Hubungi Penjualan
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection