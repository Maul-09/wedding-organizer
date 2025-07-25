<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <title>{{ $title }}</title>

</head>
<body>
<x-admin-sidebar />


    {{ $slot }}


<script src="{{ asset('dashboard/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('dashboard/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('dashboard/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('dashboard/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('dashboard/js/main.js') }}"></script>
</body>
</html>
