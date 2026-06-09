<?php
$blade = <<<'ENDOFBLADE'
@extends('layouts.home')
@section('title', $layanan['title'] . ' - TokiToki')
@section('content')

{{-- HERO --}}
<section class="relative min-h-screen flex flex-col justify-end overflow-hidden" style="background-image:url('{{ $layanan[''unsplash_img''] ?? asset(''assets/img/about/'' . $layanan[''img'']) }}');background-size:cover;background-position:center;">
<div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/80"></div>
<div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 pt-40 w-full">
<nav class="flex items-center space-x-2 text-sm mb-6">
<a href="{{ route('home') }}" class="text-white/60 hover:text-white transition-colors">Beranda</a>
<span class="text-white/40">/</span>
<a href="{{ route('layanan-info.index') }}" class="text-white/60 hover:text-white transition-colors">Layanan</a>
<span class="text-white/40">/</span>
<span class="text-white/90 font-medium">{{ $layanan['title'] }}</span>
</nav>
@if($layanan['badge'])
<div class="mb-4"><span class="inline-flex items-center px-4 py-1.5 bg-gradient-to-r {{ $layanan['color'] }} text-white text-xs font-bold rounded-full uppercase tracking-wider shadow-lg">{{ $layanan['badge'] }}</span></div>
@endif
<h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white mb-4 leading-tight">{{ $layanan['title'] }}</h1>
<p class="text-white/80 text-lg md:text-xl max-w-2xl mb-8 leading-relaxed">{{ $layanan['short_desc'] }}</p>
<div class="flex flex-col sm:flex-row gap-4 mb-12">
<a href="{{ route('contacts.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r {{ $layanan['color'] }} text-white font-bold rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">Mulai Sekarang</a>
<a href="#cara-kerja" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/60 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">Lihat Cara Kerja</a>
</div>
@if(!empty($layanan['stats']))
<div class="grid grid-cols-3 gap-4 max-w-xl">
@foreach($layanan['stats'] as $stat)
<div class="text-center bg-white/10 backdrop-blur-sm rounded-2xl px-4 py-4 border border-white/20">
<div class="text-2xl sm:text-3xl font-extrabold text-white">{{ $stat['value'] }}</div>
<div class="text-white/70 text-xs sm:text-sm mt-1">{{ $stat['label'] }}</div>
</div>
@endforeach
</div>
@endif
</div>
</section>

{{-- MAIN CONTENT --}}
<div class="bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="lg:grid lg:grid-cols-3 lg:gap-12">
<div class="lg:col-span-2">

{{-- INTRO --}}
<section class="py-16 md:py-20">
<div class="max-w-3xl">
<div class="relative mb-10">
<svg class="absolute -top-4 -left-4 w-16 h-16 text-green-100" fill="currentColor" viewBox="0 0 32 32"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/></svg>
<blockquote class="pl-8 pt-4"><p class="text-xl md:text-2xl text-gray-700 italic leading-relaxed font-light">{{ $layanan['intro'] ?? $layanan['description'] }}</p></blockquote>
</div>
@if(!empty($layanan['highlight_title']))
<div class="border-l-4 border-green-500 pl-6">
<h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">{{ $layanan['highlight_title'] }}</h2>
<p class="text-gray-600 leading-relaxed text-lg">{{ $layanan['highlight_body'] }}</p>
</div>
@endif
</div>
</section>

{{-- BENEFITS --}}
<section class="py-16 md:py-20 bg-gray-50 -mx-4 sm:-mx-6 lg:-mx-0 px-4 sm:px-6 lg:px-0">
<div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
<div>
<span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full uppercase tracking-wider mb-3">Keunggulan</span>
<h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Apa yang Kamu Dapatkan</h2>
<p class="text-gray-500 leading-relaxed mb-6">Setiap layanan dirancang untuk memberikan pengalaman terbaik dengan standar kualitas yang tidak pernah kami kompromikan.</p>
<div class="space-y-3">
@foreach($layanan['benefits'] as $benefit)
<div class="flex items-start space-x-4 bg-white rounded-xl p-4 shadow-sm border border-gray-100 hover:shadow-md hover:border-green-200 transition-all duration-200">
<div class="flex-shrink-0 w-8 h-8 bg-gradient-to-br from-green-400 to-teal-500 rounded-lg flex items-center justify-center shadow-sm">
<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
</div>
<span class="text-gray-700 font-medium leading-relaxed pt-0.5">{{ $benefit }}</span>
</div>
@endforeach
</div>
</div>
<div class="hidden lg:block relative mt-10 lg:mt-0">
<div class="relative">
<div class="absolute -top-4 -right-4 w-full h-full border-4 border-green-500 rounded-3xl opacity-30"></div>
<img src="{{ $layanan['unsplash_img'] ?? asset('assets/img/about/' . $layanan['img']) }}" alt="{{ $layanan['title'] }}" class="relative z-10 w-full h-80 object-cover rounded-3xl shadow-2xl">
</div>
</div>
</div>
</section>

