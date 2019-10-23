  <!-- Jquery Core Js -->
  <script src="{{ asset('backEnd/plugins/jquery/jquery.min.js')}}"></script>

  <!-- Bootstrap Core Js -->
  <script src="{{ asset('backEnd/plugins/bootstrap/js/bootstrap.js')}}"></script>

  <!-- Select Plugin Js -->
  <script src="{{ asset('backEnd/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

  <!-- Slimscroll Plugin Js -->
  <script src="{{ asset('backEnd/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="{{ asset('backEnd/plugins/node-waves/waves.js')}}"></script>

  <!-- Custom Js -->
  <script src="{{ asset('backEnd/js/admin.js')}}"></script>

  <!-- Demo Js -->
  <script src="{{ asset('backEnd/js/demo.js')}}"></script>
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    {{-- toster --}}

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

<script>
    @if ($errors->any())
      @foreach ($errors->all() as $error)
          toastr.error('{{ $error }}','Error',{
            closeButton:true,
            progressBar:true,
          });
      @endforeach
    @endif
</script>

  @stack('backJS')