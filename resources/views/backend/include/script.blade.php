
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('public/assets/js/plugins.js') }}"></script>

{{-- text textarea code start --}}
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
{{-- text textarea code end --}}

<!-- apexcharts -->
<script src="{{ asset('public/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('public/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('public/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('public/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('public/assets/js/app.js') }}"></script>


<script src="{{ asset('public/assets/libs/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/gridjs/gridjs.umd.js') }}"></script>
{{-- <script src="{{ asset('public/../../../../unpkg.com/gridjs%405.1.0/plugins/selection/dist/selection.umd.js') }}"></script> --}}
<script src="{{ asset('public/assets/js/pages/ecommerce-product-list.init.js') }}"></script>

{{-- form link --}}
<script src="{{asset('public/assets/libs/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('public/assets/js/pages/ecommerce-product-create.init.js')}}"></script>
<script src="{{asset('public/assets/libs/dropzone/dropzone-min.js')}}"></script>


{{-- data tables script start --}}
<script src="{{asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
{{-- data tables script end --}}


