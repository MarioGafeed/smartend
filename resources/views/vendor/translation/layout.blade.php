<!DOCTYPE html>
<html lang="{{ @Helper::currentLanguage()->code }}" dir="{{ @Helper::currentLanguage()->direction }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('backend.languages') }}</title>
    <link rel="stylesheet" href="{{ asset('/vendor/translation/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/translation/css/main.css') }}?v={{ Helper::GeneralWebmasterSettings("system_version") }}">
    @if( @Helper::currentLanguage()->direction=="rtl")
        <link rel="stylesheet" href="{{ asset('/assets/translation/css/rtl.css') }}?v={{ Helper::GeneralWebmasterSettings("system_version") }}">
    @endif
</head>
<body>

    <div id="app">

        @include('translation::nav')
        @include('translation::notifications')

        @yield('body')

    </div>
    <script>
        let _app_url = "{{ URL::to("") }}/";
    </script>
    <script src="{{ asset('/assets/translation/js/app.js') }}"></script>
</body>
</html>
