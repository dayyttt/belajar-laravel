<!-- Toast Notification Script -->
<script>
    // Global error handler untuk Laravel - suppress error yang tidak penting
    window.addEventListener('error', function(e) {
        // Daftar error yang bisa diabaikan karena tidak mempengaruhi fungsi utama
        var suppressedErrors = [
            'Cannot read properties of null (reading \'offsetWidth\')',
            'Cannot read properties of null (reading \'querySelectorAll\')',
            'Cannot read properties of null (reading \'querySelector\')',
            'yahooapis.com',
            'ERR_NAME_NOT_RESOLVED',
            'Script error',
            'datamaps.world.min.js',
            'chartist.min.js'
        ];
        
        var shouldSuppress = suppressedErrors.some(function(error) {
            return e.message && e.message.includes(error);
        });
        
        if (shouldSuppress) {
            console.warn('Suppressed non-critical library error:', e.message);
            e.preventDefault();
            return false;
        }
    });

    // Suppress console errors untuk library yang tidak ada element target
    window.addEventListener('unhandledrejection', function(e) {
        if (e.reason && e.reason.message && e.reason.message.includes('yahooapis')) {
            console.warn('Weather API unavailable - using fallback');
            e.preventDefault();
        }
    });

    // Toast notification system
    function showToast(message, type = 'success') {
        const toastContainer = document.getElementById('toast-container');
        const toast = document.createElement('div');
        
        const bgColor = type === 'success' ? 'bg-green-500' : 
                       type === 'error' ? 'bg-red-500' : 
                       type === 'warning' ? 'bg-yellow-500' : 'bg-blue-500';
        
        const icon = type === 'success' ? '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>' :
                      type === 'error' ? '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>' :
                      '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>';
        
        toast.className = `${bgColor} text-white px-4 py-3 rounded-lg shadow-lg flex items-center space-x-2 min-w-[250px] transform transition-all duration-300 translate-x-full`;
        toast.innerHTML = `
            <div class="flex items-center space-x-2">
                ${icon}
                <span class="text-sm font-medium">${message}</span>
            </div>
        `;
        
        toastContainer.appendChild(toast);
        
        // Animate in
        setTimeout(() => {
            toast.classList.remove('translate-x-full');
            toast.classList.add('translate-x-0');
        }, 100);
        
        // Remove after 3 seconds
        setTimeout(() => {
            toast.classList.add('translate-x-full');
            setTimeout(() => {
                toast.remove();
            }, 300);
        }, 3000);
    }
    
    // Auto-show flash messages
    document.addEventListener('DOMContentLoaded', function() {
        // Check for Laravel flash messages
        @if(session('success'))
            showToast('{{ session('success') }}', 'success');
        @endif
        
        @if(session('error'))
            showToast('{{ session('error') }}', 'error');
        @endif
        
        @foreach($errors->all() as $error)
            showToast('{{ $error }}', 'error');
        @endforeach
    });

    // Sidebar functionality
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        
        if (sidebar.classList.contains('-translate-x-full')) {
            sidebar.classList.remove('-translate-x-full');
            overlay.style.display = 'block';
        } else {
            sidebar.classList.add('-translate-x-full');
            overlay.style.display = 'none';
        }
    }

    function toggleSubmenu(menuId) {
        const submenu = document.getElementById(menuId + '-submenu');
        const chevron = document.getElementById(menuId + '-chevron');
        const button = chevron.closest('button');
        
        // Check if this submenu is currently active (has max-h-96 class from server-side rendering)
        const isCurrentlyActive = submenu.classList.contains('max-h-96') && submenu.classList.contains('opacity-100');
        
        // If submenu is currently active, don't close it
        if (isCurrentlyActive) {
            // Check if it was opened by server-side (active page) or by user click
            const wasOpenedByServer = checkIfActiveByRoute(menuId);
            
            if (wasOpenedByServer) {
                // Don't close if it's active due to current route
                // Add visual feedback that menu cannot be closed
                button.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    button.style.transform = 'scale(1)';
                }, 150);
                return;
            }
        }
        
        if (submenu.classList.contains('max-h-0')) {
            // Open submenu
            submenu.classList.remove('max-h-0', 'opacity-0');
            submenu.classList.add('max-h-96', 'opacity-100');
            chevron.classList.add('rotate-180');
            button.classList.add('bg-slate-700/30');
        } else {
            // Close submenu only if not active by route
            if (!checkIfActiveByRoute(menuId)) {
                submenu.classList.remove('max-h-96', 'opacity-100');
                submenu.classList.add('max-h-0', 'opacity-0');
                chevron.classList.remove('rotate-180');
                button.classList.remove('bg-slate-700/30');
            }
        }
    }
    
    // Function to check if submenu should stay open based on current route
    function checkIfActiveByRoute(menuId) {
        const currentPath = window.location.pathname;
        
        switch(menuId) {
            case 'content':
                return currentPath.includes('/admin/content');
            case 'ketersediaan':
                return currentPath.includes('/admin/pages/ketersediaan');
            case 'manajemen':
                return currentPath.includes('/admin/pages/manajemen') || 
                       currentPath.includes('/artikel') || 
                       currentPath.includes('/halaman') || 
                       currentPath.includes('/media');
            case 'penugasan':
                return currentPath.includes('/admin/pages/penugasan');
            case 'produk':
                return currentPath.includes('/admin/pages/produk');
            case 'services':
                return currentPath.includes('/admin/services') || 
                       currentPath.includes('/admin/service-categories') ||
                       currentPath.includes('/admin/pages/services');
            case 'transaksi':
                return currentPath.includes('/admin/pages/transaksi') || 
                       currentPath.includes('/admin/pages/laporan');
            default:
                return false;
        }
    }

    // Close sidebar when clicking overlay
    document.getElementById('sidebar-overlay').addEventListener('click', toggleSidebar);

    // Initialize open submenus based on current page
    document.addEventListener('DOMContentLoaded', function() {
        const openSubmenus = document.querySelectorAll('.submenu.max-h-96');
        openSubmenus.forEach(function(submenu) {
            const menuId = submenu.id.replace('-submenu', '');
            const chevron = document.getElementById(menuId + '-chevron');
            const button = chevron ? chevron.closest('button') : null;
            
            if (chevron) {
                chevron.classList.add('rotate-180');
            }
            if (button) {
                button.classList.add('bg-slate-700/30');
                
                // Add visual indicator that this menu is locked open
                const isActive = checkIfActiveByRoute(menuId);
                if (isActive) {
                    button.setAttribute('data-active-route', 'true');
                    button.setAttribute('title', 'Menu ini tetap terbuka karena halaman saat ini berada di bagian ini');
                }
            }
        });
    });
</script>

<!-- jQuery and Bootstrap -->
<script src="{{ asset('assets/admin/js/lib/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('assets/admin/js/lib/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/admin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>


    <!-- Load core libraries first -->
    <script src="{{ asset('assets/admin/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>

    <!-- Conditional Chart Libraries - Only load if elements exist -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Load Datamap only if element exists
            if (document.getElementById('world-datamap') || document.querySelector('[data-map]')) {
                loadScript('{{ asset('assets/admin/js/lib/datamap/d3.min.js') }}', function() {
                    loadScript('{{ asset('assets/admin/js/lib/datamap/topojson.js') }}', function() {
                        loadScript('{{ asset('assets/admin/js/lib/datamap/datamaps.world.min.js') }}', function() {
                            loadScript('{{ asset('assets/admin/js/lib/datamap/datamap-init.js') }}');
                        });
                    });
                });
            }

            // Load Chartist only if chart elements exist
            if (document.querySelector('.ct-chart, .ct-pie-chart, .ct-svg-chart, .ct-bar-chart, .ct-sm-line-chart, .ct-area-ln-chart, .ct-gauge-chart, .ct-donute-chart')) {
                loadScript('{{ asset('assets/admin/js/lib/chartist/chartist.min.js') }}', function() {
                    loadScript('{{ asset('assets/admin/js/lib/chartist/chartist-plugin-tooltip.min.js') }}', function() {
                        loadScript('{{ asset('assets/admin/js/lib/chartist/chartist-init.js') }}');
                    });
                });
            }

            // Load Weather widget only if element exists
            if (document.getElementById('weather-one') || document.querySelector('[data-weather]')) {
                loadScript('{{ asset('assets/admin/js/lib/weather/jquery.simpleWeather.min.js') }}', function() {
                    loadScript('{{ asset('assets/admin/js/lib/weather/weather-init.js') }}');
                });
            }
        });

        // Helper function to load scripts dynamically
        function loadScript(src, callback) {
            const script = document.createElement('script');
            script.src = src;
            script.onload = function() {
                if (callback) callback();
            };
            script.onerror = function() {
                console.warn('Failed to load script:', src);
            };
            document.head.appendChild(script);
        }
    </script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/admin/js/custom.min.js') }}"></script>
    <!-- Error Handler -->
    <script src="{{ asset('assets/admin/js/error-handler.js') }}"></script>
    <!-- Enhanced Sidebar JavaScript -->
    <script src="{{ asset('assets/admin/js/sidebar-enhanced.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#schedulesTable').DataTable({
        responsive: true,
        pageLength: 25,
        order: [[4, 'desc']] // Sort by date
    });
});

function generateSlots(scheduleId) {
    $('#generateSlotsForm').attr('action', '/admin/pages/ketersediaan/schedules/' + scheduleId + '/generate-slots');
    $('#generateSlotsModal').modal('show');
}
</script>

<script>
$(document).ready(function() {
    // Auto calculate duration when time changes
    $('#start_time, #end_time').on('change', function() {
        var startTime = $('#start_time').val();
        var endTime = $('#end_time').val();
        
        if(startTime && endTime) {
            var start = new Date('2000-01-01 ' + startTime);
            var end = new Date('2000-01-01 ' + endTime);
            var diff = (end - start) / 1000 / 60; // Convert to minutes
            
            if(diff > 0) {
                $('#duration_minutes').val(diff);
            }
        }
    });
});

function generateSlots(scheduleId) {
    $('#generateSlotsForm').attr('action', '/admin/pages/ketersediaan/schedules/' + scheduleId + '/generate-slots');
    $('#generateSlotsModal').modal('show');
}
</script>


    <!-- Chart.js for Payment Summary -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Billing & Payment Scripts -->
<script>
// Payment Verification Function

function verifyPayment(paymentId) {
    if (confirm('Apakah Anda yakin ingin memverifikasi pembayaran ini?')) {
        fetch(`/admin/pages/transaksi/payments/${paymentId}/verify`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({})
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Gagal memverifikasi pembayaran');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan');
        });
    }
}

// Invoice Functions
$(document).ready(function() {
    // Calculate total invoice amount
    function calculateTotal() {
        var subtotal = parseFloat($('#subtotal').val()) || 0;
        var additionalFee = parseFloat($('#additionalFee').val()) || 0;
        var discount = parseFloat($('#discount').val()) || 0;
        var tax = parseFloat($('#tax').val()) || 0;
        
        var total = subtotal + additionalFee - discount + tax;
        $('#totalAmount').val('Rp ' + total.toLocaleString('id-ID'));
    }

    // Auto-fill from booking selection
    $('#bookingSelect').on('change', function() {
        var selected = $(this).find(':selected');
        if (selected.val()) {
            $('#customerName').val(selected.data('customer'));
            $('#customerEmail').val(selected.data('email'));
            $('#customerPhone').val(selected.data('phone'));
            $('#subtotal').val(selected.data('amount'));
            calculateTotal();
        }
    });

    // Auto-fill from customer selection
    $('#customerSelect').on('change', function() {
        var selected = $(this).find(':selected');
        if (selected.val()) {
            $('#customerName').val(selected.data('name'));
            $('#customerEmail').val(selected.data('email'));
            $('#customerPhone').val(selected.data('phone'));
        }
    });

    // Bind calculation events
    $('#subtotal, #additionalFee, #discount, #tax').on('input', calculateTotal);
});

// Payment Functions
$(document).ready(function() {
    // Update remaining amount display
    function updateRemainingAmount() {
        var selected = $('#invoiceSelect').find(':selected');
        var remaining = selected.data('remaining') || 0;
        $('#remainingAmount').text('Rp ' + remaining.toLocaleString('id-ID'));
        
        // Set max amount for payment input
        $('#amount').attr('max', remaining);
    }

    $('#invoiceSelect').on('change', updateRemainingAmount);
    
    // Initialize on page load
    updateRemainingAmount();

    // Show/hide payment method detail field
    $('#paymentMethod').on('change', function() {
        if ($(this).val() === 'other') {
            $('#methodDetailGroup').show();
            $('input[name="payment_method_detail"]').prop('required', true);
        } else {
            $('#methodDetailGroup').hide();
            $('input[name="payment_method_detail"]').prop('required', false);
        }
    }).trigger('change');
});

