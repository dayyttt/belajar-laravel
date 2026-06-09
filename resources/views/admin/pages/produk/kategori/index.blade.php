@extends('admin.layouts.main')
@section('title', 'Service Categories')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Service Categories</h1>
            <p class="text-gray-600 mt-1">Kelola kategori layanan TokiToki</p>
        </div>
        <button onclick="openModal()" class="bg-[#10b981] hover:bg-[#059669] text-white px-4 py-2 rounded-lg inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Tambah Kategori
        </button>
    </div>

    <!-- Search -->
    <div class="bg-white rounded-lg shadow p-4">
        <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input type="search" id="searchInput" placeholder="Cari kategori..." 
                   class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="categoriesGrid">
        @forelse($categories as $category)
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow" data-category="{{ $category->name }}">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-[#10b981] rounded-lg flex items-center justify-center text-white mr-3">
                        @switch($category->icon)
                            @case('home')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                @break
                            @case('car')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                @break
                            @case('smartphone')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a1 1 0 001-1V4a1 1 0 00-1-1H8a1 1 0 00-1 1v16a1 1 0 001 1z"></path>
                                </svg>
                                @break
                            @case('heart')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                @break
                            @case('book')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                @break
                            @case('briefcase')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6"></path>
                                </svg>
                                @break
                            @default
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                        @endswitch
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ $category->name }}</h3>
                        <p class="text-sm text-gray-500">{{ Str::limit($category->description, 50) }}</p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <button onclick="editCategory({{ $category->id }})" class="text-blue-600 hover:text-blue-800">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button onclick="deleteCategory({{ $category->id }})" class="text-red-600 hover:text-red-800">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1-1H8a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <div class="text-xs text-gray-500">Total Services</div>
                    <div class="text-xl font-bold text-[#10b981]">{{ $category->services_count ?? 0 }}</div>
                </div>
                <div>
                    <div class="text-xs text-gray-500">Total Bookings</div>
                    <div class="text-xl font-bold text-[#10b981]">{{ $category->bookings_count ?? 0 }}</div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">Tidak ada kategori</h3>
            <p class="mt-1 text-sm text-gray-500">Mulai dengan membuat kategori layanan pertama.</p>
            <div class="mt-6">
                <button onclick="openModal()" class="bg-[#10b981] hover:bg-[#059669] text-white px-4 py-2 rounded-lg">
                    Tambah Kategori
                </button>
            </div>
        </div>
        @endforelse
    </div>
</div>

<!-- Modal -->
<div id="categoryModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-lg max-w-md w-full p-6">
            <h3 id="modalTitle" class="text-lg font-semibold text-gray-900">Tambah Kategori Baru</h3>
        </div>
        <form id="categoryForm" method="POST" action="{{ route('admin.pages.produk.kategori.store') }}">
            @csrf
            <input type="hidden" id="categoryId" name="id">
            <input type="hidden" id="methodField" name="_method" value="POST">
            
            <div class="mt-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                <input type="text" id="name" name="name" required 
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            
            <div class="mt-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="description" name="description" rows="3" required
                          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>
            
            <div class="mt-4">
                <label for="icon" class="block text-sm font-medium text-gray-700">Icon</label>
                <select id="icon" name="icon" required 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Pilih Icon</option>
                    <option value="home">Rumah</option>
                    <option value="car">Kendaraan</option>
                    <option value="smartphone">Elektronik</option>
                    <option value="heart">Kesehatan</option>
                    <option value="book">Pendidikan</option>
                    <option value="briefcase">Bisnis & IT</option>
                </select>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" onclick="closeModal()" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">
                    Batal
                </button>
                <button type="submit" id="submitButton" class="px-4 py-2 bg-[#10b981] text-white rounded-lg hover:bg-[#059669]">
                    <span id="submitButtonText">Tambah</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
let modalMode = 'add';
let categories = @json($categories);

function openModal() {
    document.getElementById('modalTitle').textContent = 'Tambah Kategori Baru';
    document.getElementById('submitButtonText').textContent = 'Tambah';
    document.getElementById('categoryForm').reset();
    document.getElementById('categoryForm').action = '{{ route("admin.pages.produk.kategori.store") }}';
    document.getElementById('methodField').value = 'POST';
    document.getElementById('categoryId').value = '';
    document.getElementById('categoryModal').classList.remove('hidden');
}

function editCategory(id) {
    const category = categories.find(c => c.id === id);
    if (!category) return;
    
    document.getElementById('modalTitle').textContent = 'Edit Kategori';
    document.getElementById('submitButtonText').textContent = 'Simpan';
    document.getElementById('categoryForm').action = `{{ route("admin.pages.produk.kategori.update", "") }}/${id}`;
    document.getElementById('methodField').value = 'PUT';
    
    document.getElementById('categoryId').value = category.id;
    document.getElementById('name').value = category.name;
    document.getElementById('description').value = category.description;
    document.getElementById('icon').value = category.icon;
    
    document.getElementById('categoryModal').classList.remove('hidden');
}

function deleteCategory(id) {
    if (confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `{{ route("admin.pages.produk.kategori.destroy", "") }}/${id}`;
        
        const csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}';
        
        const methodField = document.createElement('input');
        methodField.type = 'hidden';
        methodField.name = '_method';
        methodField.value = 'DELETE';
        
        form.appendChild(csrfToken);
        form.appendChild(methodField);
        document.body.appendChild(form);
        form.submit();
    }
}

function closeModal() {
    document.getElementById('categoryModal').classList.add('hidden');
}

// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const categoryCards = document.querySelectorAll('[data-category]');
    
    categoryCards.forEach(card => {
        const categoryName = card.getAttribute('data-category').toLowerCase();
        if (categoryName.includes(searchTerm)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});

// Close modal when clicking outside
document.getElementById('categoryModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>
@endsection