<!doctype html>
<html lang="zxx">

@include('website.layouts.head')
@yield('style')

<body>
<!-- body wrap start -->
<div class="body_wrap">

    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div id="backtotop">
        <a href="#" id="scroll">
            <i class="fal fa-arrow-up"></i>
            <i class="fal fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- start Preloader  -->
    <div class="preloder_part">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- End Preloader  -->

    <!-- header start -->
    @include('website.layouts.header')

    <!-- header end -->


    @yield('content')

    <!-- footer start -->
    @include('website.layouts.footer')

    <!-- footer end -->

</div>
<!-- body wrap end -->

<!-- jquery include -->
@include('website.layouts.footer-scripts')


</body>

</html>