// Payment Summary Chart
$(document).ready(function() {
    if (typeof paymentSummaryData !== 'undefined' && $('#paymentMethodChart').length) {
        var ctx = document.getElementById('paymentMethodChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Tunai', 'Transfer', 'QRIS', 'Lainnya'],
                datasets: [{
                    data: [
                        paymentSummaryData.cash_total,
                        paymentSummaryData.transfer_total,
                        paymentSummaryData.qris_total,
                        paymentSummaryData.other_total
                    ],
                    backgroundColor: [
                        '#17a2b8',
                        '#ffc107',
                        '#007bff',
                        '#6c757d'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    }
});

// Owner Revenue Detail Function
function showDetail(ownerId) {
    // TODO: Implement modal or redirect to detail page
    alert('Detail untuk owner ID: ' + ownerId + ' - akan diimplementasikan');
}

// Booking Functions
$(document).ready(function() {
    // Auto-fill customer data
    $('#customerSelect').on('change', function() {
        var selected = $(this).find(':selected');
        if (selected.val() && selected.val() !== 'new') {
            $('#customerName').val(selected.data('name'));
            $('#customerEmail').val(selected.data('email'));
            $('#customerPhone').val(selected.data('phone'));
        } else if (selected.val() === 'new') {
            $('#customerName, #customerEmail, #customerPhone').val('');
        }
    });

    // Auto-fill service data
    $('#serviceSelect').on('change', function() {
        var selected = $(this).find(':selected');
        if (selected.val()) {
            $('#totalAmount').val(selected.data('price'));
            
            // Auto-select owner
            var ownerId = selected.data('owner');
            $('#ownerSelect').val(ownerId);
        }
    });

    // Filter services by owner
    $('#ownerSelect').on('change', function() {
        var ownerId = $(this).val();
        $('#serviceSelect').find('option').each(function() {
            var option = $(this);
            if (option.val() && option.data('owner') !== ownerId) {
                option.hide();
            } else {
                option.show();
            }
        });
        
        // Reset selection if current service doesn't match owner
        var currentService = $('#serviceSelect').val();
        if (currentService && $('#serviceSelect').find('option:selected').data('owner') !== ownerId) {
            $('#serviceSelect').val('');
        }
    });
});

// Dashboard Charts
document.addEventListener('DOMContentLoaded', function() {
    // Monthly Booking Trend Chart
    const bookingCtx = document.getElementById('bookingChart');
    if (bookingCtx) {
        new Chart(bookingCtx.getContext('2d'), {
            type: 'line',
            data: {
                labels: {!! json_encode($monthlyLabels ?? ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']) !!},
                datasets: [{
                    label: 'Booking',
                    data: {!! json_encode($monthlyBookings ?? [85, 92, 78, 105, 118, 125]) !!},
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    borderWidth: 2,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart');
    if (revenueCtx) {
        new Chart(revenueCtx.getContext('2d'), {
            type: 'bar',
            data: {
                labels: {!! json_encode($monthlyLabels ?? ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']) !!},
                datasets: [{
                    label: 'Revenue',
                    data: {!! json_encode($monthlyRevenue ?? [12.5, 14.2, 11.8, 16.5, 18.9, 19.8]) !!},
                    backgroundColor: '#10b981'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Category Distribution Chart
    const categoryCtx = document.getElementById('categoryChart');
    if (categoryCtx) {
        new Chart(categoryCtx.getContext('2d'), {
            type: 'pie',
            data: {
                labels: {!! json_encode($categoryLabels ?? ['Rumah', 'Kendaraan', 'Elektronik', 'Kesehatan', 'Pendidikan', 'Bisnis & IT']) !!},
                datasets: [{
                    data: {!! json_encode($categoryData ?? [380, 280, 220, 180, 120, 95]) !!},
                    backgroundColor: [
                        '#10b981',
                        '#3b82f6', 
                        '#f59e0b',
                        '#8b5cf6',
                        '#ec4899',
                        '#06b6d4'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }
});
</script>