<script>
  @if(Session::has('success'))
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "timeOut": 12000,
    "zIndex": 50
  }
  toastr.success("{{ session('success') }}", 'Success!');
  @endif

  @if(Session::has('info'))
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "timeOut": 10000,
    "zIndex": 50
  }
  toastr.info("{{ session('info') }}", 'Info!');
  @endif

  @if(Session::has('warning'))
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "zIndex": 50
  }
  toastr.warning("{{ session('warning') }}");
  @endif

  @if(Session::has('error'))
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "zIndex": 50
  }
  toastr.error("{{ session('error') }}");
  @endif
</script>
