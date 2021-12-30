@extends('master')
@section('master-content')


<div class="page_content_offset">
    <div class="container">


        <div class="row clearfix">
            <aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                <!--widgets-->
                <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Categories</h3>
                    </figcaption>
                    <div class="widget_content">
                        <!--Categories list-->
                        <ul class="categories_list">

                            @foreach($all_category as $v_category)
                            <li>
                                <a href="{{URL::to('/product-category/'.$v_category->id)}}" class="f_size_large color_dark d_block relative">
                                    <b>{{$v_category->category_name}}</b>                         
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </figure>
                <!--compare products===========================================================================-->
                <!--                <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                    <figcaption>
                                        <h3 class="color_light">Compare Products</h3>
                                    </figcaption>
                                    <div class="widget_content">
                                        <div class="clearfix m_bottom_15 relative cw_product">
                                            <img src="{{asset('/')}}public/front_end/images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                            <a href="#" class="color_dark d_block bt_link">Ut tellus dolor<br> dapibus</a>                        
                                        </div>
                                   
                                    </div>
                                </figure>-->
                <!--wishlist-->
                <!-- <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                    <figcaption>
                                        <h3 class="color_light">Wishlist</h3>
                                    </figcaption>
                                    <div class="widget_content">
                                        You have no product to compare.
                                    </div>
                                </figure>-->

                <!--banner-->
                <a href="#" class="widget animate_ftr d_block r_corners m_bottom_30">
                    <img src="{{asset('/')}}public/front_end/images/output_wYG77A.gif" alt="">
                </a>


                <!--Bestsellers--------------------------------------------------------------------------------------------------------------------------------->
                <!--                <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                                    <figcaption>
                                        <h3 class="color_light">Bestsellers</h3>
                                    </figcaption>               
                                    <div class="widget_content">                  
                                        <div class="clearfix m_bottom_5">
                                            <img src="{{asset('/')}}public/front_end/images/bestsellers_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                            <a href="#" class="color_dark d_block bt_link">Crsus eleifend elit</a>
                                            rating
                                            <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
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
                                            <p class="scheme_color">$24.00</p>
                                        </div>
                                    </div>
                                </figure>-->
                <!--tags-->
                <figure class="widget animate_ftr shadow r_corners wrapper">
                    <figcaption>
                        <h3 class="color_light">Facebook Pages </h3>
                    </figcaption>
                    <div class="widget_content">
                        <div class="tags_list">
                            #.  <a href="https://www.facebook.com/groups/alalgk/" target="_blank" class="color_dark d_inline_b f_size_ex_large v_align_b">ALAL's Samprotik Hour</a><br>
                            #. <a href="https://www.facebook.com/alalsgk"  target="_blank" class="color_dark d_inline_b f_size_ex_large v_align_b">আলাল’স GK Hour</a>
                        </div>
                    </div>
                </figure>
                <figure class="widget animate_ftr shadow r_corners wrapper">
                    <figcaption>
                        <h3 class="color_light">YouTube Channel</h3>
                    </figcaption>
                    <div class="widget_content">
                        <div class="tags_list">
                            #. <a href="https://www.youtube.com/watch?v=iToXl_OLZWg" target="_blank" class="color_dark d_inline_b f_size_ex_large v_align_b">Searchlight শিক্ষা পরিবার</a><br>                       
                        </div>
                    </div>
                </figure>
            </aside>
            <section class="col-lg-9 col-md-9 col-sm-9">

                <div class="clearfix">
                    <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">New Collection</h2>
                    <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none m_mxs_bottom_5">
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners nc_prev"><i class="fa fa-angle-left"></i></button>
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners nc_next"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
                <!-- carousel-->
                <div class="nc_carousel m_bottom_30 m_sm_bottom_20">

                    @foreach($new_product as $n_product)
                    <figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative">

                        <!--product preview-->
                        <a href="{{URL::to('/product-details'.'/'.$n_product->id.'/'.$n_product->category_id)}}" class="d_block relative pp_wrap m_bottom_15">
                            <!--hot product-->                      
                            <img src="{{URL::to('/').'/storage/app/images/product/product_image/'.$n_product->product_img_one}}" class="tr_all_hover" alt="">                       
                        </a>
                        <!--description and price of product-->
                        <figcaption class="p_vr_0">
                            <h5 class="m_bottom_10"><a href="#" class="color_dark">{{$n_product->product_name}}</a></h5>
                            <div class="clearfix">
                                <!--rating-->
                                <ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
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

                                @if($n_product->product_discount_price>0)                              
                                <p class="scheme_color f_size_large m_bottom_15"><s>TK.{{$n_product->product_price}} </s> TK.{{$n_product->product_discount_price}}</p>                        
                                @else
                                <p class="scheme_color f_size_large m_bottom_15">TK. {{$n_product->product_price}}</p>                          
                                @endif
                            </div>
                            <!----------------------------------------->
                            <form action="{{URL::to('/add-cart').'/'.$n_product->id}}" method="post">
                                @csrf
                                <input type="hidden" name="product_qty" min="1"  value="1" class="f_left">  
                                <button  class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
                            </form>
                        </figcaption>
                    </figure>
                    @endforeach
                </div>





                <h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Featured products</h2>
                <!--products-->
                <section class="products_container a_type_2 category_grid clearfix m_bottom_25">
                    <!--product item-->

                    @foreach($all_product as $v_product)
                    <!--product item-->
                    <div class="product_item rated w_xs_full">
                        <figure class="r_corners photoframe animate_ftb long type_2 t_align_c shadow relative">
                            <!--product preview-->
                            <a href="{{URL::to('/product-details'.'/'.$v_product->id.'/'.$v_product->category_id)}}" class="d_block relative pp_wrap m_bottom_15">
                                <img src="{{asset('/storage/app/images/product/product_image/'.$v_product->product_img_one)}}" class="tr_all_hover" alt="">
                                <!--<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>-->
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10"><a href="#" class="color_dark">{{$v_product->product_name}}</a></h5>
                                <div class="clearfix">
                                    <!--rating-->
                                    <ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
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

                                    @if($v_product->product_discount_price>0)                              
                                    <p class="scheme_color f_size_large m_bottom_15"><s>TK. {{$v_product->product_price}}</s>   TK.{{$v_product->product_discount_price}}</p>           
                                    @else
                                    <p class="scheme_color f_size_large m_bottom_15">TK. {{$v_product->product_price}}</p>                          
                                    @endif
                                </div>
                                <form action="{{URL::to('/add-cart').'/'.$v_product->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_qty" min="1"  value="1" class="f_left">  
                                    <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
                                </form>

                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </section>


                <!--banners-->
                <div class="row clearfix m_bottom_45">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
                            <span class="d_inline_middle">
                                <img class="d_inline_middle m_md_bottom_5" src="{{asset('/')}}public/front_end/images/banner_img_3.png" alt="">
                                <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                    <b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
                            <span class="d_inline_middle">
                                <img class="d_inline_middle m_md_bottom_5" src="{{asset('/')}}public/front_end/images/banner_img_4.png" alt="">
                                <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                    <b>Free<br class="d_none d_sm_block"> Shipping</b><br><span class="color_dark">On All Items</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <!--product brands-->
                <!--                <div class="clearfix m_bottom_25 m_sm_bottom_20">
                                    <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
                                    <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
                                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
                                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>-->
                <!--product brands carousel-->
                <!--                <div class="product_brands with_sidebar m_sm_bottom_35">
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                    <a href="#" class="d_block t_align_c animate_fade"><img src="{{asset('/')}}public/front_end/images/brand_logo.jpg" alt=""></a>
                                </div>-->
            </section>
        </div>
    </div>
</div>

@endsection