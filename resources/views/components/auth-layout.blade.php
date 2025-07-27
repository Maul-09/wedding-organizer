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


    {{ $slot }}


<script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard/js/main.js') }}"></script>
</body>
</html>
