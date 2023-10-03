@extends('website.layouts.app')

@section('content')


    <!-- page title start -->
    <section class="page_title_area" data-background="{{asset('website/img/bg/page_title.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page_title">
                        <h1>Contact us</h1>
                        <ul class="breadcrumb_nav ul_li">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact us</li>
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
    <!-- contact start -->
    <section class="copntact_area pt-120 pb-120">
        <div class="container">
            <div class="contact_wrap">
                <div class="row mb-10 justify-content-md-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_info mb-40">
                            <div class="contact_icon">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div class="contact_text">
                                <h4>Email Address</h4>
                                <p>Frudbaz@gmail.com</p>
                                <p>Info@webmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_info mb-40">
                            <div class="contact_icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact_text">
                                <h4>Phone Number</h4>
                                <p>+1255 - 568 - 6523</p>
                                <p>+1255 - 568 - 6523</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_info mb-40">
                            <div class="contact_icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact_text">
                                <h4>Our Location</h4>
                                <p>Bowery St, New York, NY 10013,USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="contact_form" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="fname" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Mail Address">
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" placeholder="Enter Your Subject :">
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Massage :"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="contact_btn text-center">
                                    <a class="thm_btn thm_btn-black" href="#">Send Massage</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->





@endsection
