# Panduan Penerapan Translation (Multi-Bahasa)

## Overview
Website TokiToki sekarang sudah mendukung 2 bahasa:
- 🇮🇩 **Indonesia (id)** - Bahasa default
- 🇺🇸 **English (en)**

## Cara Menggunakan Translation di Blade Template

### 1. Syntax Dasar
Gunakan helper `__()` untuk memanggil translation key:

```blade
{{-- Cara 1: Di dalam tag HTML --}}
<h1>{{ __('messages.home_hero_title') }}</h1>

{{-- Cara 2: Di attribute --}}
<button title="{{ __('messages.order_now') }}">
    {{ __('messages.order_now') }}
</button>

{{-- Cara 3: Di title page --}}
@section('title', __('messages.nav_home') . ' - TokiToki')
```

### 2. Contoh Replacement

#### SEBELUM (Hardcoded):
```blade
<h1>Layanan Jasa Online Andalan Anda</h1>
<p>Kami menyediakan berbagai layanan berkualitas</p>
<button>Pesan Sekarang</button>
```

#### SESUDAH (Multi-bahasa):
```blade
<h1>{{ __('messages.home_hero_title') }}</h1>
<p>{{ __('messages.home_hero_subtitle') }}</p>
<button>{{ __('messages.order_now') }}</button>
```

## File Translation

### Lokasi File:
- **Indonesia**: `resources/lang/id/messages.php`
- **English**: `resources/lang/en/messages.php`

### Struktur File:
```php
<?php
return [
    // Navigation
    'nav_home' => 'Beranda',
    'nav_about' => 'Tentang',
    
    // Buttons
    'order_now' => 'Pesan Sekarang',
    'learn_more' => 'Pelajari Lebih Lanjut',
    
    // Home Page
    'home_hero_title' => 'Layanan Jasa Online Andalan Anda',
];
```

## Translation Keys Yang Sudah Tersedia

### Navigation
- `nav_home` - Beranda / Home
- `nav_about` - Tentang / About
- `nav_service` - Layanan / Services
- `nav_product` - Produk / Products
- `nav_contact` - Kontak / Contact

### Common Buttons
- `order_now` - Pesan Sekarang / Order Now
- `learn_more` - Pelajari Lebih Lanjut / Learn More
- `contact_us` - Hubungi Kami / Contact Us
- `get_started` - Mulai Sekarang / Get Started
- `view_detail` - Lihat Detail / View Detail
- `become_partner` - Daftar Jadi Mitra / Become a Partner

### Home Page Keys
- `home_hero_title` - Judul hero section
- `home_hero_subtitle` - Subtitle hero section
- `home_explore_services` - Jelajahi Layanan
- `home_service_cleaning_title` - Judul layanan bersih-bersih
- `home_service_ac_title` - Judul layanan AC
- `home_why_title` - Mengapa Memilih TokiToki?
- `home_why_trusted` - Terpercaya
- `home_why_fast` - Cepat & Praktis
- Dan masih banyak lagi...

### About Page Keys
- `about_title` - Tentang Kami
- `about_welcome` - Selamat Datang di TokiToki
- `about_vision_title` - Visi Kami
- `about_mission_title` - Misi Kami
- Dan masih banyak lagi...

## Cara Menambah Translation Key Baru

### 1. Tambahkan ke file ID (`resources/lang/id/messages.php`):
```php
'my_new_text' => 'Teks Bahasa Indonesia',
```

### 2. Tambahkan ke file EN (`resources/lang/en/messages.php`):
```php
'my_new_text' => 'English Text',
```

### 3. Gunakan di Blade:
```blade
<p>{{ __('messages.my_new_text') }}</p>
```

## Testing

### 1. Cek Bahasa Aktif
```php
{{ App::getLocale() }} {{-- Menampilkan: id atau en --}}
```

### 2. Switch Bahasa
- Klik language switcher di header
- Atau akses langsung: 
  - `/language/id` untuk bahasa Indonesia
  - `/language/en` untuk bahasa Inggris

## Catatan Penting

1. **Jangan hapus translation key yang sudah ada** - Akan menyebabkan error
2. **Selalu tambahkan ke KEDUA file** (id dan en) - Untuk konsistensi
3. **Gunakan nama key yang deskriptif** - Contoh: `home_hero_title` bukan `h1`
4. **Group by section** - Gunakan prefix seperti `home_`, `about_`, `contact_`
5. **WhatsApp links tetap menggunakan template** - Tidak perlu di-translate karena sudah URL encoded

## Status Implementasi

### ✅ Sudah Diimplementasikan:
- [x] Language Controller & Middleware
- [x] Language Switcher (Header & Mobile)
- [x] Translation files (ID & EN)
- [x] Navigation menu

### 🔄 Dalam Progress:
- [ ] Home page content
- [ ] About page content
- [ ] Service page content
- [ ] Contact page content
- [ ] Product page content
- [ ] Footer content

### 📝 Cara Melanjutkan:
1. Buka file blade yang ingin di-translate
2. Identifikasi text yang hardcoded
3. Cari translation key yang sesuai atau buat baru
4. Replace text dengan `{{ __('messages.key_name') }}`
5. Test dengan switch bahasa

## Contoh Lengkap

### File Blade (`home.blade.php`):
```blade
<section>
    <h1>{{ __('messages.home_hero_title') }}</h1>
    <p>{{ __('messages.home_hero_subtitle') }}</p>
    <a href="#">{{ __('messages.home_explore_services') }}</a>
</section>
```

### File ID (`resources/lang/id/messages.php`):
```php
'home_hero_title' => 'Layanan Jasa Online Andalan Anda',
'home_hero_subtitle' => 'Platform terpercaya untuk semua kebutuhan Anda',
'home_explore_services' => 'Jelajahi Layanan',
```

### File EN (`resources/lang/en/messages.php`):
```php
'home_hero_title' => 'Your Reliable Online Service Platform',
'home_hero_subtitle' => 'Trusted platform for all your needs',
'home_explore_services' => 'Explore Services',
```

## Support

Jika ada pertanyaan atau butuh bantuan, silakan hubungi tim development.

---
**Last Updated**: 2025
**Version**: 1.0
