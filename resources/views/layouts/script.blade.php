<!--jQuery-->
<script src="{{asset('jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
<!--bootstrap-->
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<!--Parsley-->
<script src="{{ asset('parsleyjs/dist/parsley.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('parsleyjs/dist/i18n/es.js') }}" type="text/javascript"></script>
<!--bootstrap-progressbar-->
<script src="{{ asset('bootstrap-progressbar/bootstrap-progressbar.min.js') }}" type="text/javascript"></script>
<!--nProgress-->
<script src="{{ asset('nprogress/nprogress.js') }}" type="text/javascript"></script>
<!--custom-->
<script src="{{ asset('js/custom.min.js') }}" type="text/javascript"></script>
<!--fastclick-->
<script src="{{ asset('fastclick/lib/fastclick.js') }}" type="text/javascript"></script>
@yield('scripts')
