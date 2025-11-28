@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                {{ __('messages.about_title') }}
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto">
                {{ __('messages.about_welcome') }}
            </p>

            <!-- Animated Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center animate-slide-up">
                    <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">500+</div>
                    <div class="text-gray-600 text-sm uppercase tracking-wide">Projects Completed</div>
                </div>
                <div class="text-center animate-slide-up delay-200">
                    <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">10K+</div>
                    <div class="text-gray-600 text-sm uppercase tracking-wide">Happy Clients</div>
                </div>
                <div class="text-center animate-slide-up delay-400">
                    <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">5+</div>
                    <div class="text-gray-600 text-sm uppercase tracking-wide">Years Experience</div>
                </div>
                <div class="text-center animate-slide-up delay-600">
                    <div class="text-3xl md:text-4xl font-bold text-primary-600 mb-2">24/7</div>
                    <div class="text-gray-600 text-sm uppercase tracking-wide">Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <div class="relative">
                    <div class="aspect-video bg-gradient-to-br from-primary-500 to-secondary-600 rounded-3xl p-8 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Our Story</h3>
                            <p class="text-white/90">Innovation meets dedication in every project</p>
                        </div>
                    </div>
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-400 rounded-full opacity-20 animate-float"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-pink-400 rounded-full opacity-20 animate-float delay-1000"></div>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    {{ __('messages.about_description_1') }}
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    {{ __('messages.about_description_2') }}
                </p>

                <!-- Mission & Vision Cards -->
                <div class="space-y-6">
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-primary-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.about_vision_title') }}</h3>
                                <p class="text-gray-600">{{ __('messages.about_vision_text') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-2xl border border-purple-100">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-secondary-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('messages.about_mission_title') }}</h3>
                                <p class="text-gray-600">{{ __('messages.about_mission_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('messages.about_values_title') }}
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                The principles that guide everything we do
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('messages.about_value_integrity') }}</h3>
                <p class="text-gray-600">We conduct business with the highest ethical standards and transparency.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('messages.about_value_innovation') }}</h3>
                <p class="text-gray-600">We continuously push boundaries and embrace cutting-edge technologies.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('messages.about_value_excellence') }}</h3>
                <p class="text-gray-600">We deliver exceptional quality in every project and exceed expectations.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('messages.about_value_customer_focus') }}</h3>
                <p class="text-gray-600">Our customers are at the heart of everything we do and create.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Meet Our Team
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Passionate professionals dedicated to your success
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full mx-auto flex items-center justify-center shadow-xl group-hover:scale-105 transition-transform duration-300">
                        <span class="text-3xl font-bold text-white">JD</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">John Doe</h3>
                <p class="text-primary-600 mb-3">CEO & Founder</p>
                <p class="text-gray-600 text-sm">Visionary leader with 10+ years of experience in tech innovation and business development.</p>
            </div>

            <!-- Team Member 2 -->
            <div class="text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-secondary-500 to-secondary-600 rounded-full mx-auto flex items-center justify-center shadow-xl group-hover:scale-105 transition-transform duration-300">
                        <span class="text-3xl font-bold text-white">JS</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-secondary-500 to-secondary-600 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Jane Smith</h3>
                <p class="text-primary-600 mb-3">CTO</p>
                <p class="text-gray-600 text-sm">Technical architect specializing in scalable solutions and emerging technologies.</p>
            </div>

            <!-- Team Member 3 -->
            <div class="text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-green-500 to-green-600 rounded-full mx-auto flex items-center justify-center shadow-xl group-hover:scale-105 transition-transform duration-300">
                        <span class="text-3xl font-bold text-white">MB</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-600 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Mike Brown</h3>
                <p class="text-primary-600 mb-3">Head of Design</p>
                <p class="text-gray-600 text-sm">Creative director focused on user experience and innovative design solutions.</p>
            </div>
        </div>
    </div>
</section>

@endsection