{{-- DETAIL SECTIONS --}}
@if(!empty($layanan['detail_sections']))
<section class="py-16 md:py-20">
<div class="mb-10">
<span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full uppercase tracking-wider mb-3">Lebih Dalam</span>
<h2 class="text-2xl md:text-3xl font-bold text-gray-900">Kenali Layanan Ini Lebih Jauh</h2>
</div>
<div class="space-y-16">
@foreach($layanan['detail_sections'] as $idx => $section)
<div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
<div class="{{ $idx % 2 === 1 ? 'lg:order-2' : '' }}">
<img src="{{ $section['img'] }}" alt="{{ $section['title'] }}" class="w-full h-64 object-cover rounded-2xl shadow-lg">
</div>
<div class="{{ $idx % 2 === 1 ? 'lg:order-1' : '' }} mt-6 lg:mt-0">
<div class="inline-flex items-center justify-center w-10 h-10 bg-gradient-to-br from-green-400 to-teal-500 rounded-xl text-white font-bold text-sm mb-4 shadow">{{ $idx + 1 }}</div>
<h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">{{ $section['title'] }}</h3>
<p class="text-gray-600 leading-relaxed">{{ $section['body'] }}</p>
</div>
</div>
@endforeach
</div>
</section>
@endif

{{-- HOW IT WORKS --}}
<section id="cara-kerja" class="py-16 md:py-20 -mx-4 sm:-mx-6 lg:-mx-0 px-4 sm:px-6 lg:px-0">
<div class="bg-gray-900 rounded-3xl px-6 py-12 md:px-10 md:py-16">
<div class="text-center mb-12">
<span class="inline-block px-3 py-1 bg-green-500/20 text-green-400 text-xs font-bold rounded-full uppercase tracking-wider mb-3">Proses</span>
<h2 class="text-2xl md:text-3xl font-bold text-white mb-3">Cara Kerja</h2>
<p class="text-gray-400 max-w-lg mx-auto">Mulai dari nol hingga layanan selesai — prosesnya mudah dan transparan.</p>
</div>
<div class="relative">
<div class="hidden lg:block absolute top-8 left-0 right-0 h-px border-t-2 border-dashed border-gray-700 mx-16"></div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
@foreach($layanan['how_it_works'] as $step)
<div class="relative flex flex-col items-center text-center">
<div class="relative z-10 w-16 h-16 bg-gradient-to-br {{ $layanan['color'] }} rounded-2xl flex items-center justify-center text-white font-extrabold text-xl shadow-lg mb-4">{{ $step['step'] }}</div>
<h4 class="font-bold text-white mb-2">{{ $step['title'] }}</h4>
<p class="text-gray-400 text-sm leading-relaxed">{{ $step['desc'] }}</p>
</div>
@endforeach
</div>
</div>
<div class="text-center mt-12">
<a href="{{ route('contacts.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r {{ $layanan['color'] }} text-white font-bold rounded-2xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">Mulai Sekarang</a>
</div>
</div>
</section>

{{-- TESTIMONIALS --}}
@if(!empty($layanan['testimonials']))
<section class="py-16 md:py-20">
<div class="mb-10">
<span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full uppercase tracking-wider mb-3">Ulasan</span>
<h2 class="text-2xl md:text-3xl font-bold text-gray-900">Apa Kata Mereka</h2>
</div>
<div class="grid sm:grid-cols-2 gap-6">
@foreach($layanan['testimonials'] as $testimonial)
<div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-200">
<svg class="w-8 h-8 text-green-400 mb-4" fill="currentColor" viewBox="0 0 32 32"><path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/></svg>
<p class="text-gray-700 italic leading-relaxed mb-5">"{{ $testimonial['quote'] }}"</p>
<div class="flex items-center mb-4">
@for($s = 1; $s <= 5; $s++)
<svg class="w-4 h-4 {{ $s <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
@endfor
</div>
<div class="flex items-center space-x-3">
<div class="w-10 h-10 bg-gradient-to-br {{ $testimonial['avatar_color'] }} rounded-full flex items-center justify-center text-white font-bold text-sm flex-shrink-0">{{ $testimonial['avatar_initials'] }}</div>
<div>
<p class="font-semibold text-gray-900 text-sm">{{ $testimonial['name'] }}</p>
<p class="text-gray-400 text-xs">{{ $testimonial['role'] }}</p>
</div>
</div>
</div>
@endforeach
</div>
</section>
@endif

