@extends('master')
@section('master-content')
<div class="page_content_offset">
    <div class="container">
        <h2 class="text-center text-danger">



        </h2>
        <div class="tabs m_bottom_45">
            <!--tabs navigation-->
            <nav>
                <ul class="tabs_nav horizontal_list clearfix">
                    <li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Login</a></li>
                    <li><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Register</a></li>
                </ul>
            </nav>
            <section class="tabs_content shadow r_corners">
                <div id="tab-1">
                    <!--login form-->
                    <h5 class="fw_medium m_bottom_15">Are You Already Registered?</h5>


                    <form action="{{URL::to('/customer-login')}}" method="post">
                        @csrf                                                                  
                        <ul>
                            <li class="clearfix m_bottom_15">
                                <div class="half_column type_2 f_left">
                                    <label for="username" class="m_bottom_5 d_inline_b">Customer Email</label>
                                    <input type="email" id="username" value=" {{session()->get('customer_email')}} " name="customer_email" class="r_corners full_width m_bottom_5">

                                </div>
                                <div class="half_column type_2 f_left">
                                    <label for="pass" class="m_bottom_5 d_inline_b">Customer Password</label>
                                    <input type="password" id="pass" name="customer_password" class="r_corners full_width m_bottom_5">

                                </div>
                            </li>
                            <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Log In</button></li>
                        </ul>
                    </form>
                </div>

                <h4 style="color: red" class="text-center m_top_20"> {{session()->get('login_msg')}}</h4> 
                {{session()->put('login_msg',' ')}}
                <!----------------------------------------------------->       
                <div id="tab-2">
                    <form action="{{URL::to('/save-customer')}}" method="post">
                        @csrf
                        <ul>
                            <li class="m_bottom_25">
                                <label for="d_name" class="d_inline_b m_bottom_5 required">Customer Name</label>
                                <input type="text" id="d_name" name="customer_name" class="r_corners full_width" required="">
                            </li>


                            <li class="m_bottom_15">
                                <label for="u_email" class="d_inline_b m_bottom_5 required">Customer Email</label>
                                <input type="email" id="u_email" name="customer_email" class="r_corners full_width" required>
                            </li>
                            <li>
                                <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Customer Phone</label>
                                <input type="number" id="u_repeat_pass" name="customer_phone" class="r_corners full_width" required>
                            </li>
                            <li>
                                <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Customer Address</label>
                                <textarea name="customer_address" id="notes" class="r_corners notes full_width"></textarea>
                            </li>
                            <li class="m_bottom_15">
                                <label for="u_pass" class="d_inline_b m_bottom_5 required">Customer Password</label>
                                <input type="password" id="u_pass" name="customer_password" class="r_corners full_width" required>
                            </li>
                            <li>
                                <label for="u_repeat_pass" class="d_inline_b m_bottom_5 required">Confirm Password</label>
                                <input type="password" id="u_repeat_pass" name="confirm_password" class="r_corners full_width" required="">
                            </li>
                            <br>
                            <li><button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Registration Customer</button></li>


                        </ul>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection