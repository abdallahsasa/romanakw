<!DOCTYPE html>
<html lang="en">
@include('dashboard.layouts.head')
@yield('style')
<body>

<div class="wrapper">
    <div id="pre-loader">
        <img src="{{asset('dashboard/images/pre-loader/loader-01.svg')}}" alt="">
    </div>

    @include('dashboard.layouts.header')

    <div class="container-fluid">
        @include('dashboard.layouts.left-sidebar')
        <div class="content-wrapper">
            @yield('content')

            @include('dashboard.layouts.footer')
        </div>

    </div>
</div>

@include('dashboard.layouts.scripts')
@yield('scripts')
</body>
</html>
