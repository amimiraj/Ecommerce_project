@extends('master')
@section('master-content')
<!--content-->
<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-12 col-md-12 col-sm-12 m_xs_bottom_30">

                <h2 class="color_dark tt_uppercase m_bottom_25">Bill To &amp; Shipment Information</h2>
                <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 m_xs_bottom_30">
                            <h5 class="fw_medium m_bottom_15">Shipping To</h5>
                            <form action="{{URL::to('/save-shipping')}}" method="post">
                                @csrf 
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="c_name_1" class="d_inline_b m_bottom_5">Shipping Name</label>
                                        <input type="text" id="c_name_1" name="shipping_name" value="{{session()->get('customer_name')}}" class="r_corners full_width" required>
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="f_name_1" class="d_inline_b m_bottom_5 required">Shipping Email</label>
                                        <input type="text" id="f_name_1" name="shipping_email" value="{{session()->get('customer_email')}}" class="r_corners full_width" required>
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="m_name_1" class="d_inline_b m_bottom_5 required">Shipping Phone</label>
                                        <input type="text" id="m_name_1"  name="shipping_phone" class="r_corners full_width" required>
                                    </li>

                                    <li class="m_bottom_15">
                                        <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Shipping Address</label>
                                        <textarea name="shipping_address" id="notes" class="r_corners notes full_width" required></textarea>
                                    </li>

                                    <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Shipping Customer</button></li>
                                </ul>
                            </form>
                        </div>

                    </div>
                </div>

            </section>

        </div>
    </div>
</div>

@endsection