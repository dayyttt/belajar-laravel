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