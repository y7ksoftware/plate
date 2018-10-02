{{--  Globals --}}
<script>
    window.backendConfig = {
        'CSRF_TOKEN': '{!! csrf_token() !!}',
        'APP_ENV': '{!! $backendConfig['APP_ENV'] !!}',
        'APP_DEBUG': '{!! $backendConfig['APP_DEBUG'] !!}',
        'BUGSNAG_API_KEY': '{!! $backendConfig['BUGSNAG_API_KEY'] !!}',
        'API_PREFIX': '{!! $backendConfig['API_PREFIX'] !!}',
    }
</script>
