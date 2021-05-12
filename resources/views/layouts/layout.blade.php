<!DOCTYPE html>
<html class="no-js" lang="vi">

@php
$theme = config('nghia23d.theme');
$versionCss = '1.18';
$versionJs = '1.0';
@endphp

<head>
    @include('layouts.head')
</head>

<body class="overflow-x-hidden">

    <!-- Topbar -->
    @include('layouts.topbar')

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Elements -->
    @include('elements.preload')
    @include('elements.main_modal')


    <!-- All Scripts -->
    @include('layouts.scripts')

    @yield('js')
</body>

</html>