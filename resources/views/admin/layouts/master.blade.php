<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Syssoft</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/weather-icon/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('contents')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Design By <a
                        href="#">Syssoft</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('admin/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('admin/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/assets/js/page/index-0.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error({{ $error }});
            @endforeach
        @endif
    </script>
    @stack('scripts')
</body>

</html>
