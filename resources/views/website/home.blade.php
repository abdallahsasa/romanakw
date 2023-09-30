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

<!-- main body end -->
<main>
    <!-- hero start -->
    <section class="hero_area hero_1">
        <div class="hero_wrap hero_height hero_bg">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5">
                        <div class="hero_img">
                            <img src="{{asset('website/img/hero/img_01.png')}}" alt="">
                            <div class="d_img">
                                <img src="{{asset('website/img/icon/d_img.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first">
                        <div class="hero_text">
                            <h5>Medium 2-topping* Burger</h5>
                            <h2>Are you Hungry?</h2>
                            <p>As well known and we are very busy all days advice you. advice you to call us of before arriving.</p>
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
                                <h4>Healthy food</h4>
                                <p>Rorem ipsum dolor sit amet, etur advoluptatem  voluptatem</p>
                                <div class="count">
                                    <span>03</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hero_bottom">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 col-md-4 order-last">
                            <div class="hero_video">
                                <a class="popup-video text-uppercase" href="https://vimeo.com/39829860">
                                    <small>play video</small>
                                    <span><i class="fal fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <ul class="hero_social ul_li text-uppercase">
                                <li><a href="#"><i class="fab fa-facebook-f"></i> facebook</a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i> twitter</a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i> youtube</a></li>
                            </ul>
                        </div>
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
                <h2>Went to eat?</h2>
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

    <!-- offer start -->
    <section class="offer_area section_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_content pt-110 pb-110">
                        <div class="sec_title">
                            <span>Special Offer</span>
                            <h2>Good Food, Drinks & Great Company.</h2>
                            <p>As well known and we are very busy all days advice you. advice you to call us of before arriving, so we can guarantee your seat. advice you to call us of before arriving As well known and we are very busy all days advice you</p>
                        </div>
                        <ul class="offer_btn ul_li">
                            <li><a class="thm_btn thm_btn-2" href="shop-sidebar.html">order now</a></li>
                            <li>
                                <div class="offer_price">
                                    <h4>$46.99 <span>$59.99</span></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="{{asset('website/img/offer/offer_img.png')}}" alt="">
                        <div class="d_img">
                            <img src="{{asset('website/img/icon/d_img.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer end -->

    <!-- shop masonry start -->
    <section class="shop_masonry_area pt-120 pb-120">
        <div class="container">
            <div class="sec_title sec_title-2">
                <span>Popular dishes</span>
                <h2>Popular dishes</h2>
            </div>
            <div class="row">
                <div class="masonry_active text-center mb-40">
                    <button class="active" data-filter="*">all categories</button>
                    <button data-filter=".cat1">Pizza</button>
                    <button data-filter=".cat2">Burger</button>
                    <button data-filter=".cat3">Blueberry Shake</button>
                    <button data-filter=".cat4">Chicken Chup</button>
                    <button data-filter=".cat5">Ice Cream</button>
                    <button data-filter=".cat6">Drink</button>
                </div>
            </div>
            <div class="row grid">
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 cat4 cat5">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_01.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Fizza</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Unlimited Chicken fry</a></h3>
                            <div class="s_bottom ul_li">
                                <span>Price -</span>
                                <span class="new">$53.00</span>
                                <span class="old">$75.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat3 cat2 cat6">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_02.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                            <span class="badge">10%-</span>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Chicken</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Bangladeshi Sendrues</a></h3>
                            <div class="s_bottom ul_li">
                                <span>Price -</span>
                                <span class="new">$53.00</span>
                                <span class="old">$75.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat4 cat3 cat1 cat2">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_03.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Full Burgar</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Double Stuck Burgar</a></h3>
                            <div class="s_bottom ul_li">
                                <span>Price -</span>
                                <span class="new">$33.00</span>
                                <span class="old">$45.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat5 cat2 cat1">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_04.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Full Burgar</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Chinis Popular Noudlus</a></h3>
                            <div class="s_bottom ul_li">
                                <span>Price -</span>
                                <span class="new">$13.00</span>
                                <span class="old">$17.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat3 cat4 cat2 cat6">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_05.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Chicken</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Unlimited Full Chicken</a></h3>
                            <div class="s_bottom ul_li">
                                <span>Price -</span>
                                <span class="new">$66.00</span>
                                <span class="old">$77.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat5 cat4 cat3 cat6">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_06.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                            <span class="badge">New</span>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Full Burgar</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Bangladeshi Sendrues</a></h3>
                            <div class="s_bottom ul_li">
                                <span>Price -</span>
                                <span class="new">$53.00</span>
                                <span class="old">$75.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ca_btn text-center pt-20">
                        <a class="thm_btn thm_btn-2" href="shop.html">Sell All Product</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop masonry end -->

    <!-- offer start -->
    <section class="offer_area offer_2 offer_img_bg pt-120 pb-120" data-background="{{asset('website/img/bg/offer_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="offer_content">
                        <div class="sec_title sec_title-white">
                            <span>Special Kombo Pack</span>
                            <h2>We make the best* <br> burger in Your town</h2>
                            <p>As well known and we are very busy all days advice you. advice you to call us of before arriving, so we can guarantee your seat. advice you to call us of before arriving, so we canAs well known and we are very busy all days advice you. advice you to call us of before arriving</p>
                        </div>
                        <ul class="offer_btn ul_li">
                            <li><a class="thm_btn thm_btn-2" href="shop-sidebar.html">order now</a></li>
                            <li>
                                <div class="offer_price">
                                    <h4>$46.99 <span>$59.99</span></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d_img">
                <img src="{{asset('website/img/icon/d_img.png')}}" alt="">
            </div>
        </div>
    </section>
    <!-- offer end -->

    <!-- cta start -->
    <section class="cta_area mobile_app pt-220 pb-120">
        <div class="container">
            <div class="cta_bg_wrap">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="cta_app">
                            <img src="{{asset('website/img/bg/cta_app.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="cta_text">
                            <div class="sec_title">
                                <span>Download App</span>
                                <h2>Best App FOr <br> Food Delivery</h2>
                            </div>
                            <ul class="cta_app_wrap ul_li">
                                <li>
                                    <a href="#"><img src="{{asset('website/img/icon/app_store.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('website/img/icon/play_store.png')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->

    <!-- team start -->
    <section class="team_area pb-90">
        <div class="container">
            <div class="row align-items-center mb-30">
                <div class="col-md-8">
                    <div class="sec_title">
                        <span>Our Professional</span>
                        <h2>Meet Our Stuff</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="crs_btn text-md-end">
                        <a class="thm_btn" href="team.html">View All Staff</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="team_single text-center">
                        <div class="team_thumb">
                            <img src="{{asset('website/img/team/img_01.png')}}" alt="">
                        </div>
                        <div class="team_text">
                            <h3>Rasalina de</h3>
                            <span>12 year experience</span>
                        </div>
                        <div class="team_social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team_single text-center">
                        <div class="team_thumb">
                            <img src="{{asset('website/img/team/img_02.png')}}" alt="">
                        </div>
                        <div class="team_text">
                            <h3>Mark  Henerytix</h3>
                            <span>09 year experience</span>
                        </div>
                        <div class="team_social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team_single text-center">
                        <div class="team_thumb">
                            <img src="{{asset('website/img/team/img_03.png')}}" alt="">
                        </div>
                        <div class="team_text">
                            <h3>Ylina Piterson kim</h3>
                            <span>6 year experience</span>
                        </div>
                        <div class="team_social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team end -->

    <!-- testimonial start -->
    <section class="testimonial_area testimonial_bg pt-120 pb-120" data-background="website/img/bg/tm_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="tm_content">
                        <div class="sec_title sec_title-white">
                            <span>Customer Feedback</span>
                            <h2>What Our Client Say ?</h2>
                            <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ore eu fuulla pariatur. Excepteur sint occaecat cupidatat non proideney.</p>
                        </div>
                        <ul class="tm_counter ul_li">
                            <li>
                                <h3>14k<span>+</span></h3>
                                <span>Happy Customer</span>
                            </li>
                            <li>
                                <h3>16<span>+</span></h3>
                                <span>Award Wining</span>
                            </li>
                            <li>
                                <h3>68<span>+</span></h3>
                                <span>Food Menu</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="testimonial_active owl-carousel">
                        <div class="tm_single white_bg">
                            <div class="tm_top ul_li justify-content-between">
                                <div class="tm_author">
                                    <img src="{{asset('website/img/testimonial/author_01.png')}}" alt="">
                                </div>
                                <div class="tm_quote">
                                    <img src="{{asset('website/img/icon/quote.png')}}" alt="">
                                </div>
                            </div>
                            <p>Great food! Fresh, quick, friendly, delicious, affordable! Very flexible with orders. Great service! Great portions! If you want great seafood, this place will not disappoint you. Definitelyy.</p>
                            <div class="tm_bottom ul_li justify-content-between">
                                <div class="a_info">
                                    <h4>Wasim Mia</h4>
                                    <span>Founder & co</span>
                                </div>
                                <div class="rating_wrap">
                                    <ul class="rating_star ul_li">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <span>4 Rating</span>
                                </div>
                            </div>
                        </div>
                        <div class="tm_single white_bg">
                            <div class="tm_top ul_li justify-content-between">
                                <div class="tm_author">
                                    <img src="{{asset('website/img/testimonial/author_02.png')}}" alt="">
                                </div>
                                <div class="tm_quote">
                                    <img src="{{asset('website/img/icon/quote.png')}}" alt="">
                                </div>
                            </div>
                            <p>Great food! Fresh, quick, friendly, delicious, affordable! Very flexible with orders. Great service! Great portions! If you want great seafood, this place will not disappoint you. Definitelyy.</p>
                            <div class="tm_bottom ul_li justify-content-between">
                                <div class="a_info">
                                    <h4>Rahim Mia</h4>
                                    <span>Founder & Ceo</span>
                                </div>
                                <div class="rating_wrap">
                                    <ul class="rating_star ul_li">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <span>3 Rating</span>
                                </div>
                            </div>
                        </div>
                        <div class="tm_single white_bg">
                            <div class="tm_top ul_li justify-content-between">
                                <div class="tm_author">
                                    <img src="{{'website/img/testimonial/author_01.png'}}" alt="">
                                </div>
                                <div class="tm_quote">
                                    <img src="{{asset('website/img/icon/quote.png')}}" alt="">
                                </div>
                            </div>
                            <p>Great food! Fresh, quick, friendly, delicious, affordable! Very flexible with orders. Great service! Great portions! If you want great seafood, this place will not disappoint you. Definitelyy.</p>
                            <div class="tm_bottom ul_li justify-content-between">
                                <div class="a_info">
                                    <h4>Rasalina De</h4>
                                    <span>Founder & co</span>
                                </div>
                                <div class="rating_wrap">
                                    <ul class="rating_star ul_li">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <span>4 Rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->

    <!-- blog start -->
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="sec_title sec_title-2">
                <span>Recent Article</span>
                <h2>Latest News & Blog</h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_single mb-30">
                        <div class="blog_text mb-40">
                            <span class="date">13 December 2021</span>
                            <h3 class="title"><a href="blog-details.html">Best Burger In Your Soci...</a></h3>
                        </div>
                        <figure class="blog_thumb">
                            <a href="blog-details.html"><img src="{{asset('website/img/blog/blog_01.jpg')}}" alt=""></a>
                        </figure>
                        <div class="blog_btn mt-20">
                            <a href="blog-details.html"><i class="far fa-long-arrow-right"></i> Read MOre</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_single mb-30">
                        <div class="blog_text mb-40">
                            <span class="date">02 January 2021</span>
                            <h3 class="title"><a href="blog-details.html">12 speedy seafood recipes..</a></h3>
                        </div>
                        <figure class="blog_thumb">
                            <a href="blog-details.html"><img src="{{asset('website/img/blog/blog_02.jpg')}}" alt=""></a>
                        </figure>
                        <div class="blog_btn mt-20">
                            <a href="blog-details.html"><i class="far fa-long-arrow-right"></i> Read MOre</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_single mb-30">
                        <div class="blog_text mb-40">
                            <span class="date">09 july 2021</span>
                            <h3 class="title"><a href="blog-details.html">Who’s winning the fast...</a></h3>
                        </div>
                        <figure class="blog_thumb">
                            <a href="blog-details.html"><img src="{{asset('website/img/blog/blog_03.jpg')}}" alt=""></a>
                        </figure>
                        <div class="blog_btn mt-20">
                            <a href="blog-details.html"><i class="far fa-long-arrow-right"></i> Read MOre</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ca_btn text-center pt-20">
                        <a class="thm_btn thm_btn-2" href="blog.html">Sell All Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    <!-- brand start -->
    <section class="brand_area white_bg">
        <div class="container-fluid">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-6 b_border">
                    <div class="brand_img">
                        <img src="{{asset('website/img/brand/brand_01.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 b_border">
                    <div class="brand_img">
                        <img src="{{asset('website/img/brand/brand_02.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 b_border">
                    <div class="brand_img">
                        <img src="{{asset('website/img/brand/brand_03.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 b_border">
                    <div class="brand_img">
                        <img src="{{asset('website/img/brand/brand_04.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 b_border">
                    <div class="brand_img">
                        <img src="{{asset('website/img/brand/brand_05.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 b_border">
                    <div class="brand_img">
                        <img src="{{asset('website/img/brand/brand_06.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand end -->
</main>
<!-- main body end -->
@endsection
