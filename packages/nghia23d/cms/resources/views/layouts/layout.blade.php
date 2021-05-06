<!DOCTYPE html>
<html class="no-js" lang="vi">

@php
$theme = config('cms.theme');
@endphp

<head>
    @include('cms::layouts.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <!-- -----Endpage----- -->
        @include('cms::layouts.navbar')

        @include('cms::layouts.sidebar')

        @yield('content')

        @include('cms::layouts.footer')
        <!-- ------Page------ -->
    </div>


    <!-- All Scripts -->
    @include('cms::layouts.script')

    <!-- Toast -->
    @component('cms::components.notification') @endcomponent

    @yield('js')

</body>

</html>