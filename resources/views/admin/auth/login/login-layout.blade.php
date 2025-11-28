<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Login | Admin' )</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    
    <style>
        /* Custom toastr styles */
        .toast {
            font-size: 14px;
            padding: 15px 15px 15px 20px;
        }
        .toast-success {
            background-color: #4CAF50;
        }
        .toast-error {
            background-color: #F44336;
        }
    </style>
    
    @stack('styles')
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-white to-blue-100">
    @yield('content')

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <script>
        // Toastr configuration
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            timeOut: 5000,
            extendedTimeOut: 2000,
            preventDuplicates: true
        };

        // Display success message if any
        @if(session('success'))
            toastr.success('{{ session('success') }}', 'Berhasil');
        @endif

        // Display error messages if any
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error');
            @endforeach
        @endif
    </script>
    
    @stack('scripts')
</body>
</html>
