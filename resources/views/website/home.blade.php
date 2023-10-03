@extends('website.layouts.app')
@section('content')

<!-- slide-bar start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
    </div>

    <!-- sidebar-info start -->
    <div class="cart_sidebar">
        <h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>
        <div class="cart_items_list">
            <div class="cart_item">
                <div class="item_image">
                    <img src="{{asset('website/img/shop/cart/img_01.jpg')}}" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$19.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="{{asset('website/img/shop/cart/img_02.jpg')}}" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$22.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="{{asset('website/img/shop/cart/img_03.jpg')}}" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$43.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="{{asset('website/img/shop/cart/img_04.jpg')}}" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$14.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
        <div class="total_price text-uppercase">
            <span>Sub Total:</span>
            <span>$87.00</span>
        </div>
        <ul class="btns_group ul_li">
            <li><a href="cart.html" class="thm_btn text-uppercase">View Cart</a></li>
            <li><a href="checkout.html" class="thm_btn thm_btn-2 text-uppercase">Checkout</a></li>
        </ul>
    </div>
    <!-- sidebar-info end -->

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <div class="header-mobile-search">
            <form role="search" method="get" action="#">
                <input type="text" placeholder="Search Keywords">
                <button type="submit"><i class="ti-search"></i></button>
            </form>
        </div>
        <ul id="mobile-menu-active">
            <li class="dropdown"><a href="index.html">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="index-2.html">Home Two</a></li>
                    <li><a href="index-3.html">Home Three</a></li>
                </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li class="dropdown">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="menu.html">Recipe Menu</a></li>
                    <li><a href="reservation.html">Reservation Form</a></li>
                    <li><a href="history.html">History</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Shop</a>
                <ul class="sub-menu">
                    <li><a href="shop.html">Shop List</a></li>
                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                    <li><a href="shop-details.html">Shop Details</a></li>
                    <li><a href="cart.html">Shop Cart</a></li>
                    <li><a href="checkout.html">Shop Checkout</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Blog</a>
                <ul class="sub-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside>
<div class="body-overlay"></div>
<!-- slide-bar end -->


    <!-- hero start -->
    <section class="hero_area hero_1">
        <div class="hero_wrap hero_height hero_bg">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5">
                        <div class="hero_img">
{{--                            <img src="{{asset('website/img/hero/img_01.png')}}" alt="">--}}
                            <img src="{{asset('website/img/Logo.png')}}" alt="">
                            <div class="d_img">
                                <img src="{{asset('website/img/icon/d_img.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first">
                        <div class="hero_text">
                            <h5>Romana's Refreshing Juice Combo</h5>
                            <h2>Feeling thirsty?</h2>
                            <p>Quench your thirst with a glass of our fresh-pressed juice.</p>
                            <div class="hero_btn ul_li">
                                <a class="thm_btn" href="about.html">Learn More</a>
                                <a class="thm_btn thm_btn-2" href="menu.html">See our menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <ul class="info_list ul_li_block">
                            <li>
                                <h4>Great Location</h4>
                                <p>Rorem ipsum dolor sit amet, etur advoluptatem  voluptatem</p>
                                <div class="count">
                                    <span>01</span>
                                </div>
                            </li>
                            <li>
                                <h4>Nature first</h4>
                                <p>Rorem ipsum dolor sit amet, etur advoluptatem  voluptatem</p>
                                <div class="count">
                                    <span>02</span>
                                </div>
                            </li>
                            <li>
                                <h4>Healthy Juice</h4>
                                <p>Rorem ipsum dolor sit amet, etur advoluptatem  voluptatem</p>
                                <div class="count">
                                    <span>03</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <!-- category start -->
    <section class="category_area pt-120 pb-120">
        <div class="container">
            <div class="sec_title sec_title-2">
                <span>Our Popular Menu</span>
                <h2>Went To Try?</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category_active owl-carousel">
                        <div class="cat_single">
                            <div class="cat_icon">
                                <img src="{{asset('website/img/icon/ci_01.png')}}" alt="">
                            </div>
                            <h3><a href="menu.html">combo Pack</a></h3>
                            <p>Rorem ipsum advolu ptateme  volupta tem Rorem ipsuey</p>
                            <div class="cat_img">
                                <img src="{{asset('website/img/category/cat_01.png')}}" alt="">
                            </div>
                            <div class="cat_shape">
                                <img src="{{asset('website/img/icon/cat_shape.png')}}" alt="">
                            </div>
                            <div class="cat_number">
                                <span>01</span>
                            </div>
                        </div>
                        <div class="cat_single">
                            <div class="cat_icon">
                                <img src="{{asset('website/img/icon/ci_02.png')}}" alt="">
                            </div>
                            <h3><a href="menu.html">Chicken</a></h3>
                            <p>Rorem ipsum advolu ptateme  volupta tem Rorem ipsuey</p>
                            <div class="cat_img">
                                <img src="{{asset('website/img/category/cat_02.png')}}" alt="">
                            </div>
                            <div class="cat_shape">
                                <img src="{{asset('website/img/icon/cat_shape.png')}}" alt="">
                            </div>
                            <div class="cat_number">
                                <span>02</span>
                            </div>
                        </div>
                        <div class="cat_single">
                            <div class="cat_icon">
                                <img src="{{asset('website/img/icon/ci_03.png')}}" alt="">
                            </div>
                            <h3><a href="menu.html">Pizza & Drink</a></h3>
                            <p>Rorem ipsum advolu ptateme  volupta tem Rorem ipsuey</p>
                            <div class="cat_img">
                                <img src="{{asset('website/img/category/cat_03.png')}}" alt="">
                            </div>
                            <div class="cat_shape">
                                <img src="{{asset('website/img/icon/cat_shape.png')}}" alt="">
                            </div>
                            <div class="cat_number">
                                <span>03</span>
                            </div>
                        </div>
                        <div class="cat_single">
                            <div class="cat_icon">
                                <img src="{{asset('website/img/icon/ci_04.png')}}" alt="">
                            </div>
                            <h3><a href="menu.html">Box Meals</a></h3>
                            <p>Rorem ipsum advolu ptateme  volupta tem Rorem ipsuey</p>
                            <div class="cat_img">
                                <img src="{{asset('website/img/category/cat_04.png')}}" alt="">
                            </div>
                            <div class="cat_shape">
                                <img src="{{asset('website/img/icon/cat_shape.png')}}" alt="">
                            </div>
                            <div class="cat_number">
                                <span>04</span>
                            </div>
                        </div>
                        <div class="cat_single">
                            <div class="cat_icon">
                                <img src="{{asset('website/img/icon/ci_01.png')}}" alt="">
                            </div>
                            <h3><a href="menu.html">combo Pack</a></h3>
                            <p>Rorem ipsum advolu ptateme  volupta tem Rorem ipsuey</p>
                            <div class="cat_img">
                                <img src="{{asset('website/img/category/cat_01.png')}}" alt="">
                            </div>
                            <div class="cat_shape">
                                <img src="{{asset('website/img/icon/cat_shape.png')}}" alt="">
                            </div>
                            <div class="cat_number">
                                <span>01</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category end -->



@endsection
