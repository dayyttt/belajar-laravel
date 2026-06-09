<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/images/favicon.png') }}">
    <title>@yield('title')</title>

    @include('admin.layouts.css')
</head>

<body class="min-h-screen bg-gray-50">
    <!-- Main App Container -->
    <div id="app" class="min-h-screen bg-gray-50">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="lg:pl-64">
            <!-- Top Navbar -->
            @include('admin.layouts.header')

            <!-- Page Content -->
            <main class="pt-16 min-h-screen">
                <div class="p-6">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Toast Notifications Container -->
    <div id="toast-container" class="fixed top-4 right-4 z-50 space-y-2"></div>

    <!-- All Scripts -->
    @include('admin.layouts.script')
</body>

</html>