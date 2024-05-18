<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo.png') }}" type="image/x-icon">
    <title>Car Rental</title>

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
</head>

<body class="bg-soft-blue">
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.sidebar')

            <div class="col-lg-10">
                <main class="py-5 px-3">
                    {{--  {{ $slot }}  --}}
                </main>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
