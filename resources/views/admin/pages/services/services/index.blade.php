@extends('admin.layouts.main')
@section('title', 'Services')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Services</h1>
            <p class="text-gray-600 mt-1">Kelola semua layanan yang tersedia</p>
        </div>
        <button onclick="openModal()" class="bg-[#10b981] hover:bg-[#059669] text-white px-4 py-2 rounded-lg inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Tambah Layanan
        </button>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-4">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1 relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="search" id="searchInput" placeholder="Cari layanan, kategori, atau provider..." 
                       class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="flex gap-2">
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                    <select id="categoryFilter" class="pl-10 pr-8 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none bg-white">
                        <option value="all">Semua Kategori</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Table -->
    <div class="bg-white rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full" id="servicesTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">ID</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Nama Layanan</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Kategori</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Provider</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Harga</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Rating</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Bookings</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Status</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                    <tr class="border-b hover:bg-gray-50" data-service="{{ $service->name . ' ' . optional($service->category)->name . ' ' . optional($service->owner)->brand_name }}">
                        <td class="py-3 px-4 text-sm text-gray-900">SV-{{ str_pad($service->id, 3, '0', STR_PAD_LEFT) }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900 font-medium">{{ $service->name }}</td>
                        <td class="py-3 px-4 text-sm">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                                {{ optional($service->category)->name ?? 'Uncategorized' }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ optional($service->owner)->brand_name ?? '-' }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900 font-semibold">
                            Rp {{ number_format($service->base_price, 0, ',', '.') }} / {{ $service->price_unit }}
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-700">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <span>{{ number_format($service->rating ?? 0, 1) }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $service->bookings_count ?? 0 }}</td>
                        <td class="py-3 px-4 text-sm">
                            @php
                                $statusClass = $service->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800';
                                $statusLabel = $service->is_active ? 'Aktif' : 'Nonaktif';
                            @endphp
                            <span class="px-2 py-1 rounded-full text-xs {{ $statusClass }}">
                                {{ $statusLabel }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-sm">
                            <div class="flex items-center gap-2">
                                <button onclick="viewService({{ $service->id }})" 
                                        class="p-1 text-blue-600 hover:bg-blue-50 rounded" title="Lihat Detail">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button onclick="editService({{ $service->id }})" 
                                        class="p-1 text-green-600 hover:bg-green-50 rounded" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                                <button onclick="deleteService({{ $service->id }})" 
                                        class="p-1 text-red-600 hover:bg-red-50 rounded" title="Hapus">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center py-8 text-gray-500">Tidak ada data layanan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="serviceModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="p-6 border-b">
            <h3 id="modalTitle" class="text-lg font-semibold text-gray-900">Tambah Layanan Baru</h3>
        </div>
        <form id="serviceForm" method="POST" action="{{ route('admin.services.services.store') }}">
            @csrf
            <input type="hidden" id="serviceId" name="id">
            <div class="p-6 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Layanan</label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                        <select id="category_id" name="category_id" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">Pilih Kategori</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <textarea id="description" name="description" rows="3" required
                              class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="base_price" class="block text-sm font-medium text-gray-700 mb-2">Harga</label>
                        <input type="number" id="base_price" name="base_price" placeholder="100000" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div>
                        <label for="duration" class="block text-sm font-medium text-gray-700 mb-2">Durasi</label>
                        <input type="text" id="duration" name="duration" placeholder="1 jam" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="owner_id" class="block text-sm font-medium text-gray-700 mb-2">Provider</label>
                        <select id="owner_id" name="owner_id" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">Pilih Provider</option>
                            @foreach($owners as $owner)
                            <option value="{{ $owner->id }}">{{ $owner->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="is_active" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select id="is_active" name="is_active" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>
                        </select>
                    </div>
                </div>

                <div id="viewDetails" class="hidden grid grid-cols-2 gap-4 pt-4 border-t">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <span class="text-lg font-semibold" id="viewRating">0</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Total Bookings</label>
                        <div class="text-lg font-semibold" id="viewBookings">0</div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t flex justify-end gap-2">
                <button type="button" onclick="closeModal()" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                    Batal
                </button>
                <button type="submit" id="submitBtn" class="bg-[#10b981] hover:bg-[#059669] text-white px-4 py-2 rounded-lg">
                    Tambah
                </button>
            </div>
        </form>
    </div>
</div>

<script>
let modalMode = 'add';
let services = @json($services->map(function($service) {
    return [
        'id' => $service->id,
        'name' => $service->name,
        'category_id' => $service->category_id,
        'category' => optional($service->category)->name,
        'description' => $service->description,
        'base_price' => $service->base_price,
        'price_unit' => $service->price_unit,
        'duration' => $service->duration,
        'owner_id' => $service->owner_id,
        'owner' => optional($service->owner)->brand_name,
        'is_active' => $service->is_active,
        'rating' => $service->rating ?? 0,
        'bookings_count' => $service->bookings_count ?? 0
    ];
}));

function openModal() {
    modalMode = 'add';
    document.getElementById('modalTitle').textContent = 'Tambah Layanan Baru';
    document.getElementById('submitBtn').textContent = 'Tambah';
    document.getElementById('serviceForm').reset();
    document.getElementById('serviceForm').action = '{{ route("admin.services.services.store") }}';
    document.getElementById('serviceId').value = '';
    document.getElementById('viewDetails').classList.add('hidden');
    enableFormFields();
    document.getElementById('serviceModal').classList.remove('hidden');
}

function editService(id) {
    modalMode = 'edit';
    const service = services.find(s => s.id === id);
    
    document.getElementById('modalTitle').textContent = 'Edit Layanan';
    document.getElementById('submitBtn').textContent = 'Simpan';
    document.getElementById('serviceForm').action = `{{ route("admin.services.services.update", "") }}/${id}`;
    
    document.getElementById('serviceId').value = service.id;
    document.getElementById('name').value = service.name;
    document.getElementById('category_id').value = service.category_id;
    document.getElementById('description').value = service.description;
    document.getElementById('base_price').value = service.base_price;
    document.getElementById('duration').value = service.duration;
    document.getElementById('owner_id').value = service.owner_id;
    document.getElementById('is_active').value = service.is_active ? '1' : '0';
    
    document.getElementById('viewDetails').classList.add('hidden');
    enableFormFields();
    document.getElementById('serviceModal').classList.remove('hidden');
}

function viewService(id) {
    modalMode = 'view';
    const service = services.find(s => s.id === id);
    
    document.getElementById('modalTitle').textContent = 'Detail Layanan';
    document.getElementById('submitBtn').style.display = 'none';
    
    // Fill form with data
    document.getElementById('name').value = service.name;
    document.getElementById('category_id').value = service.category_id;
    document.getElementById('description').value = service.description;
    document.getElementById('base_price').value = service.base_price;
    document.getElementById('duration').value = service.duration;
    document.getElementById('owner_id').value = service.owner_id;
    document.getElementById('is_active').value = service.is_active ? '1' : '0';
    
    // Show view details
    document.getElementById('viewRating').textContent = service.rating.toFixed(1);
    document.getElementById('viewBookings').textContent = service.bookings_count;
    
    document.getElementById('viewDetails').classList.remove('hidden');
    disableFormFields();
    document.getElementById('serviceModal').classList.remove('hidden');
}

function deleteService(id) {
    if (confirm('Apakah Anda yakin ingin menghapus layanan ini?')) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `{{ route("admin.services.services.destroy", "") }}/${id}`;
        
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
    document.getElementById('serviceModal').classList.add('hidden');
    document.getElementById('submitBtn').style.display = 'block';
}

function enableFormFields() {
    document.querySelectorAll('#serviceForm input, #serviceForm textarea, #serviceForm select').forEach(field => {
        field.disabled = false;
    });
}

function disableFormFields() {
    document.querySelectorAll('#serviceForm input, #serviceForm textarea, #serviceForm select').forEach(field => {
        field.disabled = true;
    });
}

// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const categoryFilter = document.getElementById('categoryFilter').value;
    filterServices(searchTerm, categoryFilter);
});

// Category filter functionality
document.getElementById('categoryFilter').addEventListener('change', function(e) {
    const categoryFilter = e.target.value;
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    filterServices(searchTerm, categoryFilter);
});

function filterServices(searchTerm, categoryFilter) {
    const rows = document.querySelectorAll('#servicesTable tbody tr');
    
    rows.forEach(row => {
        const serviceData = row.dataset.service.toLowerCase();
        const matchesSearch = serviceData.includes(searchTerm);
        const matchesCategory = categoryFilter === 'all' || serviceData.includes(categoryFilter.toLowerCase());
        
        if (matchesSearch && matchesCategory) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

// Close modal on outside click
document.getElementById('serviceModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>
@endsection
