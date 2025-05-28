@extends('layouts.auth')

@section('content')
    <title>Teman Fitness - Fitness Partner Gen-Z</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <body class="bg-gray-100 font-sans min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-white shadow-lg sticky top-0 z-50">
            <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
                <a href="#home" class="flex items-center">
                    <img src="{{ asset('Logo_Teman_Fitness.png') }}" alt="Teman Fitness Logo" class="h-10">
                </a>
                <button class="md:hidden text-gray-700 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <div class="hidden md:flex space-x-4">
                    <a href="#home" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition no-underline">Home</a>
                    <a href="#fitur" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition no-underline">Fitur</a>
                    <a href="#tentang" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition no-underline">Tentang</a>
                    <a href="#program" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition no-underline">Program</a>
                    <a href="#testimoni" class="px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md transition no-underline">Testimoni</a>
                    <a href="#download" class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-900 transition no-underline">Daftar</a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1">
            <!-- Hero Section -->
            <section id="home" class="relative bg-gray-800 text-white py-32">
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Fitness" class="w-full h-full object-cover opacity-50">
                </div>
                <div class="relative max-w-4xl mx-auto px-4 text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Bentuk Tubuh Ideal Bersama Teman Fitness</h1>
                    <p class="text-lg md:text-xl mb-6">Platform fitness Gen-Z untuk gaya hidup sehat yang seru dan terjangkau!</p>
                    <a href="#download" class="inline-block bg-white text-gray-800 px-6 py-3 rounded-md font-semibold hover:bg-gray-200 transition">Daftar Sekarang</a>
                </div>
            </section>

            <!-- Fitur Unggulan -->
            <section id="fitur" class="py-16 bg-gray-200">
                <div class="max-w-6xl mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Fitur Unggulan</h2>
                    <p class="text-center text-gray-600 mb-12">Kenapa memilih Teman Fitness?</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Mudah Dijangkau</h3>
                            <p class="text-gray-600">Dekat dengan pusat kota dan akses mudah dari segala arah.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Konsultan Profesional</h3>
                            <p class="text-gray-600">Membantu memilih program latihan yang sesuai kebutuhanmu.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Terakreditasi</h3>
                            <p class="text-gray-600">Fasilitas dan pelatih bersertifikat dengan standar tinggi.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tentang Kami -->
            <section id="tentang" class="py-16 bg-white">
                <div class="max-w-6xl mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Tentang Teman Fitness</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tentang Kami" class="w-full rounded-lg shadow-lg">
                        <div>
                            <p class="text-lg text-gray-600 mb-4">Selamat datang di <strong>{{ $profile->name ?? 'Teman Fitness' }}</strong>, platform fitness terbaik untuk Gen-Z!</p>
                            <p class="text-gray-600 mb-4">{{ $profile->description ?? 'Teman Fitness hadir sebagai solusi lengkap untuk gaya hidup sehat. Dengan fasilitas terbaik dan tim profesional, kami bantu kamu capai tujuan kebugaran dengan menyenangkan.' }}</p>
                            <a href="#" class="inline-block text-gray-800 font-semibold hover:underline">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Kenapa Teman Fitness (Timeline) -->
            <section class="py-16 bg-gray-200">
                <div class="max-w-6xl mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Kenapa Teman Fitness?</h2>
                    <div class="relative space-y-12">
                        <div class="absolute left-1/2 w-1 bg-gray-400 h-full transform -translate-x-1/2"></div>
                        <div class="relative flex flex-col md:flex-row items-center">
                            <div class="md:w-1/2 p-4">
                                <p class="text-gray-600">Fasilitas lengkap dan modern, dari alat fitness berkualitas hingga ruang latihan nyaman. Didukung pelatih profesional untuk metode latihan efektif dan personal.</p>
                            </div>
                            <div class="md:w-1/2 p-4">
                                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gym" class="w-full rounded-lg shadow-lg">
                            </div>
                            <div class="absolute left-1/2 top-1/2 bg-gray-800 text-white w-10 h-10 flex items-center justify-center rounded-full transform -translate-x-1/2 -translate-y-1/2 border-2 border-white">1</div>
                        </div>
                        <div class="relative flex flex-col md:flex-row-reverse items-center">
                            <div class="md:w-1/2 p-4">
                                <p class="text-gray-600">Kombinasi fasilitas terbaik, pelatih bersertifikat, dan komunitas suportif. Jadi bagian dari komunitas yang saling menyemangati untuk hidup sehat.</p>
                            </div>
                            <div class="md:w-1/2 p-4">
                                <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gym" class="w-full rounded-lg shadow-lg">
                            </div>
                            <div class="absolute left-1/2 top-1/2 bg-gray-800 text-white w-10 h-10 flex items-center justify-center rounded-full transform -translate-x-1/2 -translate-y-1/2 border-2 border-white">2</div>
                        </div>
                        <div class="relative flex flex-col md:flex-row items-center">
                            <div class="md:w-1/2 p-4">
                                <p class="text-gray-600">Alat gym lengkap, program latihan variatif, dan pelatih profesional. Suasana nyaman bikin kamu semangat dan konsisten latihan.</p>
                            </div>
                            <div class="md:w-1/2 p-4">
                                <img src="https://images.unsplash.com/photo-1593079831268-3381b0db4a77?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gym" class="w-full rounded-lg shadow-lg">
                            </div>
                            <div class="absolute left-1/2 top-1/2 bg-gray-800 text-white w-10 h-10 flex items-center justify-center rounded-full transform -translate-x-1/2 -translate-y-1/2 border-2 border-white">3</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Program -->
            <section id="program" class="py-16 bg-white">
                <div class="max-w-6xl mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Kurikulum Program</h2>
                    <div class="space-y-12">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Program Pemula" class="w-full rounded-lg shadow-lg">
                            <div class="relative pl-8">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Program Pemula (4 Minggu)</h3>
                                <p class="text-gray-600">Membangun kebiasaan, mengenal dasar latihan, dan memperbaiki postur.</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Program Menengah" class="w-full rounded-lg shadow-lg">
                            <div class="relative pl-8">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Program Menengah (6 Minggu)</h3>
                                <p class="text-gray-600">Meningkatkan kekuatan, massa otot, dan daya tahan tubuh.</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Program Lanjutan" class="w-full rounded-lg shadow-lg">
                            <div class="relative pl-8">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Program Lanjutan (8 Minggu)</h3>
                                <p class="text-gray-600">Cutting, bulking, atau transformasi fisik intensif.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimoni -->
            <section id="testimoni" class="py-16 bg-white">
                <div class="max-w-6xl mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Apa Kata Mereka?</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                            <p class="text-gray-600 italic mb-4">"Teman Fitness bikin latihan jadi fun! Pelatihnya ramah, fasilitas oke, dan komunitasnya asyik!"</p>
                            <p class="text-gray-800 font-semibold">— Sarah, 22 tahun</p>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                            <p class="text-gray-600 italic mb-4">"Program pemula membantu saya mulai olahraga dengan benar. Sekarang badan lebih fit!"</p>
                            <p class="text-gray-800 font-semibold">— Bima, 25 tahun</p>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                            <p class="text-gray-600 italic mb-4">"Aplikasi Teman Fitness bikin pantau progres gampang. Cocok buat Gen-Z yang sibuk!"</p>
                            <p class="text-gray-800 font-semibold">— Lia, 20 tahun</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Membership -->
            <section class="py-20 bg-gray-200">
                <div class="max-w-5xl mx-auto px-4 text-center">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Mulai Perjalanan Fitnessmu</h2>
                    <p class="text-xl text-gray-600 mb-8 italic"><span class="text-gray-800 font-semibold">Jangan Tunggu Besok!</span> Raih Tubuh Idamanmu Hari Ini</p>
                    <div class="bg-white p-8 rounded-xl shadow-2xl max-w-2xl mx-auto transition-all duration-300 hover:shadow-3xl">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Akses 1 Bulan di Teman Fitness</h3>
                        <p class="text-sm text-red-600 font-semibold mb-4">Promo Terbatas! Hanya sampai akhir bulan ini</p>
                        <ul class="text-left text-gray-600 space-y-4 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-gray-800 text-xl mr-3 mt-1"></i>
                                <span>Akses bebas ke seluruh fasilitas gym modern dan lengkap.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-gray-800 text-xl mr-3 mt-1"></i>
                                <span>Gratis konsultasi dan program latihan personal sesuai tujuanmu.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-gray-800 text-xl mr-3 mt-1"></i>
                                <span>Pendampingan intensif dari trainer profesional bersertifikat.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-gray-800 text-xl mr-3 mt-1"></i>
                                <span>Gabung komunitas member Teman Fitness yang suportif.</span>
                            </li>
                        </ul>
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <p class="text-gray-500 line-through text-lg">Rp250.000</p>
                                <p class="text-3xl font-bold text-gray-800">Rp150.000</p>
                                <p class="text-gray-600 text-sm">Pembayaran untuk 1 bulan</p>
                            </div>
                            <img src="{{ asset('Logo_Teman_Fitness.png') }}" alt="Teman Fitness Logo" class="h-12">
                        </div>
                        <a href="#download" class="block bg-gray-800 text-white px-8 py-4 rounded-md font-semibold text-lg hover:bg-gray-900 transition-transform duration-300 transform hover:scale-105">Join Now</a>
                        <p class="text-gray-600 text-sm mt-4 hover:underline cursor-pointer">Punya kode promo?</p>
                    </div>
                </div>
            </section>

            <!-- Aplikasi -->
            <section id="download" class="py-16 bg-gradient-to-b from-gray-200 to-gray-100">
                <div class="max-w-6xl mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Aplikasi Teman Fitness</h2>
                    <p class="text-lg text-gray-600 mb-4">Dapatkan kemudahan akses video tutorial, modul, dan progres latihan dalam satu aplikasi.</p>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Hanya untuk Member, Download Sekarang</h3>
                    <div class="flex justify-center mb-8">
                        <a href="#" class="inline-block">
                            <img src="{{ asset('Google.png') }}" alt="Google Play" class="h-12">
                        </a>
                    </div>
                    <img src="{{ asset('mockup.png') }}" alt="App Mockup" class="mx-auto max-w-xs">
                </div>
            </section>

            <!-- Lokasi -->
            <section class="py-16 bg-gray-200">
                <div class="max-w-5xl mx-auto px-4 text-center">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Temukan Kami</h2>
                    <p class="text-lg text-gray-600 mb-4">{{ $profile->address ?? '+62 812-3456-7890' }}</p>
                    <div class="flex justify-center space-x-4 mb-6">
                        <p class="text-gray-600"><i class="fas fa-phone-alt mr-2"></i>{{ $profile->phone ?? '+62 812-3456-7890' }}</p>
                        <p class="text-gray-600"><i class="fas fa-envelope mr-2"></i>{{ $profile->email ?? 'support@temanfitness.com' }}</p>
                    </div>
                    <div class="relative w-full max-w-3xl mx-auto rounded-xl shadow-2xl overflow-hidden border border-gray-300">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.692318976135!2d112.716299314774!3d-7.447108994614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e4d5b7b3c5b1%3A0x1234567890abcdef!2sSun%20City%20Mall%20Sidoarjo!5e0!3m2!1sen!2sid!4v169876543210!5m2!1sen!2sid"
                            class="w-full h-96 md:h-[500px] border-0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <a href="https://www.google.com/maps" target="_blank" class="inline-flex items-center mt-6 bg-gray-800 text-white px-6 py-3 rounded-md font-semibold hover:bg-gray-900 transition">
                        <i class="fas fa-map-marker-alt mr-2"></i>Lihat di Google Maps
                    </a>
                </div>
            </section>
        </main>

        <footer class="bg-gray-900 text-white py-12">
            <div class="max-w-6xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <img src="{{ asset('Logo_Teman_Fitness.png') }}" alt="Teman Fitness Logo" class="h-10 mb-4">
                        <p class="text-gray-400">Platform Fitness Terbaik di Surabaya.</p>
                        <div class="flex space-x-4 mt-4">
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram fa-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-tiktok fa-lg"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube fa-lg"></i></a>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-4">Perusahaan</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Tentang</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Lokasi</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-4">Produk</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Fitur</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Harga</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-4">Kontak</h4>
                        <ul class="space-y-2">
                            <li><a href="mailto:{{ $profile->email ?? 'support@temanfitness.com' }}" class="text-gray-400 hover:text-white">{{ $profile->email ?? 'Belum tersedia' }}</a></li>
                            <li><a href="tel:{{ $profile->phone ?? '+62 812-3456-7890' }}" class="text-gray-400 hover:text-white">{{ $profile->phone ?? 'Belum tersedia' }}</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="border-gray-700 my-8">
                <p class="text-center text-gray-400">© {{ date('Y') }} {{ $profile->name ?? 'Teman Fitness' }}. All rights reserved.</p>
            </div>
        </footer>
    </body>
@endsection
