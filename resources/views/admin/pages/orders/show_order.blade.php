<!-- Content Wrapper. Contains page content -->
@extends('admin.dashboard')

@section('main-content')

<div class="col-12">


    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><b>All Orders</b></h2>
        </div>
        <h4 style="color: green" class="text-center">
            {{session()->get('Order_msg')}}
            {{session()->put('Order_msg',' ')}}
        </h4>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>

                        <th>Order ID</th>

                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Shipping Name </th>
                        <th>Shipping Address</th>
                        <th>Grand Total</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($all_orders as $v_orders)
                    <tr>
                        <td>{{$v_orders->order_id}}</td>
                        <td>{{$v_orders->customer_name}}</td>
                        <td>{{$v_orders->customer_phone}}</td>
                        <td>{{$v_orders->shipping_name}}</td>
                        <td>{{$v_orders->shipping_address}}</td>
                        <td>{{$v_orders->g_total}}</td>



                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{URL::to('/order-invoice'.'/'.$v_orders->order_id)}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{URL::to('/invoice-print'.'/'.$v_orders->order_id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Print
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{URL::to('/delete-order'.'/'.$v_orders->order_id)}}" onclick="return confirm('Are you want to delete this! ');">
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
