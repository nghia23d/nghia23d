<!DOCTYPE html>
<html class="no-js" lang="vi">

@php
$theme = config('nghia23d.theme');
$versionCss = '1.3';
$versionJs = '1.1';
@endphp

<head>
    @include('layouts.head')
</head>

<body class="custom-scrollbar">


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



    <!-- All Scripts -->
    @include('layouts.scripts')

    <!-- Modal -->
    @include('elements.main_modal')


    @yield('js')
</body>

</html>
