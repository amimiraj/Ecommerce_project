
<!-- Content Wrapper. Contains page content -->
@extends('admin.dashboard')

@section('main-content')

<div class="col-12">

    <div class="card">

        <div class="card-footer text-right ">
            <a href="{{url('product/create')}}"> <button type="submit" class="btn btn-primary "><i class="fa fa-plus text-right" aria-hidden="false"></i></button></a>
        </div>

        <div class="card-header">
            <h3 class="card-title">All Product</h3>
        </div>

        <h4 style="color: green" class="text-center"> {{session()->get('p_msg')}}</h4> 
        {{session()->put('p_msg',' ')}}


        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>       
                        <th>Product Name</th>
                        <th>Manufacturer </th>
                        <th>Category </th>
                        <th>Price</th>
                        <th>Discount price</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Status</th>

                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($all_product as $v_product)
                    <tr>
                        <td>{{$v_product->product_name}}</td>
                        <td>{{$v_product->manufacturer_name}}</td>
                        <td>{{$v_product->category_name}}</td>
                        <td>  {{$v_product->product_price}}  </td>
                        <td>  {{$v_product->product_discount_price}}  </td>
                        <td>
                            <img width="50px" src="{{asset('/storage/app/images/product/product_image/'.$v_product->product_img_one)}}">
                            <img width="50px" src="{{asset('/storage/app/images/product/product_image/'.$v_product->product_img_two)}}">
                            <hr>
                            <img width="50px" src="{{asset('/storage/app/images/product/product_image/'.$v_product->product_img_three)}}">
                            <img width="50px" src="{{asset('/storage/app/images/product/product_image/'.$v_product->product_img_four)}}">
                        </td>
                        <td>  {{$v_product->product_quantity}}  </td>

                        <td class="project-state">

                            @if($v_product->product_status==1)
                            <span class="badge badge-success">Published</span>

                            @endif

                            @if($v_product->product_status!=1)
                            <span class="badge badge-danger">UnPublished</span>
                            @endif

                        </td>




                        <td class="project-actions text-right ">
                            
                            <a class="btn btn-info btn-sm" href="{{url('/edit/'.$v_product->id)}}">
                                <i class="fas fa-pencil-alt"> </i>
                                Edit
                            </a>

                            <form method="post" action="{{url('/delete/'.$v_product->id)}}">
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
