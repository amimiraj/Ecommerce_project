@extends('master')
@section('master-content')

<!--breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li class="m_right_10 current"><a href="#" class="default_t_color">View cart</a></li>
        </ul>
    </div>
</section>
<!--content-->
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-12 col-md-12 col-sm-12 m_xs_bottom_30">
                <h2 class="tt_uppercase color_dark m_bottom_25">Cart</h2>
                <!--cart table-->
                <table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30">
                    <thead>
                        <tr class="f_size_large">
                            <!--titles for td-->

                            <th> Product Image &amp; Name</th>
                            <th>SKU</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>



                        @foreach($all_cart as $v_cart)
                        <tr>
                            <!--Product name and image-->
                            <td data-title="Product Image &amp; name" class="t_md_align_c">
                                <a  href="{{URL::to('/remove-cart'.'/'.$v_cart->product_id)}}" class="color_dark"><i class="fa fa-times f_size_medium m_right_5"></i></a>
                                <img width="25%" src="{{URL::to('/').'/storage/app/images/product/product_image/'.$v_cart->product_img_one}}" alt="" class="m_md_bottom_5 d_xs_block d_xs_centered">
                                <a href="" class="d_inline_b m_left_5 color_dark">{{$v_cart->product_name}}</a>

                            </td>
                            <!--product key-->
                            <td data-title="Product code">{{$v_cart->product_sku}}</td>
                            <!--product price-->
                            <td data-title="Price">
                                <p class="f_size_large color_dark">TK. {{$v_cart->unit_price}}</p>
                            </td>
                            <!--quanity-->
                            <td data-title="Quantity">
                                <form action="{{URL::to('/update-cart'.'/'.$v_cart->product_id)}}" method="post">
                                    @csrf
                                    <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark m_bottom_10">
                                        <!--<button class="bg_tr d_block f_left" data-direction="down">-</button>-->
                                        <input type="number" name="product_qty" value="{{$v_cart->product_qty}}" class="f_left">
                                        <!--<button class="bg_tr d_block f_left" data-direction="up">+</button>-->
                                    </div>
                                    <div>
                                        <button type="submit"><i class="fa fa-check f_size_medium m_right_5"></i>Update</button><br>
                                    </div>
                                </form>
                            </td>
                            <!--subtotal-->
                            <td data-title="Subtotal">
                                <p class="f_size_large fw_medium scheme_color">TK. {{(int)$v_cart->unit_price*$v_cart->product_qty}}</p>
                            </td>
                        </tr>
                        @endforeach

                        <!--prices-->
                        <tr>
                            <td colspan="4">
                                <p class="fw_medium f_size_large t_align_r t_xs_align_c">Vat Fee:</p>
                            </td>
                            <td colspan="1">
                                <p class="fw_medium f_size_large color_dark">Tk. 0.00</p>
                            </td>
                        </tr>

                        <!--total-->
                        <tr>

                            <td colspan="4" class="v_align_m d_ib_offset_large t_xs_align_l">
                                <a href="{{URL::to('/')}}"> <button class="button_type_4 r_corners bg_light_color_2 m_left_5 mw_0 tr_all_hover color_dark">Shopping Continue</button></a>
                                <a href="{{URL::to('/place-order')}}"> <button class="button_type_4 r_corners bg_light_color_2 m_left_5 mw_0 tr_all_hover color_dark">Place Order  </button>   </a>
                                <p class="fw_medium f_size_large t_align_r scheme_color p_xs_hr_0 d_inline_middle half_column d_ib_offset_normal d_xs_block w_xs_full t_xs_align_c">Grand Total:</p>
                            </td>

                            <td colspan="1" class="v_align_m">
                                <p class="fw_medium f_size_large scheme_color m_xs_bottom_10">TK. {{session()->get('total')}}

                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="tt_uppercase color_dark m_bottom_30">Terms of service</h2>
                <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                    <p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </p>
                    <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. </p>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection