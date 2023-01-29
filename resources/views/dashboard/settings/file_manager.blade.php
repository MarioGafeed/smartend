<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'File Manager') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link href="{{ asset('assets/file-manager/css/file-manager.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        .fm-navbar div div div:last-child {
            display: none;
        }
        .fm .fm-body{
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }
        .fm-info-block{
            border-bottom: none;
        }
        .fm-tree {
            border-right: 1px solid #ddd;
        }
        .fm-breadcrumb .breadcrumb.active-manager {
            background-color: #c5efea;
        }
    </style>
</head>
<body>
<div id="fm-main-block">
    <div id="fm"></div>
</div>

<!-- File manager -->
<script src="{{ asset('assets/file-manager/js/file-manager.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');
    });
</script>
</body>
</html>
