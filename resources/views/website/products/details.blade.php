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
                            <ul class="pl_list">
                                <li>Great feature with amzing sound</li>
                                <li>100% new trend with much more color</li>
                                <li>Unlimited guarantee</li>
                            </ul>
                            <h4 class="price"><strong>$248.99</strong></h4>
                            <div class="review_wrap ul_li">
                                <ul class="review ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <div class="text">
                                    <span>132 Review</span>
                                </div>
                            </div>
                            <ul class="btns_group ul_li">
                                <li>
                                    <div class="quantity_input quantity_boxed">
                                        <h4 class="quantity_title">Quantity</h4>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="thm_btn thm_btn-black" href="cart.html">Add To Cart</a></li>
                            </ul>
                            <div class="details_share_links">
                                <h4 class="list_title"><i class="fal fa-share"></i> Share</h4>
                                <div class="social_links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_info_wrap mb-50">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills product_info" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Product Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false"> Additionnal Imformation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Review (3)</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="info_wrap">
                                    <p>Rrem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="info_wrap">
                                    <div class="table-responsive">
                                        <h3 class="title">Additional information</h3>
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
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="info_wrap">
                                    <p>Rrem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cint explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,</p>
                                    <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididulabore et doloreey.consectetur adipisicing elit, sed do eiusmod temporRorem ipsum doloadipisicing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="releted_product">
                <div class="sec_title sec_title-2">
                    <h2>Related products</h2>
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
