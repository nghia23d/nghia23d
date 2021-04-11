<!-- jQuery -->
<script src="/themes/{{$theme}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/themes/{{$theme}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/themes/{{$theme}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/themes/{{$theme}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/themes/{{$theme}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/themes/{{$theme}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/themes/{{$theme}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="/themes/{{$theme}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/themes/{{$theme}}/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="/themes/{{$theme}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/themes/{{$theme}}/plugins/moment/moment.min.js"></script>
<script src="/themes/{{$theme}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/themes/{{$theme}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/themes/{{$theme}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
{{-- <script src="/themes/{{$theme}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> --}}
<!-- Toastr -->
<script src="/themes/{{$theme}}/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="/themes/{{$theme}}/dist/js/adminlte.js"></script>

<!-- libary-->
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>

{{-- CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<!-- custom js-->
@include('cms::custom.js')
