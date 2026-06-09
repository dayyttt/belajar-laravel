<?php
$c = file_get_contents("app/Http/Controllers/LayananInfoController.php");
$data = <<<PHPEOF
    private function getAllLayanan(): array
    {
        return [
            [
                "slug"        => "lokasi-terdekat",
                "title"       => "Lokasi Terdekat",
                "img"         => "layanan-1.jpg",
                "color"       => "from-green-500 to-teal-500",
                "badge"       => "Populer",
                "short_desc"  => "Temukan layanan dan tempat terdekat dengan mudah dan cepat.",
                "description" => "Fitur Lokasi Terdekat TokiToki memungkinkan kamu menemukan penyedia jasa profesional di sekitar lokasi kamu saat ini.",
                "unsplash_img"=> "https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?w=800&q=80",
                "intro"       => "Bayangkan kamu butuh bantuan mendesak, tapi tidak tahu harus mencari ke mana. Fitur Lokasi Terdekat TokiToki hadir untuk menyelesaikan masalah itu. Dengan teknologi GPS terkini, kami menampilkan semua penyedia jasa profesional di sekitar kamu dalam hitungan detik.",
                "highlight_title" => "Mengapa Memilih TokiToki untuk Lokasi Terdekat?",
                "highlight_body"  => "TokiToki menggunakan algoritma pencarian cerdas yang tidak hanya melihat jarak, tetapi juga rating, harga, dan ketersediaan mitra. Semua informasi tersaji lengkap, transparan, dan real-time.",
                "stats" => [["value"=>"50.000+","label"=>"Pencarian Harian"],["value"=>"98%","label"=>"Akurasi Lokasi"],["value"=>"< 2 Menit","label"=>"Waktu Respons"]],
                "testimonials" => [["name"=>"Rina Kusuma","role"=>"Ibu Rumah Tangga","avatar_initials"=>"RK","avatar_color"=>"from-green-400 to-teal-500","quote"=>"Fitur lokasi terdekat sangat membantu saya menemukan tukang AC terdekat saat AC rumah tiba-tiba rusak. Dalam 10 menit sudah ada yang datang!","rating"=>5],["name"=>"Budi Santoso","role"=>"Pengusaha","avatar_initials"=>"BS","avatar_color"=>"from-teal-400 to-green-500","quote"=>"Saya sering bepergian ke kota baru. TokiToki memudahkan saya menemukan bengkel dan layanan lain di sekitar hotel.","rating"=>5]],
                "detail_sections" => [["title"=>"Pencarian Berbasis GPS Real-Time","body"=>"Teknologi GPS kami memastikan kamu selalu mendapatkan hasil pencarian yang akurat berdasarkan lokasi terkini. Semua data diperbarui secara otomatis setiap hari.","img"=>"https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?w=600&q=80"],["title"=>"Filter Cerdas untuk Hasil Terbaik","body"=>"Kamu bisa menyaring hasil pencarian berdasarkan jarak, rating pengguna, harga, dan ketersediaan jadwal untuk menemukan yang paling sesuai.","img"=>"https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80"]],
                "benefits"     => ["Pencarian berbasis GPS secara real-time","Filter jarak, rating, dan harga","Tampilkan rute dan estimasi waktu tempuh","Rekomendasi berdasarkan riwayat pencarian"],
                "how_it_works" => [["step"=>"1","title"=>"Aktifkan Lokasi","desc"=>"Izinkan aplikasi mengakses lokasi GPS kamu."],["step"=>"2","title"=>"Pilih Kategori","desc"=>"Pilih jenis layanan yang kamu butuhkan."],["step"=>"3","title"=>"Temukan Mitra","desc"=>"Lihat daftar mitra terdekat lengkap dengan rating dan harga."],["step"=>"4","title"=>"Booking","desc"=>"Langsung booking dan konfirmasi jadwal."]],
                "faqs" => [["q"=>"Seberapa akurat pencarian lokasi?","a"=>"Kami menggunakan GPS dan data peta terkini untuk akurasi hingga 10 meter."],["q"=>"Bisa mencari tanpa GPS aktif?","a"=>"Bisa, kamu bisa input alamat manual sebagai alternatif."],["q"=>"Berapa radius pencarian maksimalnya?","a"=>"Kamu bisa atur radius dari 1 km hingga 50 km sesuai kebutuhan."]],
            ],
        ];
    }
PHPEOF;
$c = str_replace("private function getAllLayanan(): array { return []; }", $data, $c);
file_put_contents("app/Http/Controllers/LayananInfoController.php", $c);
echo "done";
