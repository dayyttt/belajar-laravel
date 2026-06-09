@extends('admin.layouts.main')
@section('title', 'Service Owners')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Service Owners</h1>
            <p class="text-gray-600 mt-1">Kelola penyedia layanan dan mitra bisnis</p>
        </div>
        <button onclick="openModal()" class="bg-[#10b981] hover:bg-[#059669] text-white px-4 py-2 rounded-lg inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Tambah Service Owner
        </button>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-sm text-gray-600">Total Partners</div>
            <div class="text-2xl font-bold text-gray-900 mt-1">{{ $owners->count() }}</div>
            <div class="text-xs text-green-600 mt-1">
                {{ $owners->where('is_active', true)->count() }} Aktif
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-sm text-gray-600">Total Services</div>
            <div class="text-2xl font-bold text-gray-900 mt-1">
                {{ $owners->sum(function($owner) { return $owner->services->count(); }) }}
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-sm text-gray-600">Total Bookings</div>
            <div class="text-2xl font-bold text-gray-900 mt-1">
                {{ $owners->sum(function($owner) { return $owner->services->sum(function($service) { return $service->bookings->count(); }); }) }}
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-sm text-gray-600">Pending Review</div>
            <div class="text-2xl font-bold text-yellow-600 mt-1">
                {{ $owners->where('is_active', false)->count() }}
            </div>
        </div>
    </div>

    <!-- Search -->
    <div class="bg-white rounded-lg shadow p-4">
        <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input type="search" id="searchInput" placeholder="Cari service owner berdasarkan nama, company, email, atau kategori..." 
                   class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
    </div>

    <!-- Service Owners Table -->
    <div class="bg-white rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full" id="ownersTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">ID</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Partner</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Kontak</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Kategori</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Rating</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Services</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Bookings</th>
                        <th class="text-right py-3 px-4 text-sm font-semibold text-gray-700">Revenue</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Status</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($owners as $owner)
                    <tr class="border-b hover:bg-gray-50" data-owner="{{ $owner->brand_name . ' ' . $owner->pic_name . ' ' . optional($owner->category)->name }}">
                        <td class="py-3 px-4 text-sm text-gray-900">SO-{{ str_pad($owner->id, 3, '0', STR_PAD_LEFT) }}</td>
                        <td class="py-3 px-4 text-sm">
                            <div>
                                <div class="font-medium text-gray-900 flex items-center gap-2">
                                    {{ $owner->brand_name }}
                                    @if($owner->is_verified)
                                    <span class="px-2 py-1 text-xs bg-blue-50 text-blue-700 border border-blue-200 rounded-full">
                                        ✓ Verified
                                    </span>
                                    @endif
                                </div>
                                <div class="text-xs text-gray-500">{{ $owner->pic_name }}</div>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-sm">
                            <div class="space-y-1">
                                <div class="flex items-center gap-1 text-gray-700">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-xs">{{ $owner->email }}</span>
                                </div>
                                <div class="flex items-center gap-1 text-gray-700">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span class="text-xs">{{ $owner->phone }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-sm">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                                {{ optional($owner->category)->name ?? 'Uncategorized' }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-sm">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <span class="font-semibold">{{ number_format($owner->rating ?? 0, 1) }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-sm text-center text-gray-900">{{ $owner->services->count() }}</td>
                        <td class="py-3 px-4 text-sm text-center text-gray-900">{{ $owner->services->sum(function($service) { return $service->bookings->count(); }) }}</td>
                        <td class="py-3 px-4 text-sm text-right text-gray-900 font-semibold">
                            Rp {{ number_format($owner->total_revenue ?? 0, 0, ',', '.') }}
                        </td>
                        <td class="py-3 px-4 text-sm">
                            @php
                                $statusClass = $owner->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800';
                                $statusLabel = $owner->is_active ? 'Aktif' : 'Nonaktif';
                            @endphp
                            <span class="px-2 py-1 rounded-full text-xs {{ $statusClass }}">
                                {{ $statusLabel }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-sm">
                            <div class="flex items-center gap-2">
                                <button onclick="viewOwner({{ $owner->id }})" 
                                        class="p-1 text-blue-600 hover:bg-blue-50 rounded" title="Lihat Detail">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button onclick="editOwner({{ $owner->id }})" 
                                        class="p-1 text-green-600 hover:bg-green-50 rounded" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                                <button onclick="deleteOwner({{ $owner->id }})" 
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
                        <td colspan="10" class="text-center py-8 text-gray-500">Tidak ada data service owner</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="ownerModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="p-6 border-b">
            <h3 id="modalTitle" class="text-lg font-semibold text-gray-900">Tambah Service Owner Baru</h3>
        </div>
        <form id="ownerForm" method="POST" action="{{ route('admin.service-owners.store') }}">
            @csrf
            <input type="hidden" id="ownerId" name="id">
            <div class="p-6 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="brand_name" class="block text-sm font-medium text-gray-700 mb-2">Brand/Perusahaan</label>
                        <input type="text" id="brand_name" name="brand_name" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div>
                        <label for="pic_name" class="block text-sm font-medium text-gray-700 mb-2">Nama PIC</label>
                        <input type="text" id="pic_name" name="pic_name" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                        <input type="text" id="phone" name="phone" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>

                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                    <textarea id="address" name="address" rows="2" required
                              class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                </div>

                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Kategori Layanan</label>
                    <select id="category_id" name="category_id" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option value="">Pilih Kategori</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">Total Services</label>
                        <div class="text-lg font-semibold" id="viewServices">0</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Total Bookings</label>
                        <div class="text-lg font-semibold" id="viewBookings">0</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Revenue</label>
                        <div class="text-lg font-semibold text-green-600" id="viewRevenue">Rp 0</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Join Date</label>
                        <div class="text-lg" id="viewJoinDate">-</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <div id="viewStatus">-</div>
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
let owners = @json($owners->map(function($owner) {
    return [
        'id' => $owner->id,
        'brand_name' => $owner->brand_name,
        'pic_name' => $owner->pic_name,
        'email' => $owner->email,
        'phone' => $owner->phone,
        'address' => $owner->address,
        'category_id' => $owner->category_id,
        'category' => optional($owner->category)->name,
        'rating' => $owner->rating ?? 0,
        'services_count' => $owner->services->count(),
        'bookings_count' => $owner->services->sum(function($service) { return $service->bookings->count(); }),
        'total_revenue' => $owner->total_revenue ?? 0,
        'created_at' => $owner->created_at->format('Y-m-d'),
        'is_active' => $owner->is_active,
        'is_verified' => $owner->is_verified ?? false
    ];
}));

function openModal() {
    modalMode = 'add';
    document.getElementById('modalTitle').textContent = 'Tambah Service Owner Baru';
    document.getElementById('submitBtn').textContent = 'Tambah';
    document.getElementById('ownerForm').reset();
    document.getElementById('ownerForm').action = '{{ route("admin.service-owners.store") }}';
    document.getElementById('ownerId').value = '';
    document.getElementById('viewDetails').classList.add('hidden');
    enableFormFields();
    document.getElementById('ownerModal').classList.remove('hidden');
}

function editOwner(id) {
    modalMode = 'edit';
    const owner = owners.find(o => o.id === id);
    
    document.getElementById('modalTitle').textContent = 'Edit Service Owner';
    document.getElementById('submitBtn').textContent = 'Simpan';
    document.getElementById('ownerForm').action = `{{ route("admin.service-owners.update", "") }}/${id}`;
    
    document.getElementById('ownerId').value = owner.id;
    document.getElementById('brand_name').value = owner.brand_name;
    document.getElementById('pic_name').value = owner.pic_name;
    document.getElementById('email').value = owner.email;
    document.getElementById('phone').value = owner.phone;
    document.getElementById('address').value = owner.address;
    document.getElementById('category_id').value = owner.category_id;
    
    document.getElementById('viewDetails').classList.add('hidden');
    enableFormFields();
    document.getElementById('ownerModal').classList.remove('hidden');
}

function viewOwner(id) {
    modalMode = 'view';
    const owner = owners.find(o => o.id === id);
    
    document.getElementById('modalTitle').textContent = 'Detail Service Owner';
    document.getElementById('submitBtn').style.display = 'none';
    
    // Fill form with data
    document.getElementById('brand_name').value = owner.brand_name;
    document.getElementById('pic_name').value = owner.pic_name;
    document.getElementById('email').value = owner.email;
    document.getElementById('phone').value = owner.phone;
    document.getElementById('address').value = owner.address;
    document.getElementById('category_id').value = owner.category_id;
    
    // Show view details
    document.getElementById('viewRating').textContent = owner.rating.toFixed(1);
    document.getElementById('viewServices').textContent = owner.services_count;
    document.getElementById('viewBookings').textContent = owner.bookings_count;
    document.getElementById('viewRevenue').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(owner.total_revenue);
    document.getElementById('viewJoinDate').textContent = owner.created_at;
    document.getElementById('viewStatus').innerHTML = owner.is_active ? 
        '<span class="px-2 py-1 rounded-full text-xs bg-green-100 text-green-800">Aktif</span>' :
        '<span class="px-2 py-1 rounded-full text-xs bg-gray-100 text-gray-800">Nonaktif</span>';
    
    document.getElementById('viewDetails').classList.remove('hidden');
    disableFormFields();
    document.getElementById('ownerModal').classList.remove('hidden');
}

function deleteOwner(id) {
    if (confirm('Apakah Anda yakin ingin menghapus service owner ini?')) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `{{ route("admin.service-owners.destroy", "") }}/${id}`;
        
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
    document.getElementById('ownerModal').classList.add('hidden');
    document.getElementById('submitBtn').style.display = 'block';
}

function enableFormFields() {
    document.querySelectorAll('#ownerForm input, #ownerForm textarea, #ownerForm select').forEach(field => {
        field.disabled = false;
    });
}

function disableFormFields() {
    document.querySelectorAll('#ownerForm input, #ownerForm textarea, #ownerForm select').forEach(field => {
        field.disabled = true;
    });
}

// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('#ownersTable tbody tr');
    
    rows.forEach(row => {
        const ownerData = row.dataset.owner.toLowerCase();
        if (ownerData.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

// Close modal on outside click
document.getElementById('ownerModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>
@endsection