@section('hero_heading', 'Hubungi Kami Hari Ini')
@section('hero_subtitle', 'Kami siap membantu Anda dengan pertanyaan atau kebutuhan apa pun. Jangan ragu untuk menghubungi tim kami yang profesional.')
@section('hero_bg_style', 'background-image: url(\'' . asset('assets/img/bg/Bg-contact.jpg') . '\'); background-size: cover; background-position: center;')
@endsection

@extends('layouts.app')

@section('content')

<!-- Contact Section -->
<section class="relative py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                {{ __('messages.contact_title') }}
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto">
                {{ __('messages.contact_subtitle') }}
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">

            <!-- Contact Information -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch</h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Ready to transform your business? We'd love to hear from you and discuss how we can help you achieve your goals.
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="space-y-6">
                    <!-- Location -->
                    <div class="flex items-start space-x-6 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border border-blue-100 hover:shadow-lg transition-shadow duration-300">
                        <div class="w-12 h-12 bg-primary-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.contact_location_title') }}</h3>
                            <p class="text-gray-600">{{ __('messages.contact_location_address') }}</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-6 p-6 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl border border-purple-100 hover:shadow-lg transition-shadow duration-300">
                        <div class="w-12 h-12 bg-secondary-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.contact_email_title') }}</h3>
                            <a href="mailto:{{ __('messages.contact_email') }}" class="text-primary-600 hover:text-primary-700 font-medium">
                                {{ __('messages.contact_email') }}
                            </a>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start space-x-6 p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl border border-green-100 hover:shadow-lg transition-shadow duration-300">
                        <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.contact_phone_title') }}</h3>
                            <a href="tel:{{ __('messages.contact_phone') }}" class="text-primary-600 hover:text-primary-700 font-medium">
                                {{ __('messages.contact_phone') }}
                            </a>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div class="flex items-start space-x-6 p-6 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-2xl border border-yellow-100 hover:shadow-lg transition-shadow duration-300">
                        <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.contact_hours_title') }}</h3>
                            <p class="text-gray-600">{{ __('messages.contact_hours') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-500 text-white rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-600 text-white rounded-lg flex items-center justify-center hover:bg-pink-700 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.219-5.162 1.219-5.162s-.279-.558-.279-1.379c0-1.279.74-2.237 1.658-2.237.783 0 1.16.588 1.16 1.299 0 .787-.501 1.968-.759 3.063-.219.919.461 1.668 1.36 1.668 1.639 0 2.898-1.719 2.898-4.201 0-2.198-1.579-3.736-3.837-3.736-2.617 0-4.15 1.96-4.15 3.988 0 .787.301 1.631.679 2.088.078.099.099.179.079.279-.08.301-.24 1.04-.28 1.178-.04.179-.139.219-.319.139-1.199-.559-1.939-2.298-1.939-3.697 0-2.897 2.099-5.556 6.077-5.556 3.198 0 5.675 2.278 5.675 5.321 0 3.177-2.001 5.734-4.777 5.734-.939 0-1.818-.499-2.118-1.099 0 0-.479 1.838-.599 2.277-.219.859-.8 1.919-1.199 2.577C9.197 23.814 10.566 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-700 text-white rounded-lg flex items-center justify-center hover:bg-blue-800 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:pl-8">
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-3xl shadow-xl border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">{{ __('messages.contact_form_title') }}</h3>

                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">
                                    {{ __('messages.contact_form_first_name') }} *
                                </label>
                                <input
                                    type="text"
                                    id="firstName"
                                    name="firstName"
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200"
                                    placeholder="John"
                                >
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">
                                    {{ __('messages.contact_form_last_name') }} *
                                </label>
                                <input
                                    type="text"
                                    id="lastName"
                                    name="lastName"
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200"
                                    placeholder="Doe"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('messages.contact_form_email') }} *
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200"
                                placeholder="john@example.com"
                            >
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('messages.contact_form_subject') }} *
                            </label>
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                required
                                class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200"
                                placeholder="How can we help you?"
                            >
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('messages.contact_form_message') }} *
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                required
                                class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200 resize-none"
                                placeholder="Tell us about your project or inquiry..."
                            ></textarea>
                        </div>

                        <div class="pt-4">
                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                            >
                                {{ __('messages.contact_form_submit') }}
                                <svg class="w-5 h-5 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                        </div>

                        <p class="text-sm text-gray-500 text-center">
                            We typically respond within 24 hours. All information is kept confidential.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Find Us</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Visit our office or schedule a meeting to discuss your project in person.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="aspect-video bg-gray-200 flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                    </svg>
                    <p class="text-gray-600">Interactive map would be embedded here</p>
                    <p class="text-sm text-gray-500 mt-2">Perumahan Grand Mutiara 2, Blok B1 No.1<br>Setu Sari, Kec. Cileungsi<br>Kabupaten Bogor, Jawa Barat 16820</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection