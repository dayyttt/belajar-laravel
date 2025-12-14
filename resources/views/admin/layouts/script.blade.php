<script src="{{ asset('assets/admin/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/admin/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            toastr.success('{{ session('success') }}', 'Berhasil', {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right',
                timeOut: 5000
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButton: true,
                    progressBar: true,
                    positionClass: 'toast-top-right',
                    timeOut: 5000
                });
            @endforeach
        });
    </script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/admin/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/admin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>


    <script src="{{ asset('assets/admin/js/lib/datamap/d3.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/datamap/topojson.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/datamap/datamaps.world.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/datamap/datamap-init.js') }}"></script>

    <script src="{{ asset('assets/admin/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>


    <script src="{{ asset('assets/admin/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/chartist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/chartist/chartist-init.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/admin/js/custom.min.js') }}"></script>
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
    $('#generateSlotsForm').attr('action', '{{ route('admin.pages.ketersediaan.schedules.generate-slots', '') }}/' + scheduleId);
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
    $('#generateSlotsForm').attr('action', '{{ route('admin.pages.ketersediaan.schedules.generate-slots', '') }}/' + scheduleId);
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
</script>