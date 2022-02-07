{{-- plugins:js --}}
<script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
{{-- endinject --}}

{{-- Plugin js for this page --}}
<script src="{{ asset('template/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('template/vendors/progressbar.js/progressbar.min.js') }}"></script>
{{-- End plugin js for this page --}}

{{-- inject:js --}}
<script src="{{ asset('template/js/off-canvas.js') }}"></script>
<script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('template/js/template.js') }}"></script>
<script src="{{ asset('template/js/settings.js') }}"></script>
<script src="{{ asset('template/js/todolist.js') }}"></script>
{{-- endinject --}}

{{-- Custom js for this page --}}
<script src="{{ asset('template/js/dashboard.js') }}"></script>
<script src="{{ asset('template/js/Chart.roundedBarCharts.js') }}"></script>
{{-- End custom js for this page --}}

{{-- Mazer --}}
{{-- <script src="{{ asset('dist2/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script> --}}
{{-- <script src="{{ asset('dist2/assets/js/bootstrap.bundle.min.js') }}"></script> --}}

{{-- <script src="{{ asset('dist2/assets/vendors/jquery/jquery.min.js') }}"></script> --}}
<script src="{{ asset('dist2/assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist2/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('dist2/assets/vendors/fontawesome/all.min.js') }}"></script>
<script>
    // Jquery Datatable
    let jquery_datatable = $("#table").DataTable()
</script>
{{-- <script src="{{ asset('dist2/assets/js/mazer.js') }}"></script> --}}
