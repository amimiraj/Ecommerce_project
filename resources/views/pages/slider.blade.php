
@extends('master')
@section('slider')

<!--slider -->

<section class="container">
    <div class="row clearfix">
        <!--slider-->
        <div class="col-lg-12 col-md-12 col-sm-12 m_xs_bottom_30">
            <div class="flexslider animate_ftr long">
                <ul class="slides">
                    @if (!empty($slide_table[0]->slider_image))
                    <li>
                        <img  src="{{URL::to('/').'/storage/app/images/slider/slider_image/'.$slide_table[0]->slider_image}}" alt="" data-custom-thumb="">                        
                    </li>    @endif
                    @if (!empty($slide_table[1]->slider_image))
                    <li>
                        <img src="{{URL::to('/').'/storage/app/images/slider/slider_image/'.$slide_table[1]->slider_image}}" alt="" data-custom-thumb="">                      
                    </li>    @endif
                    @if (!empty($slide_table[2]->slider_image))
                    <li>
                        <img src="{{URL::to('/').'/storage/app/images/slider/slider_image/'.$slide_table[2]->slider_image}}" alt="" data-custom-thumb="">                       
                    </li>     @endif    
                    @if (!empty($slide_table[3]->slider_image))
                    <li>
                        <img src="{{URL::to('/').'/storage/app/images/slider/slider_image/'.$slide_table[3]->slider_image}}" alt="" data-custom-thumb="">                       
                    </li>@endif
                    @if (!empty($slide_table[4]->slider_image))
                    <li>
                        <img src="{{URL::to('/').'/storage/app/images/slider/slider_image/'.$slide_table[4]->slider_image}}" alt="" data-custom-thumb="">                       
                    </li> @endif
                    
                </ul>
            </div>
        </div>

    </div>
</section>

@endsection
