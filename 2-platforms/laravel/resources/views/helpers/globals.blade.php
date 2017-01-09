<!--  Globals -->
<script>
    window.App = {
        // CSRF Token
        csrfToken: '{{ csrf_token() }}',

        // App constants
        constants: {!! json_encode($constants) !!}
    }
</script>
