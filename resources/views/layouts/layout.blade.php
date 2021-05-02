<!DOCTYPE html>
<html class="no-js" lang="vi">

@php
$theme = config('nghia23d.theme');
$version = '1.12';
@endphp

<head>
    @include('layouts.head')
</head>

<body class="overflow-x-hidden">

    <!-- ------Page------ -->
    @include('layouts.topbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    <!-- -----Endpage----- -->


    <!-- Elements -->
    @include('elements.preload')
    {{-- @include('elements.main_modal') --}}


    <!-- All Scripts -->
    @include('layouts.scripts')

    @yield('js')
</body>

</html>
