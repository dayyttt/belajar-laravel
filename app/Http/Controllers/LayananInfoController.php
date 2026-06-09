<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananInfoController extends Controller
{
    private function getAllLayanan(): array
    {
        return [
            // 1. Lokasi Terdekat
            [
                'slug'            => 'lokasi-terdekat',
                'title'           => 'Lokasi Terdekat',
                'img'             => 'layanan-1.jpg',
                'color'           => 'from-green-500 to-teal-500',
                'badge'           => 'Populer',
                'short_desc'      => 'Temukan layanan dan tempat terdekat dengan mudah dan cepat.',
                'description'     => 'Fitur Lokasi Terdekat TokiToki memungkinkan kamu menemukan penyedia jasa profesional di sekitar lokasi kamu saat ini.',
                'unsplash_img'    => 'https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?w=800&q=80',
                'intro'           => 'Bayangkan kamu butuh bantuan mendesak, tapi tidak tahu harus mencari ke mana. Fitur Lokasi Terdekat TokiToki hadir untuk menyelesaikan masalah itu. Dengan teknologi GPS terkini, kami menampilkan semua penyedia jasa profesional di sekitar kamu dalam hitungan detik.',
                'highlight_title' => 'Mengapa Memilih TokiToki untuk Lokasi Terdekat?',
                'highlight_body'  => 'TokiToki menggunakan algoritma pencarian cerdas yang tidak hanya melihat jarak, tetapi juga rating, harga, dan ketersediaan mitra. Semua informasi tersaji lengkap, transparan, dan real-time.',
                'stats' => [
                    ['value' => '50.000+',   'label' => 'Pencarian Harian'],
                    ['value' => '98%',       'label' => 'Akurasi Lokasi'],
                    ['value' => '< 2 Menit', 'label' => 'Waktu Respons'],
                ],
                'testimonials' => [
                    ['name' => 'Rina Kusuma',  'role' => 'Ibu Rumah Tangga', 'avatar_initials' => 'RK', 'avatar_color' => 'from-green-400 to-teal-500', 'quote' => 'Fitur lokasi terdekat sangat membantu saya menemukan tukang AC terdekat saat AC rumah tiba-tiba rusak. Dalam 10 menit sudah ada yang datang!', 'rating' => 5],
                    ['name' => 'Budi Santoso', 'role' => 'Pengusaha',        'avatar_initials' => 'BS', 'avatar_color' => 'from-teal-400 to-green-500', 'quote' => 'Saya sering bepergian ke kota baru. TokiToki memudahkan saya menemukan bengkel dan layanan lain di sekitar hotel.', 'rating' => 5],
                ],
                'detail_sections' => [
                    ['title' => 'Pencarian Berbasis GPS Real-Time', 'body' => 'Teknologi GPS kami memastikan kamu selalu mendapatkan hasil pencarian yang akurat berdasarkan lokasi terkini.', 'img' => 'https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?w=600&q=80'],
                    ['title' => 'Filter Cerdas untuk Hasil Terbaik', 'body' => 'Kamu bisa menyaring hasil pencarian berdasarkan jarak, rating pengguna, harga, dan ketersediaan jadwal.', 'img' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80'],
                ],
                'benefits' => ['Pencarian berbasis GPS secara real-time', 'Filter jarak, rating, dan harga', 'Tampilkan rute dan estimasi waktu tempuh', 'Rekomendasi berdasarkan riwayat pencarian'],
                'how_it_works' => [
                    ['step' => '1', 'title' => 'Aktifkan Lokasi', 'desc' => 'Izinkan aplikasi mengakses lokasi GPS kamu.'],
                    ['step' => '2', 'title' => 'Pilih Kategori',  'desc' => 'Pilih jenis layanan yang kamu butuhkan.'],
                    ['step' => '3', 'title' => 'Temukan Mitra',   'desc' => 'Lihat daftar mitra terdekat lengkap dengan rating dan harga.'],
                    ['step' => '4', 'title' => 'Booking',         'desc' => 'Langsung booking dan konfirmasi jadwal.'],
                ],
                'faqs' => [
                    ['q' => 'Seberapa akurat pencarian lokasi?',    'a' => 'Kami menggunakan GPS dan data peta terkini untuk akurasi hingga 10 meter.'],
                    ['q' => 'Bisa mencari tanpa GPS aktif?',        'a' => 'Bisa, kamu bisa input alamat manual sebagai alternatif.'],
                    ['q' => 'Berapa radius pencarian maksimalnya?', 'a' => 'Kamu bisa atur radius dari 1 km hingga 50 km sesuai kebutuhan.'],
                ],
            ],
            // 2. Rumah Tangga
            [
                'slug' => 'rumah-tangga', 'title' => 'Rumah Tangga', 'img' => 'layanan-2.jpg',
                'color' => 'from-blue-500 to-indigo-500', 'badge' => 'Terlengkap',
                'short_desc' => 'Solusi lengkap untuk kebutuhan rumah tangga dan perawatan hunian.',
                'description' => 'Dari kebersihan hingga perbaikan, TokiToki menyediakan semua layanan rumah tangga yang kamu butuhkan.',
                'unsplash_img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80',
                'intro' => 'Rumah adalah tempat paling nyaman di dunia, tapi hanya jika semuanya berfungsi dengan baik. TokiToki hadir sebagai solusi satu atap untuk semua kebutuhan rumah tangga kamu, mulai dari kebersihan rutin hingga renovasi besar.',
                'highlight_title' => 'Layanan Rumah Tangga Terlengkap di Indonesia',
                'highlight_body' => 'Dengan lebih dari 200 kategori layanan rumah tangga, TokiToki memastikan setiap sudut rumahmu terawat dengan baik.',
                'stats' => [['value' => '200+', 'label' => 'Kategori Layanan'], ['value' => '4.9/5', 'label' => 'Rating Rata-rata'], ['value' => '30 Menit', 'label' => 'Respons Tercepat']],
                'testimonials' => [
                    ['name' => 'Sari Dewi', 'role' => 'Ibu Rumah Tangga', 'avatar_initials' => 'SD', 'avatar_color' => 'from-blue-400 to-indigo-500', 'quote' => 'Layanan bersih-bersih rumah dari TokiToki benar-benar memuaskan. Petugasnya ramah, teliti, dan hasilnya bersih banget. Saya sudah langganan 3 bulan!', 'rating' => 5],
                    ['name' => 'Hendra Wijaya', 'role' => 'Karyawan Swasta', 'avatar_initials' => 'HW', 'avatar_color' => 'from-indigo-400 to-blue-500', 'quote' => 'AC saya bocor dan langsung saya hubungi TokiToki. Teknisi datang dalam 45 menit dan masalah langsung beres.', 'rating' => 5],
                ],
                'detail_sections' => [
                    ['title' => 'Kebersihan Profesional Standar Hotel', 'body' => 'Tim kebersihan kami menggunakan peralatan dan produk pembersih berstandar hotel untuk memastikan setiap sudut rumahmu bersih dan higienis.', 'img' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&q=80'],
                    ['title' => 'Perbaikan dan Perawatan Rumah', 'body' => 'Dari pipa bocor, listrik bermasalah, hingga pengecatan ulang, semua bisa ditangani oleh mitra handyman profesional TokiToki.', 'img' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=80'],
                ],
                'benefits' => ['Lebih dari 200 kategori layanan rumah tangga', 'Mitra terverifikasi dan berpengalaman', 'Harga transparan tanpa biaya tersembunyi', 'Garansi kepuasan atau uang kembali'],
                'how_it_works' => [
                    ['step' => '1', 'title' => 'Pilih Layanan',    'desc' => 'Pilih jenis layanan rumah tangga yang kamu butuhkan.'],
                    ['step' => '2', 'title' => 'Tentukan Jadwal',  'desc' => 'Pilih tanggal dan waktu yang sesuai dengan kamu.'],
                    ['step' => '3', 'title' => 'Konfirmasi Mitra', 'desc' => 'Kami mencarikan mitra terbaik di sekitar lokasi kamu.'],
                    ['step' => '4', 'title' => 'Layanan Selesai',  'desc' => 'Mitra datang, bekerja profesional, dan kamu puas.'],
                ],
                'faqs' => [
                    ['q' => 'Apakah mitra sudah terverifikasi?', 'a' => 'Ya, semua mitra telah melalui seleksi ketat termasuk verifikasi identitas dan pelatihan.'],
                    ['q' => 'Bagaimana jika tidak puas?', 'a' => 'Kami memberikan garansi kepuasan. Jika tidak puas, kami akan kirim mitra lain tanpa biaya tambahan.'],
                    ['q' => 'Berapa lama waktu pengerjaan?', 'a' => 'Tergantung jenis layanan. Kebersihan standar biasanya 2-4 jam, perbaikan bervariasi.'],
                ],
            ],
            // 3. Elektronik
            [
                'slug' => 'elektronik', 'title' => 'Elektronik', 'img' => 'layanan-3.jpg',
                'color' => 'from-purple-500 to-pink-500', 'badge' => 'Teknologi',
                'short_desc' => 'Servis dan perbaikan elektronik terpercaya oleh teknisi bersertifikat.',
                'description' => 'Dari smartphone hingga kulkas, TokiToki menyediakan layanan servis elektronik profesional dengan teknisi bersertifikat dan spare part original.',
                'unsplash_img' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=80',
                'intro' => 'Di era digital ini, elektronik adalah bagian tak terpisahkan dari kehidupan sehari-hari. Ketika perangkat kamu bermasalah, TokiToki hadir dengan teknisi bersertifikat yang siap memperbaiki semua jenis elektronik dengan cepat dan tepat.',
                'highlight_title' => 'Teknisi Bersertifikat untuk Semua Merek',
                'highlight_body' => 'Tim teknisi TokiToki telah mendapatkan sertifikasi dari berbagai merek ternama. Kami menggunakan spare part original dan memberikan garansi servis hingga 90 hari.',
                'stats' => [['value' => '500+', 'label' => 'Merek Ditangani'], ['value' => '90 Hari', 'label' => 'Garansi Servis'], ['value' => '95%', 'label' => 'Tingkat Keberhasilan']],
                'testimonials' => [
                    ['name' => 'Dian Pratama', 'role' => 'Fotografer', 'avatar_initials' => 'DP', 'avatar_color' => 'from-purple-400 to-pink-500', 'quote' => 'Laptop saya mati total dan saya panik karena ada deadline. TokiToki mengirim teknisi dalam 1 jam dan laptop saya bisa digunakan lagi dalam 3 jam!', 'rating' => 5],
                    ['name' => 'Mega Sari', 'role' => 'Mahasiswa', 'avatar_initials' => 'MS', 'avatar_color' => 'from-pink-400 to-purple-500', 'quote' => 'HP saya layarnya pecah dan baterainya drop. Teknisi TokiToki datang ke kos saya, ganti spare part original, dan selesai dalam 1 jam.', 'rating' => 5],
                ],
                'detail_sections' => [
                    ['title' => 'Servis Smartphone dan Tablet', 'body' => 'Ganti layar, baterai, kamera, atau perbaikan software, semua ditangani oleh teknisi berpengalaman dengan spare part original bergaransi.', 'img' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80'],
                    ['title' => 'Perbaikan Peralatan Elektronik Rumah', 'body' => 'AC, kulkas, mesin cuci, TV, dan peralatan elektronik lainnya diperbaiki oleh teknisi spesialis dengan diagnosa akurat.', 'img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80'],
                ],
                'benefits' => ['Teknisi bersertifikat resmi', 'Spare part original bergaransi', 'Garansi servis 90 hari', 'Diagnosa gratis sebelum perbaikan'],
                'how_it_works' => [
                    ['step' => '1', 'title' => 'Deskripsi Masalah', 'desc' => 'Ceritakan masalah perangkat kamu melalui aplikasi.'],
                    ['step' => '2', 'title' => 'Diagnosa Gratis',   'desc' => 'Teknisi melakukan diagnosa awal tanpa biaya.'],
                    ['step' => '3', 'title' => 'Konfirmasi Biaya',  'desc' => 'Kamu menyetujui estimasi biaya sebelum perbaikan dimulai.'],
                    ['step' => '4', 'title' => 'Perbaikan Selesai', 'desc' => 'Perangkat diperbaiki dan diberikan garansi servis.'],
                ],
                'faqs' => [
                    ['q' => 'Apakah spare part yang digunakan original?', 'a' => 'Ya, kami hanya menggunakan spare part original atau OEM berkualitas tinggi.'],
                    ['q' => 'Berapa lama garansi servis?', 'a' => 'Kami memberikan garansi servis 90 hari untuk semua perbaikan.'],
                    ['q' => 'Bisa servis di rumah?', 'a' => 'Ya, teknisi kami bisa datang ke lokasi kamu untuk servis on-site.'],
                ],
            ],
            // 4. Kendaraan
            [
                'slug' => 'kendaraan', 'title' => 'Kendaraan', 'img' => 'layanan-4.jpg',
                'color' => 'from-orange-500 to-red-500', 'badge' => 'Terpercaya',
                'short_desc' => 'Layanan perawatan, servis, dan informasi kendaraan terlengkap.',
                'description' => 'Dari servis rutin hingga perbaikan darurat, TokiToki menyediakan layanan kendaraan lengkap dengan mekanik berpengalaman dan harga transparan.',
                'unsplash_img' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=800&q=80',
                'intro' => 'Kendaraan adalah investasi besar yang perlu dirawat dengan baik. TokiToki menghadirkan layanan perawatan kendaraan profesional yang bisa kamu akses kapan saja dan di mana saja, tanpa perlu antri berjam-jam di bengkel.',
                'highlight_title' => 'Bengkel Profesional Hadir di Depan Pintu Kamu',
                'highlight_body' => 'Dengan jaringan mekanik bersertifikat di seluruh kota, TokiToki memastikan kendaraan kamu selalu dalam kondisi prima. Layanan darurat tersedia 24/7.',
                'stats' => [['value' => '1.000+', 'label' => 'Mekanik Aktif'], ['value' => '24/7', 'label' => 'Layanan Darurat'], ['value' => '4.8/5', 'label' => 'Rating Kepuasan']],
                'testimonials' => [
                    ['name' => 'Rudi Hartono', 'role' => 'Sales Executive', 'avatar_initials' => 'RH', 'avatar_color' => 'from-orange-400 to-red-500', 'quote' => 'Ban mobil saya bocor di jalan tol tengah malam. TokiToki mengirim bantuan dalam 20 menit. Benar-benar penyelamat!', 'rating' => 5],
                    ['name' => 'Fitri Handayani', 'role' => 'Ibu Rumah Tangga', 'avatar_initials' => 'FH', 'avatar_color' => 'from-red-400 to-orange-500', 'quote' => 'Servis rutin motor saya jadi lebih mudah dengan TokiToki. Mekanik datang ke rumah, tidak perlu antri, dan harganya sama dengan bengkel biasa.', 'rating' => 5],
                ],
                'detail_sections' => [
                    ['title' => 'Servis Rutin dan Perawatan Berkala', 'body' => 'Ganti oli, tune-up, cek rem, dan perawatan berkala lainnya dilakukan oleh mekanik bersertifikat dengan suku cadang berkualitas.', 'img' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?w=600&q=80'],
                    ['title' => 'Layanan Darurat 24 Jam', 'body' => 'Ban bocor, aki soak, atau mogok di jalan, tim darurat TokiToki siap membantu kamu kapan saja dan di mana saja.', 'img' => 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600&q=80'],
                ],
                'benefits' => ['Mekanik bersertifikat dan berpengalaman', 'Layanan darurat 24/7', 'Harga transparan dan kompetitif', 'Suku cadang original bergaransi'],
                'how_it_works' => [
                    ['step' => '1', 'title' => 'Pilih Layanan',  'desc' => 'Pilih jenis layanan kendaraan yang kamu butuhkan.'],
                    ['step' => '2', 'title' => 'Jadwalkan',      'desc' => 'Tentukan waktu dan lokasi yang sesuai.'],
                    ['step' => '3', 'title' => 'Mekanik Datang', 'desc' => 'Mekanik profesional datang ke lokasi kamu.'],
                    ['step' => '4', 'title' => 'Kendaraan Prima','desc' => 'Kendaraan kamu kembali dalam kondisi optimal.'],
                ],
                'faqs' => [
                    ['q' => 'Apakah bisa servis di rumah?', 'a' => 'Ya, mekanik kami bisa datang ke rumah atau lokasi kamu untuk servis on-site.'],
                    ['q' => 'Bagaimana dengan layanan darurat?', 'a' => 'Layanan darurat tersedia 24/7. Respons time rata-rata 20-30 menit.'],
                    ['q' => 'Apakah suku cadang yang digunakan original?', 'a' => 'Ya, kami menggunakan suku cadang original atau OEM berkualitas tinggi.'],
                ],
            ],
            // 5. Kesehatan
            [
                'slug' => 'kesehatan', 'title' => 'Kesehatan', 'img' => 'layanan-5.jpg',
                'color' => 'from-red-500 to-rose-500', 'badge' => 'Prioritas',
                'short_desc' => 'Layanan kesehatan terpercaya untuk keluarga, kapan saja dan di mana saja.',
                'description' => 'Dari konsultasi dokter online hingga kunjungan perawat ke rumah, TokiToki menghadirkan layanan kesehatan profesional yang mudah diakses.',
                'unsplash_img' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80',
                'intro' => 'Kesehatan adalah investasi terpenting dalam hidup. TokiToki memudahkan akses ke layanan kesehatan berkualitas tanpa harus antri berjam-jam di rumah sakit. Dari konsultasi dokter online hingga kunjungan perawat ke rumah, semua tersedia di ujung jari kamu.',
                'highlight_title' => 'Kesehatan Keluarga Jadi Prioritas Kami',
                'highlight_body' => 'Dengan jaringan lebih dari 500 tenaga medis profesional, TokiToki memastikan kamu dan keluarga mendapatkan perawatan terbaik dengan harga yang terjangkau.',
                'stats' => [['value' => '500+', 'label' => 'Tenaga Medis'], ['value' => '24/7', 'label' => 'Konsultasi Online'], ['value' => '4.9/5', 'label' => 'Rating Pasien']],
                'testimonials' => [
                    ['name' => 'Anita Rahayu', 'role' => 'Ibu 2 Anak', 'avatar_initials' => 'AR', 'avatar_color' => 'from-red-400 to-rose-500', 'quote' => 'Anak saya demam tengah malam dan saya panik. Konsultasi dokter TokiToki sangat membantu. Dokternya sabar dan penjelasannya mudah dipahami.', 'rating' => 5],
                    ['name' => 'Pak Bambang', 'role' => 'Pensiunan', 'avatar_initials' => 'PB', 'avatar_color' => 'from-rose-400 to-red-500', 'quote' => 'Saya rutin cek kesehatan dengan layanan home visit TokiToki. Perawatnya profesional dan hasilnya langsung bisa dilihat di aplikasi.', 'rating' => 5],
                ],
                'detail_sections' => [
                    ['title' => 'Konsultasi Dokter Online 24/7', 'body' => 'Konsultasi dengan dokter umum dan spesialis kapan saja melalui chat atau video call. Dapatkan resep digital yang bisa langsung ditebus di apotek terdekat.', 'img' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=600&q=80'],
                    ['title' => 'Layanan Kesehatan di Rumah', 'body' => 'Perawat dan dokter profesional bisa datang ke rumah untuk pemeriksaan, pengambilan sampel darah, infus, atau perawatan pasca operasi.', 'img' => 'https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?w=600&q=80'],
                ],
                'benefits' => ['Konsultasi dokter online 24/7', 'Tenaga medis berlisensi dan berpengalaman', 'Layanan home visit tersedia', 'Rekam medis digital yang aman'],
                'how_it_works' => [
                    ['step' => '1', 'title' => 'Pilih Layanan', 'desc' => 'Pilih konsultasi online atau kunjungan ke rumah.'],
                    ['step' => '2', 'title' => 'Pilih Dokter',  'desc' => 'Pilih dokter berdasarkan spesialisasi dan rating.'],
                    ['step' => '3', 'title' => 'Konsultasi',    'desc' => 'Konsultasi via chat, telepon, atau video call.'],
                    ['step' => '4', 'title' => 'Tindak Lanjut', 'desc' => 'Dapatkan resep, rujukan, atau jadwal follow-up.'],
                ],
                'faqs' => [
                    ['q' => 'Apakah dokternya berlisensi?', 'a' => 'Ya, semua dokter di TokiToki memiliki SIP (Surat Izin Praktik) yang valid.'],
                    ['q' => 'Bisa konsultasi spesialis?', 'a' => 'Ya, tersedia dokter spesialis dari berbagai bidang.'],
                    ['q' => 'Apakah data medis saya aman?', 'a' => 'Data medis kamu dienkripsi dan hanya bisa diakses oleh kamu dan dokter yang menangani.'],
                ],
            ],
            // 6. Pendidikan
            [
                'slug' => 'pendidikan', 'title' => 'Pendidikan', 'img' => 'layanan-6.jpg',
                'color' => 'from-yellow-500 to-amber-500', 'badge' => 'Unggulan',
                'short_desc' => 'Platform pembelajaran dan pengembangan skill terbaik untuk semua usia.',
                'description' => 'Dari les privat hingga kursus profesional, TokiToki menghubungkan kamu dengan tutor dan instruktur terbaik untuk mencapai potensi maksimalmu.',
                'unsplash_img' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80',
                'intro' => 'Belajar tidak mengenal batas usia dan waktu. TokiToki menghadirkan ekosistem pembelajaran yang komprehensif, menghubungkan pelajar dengan tutor terbaik untuk setiap kebutuhan, dari pelajaran sekolah hingga skill profesional yang dibutuhkan dunia kerja.',
                'highlight_title' => 'Belajar Lebih Efektif dengan Tutor Terbaik',
                'highlight_body' => 'Dengan lebih dari 1.000 tutor terverifikasi dari berbagai bidang, TokiToki memastikan setiap sesi belajar memberikan hasil yang optimal dan terukur.',
                'stats' => [['value' => '1.000+', 'label' => 'Tutor Aktif'], ['value' => '50+', 'label' => 'Mata Pelajaran'], ['value' => '4.8/5', 'label' => 'Rating Tutor']],
                'testimonials' => [
                    ['name' => 'Rizky Putra', 'role' => 'Pelajar SMA', 'avatar_initials' => 'RP', 'avatar_color' => 'from-yellow-400 to-amber-500', 'quote' => 'Nilai matematika saya naik drastis setelah les privat dengan tutor TokiToki. Tutornya sabar dan cara mengajarnya mudah dipahami. Sangat recommended!', 'rating' => 5],
                    ['name' => 'Dewi Lestari', 'role' => 'Karyawan', 'avatar_initials' => 'DL', 'avatar_color' => 'from-amber-400 to-yellow-500', 'quote' => 'Saya ikut kursus bahasa Inggris bisnis di TokiToki dan hasilnya luar biasa. Dalam 3 bulan, kemampuan speaking saya meningkat signifikan.', 'rating' => 5],
                ],
                'detail_sections' => [
                    ['title' => 'Les Privat untuk Semua Jenjang', 'body' => 'Tutor berpengalaman siap membantu pelajar SD, SMP, SMA, hingga mahasiswa dalam semua mata pelajaran dengan metode yang disesuaikan.', 'img' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&q=80'],
                    ['title' => 'Kursus Skill Profesional', 'body' => 'Tingkatkan kemampuan profesional kamu dengan kursus coding, desain grafis, digital marketing, bahasa asing, dan ratusan skill lainnya.', 'img' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&q=80'],
                ],
                'benefits' => ['Tutor terverifikasi dan berpengalaman', 'Jadwal fleksibel sesuai kebutuhan', 'Belajar online atau tatap muka', 'Progress tracking yang terukur'],
                'how_it_works' => [
                    ['step' => '1', 'title' => 'Pilih Mata Pelajaran', 'desc' => 'Pilih mata pelajaran atau skill yang ingin dipelajari.'],
                    ['step' => '2', 'title' => 'Pilih Tutor',          'desc' => 'Pilih tutor berdasarkan pengalaman, rating, dan harga.'],
                    ['step' => '3', 'title' => 'Jadwalkan Sesi',       'desc' => 'Tentukan jadwal belajar yang sesuai dengan kamu.'],
                    ['step' => '4', 'title' => 'Mulai Belajar',        'desc' => 'Belajar online atau tatap muka dan raih prestasi terbaik.'],
                ],
                'faqs' => [
                    ['q' => 'Apakah tutor sudah terverifikasi?', 'a' => 'Ya, semua tutor telah melalui seleksi ketat termasuk tes kemampuan dan verifikasi latar belakang.'],
                    ['q' => 'Bisa belajar online?', 'a' => 'Ya, tersedia sesi belajar online via video call yang interaktif.'],
                    ['q' => 'Bagaimana jika tidak cocok dengan tutor?', 'a' => 'Kamu bisa mengganti tutor kapan saja tanpa biaya tambahan.'],
                ],
            ],
            // 7. Bisnis & IT
            [
                'slug' => 'bisnis-it', 'title' => 'Bisnis & IT', 'img' => 'layanan-7.jpg',
                'color' => 'from-cyan-500 to-blue-500', 'badge' => 'Enterprise',
                'short_desc' => 'Solusi bisnis dan teknologi untuk pertumbuhan perusahaan yang berkelanjutan.',
                'description' => 'Dari pengembangan website hingga konsultasi bisnis, TokiToki menyediakan solusi IT dan bisnis komprehensif untuk UMKM hingga perusahaan besar.',
                'unsplash_img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80',
                'intro' => 'Di era digital yang terus berkembang, bisnis yang tidak beradaptasi akan tertinggal. TokiToki hadir sebagai mitra transformasi digital kamu, menyediakan solusi IT dan bisnis yang komprehensif untuk membantu perusahaan kamu tumbuh dan bersaing di pasar global.',
                'highlight_title' => 'Transformasi Digital Bisnis Kamu Bersama TokiToki',
                'highlight_body' => 'Dengan tim konsultan dan developer berpengalaman, TokiToki membantu bisnis kamu dari strategi digital hingga implementasi teknologi yang tepat sasaran.',
                'stats' => [['value' => '500+', 'label' => 'Proyek Selesai'], ['value' => '98%', 'label' => 'Klien Puas'], ['value' => '5 Tahun', 'label' => 'Pengalaman']],
                'testimonials' => [
                    ['name' => 'Andi Susanto', 'role' => 'CEO Startup', 'avatar_initials' => 'AS', 'avatar_color' => 'from-cyan-400 to-blue-500', 'quote' => 'TokiToki membantu kami membangun platform e-commerce dari nol. Hasilnya melebihi ekspektasi dan tim mereka sangat profesional dan responsif.', 'rating' => 5],
                    ['name' => 'Ratna Sari', 'role' => 'Pemilik UMKM', 'avatar_initials' => 'RS', 'avatar_color' => 'from-blue-400 to-cyan-500', 'quote' => 'Dengan bantuan TokiToki, toko online saya sekarang punya website profesional dan sistem manajemen yang rapi. Penjualan naik 300% dalam 6 bulan!', 'rating' => 5],
                ],
                'detail_sections' => [
                    ['title' => 'Pengembangan Website dan Aplikasi', 'body' => 'Tim developer berpengalaman kami membangun website dan aplikasi mobile yang modern, responsif, dan scalable sesuai kebutuhan bisnis kamu.', 'img' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&q=80'],
                    ['title' => 'Konsultasi Bisnis dan Strategi Digital', 'body' => 'Konsultan bisnis kami membantu kamu merancang strategi digital yang tepat, dari branding hingga digital marketing yang terukur dan efektif.', 'img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&q=80'],
                ],
                'benefits' => ['Tim developer dan konsultan berpengalaman', 'Solusi custom sesuai kebutuhan bisnis', 'Support dan maintenance berkelanjutan', 'Harga kompetitif dengan kualitas enterprise'],
                'how_it_works' => [
                    ['step' => '1', 'title' => 'Konsultasi Awal',    'desc' => 'Diskusikan kebutuhan dan tujuan bisnis kamu.'],
                    ['step' => '2', 'title' => 'Proposal & Estimasi','desc' => 'Kami menyiapkan proposal detail dan estimasi biaya.'],
                    ['step' => '3', 'title' => 'Pengerjaan',          'desc' => 'Tim kami mengerjakan proyek dengan update berkala.'],
                    ['step' => '4', 'title' => 'Delivery & Support',  'desc' => 'Proyek selesai dengan dukungan purna jual.'],
                ],
                'faqs' => [
                    ['q' => 'Berapa lama waktu pengerjaan website?', 'a' => 'Tergantung kompleksitas. Website sederhana 2-4 minggu, aplikasi kompleks 2-6 bulan.'],
                    ['q' => 'Apakah ada garansi setelah proyek selesai?', 'a' => 'Ya, kami memberikan garansi bug fixing 3 bulan setelah proyek selesai.'],
                    ['q' => 'Bisa konsultasi dulu sebelum memutuskan?', 'a' => 'Tentu! Konsultasi awal gratis tanpa kewajiban apapun.'],
                ],
            ],
            // 8. Lainnya
            [
                'slug' => 'lainnya', 'title' => 'Lainnya', 'img' => 'layanan-8.jpg',
                'color' => 'from-gray-500 to-slate-600', 'badge' => 'Beragam',
                'short_desc' => 'Berbagai layanan tambahan untuk kebutuhan spesifik dan unik kamu.',
                'description' => 'Tidak menemukan layanan yang kamu cari? TokiToki memiliki ratusan kategori layanan tambahan yang siap memenuhi setiap kebutuhan spesifik kamu.',
                'unsplash_img' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=800&q=80',
                'intro' => 'Setiap orang memiliki kebutuhan yang unik dan berbeda. TokiToki memahami hal ini dan hadir dengan ratusan kategori layanan tambahan yang mungkin tidak kamu temukan di tempat lain. Dari event organizer hingga jasa fotografi, dari penerjemah hingga konsultan hukum, semua ada di TokiToki.',
                'highlight_title' => 'Apapun Kebutuhanmu, TokiToki Punya Solusinya',
                'highlight_body' => 'Dengan ekosistem layanan yang terus berkembang, TokiToki selalu menambahkan kategori baru berdasarkan kebutuhan pengguna. Jika kamu tidak menemukan layanan yang dicari, hubungi kami dan kami akan mencarikan solusinya.',
                'stats' => [['value' => '300+', 'label' => 'Kategori Layanan'], ['value' => '10.000+', 'label' => 'Mitra Aktif'], ['value' => '24/7', 'label' => 'Customer Support']],
                'testimonials' => [
                    ['name' => 'Tono Wibowo', 'role' => 'Event Organizer', 'avatar_initials' => 'TW', 'avatar_color' => 'from-gray-400 to-slate-500', 'quote' => 'Saya butuh fotografer dadakan untuk acara pernikahan klien. TokiToki berhasil mencarikan fotografer profesional dalam 2 jam. Hasilnya memuaskan!', 'rating' => 5],
                    ['name' => 'Lina Marlina', 'role' => 'Pengusaha', 'avatar_initials' => 'LM', 'avatar_color' => 'from-slate-400 to-gray-500', 'quote' => 'Layanan penerjemah TokiToki sangat membantu bisnis saya yang sering berhubungan dengan klien asing. Penerjemahnya profesional dan tepat waktu.', 'rating' => 5],
                ],
                'detail_sections' => [
                    ['title' => 'Layanan Kreatif dan Event', 'body' => 'Fotografer, videografer, desainer, event organizer, dan berbagai tenaga kreatif profesional siap membantu mewujudkan ide dan acara impian kamu.', 'img' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=600&q=80'],
                    ['title' => 'Layanan Profesional dan Konsultasi', 'body' => 'Penerjemah, konsultan hukum, akuntan, notaris, dan berbagai profesional lainnya tersedia untuk membantu kebutuhan bisnis dan personal kamu.', 'img' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80'],
                ],
                'benefits' => ['Ratusan kategori layanan tersedia', 'Mitra profesional terverifikasi', 'Harga kompetitif dan transparan', 'Mudah ditemukan dan dipesan'],
                'how_it_works' => [
                    ['step' => '1', 'title' => 'Cari Layanan',     'desc' => 'Cari layanan yang kamu butuhkan di kolom pencarian.'],
                    ['step' => '2', 'title' => 'Pilih Mitra',      'desc' => 'Pilih mitra berdasarkan rating, harga, dan ulasan.'],
                    ['step' => '3', 'title' => 'Diskusikan Detail','desc' => 'Chat langsung dengan mitra untuk mendiskusikan kebutuhan.'],
                    ['step' => '4', 'title' => 'Layanan Selesai',  'desc' => 'Mitra menyelesaikan pekerjaan sesuai kesepakatan.'],
                ],
                'faqs' => [
                    ['q' => 'Bagaimana jika layanan yang saya cari tidak ada?', 'a' => 'Hubungi customer support kami dan kami akan berusaha mencarikan solusi atau menambahkan kategori baru.'],
                    ['q' => 'Apakah semua mitra sudah terverifikasi?', 'a' => 'Ya, semua mitra melalui proses verifikasi identitas dan portofolio sebelum bergabung.'],
                    ['q' => 'Bagaimana sistem pembayarannya?', 'a' => 'Pembayaran dilakukan melalui platform TokiToki yang aman. Dana ditahan hingga pekerjaan selesai.'],
                ],
            ],
        ];
    }

    public function index()
    {
        $layanan = $this->getAllLayanan();
        return view('layanan-info.index', compact('layanan'));
    }

    public function show(string $slug)
    {
        $all     = $this->getAllLayanan();
        $layanan = collect($all)->firstWhere('slug', $slug);
        abort_if(!$layanan, 404);
        $related = collect($all)->where('slug', '!=', $slug)->take(3)->values()->all();
        return view('layanan-info.show', compact('layanan', 'related'));
    }
}