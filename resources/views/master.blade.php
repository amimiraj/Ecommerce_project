<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

    <!-- Mirrored from inthe7heaven.com/flatastic-html/index_layout_2.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 17 Jun 2014 17:33:43 GMT -->
    <head>
        <title>Hour Publications</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--meta info-->
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="icon" type="image/ico" href="{{asset('/')}}public/front_end/images/favicon-16x16.png">
        <!--stylesheet include-->
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/colorpicker.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/flexslider.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/owl.transitions.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/jquery.custom-scrollbar.css">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/style.css">
        <!--font include-->
        <link href="{{asset('/')}}public/front_end/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('/')}}public/front_end/css/jquery.fancybox-1.3.4.css">
        <script src="https://code.jquery.com/jquery-1.8.3.js" integrity="sha256-dW19+sSjW7V1Q/Z3KD1saC6NcE5TUIhLJzJbrdKzxKc=" crossorigin="anonymous"></script>
        <script id = "myScript" src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script> 


        <style>


            /*FOOTER*/

            footer {
                background: white;
                background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
                background: linear-gradient(59deg, #3A6073, #16222A);
                color: white;
                margin-top:100px;
            }

            footer a {
                color: #fff;
                font-size: 14px;
                transition-duration: 0.2s;
            }

            footer a:hover {
                color: #FA944B;
                text-decoration: none;
            }

            .copy {
                font-size: 12px;
                padding: 10px;
                border-top: 1px solid #FFFFFF;
            }

            .footer-middle {
                padding-top: 2em;
                color: white;
            }


            /*SOCİAL İCONS*/

            /* footer social icons */

            ul.social-network {
                list-style: none;
                display: inline;
                margin-left: 0 !important;
                padding: 0;
            }

            ul.social-network li {
                display: inline;
                margin: 0 5px;
            }


            /* footer social icons */

            .social-network a.icoFacebook:hover {
                background-color: #3B5998;
            }

            .social-network a.icoLinkedin:hover {
                background-color: #007bb7;
            }

            .social-network a.icoFacebook:hover i,
            .social-network a.icoLinkedin:hover i {
                color: #fff;
            }

            .social-network a.socialIcon:hover,
            .socialHoverClass {
                color: #44BCDD;
            }

            .social-circle li a {
                display: inline-block;
                position: relative;
                margin: 0 auto 0 auto;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
                text-align: center;
                width: 30px;
                height: 30px;
                font-size: 15px;
            }

            .social-circle li i {
                margin: 0;
                line-height: 30px;
                text-align: center;
            }

            .social-circle li a:hover i,
            .triggeredHover {
                -moz-transform: rotate(360deg);
                -webkit-transform: rotate(360deg);
                -ms--transform: rotate(360deg);
                transform: rotate(360deg);
                -webkit-transition: all 0.2s;
                -moz-transition: all 0.2s;
                -o-transition: all 0.2s;
                -ms-transition: all 0.2s;
                transition: all 0.2s;
            }

            .social-circle i {
                color: #595959;
                -webkit-transition: all 0.8s;
                -moz-transition: all 0.8s;
                -o-transition: all 0.8s;
                -ms-transition: all 0.8s;
                transition: all 0.8s;
            }

            .social-network a {
                background-color: #F9F9F9;
            }



        </style>


    </head>
    <!---------------------------------------------->

    <body>

        <div class="wide_layout relative w_xs_auto">

            <!--markup header type 2-->
            <header role="banner">
                <!--header top part-->
                <section class="h_top_part">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-3 t_xs_align_c">

                                <?php
                                if (session()->get('customer_id')) {
                                    ?>

                                    <p class="f_size_small">
                                        Welcome visitor:<b style="color: cornflowerblue"> {{session()->get('customer_name') }}</b>  
                                        <a href="{{URL::to('/customer-logout')}}" >Log Out</a>  
                                    </p>

                                <?php } else { ?>  

                                    <p class="f_size_small">
                                        Welcome visitor  can you:	

                                        <a href="{{URL::to('/checkout')}}" >Log In</a>  

                                    <?php } ?>

                            </div>


                        </div>
                    </div>
                </section>



                <!--header bottom part-->
                <section class="h_bot_part container">
                    <div class="clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
                            <a href="{{URL::to('/')}}" class="logo m_xs_bottom_15 d_xs_inline_b">
                                <img src="{{asset('/')}}public/front_end/images/hourpublications.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-8">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c m_xs_bottom_15">
                                    <dl class="l_height_medium">
                                        <dt class="f_size_small">Call us:</dt>
                                        <dd class="f_size_ex_large color_dark"><b>(+88)019-11578340</b></dd>
                                    </dl>
                                </div>
                                <!--------------------------------------------search--------------->
                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <form class="relative type_2" action="{{URL::to('/search')}}" method="post" role="search">
                                        @csrf
                                        <input type="text" placeholder="Search" name="search" class="r_corners f_size_medium full_width">
                                        <button class="f_right search_button tr_all_hover f_xs_none">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <!--main menu container---------------------------------------------->
                @yield('menu')
            </header>

            @yield('slider')

            <!--content-->

            @yield('master-content')
            <footer class="container p-0 m_bottom_0 " style="background-color:white; margin-top: 30px" role="contentinfo" >

                <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
                    <a  class="m_xs_bottom_15 d_xs_inline_b">
                        <img width="300px" src="{{asset('/')}}public/front_end/images/hourpublications.png" alt="">
                    </a>
                </div>

                <div class="col-md-12 copy">
                    <p class="text-center">&copy; 2021 <span class="color_light">www.codesrock.com</span>. All Rights Reserved..</p>
                </div>

            </footer>





            <!--            markup footer
                        <footer id="footer" class="type_2">
                            <div class="footer_top_part">
                                <div class="container t_align_c m_bottom_20">
                                    social icons
                                </div>
                                <hr class="divider_type_4 m_bottom_50">
                                <div class="container">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                                            <h3 class="color_light_2 m_bottom_20">About</h3>
                                            <p class="m_bottom_15">Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem.</p>
                                            <p>Interdum vitae, dapibus ac, scelerisque. </p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 m_xs_bottom_30">
                                            <h3 class="color_light_2 m_bottom_20">The Service</h3>
                                            <ul class="vertical_list">
                                                <li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>
                                                <li><a class="color_light tr_delay_hover" href="#">Categories<i class="fa fa-angle-right"></i></a></li>
                                                <li><a class="color_light tr_delay_hover" href="#">Privacy policy<i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 m_xs_bottom_30">
                                            <h3 class="color_light_2 m_bottom_20">Information</h3>
                                            <ul class="vertical_list">
                                                <li><a class="color_light tr_delay_hover" href="#">About us<i class="fa fa-angle-right"></i></a></li>
                                                <li><a class="color_light tr_delay_hover" href="#">Delivery<i class="fa fa-angle-right"></i></a></li>
            
                                                <li><a class="color_light tr_delay_hover" href="#">Terms &amp; condition<i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 m_xs_bottom_30">
                                            <h3 class="color_light_2 m_bottom_20">Catalog</h3>
                                            <ul class="vertical_list">
                                                <li><a class="color_light tr_delay_hover" href="">New Collection<i class="fa fa-angle-right"></i></a></li>
                                                <li><a class="color_light tr_delay_hover" href="">Specials<i class="fa fa-angle-right"></i></a></li>
                                                <li><a class="color_light tr_delay_hover" href="">Manufacturers<i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <h3 class="color_light_2 m_bottom_20">Contact Us</h3>
                                            <ul class="c_info_list">
                                                <li class="m_bottom_10">
                                                    <div class="clearfix m_bottom_15">
                                                        <i class="fa fa-map-marker f_left"></i>
                                                        <p class="contact_e">Bijoy Ekattor Hall, University of Dhaka<br>Bangladesh</p>
                                                    </div>
                                                </li>
                                                <li class="m_bottom_10">
                                                    <div class="clearfix m_bottom_10">
                                                        <i class="fa fa-phone f_left"></i>
                                                        <p class="contact_e">01911-578340</p>
                                                    </div>
                                                </li>
                                                <li class="m_bottom_10">
                                                    <div class="clearfix m_bottom_10">
                                                        <i class="fa fa-envelope f_left"></i>
                                                        <a class="contact_e color_light" href="mailto:#">alalmdsharif@gmail.com</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            copyright part
                            <div class="footer_bottom_part">
                                <div class="container clearfix t_mxs_align_c">
                                    <p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2021 <span class="color_light">www.codesrock.com</span>. All Rights Reserved.</p>
                                </div>
                            </div>
                        </footer>-->











        </div>
        <!--social widgets---------------------------------------------------------------------------------------------------------------------------->
        <ul class="social_widgets d_xs_none">
            <!--facebook-->
            <li class="relative">
                <button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
                    #.  <a href="https://www.facebook.com/groups/alalgk/" target="_blank" class="color_dark d_inline_b f_size_ex_large v_align_b">ALAL's Samprotik Hour</a><br>
                    #. <a href="https://www.facebook.com/alalsgk"  target="_blank" class="color_dark d_inline_b f_size_ex_large v_align_b">আলাল’স GK Hour</a>
               <!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F624813428167731&tabs=timeline&width=0&height=0&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>-->
                </div>
            </li>
            <!--twitter feed-->
            <li class="relative"  >
                <button class="sw_button t_align_c googlemap"><i class="fa fa-youtube"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">YouTube Channel</h3>
                    <div class=" m_bottom_25"><b style="color:background">Searchlight শিক্ষা পরিবার</b></div>                   
                    <a role="button" target="_blank" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://www.youtube.com/channel/UC8YHz4wubFuAW1lmSuC3RDA">Follow on Youtube</a>
                </div>	
            </li>
            <!--contact form-->
            <li class="relative">
                <button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">Contact Us</h3>           
                    <form  action="{{URL::to('/save-contact')}}" method="post">
                        @csrf
                        <input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="contact_name" placeholder="Your name" required>
                        <input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="contact_email" placeholder="Email" required>
                        <input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="contact_subject" placeholder="Subject" required>
                        <textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Message" name="contact_message" required></textarea>
                        <button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Send</button>
                    </form>
                </div>	
            </li>
            <!--contact info-->
            <li class="relative">
                <button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
                <div class="sw_content">
                    <h3 class="color_dark m_bottom_20">Location</h3>
                    <ul class="c_info_list">
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_15">
                                <i class="fa fa-map-marker f_left color_dark"></i>
                                <p class="contact_e">বিজয় একাত্তর হল,<br> বাংলাদেশ.</p>
                            </div>
                            <iframe class="r_corners full_width" id="gmap_mini" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.218072886922!2d90.38813450766477!3d23.737807608099022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c0f053a153%3A0x9a3d97b29d046a7d!2sBijoy%20Ekattor%20Hall!5e0!3m2!1sen!2sbd!4v1610015181208!5m2!1sen!2sbd"></iframe>
                        </li>
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_10">
                                <i class="fa fa-phone f_left color_dark"></i>
                                <p class="contact_e">01911-578340</p>
                            </div>
                        </li>
                        <li class="m_bottom_10">
                            <div class="clearfix m_bottom_10">
                                <i class="fa fa-envelope f_left color_dark"></i>
                                <a class="contact_e default_t_color" href="mail to:#">alalmdsharif@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>	
            </li>
        </ul>
        <!--custom popup-------------------------------------------------------------------------------///////////-------------------------------------------->
        <div class="popup_wrap d_none" id="quick_view_product">
            <section class="popup r_corners shadow">
                <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
                <div class="clearfix">
                    <div class="custom_scrollbar">
                        <!--left popup column-->
                        <div class="f_left half_column">
                            <div class="relative d_inline_b m_bottom_10 qv_preview">
                                <span class="hot_stripe"><img src="{{asset('/')}}public/front_end/images/sale_product.png" alt=""></span>
                                <img src="{{asset('/')}}public/front_end/images/quick_view_img_1.jpg" class="tr_all_hover" alt="">
                            </div>
                            <!--carousel-->
                            <div class="relative qv_carousel_wrap m_bottom_20">
                                <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
                                    <i class="fa fa-angle-left "></i>
                                </button>
                                <ul class="qv_carousel d_inline_middle">
                                    <li data-src="{{asset('/')}}public/front_end/images/quick_view_img_1.jpg"><img src="{{asset('/')}}public/front_end/images/quick_view_img_4.jpg" alt=""></li>
                                    <li data-src="{{asset('/')}}public/front_end/images/quick_view_img_2.jpg"><img src="{{asset('/')}}public/front_end/images/quick_view_img_5.jpg" alt=""></li>
                                    <li data-src="{{asset('/')}}public/front_end/images/quick_view_img_3.jpg"><img src="{{asset('/')}}public/front_end/images/quick_view_img_6.jpg" alt=""></li>
                                    <li data-src="{{asset('/')}}public/front_end/images/quick_view_img_1.jpg"><img src="{{asset('/')}}public/front_end/images/quick_view_img_4.jpg" alt=""></li>
                                    <li data-src="{{asset('/')}}public/front_end/images/quick_view_img_2.jpg"><img src="{{asset('/')}}public/front_end/images/quick_view_img_5.jpg" alt=""></li>
                                    <li data-src="{{asset('/')}}public/front_end/images/quick_view_img_3.jpg"><img src="{{asset('/')}}public/front_end/images/quick_view_img_6.jpg" alt=""></li>
                                </ul>
                                <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
                                    <i class="fa fa-angle-right "></i>
                                </button>
                            </div>
                            <div class="d_inline_middle">Share this:</div>
                            <div class="d_inline_middle m_left_5">
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                    <a class="addthis_button_preferred_1"></a>
                                    <a class="addthis_button_preferred_2"></a>
                                    <a class="addthis_button_preferred_3"></a>
                                    <a class="addthis_button_preferred_4"></a>
                                    <a class="addthis_button_compact"></a>
                                    <a class="addthis_counter addthis_bubble_style"></a>
                                </div>
                                <!-- AddThis Button END -->
                            </div>
                        </div>
                        <!--right popup column-->
                        <div class="f_right half_column">
                            <!--description-->
                            <h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">Eget elementum vel</a></h2>
                            <div class="m_bottom_10">
                                <!--rating-->
                                <ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                </ul>
                                <a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
                            </div>
                            <hr class="m_bottom_10 divider_type_3">
                            <table class="description_table m_bottom_10">
                                <tr>
                                    <td>Manufacturer:</td>
                                    <td><a href="#" class="color_dark">Chanel</a></td>
                                </tr>
                                <tr>
                                    <td>Availability:</td>
                                    <td><span class="color_green">in stock</span> 20 item(s)</td>
                                </tr>
                                <tr>
                                    <td>Product Code:</td>
                                    <td>PS06</td>
                                </tr>
                            </table>
                            <h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
                            <table class="description_table m_bottom_5">
                                <tr>
                                    <td>Product Length:</td>
                                    <td><span class="color_dark">10.0000M</span></td>
                                </tr>
                                <tr>
                                    <td>Product Weight:</td>
                                    <td>10.0000KG</td>
                                </tr>
                            </table>
                            <hr class="divider_type_3 m_bottom_10">
                            <p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
                            <hr class="divider_type_3 m_bottom_15">
                            <div class="m_bottom_15">
                                <s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
                            </div>
                            <table class="description_table type_2 m_bottom_15">
                                <tr>
                                    <td class="v_align_m">Size:</td>
                                    <td class="v_align_m">
                                        <div class="custom_select f_size_medium relative d_inline_middle">
                                            <div class="select_title r_corners relative color_dark">s</div>
                                            <ul class="select_list d_none"></ul>
                                            <select name="product_name">
                                                <option value="s">s</option>
                                                <option value="m">m</option>
                                                <option value="l">l</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="v_align_m">Quantity:</td>
                                    <td class="v_align_m">
                                        <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
                                            <button class="bg_tr d_block f_left" data-direction="down">-</button>
                                            <input type="text" name="" readonly value="1" class="f_left">
                                            <button class="bg_tr d_block f_left" data-direction="up">+</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="clearfix m_bottom_15">
                                <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--login popup-------------------------------------------------------------------------------//////////////////----------------------------------------->
        <div class="popup_wrap d_none" id="login_popup">
            <section class="popup r_corners shadow">
                <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
                <h3 class="m_bottom_20 color_dark">Log In</h3>
                <form>
                    <ul>
                        <li class="m_bottom_15">
                            <label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
                            <input type="text" name="" id="username" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_25">
                            <label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
                            <input type="password" name="" id="password" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                            <input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
                        </li>
                        <li class="clearfix m_bottom_30">
                            <button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Log In</button>
                            <div class="f_right f_size_medium f_mxs_none">
                                <a href="#" class="color_dark">Forgot your password?</a><br>
                                <a href="#" class="color_dark">Forgot your username?</a>
                            </div>
                        </li>
                    </ul>
                </form>
                <footer class="bg_light_color_1 t_mxs_align_c">
                    <h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
                    <a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
                </footer>
            </section>
        </div>



        <button class="t_align_c r_corners type_2 tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
        <!--scripts include-->
        <script src="{{asset('/')}}public/front_end/js/jquery-2.1.0.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/retina.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.flexslider-min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/styleswitcher.js"></script>
        <script src="{{asset('/')}}public/front_end/js/colorpicker.js"></script>
        <script src="{{asset('/')}}public/front_end/js/waypoints.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.isotope.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/owl.carousel.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.tweet.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.custom-scrollbar.js"></script>
        <script src="{{asset('/')}}public/front_end/js/scripts.js"></script>
        <script type="text/javascript" src="../../s7.addthis.com/{{asset('/')}}public/front_end/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery-ui.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/elevatezoom.min.js"></script>
        <script src="{{asset('/')}}public/front_end/js/jquery.fancybox-1.3.4.js"></script>


    </body>

    <!-- Mirrored from inthe7heaven.com/flatastic-html/index_layout_2.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 17 Jun 2014 17:34:18 GMT -->
</html>