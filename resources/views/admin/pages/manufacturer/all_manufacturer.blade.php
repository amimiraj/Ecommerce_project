<!-- Content Wrapper. Contains page content -->
@extends('admin.dashboard')

@section('main-content')

<div class="col-12">


    <div class="card">
        <div class="card-footer text-right ">
            <a href="{{url('/add-manufacturer')}}"> <button type="submit" class="btn btn-primary "><i class="fa fa-plus text-right" aria-hidden="false"></i></button></a>
        </div>

        <div class="card-header">
             <h2 class="card-title"><b>All Manufacturer</b> </h2>
        </div>
        <h4 style="color: green" class="text-center">
            {{session()->get('m_msg')}}
            {{session()->put('m_msg',' ')}}
        </h4>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>       
                        <th>Brand Name</th>
                        <th>Manufacturer Description</th>
                        <th>Manufacturer Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($all_manufacturer as $v_manufacturer)
                    <tr>
                        <td>{{$v_manufacturer->manufacturer_name}}</td>
                        <td>  {{$v_manufacturer->manufacturer_description}}  </td>
                        <td><img width="80px" src="{{asset('/storage/app/images/manufacturer/manufacturer_image/'.$v_manufacturer->manufacturer_image)}}"></td>

                        <td> 
                            @if($v_manufacturer->manufacturer_status==1)
                            <span class="badge badge-success">Published</span>

                            @endif

                            @if($v_manufacturer->manufacturer_status!=1)
                            <span class="badge badge-danger">Un Published</span>
                            @endif

                        </td>


                        <td class="project-actions text-right ">
                           
                            <a class="btn btn-info btn-sm" href="{{url('/edit-manufacturer/'.$v_manufacturer->id)}}">
                                <i class="fas fa-pencil-alt"> </i>
                                Edit
                            </a>

                            <form method="post" action="{{url('/delete-manufacturer/'.$v_manufacturer->id)}}">
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
