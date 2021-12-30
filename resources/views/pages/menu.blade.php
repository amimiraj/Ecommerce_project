@extends('master')
@section('menu')

<div class="container">
    <section class="menu_wrap type_2 relative clearfix t_xs_align_c m_bottom_20">
        <!--button for responsive menu-->
        <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_15">
            <span class="centered_db r_corners"></span>
            <span class="centered_db r_corners"></span>
            <span class="centered_db r_corners"></span>
        </button>
        <!--main menu-->
        <nav role="navigation" class="f_left f_xs_none d_xs_none t_xs_align_l">	
            <ul class="horizontal_list main_menu clearfix">
                <li class="current relative f_xs_none m_xs_bottom_5"><a href="{{URL::to('/')}}" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a>
                    <!--sub menu-->

                </li>

                <li class ="relative f_xs_none m_xs_bottom_5"><a href="{{URL::to('/product-category')}}" class="tr_delay_hover color_light tt_uppercase"><b>Category</b></a>
                    <!--sub menu-->
                    <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                        <ul class="sub_menu">
                            @foreach($all_category as $v_category)
                            <li><a class="color_dark tr_delay_hover" href="{{URL::to('/product-category/'.$v_category->id)}}">{{$v_category->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="{{URL::to('/contact')}}" class="tr_delay_hover color_light tt_uppercase"><b>Contact</b></a></li>
            </ul>
        </nav>
        <!---------------------Sing Up---------------------->

        <?php
        $value = session()->get('customer_id');
        ?>
        @if(isset($value))
        <ul class="f_right horizontal_list clearfix t_align_l t_xs_align_c site_settings d_xs_inline_b f_xs_none">
            <li class="m_left_5 relative container3d" id="shopping_button">
                <a role="button" href="{{URL::to('/customer-logout')}}" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">Sign out</a>
            </li>
        </ul> 
        @else
        <ul class="f_right horizontal_list clearfix t_align_l t_xs_align_c site_settings d_xs_inline_b f_xs_none">
            <li class="m_left_5 relative container3d" id="shopping_button">
                <a role="button" href="{{URL::to('/checkout#tab-1')}}" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">Sing in</a>
            </li>
        </ul> 
        @endif
        <!--------------------------------------------------------------------CART----------------------------------------------------------------------------------------------------------------------------------->
        <ul class="f_right horizontal_list clearfix t_align_l t_xs_align_c site_settings d_xs_inline_b f_xs_none">
            <!--shopping cart-->
            <li class="m_left_5 relative container3d" id="shopping_button">


                <a role="button" href="{{URL::to('/show-cart')}}" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
                    <span class="d_inline_middle shop_icon">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="count tr_delay_hover type_2 circle t_align_c">{{session()->get('items')}}</span>
                    </span>
                    <b>TK.{{session()->get('total')}}</b>
                </a>
                <div class="shopping_cart top_arrow tr_all_hover r_corners">                  
                    <div class="f_size_medium sc_header">Recently added item(s)</div>

                    
                    
                    
                    
                    @foreach($all_cart as $v_cart)  
                    <ul>
                        <li>
                            <div class="clearfix">
                                <!--product image-->
                                <img  width="21%" class="f_left m_right_10" src="{{asset('/storage/app/images/product/product_image/'.$v_cart->product_img_one)}}" alt="">
                                <!--product description-->
                                <div class="f_left product_description">
                                    <a href="#" class="color_dark m_bottom_5 d_block">{{$v_cart->product_name}}</a>
                                    <span class="f_size_medium">Product code: {{$v_cart->product_sku}}</span>
                                </div>
                                <!--product price-->
                                <div class="f_left f_size_medium">
                                    <div class="clearfix">
                                        {{$v_cart->product_qty}} x <b class="color_dark">{{$v_cart->unit_price}}</b>
                                    </div>                
                                    <a  href="{{URL::to('/remove-cart'.'/'.$v_cart->product_id)}}" class="color_dark"><i class="fa fa-times"></i></a> 
                                </div>

                            </div>
                        </li>                                              
                    </ul>
                    <hr>
                    @endforeach
                    <div class="sc_footer t_align_c">
                        <a href="{{URL::to('/show-cart')}}" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
                        <a href="{{URL::to('/place-order')}}" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
                    </div>

                </div>
            </li>
        </ul> 

    </section>
</div>
@endsection