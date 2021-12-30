
@extends('admin.dashboard')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12">

                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Product</h3>
                    </div>                  
                    <!-- /.card-header -->
                    <!-- form start -->



                    <h4 style="color: green" class="text-center"> {{session()->get('p_msg')}}</h4> 
                    {{session()->put('p_msg',' ')}}


                    <form action="{{url('/product/'.$product_info->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf    
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">

                                <div class="form-group col-md-12" >
                                    <label for="typeahead">Product Name</label>
                                    <input type="text" name="product_name" value="{{$product_info->product_name}}"  class="form-control" id="" placeholder="Product Name" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <img width="50px" src="{{asset('/storage/app/images/product/product_image//'.$product_info->product_img_one)}}">                                
                                    <input type="file" name="product_img_one" id="" placeholder="" >                          
                                </div>                             
                                <div class="form-group col-md-3">
                                    <img width="50px" src="{{asset('/storage/app/images/product/product_image//'.$product_info->product_img_two)}}">                                
                                    <input type="file" name="product_img_two" id="" placeholder="" >                          
                                </div>                             
                                <div class="form-group col-md-3">
                                    <img width="50px" src="{{asset('/storage/app/images/product/product_image//'.$product_info->product_img_three)}}">                                
                                    <input type="file" name="product_img_three" id="" placeholder="" >                          
                                </div>                             
                                <div class="form-group col-md-3">
                                    <img width="50px" src="{{asset('/storage/app/images/product/product_image//'.$product_info->product_img_four)}}">                                
                                    <input type="file" name="product_img_four" id="" placeholder="" >                          
                                </div>                             




                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Manufacturer Name</label>
                                    <select class="form-control " name="manufacturer_id" required>
                                        @foreach($select_manufacturer as $v_manufacturer)                                       
                                        <option value="{{$v_manufacturer->id}}" @if($v_manufacturer->id==$product_info->manufacturer_id) selected @endif >{{$v_manufacturer->manufacturer_name}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Category Name</label>
                                    <select class="form-control" name="category_id" required>
                                        @foreach($select_category as $v_category)
                                        <option value="{{$v_category->id}}" @if($v_category->id==$product_info->category_id) selected @endif >{{$v_category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Product Price</label>
                                    <input type="text" name="product_price" value="{{$product_info->product_price}}"  class="form-control" id="exampleInputEmail1" placeholder="Product New Price" required>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label for="exampleInputEmail1">Discount Price</label>
                                    <input type="text" name="product_discount_price" value="{{$product_info->product_discount_price}}"  class="form-control" id="exampleInputEmail1" placeholder="Product Old Price">
                                </div>


                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Product Quantity</label>
                                    <input type="number" name="product_quantity" value="{{$product_info->product_quantity}}"  class="form-control" id="exampleInputEmail1" placeholder="Product Quantity" required>
                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Product Sku</label>
                                    <input type="number" name="product_sku" value="{{$product_info->product_sku}}"  class="form-control" id="exampleInputEmail1" placeholder="Product Sku" required>
                                </div>

                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Product Description</label>
                                        <textarea name="product_description" value="{{$product_info->product_description}}"  class="form-control" required placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$product_info->product_description}}</textarea>
                                    </div>
                                </div> 



                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Meta Title</label>
                                    <textarea name="meta_title" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$product_info->meta_title}}</textarea>
                                </div> 

                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Meta Keywords</label>
                                    <textarea name="meta_keywords" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$product_info->meta_keywords}}</textarea>
                                </div> 

                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$product_info->meta_description}}</textarea>
                                    </div>
                                </div> 

                                <div class="form-group col-sm-6">
                                    <label>Publication Status</label>                                                                      
                                    <select class="form-control" id="typeahead" name="product_status" placeholder="Select Publication Status"  required>                        
                                        <option value="1" @if($product_info->product_status==1) selected @endif >Published</option>
                                        <option value="0" @if($product_info->product_status==0) selected @endif >UnPublished</option>
                                    </select>                        
                                </div>
                                
                                


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</section>
@endsection