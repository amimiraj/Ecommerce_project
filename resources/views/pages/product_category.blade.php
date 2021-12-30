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
            </aside>

              <h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">All Category</h2>
              <!--products-->
            <section class="products_container a_type_2 category_grid clearfix m_bottom_25">
                <!--product item-->
                @foreach($all_category as $v_category)
                <!--product item-->
                <div class="product_item rated w_xs_full">
                    <figure class="r_corners photoframe animate_ftb long type_2 t_align_c shadow relative">
                        <!--product preview-->
                        <a href="{{URL::to('/product-category/'.$v_category->id)}}" class="d_block relative pp_wrap m_bottom_15">
                            <img src="{{URL::to('/').'/storage/app/images/category/category_cover_image/'.$v_category->category_cover_image}}" class="tr_all_hover" alt="">                   
                        </a>
                        <!--description and price of product-->
                        <figcaption>
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
                                <p class="scheme_color f_size_large m_bottom_15">{{$v_category->category_name}}</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </section>


        </div>
    </div>
</div>


@endsection



