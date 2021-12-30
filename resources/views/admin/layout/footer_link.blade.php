<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('public/back_end/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('public/back_end/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/back_end/')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/back_end/')}}/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('public/back_end/')}}/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('public/back_end/')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('public/back_end/')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('public/back_end/')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('public/back_end/')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('public/back_end/')}}/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('public/back_end/')}}/dist/js/pages/dashboard2.js"></script>
<!-- Summernote -->
<script src="{{asset('public/back_end/')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables -->
<script src="{{asset('public/back_end/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/back_end/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('public/back_end/')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('public/back_end/')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true
    });
  });
</script>