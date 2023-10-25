<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('assets/admin/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/assets/js/scripts.bundle.js') }}"></script>
<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toastr-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "500",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
  
@if(Session::has('error'))
    <script>
        toastr.error("{{ Session::get('error') }}");
    </script>
@endif
@if(Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
@endif
@if(Session::has('info'))
    <script>
        toastr.info("{{ Session::get('info') }}");
    </script>
@endif
@if(Session::has('warning'))
    <script>
        toastr.warning("{{ Session::get('warning') }}");
    </script>
@endif
<!--end::Global Javascript Bundle-->