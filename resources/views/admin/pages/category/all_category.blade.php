<!-- Content Wrapper. Contains page content -->
@extends('admin.dashboard')

@section('main-content')

<div class="col-12">


    <div class="card">
        <div class="card-footer text-right ">
            <a href="{{url('categories/create')}}"> <button type="submit" class="btn btn-primary "><i class="fa fa-plus text-right" aria-hidden="false"></i></button></a>
        </div>
        <div class="card-header">
            <h3 class="card-title"><b>All Category</b></h3>
        </div>

        <p style="color: green" class="text-center">
            {{session()->get('c_msg')}}
            {{session()->put('c_msg',' ')}}
        </p>


        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>

                        <th>Category Name</th>
                        <th>Category Cover Image</th>
                        <!--<th>Category Menu Image</th>-->
                        <th>status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($all_category as $v_category)
                    <tr>
                        <td>{{$v_category->category_name}}</td>
                        <td>
                            <img width="100px" src="{{asset('/storage/app/images/category/category_cover_image/'.$v_category->category_cover_image)}}"></img>
                        </td>
<!--                        <td>
                            <img width="100px" src="{{asset('/storage/app/images/category/category_menu_image/'.$v_category->category_menu_image)}}"></img>
                        </td>-->

                        <td class="project-state">

                            @if($v_category->category_status==1)
                            <span class="badge badge-success">Published</span>

                            @endif

                            @if($v_category->category_status!=1)
                            <span class="badge badge-danger">UnPublished</span>
                            @endif

                        </td>
                        <td class="project-actions text-right">
                           
                            <a class="btn btn-info btn-sm" href="{{URL::to('/edit-category'.'/'.$v_category->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a onclick="return confirm('Are you want to delete this! ');" type="submit" class="btn btn-danger btn-sm" href="{{URL::to('/delete-category'.'/'.$v_category->id)}}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
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
