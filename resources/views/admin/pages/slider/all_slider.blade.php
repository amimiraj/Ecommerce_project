<!-- Content Wrapper. Contains page content -->
@extends('admin.dashboard')

@section('main-content')

<div class="col-12">

    <div class="card">

        <div class="card-footer text-right ">
            <a href="{{url('sliders/create')}}"> <button type="submit" class="btn btn-primary "><i class="fa fa-plus text-right" aria-hidden="false"></i></button></a>
        </div>


        <div class="card-header">
            <h3 class="card-title">All Slider</h3>
        </div>

        <h4 style="color: green" class="text-center"> {{session()->get('slide_add_msg')}}</h4> 
        {{session()->put('slide_add_msg','  ')}}
        <h4 style="color: green" class="text-center"> {{session()->get('slide_update_msg')}}</h4> 
        {{session()->put('slide_update_msg','  ')}}


        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>       
                        <th>Slider Title</th>
                        <!--<th>Slider Text</th>-->
                        <th>Slider Image</th>
                        <th>Slider Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($all_slider as $v_slider)
                    <tr>
                        <td>{{$v_slider->slider_title}}</td>
                        <!--<td>  {{$v_slider->slider_text}}  </td>-->
                        <td><img width="80px" src="{{asset('/storage/app/images/slider/slider_image/'.$v_slider->slider_image)}}"></td>
                        <td class="project-state">       
                            @if($v_slider->slider_status == 'Active') 
                            <span class="badge" badge-success >Active</span>
                            @else
                            <span class="badge" badge-danger >Inactive</span>
                            @endif
                        </td>
                        <td class="project-actions text-right">

                            <a class="btn btn-info btn-sm" href="{{url('sliders/edit/'.$v_slider->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form method="post" action="{{url('sliders/delete/'.$v_slider->id)}}">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you want to delete this! ');" type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
@endsection
