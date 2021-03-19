<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    @include('layouts.head')
</head>

<body style="overflow-x: hidden">

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
