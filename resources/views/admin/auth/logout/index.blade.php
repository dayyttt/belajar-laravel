@if (session('status'))
<div id="logoutMessage" class="bg-green-100 border border-green-300 text-green-700 px-4 py-2 rounded mb-3 text-center">
    {{ session('status') }}
    <p class="text-sm text-gray-500 mt-1">Mengalihkan ke halaman login...</p>
</div>

<script>
    setTimeout(() => {
        document.getElementById('logoutMessage').style.display = 'none';
        window.location.href = '/login';
    }, 3000);
</script>
@endif
