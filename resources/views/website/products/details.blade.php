@extends('website.layouts.app')
@section('content')

    <!-- page title start -->
    <section class="page_title_area" data-background="{{asset('website/img/bg/page_title.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page_title">
                        <h1>Product Details</h1>
                        <ul class="breadcrumb_nav ul_li">
                            <li><a href="index.html">Home</a></li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page_title_img">
                        <img src="{{asset('website/img/bg/page_title_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb_icon_wrap">
            <div class="container">
                <div class="breadcrumb_icon">
                    <img src="{{asset('website/img/icon/bc_icon.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- shop details start -->
    <section class="shop_details pt-120 pb-90">
        <div class="container">
            <div class="product_top_wrap mb-60">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="product_wrap mb-30">
                            <div class="product_details_img ">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                         aria-labelledby="home-tab">
                                        <div class="pl_thumb">
                                            <img src="{{asset('website/img/shop/details/large_01.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                         aria-labelledby="profile-tab">
                                        <div class="pl_thumb">
                                            <img src="{{asset('website/img/shop/details/large_02.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                         aria-labelledby="contact-tab">
                                        <div class="pl_thumb">
                                            <img src="{{asset('website/img/shop/details/large_03.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile2" role="tabpanel"
                                         aria-labelledby="profile-tab3">
                                        <div class="pl_thumb">
                                            <img src="{{asset('website/img/shop/details/large_04.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile3" role="tabpanel"
                                         aria-labelledby="profile-tab4">
                                        <div class="pl_thumb">
                                            <img src="{{asset('website/img/shop/details/large_05.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop_thumb_tab">
                                <ul class="nav" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true"><img src="{{asset('website/img/shop/details/sm_01.jpg')}}" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false"><img
                                                src="{{asset('website/img/shop/details/sm_02.jpg')}}" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact" type="button" role="tab"
                                                aria-controls="contact" aria-selected="false"><img
                                                src="{{asset('website/img/shop/details/sm_03.jpg')}}" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="profile-tab3" data-bs-toggle="tab"
                                                data-bs-target="#profile2" type="button" role="tab"
                                                aria-controls="profile2" aria-selected="false"><img
                                                src="{{asset('website/img/shop/details/sm_04.jpg')}}" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" id="profile-tab4" data-bs-toggle="tab"
                                                data-bs-target="#profile3" type="button" role="tab"
                                                aria-controls="profile3" aria-selected="false"><img
                                                src="{{asset('website/img/shop/details/sm_05.jpg')}}" alt="">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="details_content mb-30">
                            <h3 class="title">Americano 2d Burger</h3>
                            <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et doloreey.</p>

                            <p>Great feature with amzing sound 100% new trend with much more color Unlimited guarantee
                            </p>
                            <h4 class="price"><strong>$248.99</strong></h4>
                            <div class="review_wrap ul_li">
                                <ul class="review ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <div class="text">
                                    <span>{{random_int(10,200)}} Review</span>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th>Weight</th>
                                        <td class="product_weight">1.4 oz</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td class="product_dimensions">62 × 56 × 12 in</td>
                                    </tr>
                                    <tr>
                                        <th>Size</th>
                                        <td class="product_dimensions">XL, XXL, LG, SM, MD</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="releted_product">
                <div class="sec_title sec_title-2">
                    <h2>Pair your favorite drink with the perfect accompaniments.</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="shop_single white_bg">
                            <div class="thumb text-center">
                                <a class="image" href="shop-details.html"><img src="assets/img/shop/img_01.png" alt=""></a>
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
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="shop_single white_bg">
                            <div class="thumb text-center">
                                <a class="image" href="shop-details.html"><img src="assets/img/shop/img_02.png" alt=""></a>
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
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="shop_single white_bg">
                            <div class="thumb text-center">
                                <a class="image" href="shop-details.html"><img src="assets/img/shop/img_03.png" alt=""></a>
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
                </div>
            </div>
        </div>
    </section>
    <!-- shop details end -->

@endsection
