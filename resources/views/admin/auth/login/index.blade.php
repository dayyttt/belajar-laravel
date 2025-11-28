@extends('admin.auth.login.login-layout')

@section('title', 'Login | Startup Penyedia Jasa')

@section('content')
    <!-- 🔹 Container Utama -->
    <div class="flex flex-col md:flex-row bg-white shadow-2xl rounded-2xl overflow-hidden max-w-4xl w-full">
        <!-- 🔹 Bagian Kiri (Ilustrasi & Branding) -->
        <div class="md:w-1/2 bg-gradient-to-br from-green-500 to-green-700 text-white flex flex-col justify-center items-center p-10 relative">
            <h2 class="text-3xl font-bold mb-3">Selamat Datang 👋</h2>
            <p class="text-sm text-green-100 mb-5 text-center">
                Platform inovatif untuk menghubungkan pelanggan dan penyedia jasa profesional dengan mudah dan cepat.
            </p>
            <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Login Illustration" class="w-48 mb-3 drop-shadow-lg animate-bounce">
            <p class="text-xs text-green-100 mt-3">© 2025 Startup Jasa Toki Toki - All Rights Reserved</p>
        </div>

        <!-- 🔹 Bagian Kanan (Form Login) -->
        <div class="md:w-1/2 p-10 flex flex-col justify-center">
            <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Masuk ke Dashboard</h2>

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                           placeholder="contoh@email.com" value="{{ old('email') }}" required>
                </div>

                <div>
                    <label for="password" class="text-sm font-medium text-gray-600">Kata Sandi</label>
                    <div class="relative">
                        <input type="password" name="password" id="password"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                               placeholder="********" required>
                        <button type="button" onclick="togglePassword()" 
                                class="absolute inset-y-0 right-3 flex items-center text-gray-400 hover:text-green-600">
                            👁️
                        </button>
                    </div>
                </div>

                <div class="flex justify-between items-center">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" name="remember" class="mr-2"> Ingat saya
                    </label>
                    <a href="#" class="text-sm text-green-600 hover:underline">Lupa password?</a>
                </div>

                <button type="submit"
                        class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-300 shadow-md">
                    Masuk Sekarang 🚀
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-5">
                Belum punya akun? 
                <a href="#" class="text-green-600 font-medium hover:underline">Daftar Sekarang</a>
            </p>
        </div>
    </div>

    @push('scripts')
    <script>
        // Toggle show/hide password
        function togglePassword() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
    @endpush
@endsection
