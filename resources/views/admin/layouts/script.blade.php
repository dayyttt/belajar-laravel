<script src="{{ asset('assets/admin/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/admin/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    
    @if(session('success'))
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
    @endif

    @if($errors->any())
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
    @endif
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