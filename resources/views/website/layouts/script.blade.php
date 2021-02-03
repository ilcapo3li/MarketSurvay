<!-- =================================================================
Compiled JS plugins
================================================================== -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
{{-- <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous"></script> --}}
<script src="{{asset("assets/js/combined/page-essentials.min.js")}}"></script>
<script src="{{asset("assets/js/combined/sven-essentials.min.js")}}"></script>
<script src="{{asset("assets/js/combined/stomp-motion.min.js")}}"></script>
<script src="{{asset("assets/js/backgrounds/bits.min.js")}}"></script>
<script src="{{asset("assets/js/main.min.js")}}"></script>


<!-- add additional Custom JS Code -->
@yield('customJS')