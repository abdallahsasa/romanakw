<header class="header_area header_1 transparent_header">
    <div id="sticky-header" class="header_wrap header_space">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('website/img/logo/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-6">
                    <div class="main_menu_wrap navbar navbar-expand-lg">
                        <nav class="main_menu collapse navbar-collapse">
                            <ul class="main_menu_list ul_li">

                                <li><a class="nav-link" href="{{route('website.home')}}">Home</a> </li>
                                <li><a class="nav-link" href="{{route('website.products.index')}}">Menu</a> </li>

                                <li>
                                    <a class="nav-link" href="{{route("website.contact")}}">Contact</a>
                                </li>

                                <li class="dropdown">
                                    <a class="nav-link">Languages</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Arabic</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="header_right ul_li_right">
                            <div class="search_box">
                                <form action="javascript:void(0);">
                                    <input type="text" placeholder="Enter your search">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <div class="header_carts ul_li">
                                <div class="hamburger_menu">
                                    <a href="javascript:void(0);">
                                        <div class="icon cart_btn d-none d-lg-block">
                                            <i class="fal fa-shopping-basket"></i>
                                            <small class="cart_counter">04</small>
                                        </div>
                                        <div class="icon bar d-lg-none">
                                            <span><i class="fal fa-bars"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <a class="icon cart_wishlist" href="javascript:void(0);">
                                    <i class="fal fa-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
