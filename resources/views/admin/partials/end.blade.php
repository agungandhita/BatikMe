<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('src/dark-mode.js') }}"></script>
<script src="{{ asset('src/charts.js') }}"></script>
<script src="{{ asset('src/constants.js') }}"></script>
<script src="{{ asset('src/index.js') }}"></script>
<script src="{{ asset('src/sidebar.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('froala/js/froala_editor.pkgd.min.js') }}"></script>
<script src="{{ asset('js/froala.js') }}"></script>

@stack('scripts')
@include('sweetalert::alert')


<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>





</body>
</html>