{{-- FAQ --}}
<section class="py-16 md:py-20 -mx-4 sm:-mx-6 lg:-mx-0 px-4 sm:px-6 lg:px-0">
<div class="bg-gray-50 rounded-3xl px-6 py-12 md:px-10">
<div class="mb-10">
<span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full uppercase tracking-wider mb-3">FAQ</span>
<h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Pertanyaan Umum</h2>
</div>
<div class="space-y-3">
@foreach($layanan['faqs'] as $i => $faq)
<div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
<button onclick="toggleFaq({{ $i }})" class="w-full flex items-center justify-between px-6 py-5 text-left hover:bg-gray-50 transition-colors">
<span class="font-semibold text-gray-900 pr-4">{{ $faq['q'] }}</span>
<div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
<svg id="faq-icon-{{ $i }}" class="w-4 h-4 text-gray-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
</div>
</button>
<div id="faq-body-{{ $i }}" class="hidden border-t border-gray-100">
<div class="px-6 py-5"><p class="text-gray-600 leading-relaxed">{{ $faq['a'] }}</p></div>
</div>
</div>
@endforeach
</div>
</div>
</section>

</div>{{-- end main col --}}

{{-- SIDEBAR --}}
<div class="lg:col-span-1 mt-16 lg:mt-0">
<div class="lg:sticky lg:top-8 space-y-6 pb-16">
<div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
<h3 class="font-bold text-gray-900 mb-4">Yang Kamu Dapatkan</h3>
<ul class="space-y-2.5">
@foreach($layanan['benefits'] as $benefit)
<li class="flex items-start space-x-3">
<div class="flex-shrink-0 w-5 h-5 bg-gradient-to-br from-green-400 to-teal-500 rounded-full flex items-center justify-center mt-0.5">
<svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
</div>
<span class="text-gray-600 text-sm leading-relaxed">{{ $benefit }}</span>
</li>
@endforeach
</ul>
</div>
<div class="bg-gradient-to-br {{ $layanan['color'] }} rounded-2xl p-6 text-white shadow-lg">
<h3 class="font-bold text-lg mb-2">Siap Mulai?</h3>
<p class="text-white/80 text-sm mb-5 leading-relaxed">Hubungi kami sekarang dan dapatkan konsultasi gratis untuk layanan {{ $layanan['title'] }}.</p>
<a href="{{ route('contacts.index') }}" class="block w-full text-center px-4 py-3 bg-white text-green-600 font-bold rounded-xl hover:bg-gray-50 transition-colors text-sm shadow">Hubungi Kami Sekarang</a>
<a href="{{ route('layanan-info.index') }}" class="block w-full text-center px-4 py-2.5 mt-2 border border-white/40 text-white/90 font-medium rounded-xl hover:bg-white/10 transition-colors text-sm">Lihat Semua Layanan</a>
</div>
@if(count($related))
<div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
<h3 class="font-bold text-gray-900 mb-4">Layanan Lainnya</h3>
<div class="space-y-3">
@foreach($related as $rel)
<a href="{{ route('layanan-info.show', $rel['slug']) }}" class="flex items-center space-x-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group border border-transparent hover:border-gray-200">
<img src="{{ $rel['unsplash_img'] ?? asset('assets/img/about/' . $rel['img']) }}" alt="{{ $rel['title'] }}" class="w-14 h-14 rounded-xl object-cover flex-shrink-0">
<div class="min-w-0 flex-1">
<p class="text-sm font-semibold text-gray-900 group-hover:text-green-600 transition-colors truncate">{{ $rel['title'] }}</p>
<p class="text-xs text-gray-400 truncate mt-0.5">{{ $rel['short_desc'] }}</p>
</div>
<svg class="w-4 h-4 text-gray-300 group-hover:text-green-500 flex-shrink-0 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
</a>
@endforeach
</div>
</div>
@endif
</div>
</div>{{-- end sidebar --}}

</div>{{-- end grid --}}
</div>
</div>

{{-- CTA BOTTOM --}}
<section class="py-20 bg-gradient-to-r from-green-500 via-teal-500 to-emerald-600 relative overflow-hidden">
<div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
<div class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
<div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
<h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Mulai gunakan {{ $layanan['title'] }} sekarang</h2>
<p class="text-white/85 text-lg mb-8 max-w-2xl mx-auto">Bergabung dengan ribuan pengguna yang sudah merasakan manfaatnya. Konsultasi pertama gratis.</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="{{ route('contacts.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-green-600 font-bold rounded-2xl shadow-xl hover:bg-gray-50 hover:scale-105 transition-all duration-300">Hubungi Kami</a>
<a href="{{ route('layanan-info.index') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/60 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">Lihat Semua Layanan</a>
</div>
</div>
</section>

@push('scripts')
<script>
function toggleFaq(index) {
    const body = document.getElementById('faq-body-' + index);
    const icon = document.getElementById('faq-icon-' + index);
    const isOpen = !body.classList.contains('hidden');
    document.querySelectorAll('[id^="faq-body-"]').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('[id^="faq-icon-"]').forEach(el => el.style.transform = '');
    if (!isOpen) { body.classList.remove('hidden'); icon.style.transform = 'rotate(180deg)'; }
}
</script>
@endpush

@endsection
ENDOFBLADE;
file_put_contents('resources/views/layanan-info/show.blade.php', $blade);
echo 'done:' . strlen($blade);
