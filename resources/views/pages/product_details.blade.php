@extends('master')
@section('master-content')


<!--content-->
<div class="page_content_offset">
    <div class="container">
        <div class="clearfix m_bottom_30 t_xs_align_c">
            <div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
                <div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
                    <img id="zoom_image" src="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_one }}" data-zoom-image="{{URL::to('/').'/storage/app/images/product/product_details_image/'.$select_product[0]->product_details_img_one}}" class="tr_all_hover" alt="">
                </div>
                <!--carousel-->
                <div class="relative qv_carousel_wrap text-center">
                    <button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">
                        <i class="fa fa-angle-left "></i>
                    </button>
                    <ul class="qv_carousel_single d_inline_middle center text-center">
                        <a href="#"  class="text-center" data-image="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_one }}" data-zoom-image="{{URL::to('/').'/storage/app/images/product/product_details_image/'.$select_product[0]->product_details_img_one }}"> <img src="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_one}}" alt=""></a>
                        <a href="#" data-image="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_two}}" data-zoom-image="{{URL::to('/').'/storage/app/images/product/product_details_image/'.$select_product[0]->product_details_img_two }}"> <img src="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_two }}" alt=""></a>
                        <a href="#" data-image="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_three}}" data-zoom-image="{{URL::to('/').'/storage/app/images/product/product_details_image/'.$select_product[0]->product_details_img_three }}"> <img src="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_three}}" alt=""></a>
                        <a href="#" data-image="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_four}}" data-zoom-image="{{URL::to('/').'/storage/app/images/product/product_details_image/'.$select_product[0]->product_details_img_four }}">  <img src="{{URL::to('/').'/storage/app/images/product/product_image/'.$select_product[0]->product_img_four }}" alt=""></a>                   
                    </ul>
                    <button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">
                        <i class="fa fa-angle-right "></i>
                    </button>
                </div>
            </div>
            <div class="p_top_10 t_xs_align_l">
                <!--description-->
                <h2 class="color_dark fw_medium m_bottom_10">{{$select_product[0]->product_name}}</h2>

                <hr class="m_bottom_10 divider_type_3">
                <table class="description_table m_bottom_10">
                    <tr>
                        <td>Manufacturer:</td>
                        <td><a href="" class="color_dark">{{$select_product[0]->manufacturer_name}}</a></td>
                    </tr>
                    <tr>
                        <td>Availability:</td>
                        <td><span class="color_green">in stock</span> </td>
                    </tr>
                    <tr>
                        <td>Product Code:</td>
                        <td>{{$select_product[0]->product_sku}}</td>
                    </tr>
                </table>

                <hr class="divider_type_3 m_bottom_10">


                @if($select_product[0]->product_discount_price>0)                              
                <p class="scheme_color f_size_large m_bottom_15"><s>TK.{{$select_product[0]->product_price}} </s> TK.{{$select_product[0]->product_discount_price}}</p>                        
                @else
                <p class="scheme_color f_size_large m_bottom_15">TK. {{$select_product[0]->product_price}}</p>                          
                @endif



                <form action="{{URL::to('/add-cart').'/'.$select_product[0]->id}}" method="post">
                    @csrf
                    <table class="description_table type_2 m_bottom_15">

                        <tr>
                            <td class="v_align_m">Quantity:</td>
                            <td class="v_align_m">
                                <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">                                   
                                    <input type="number" name="product_qty" min="1"  value="1" class="f_left">                               
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="d_ib_offset_0 m_bottom_20">
                        <button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Add to Cart</button>
                    </div>
                </form>

<!--<p class="d_inline_middle">Share this:</p>-->
                <div class="d_inline_middle m_left_5 addthis_widget_container">
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
        </div>
        <!--tabs-->
        <div class="tabs m_bottom_45">
            <!--tabs navigation-->
            <nav>
                <ul class="tabs_nav horizontal_list clearfix">
                    <li class="f_xs_none"><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Description</a></li>
                </ul>
            </nav>
            <section class="tabs_content shadow r_corners">
                <div id="tab-1">
                    <p class="m_bottom_10">
                        {{$select_product[0]->product_description}}
                    </p>
                </div>

            </section>
        </div>

        @if($related_product->isNotEmpty())
        <div class="clearfix">
            <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none">Related Products</h2>
            <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners rp_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners rp_next"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        @endif
        <div class="related_projects product_full_width m_bottom_15">

            @foreach($related_product as $r_product)
            <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
                <!--product preview-->
                <a href="{{URL::to('/product-details'.'/'.$r_product->id.'/'.$r_product->category_id)}}" class="d_block relative pp_wrap">
                    <!--sale product-->
                    <span class="hot_stripe type_2"><img src="images/sale_product_type_2.png" alt=""></span>
                    <img src="{{URL::to('/').'/storage/app/images/product/product_image/'.$r_product->product_img_one}}" class="tr_all_hover" alt="">
                    <!--<span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>-->
                </a>
                <!--description and price of product-->
                <figcaption class="t_xs_align_l">
                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">{{$r_product->product_name}}</a></h5>

                    <div class="clearfix">
                        @if($r_product->product_discount_price>0)                              
                        <p class="scheme_color f_left f_size_large m_bottom_15"><s class="default_t_color m_right_5">TK. {{$r_product->product_price}} </s>   TK.{{$r_product->product_discount_price}}</p>           
                        @else
                        <p class="scheme_color f_left f_size_large m_bottom_15">TK. {{$r_product->product_price}}</p>                          
                        @endif

                        <!--rating-->
                        <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
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
                    </div>
                    <form action="{{URL::to('/add-cart').'/'.$r_product->id}}" method="post">
                        @csrf
                        <input type="hidden" name="product_qty" min="1"  value="1" class="f_left">  
                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
                    </form>
                </figcaption>
            </figure>
            @endforeach

        </div>
        <hr class="divider_type_3 m_bottom_15">

    </div>
</div>

@endsection