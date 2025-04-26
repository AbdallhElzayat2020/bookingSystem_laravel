<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <!-- navbar -->
        <div class="navbar-bg"></div>
        @include('admin.layouts.header')
        <!-- sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">

            @yield('content')

        </div>

        @include('admin.layouts.footer')

    </div>
</div>

<!-- General JS Scripts -->
@include('admin.layouts.scripts')
</body>

</html>