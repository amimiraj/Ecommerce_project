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
                        <h2 class="card-title">Edit Manufacturer</h2>
                    </div>                  
                    <!-- /.card-header -->
                    <!-- form start -->


                    <p style="color: green" class="text-center">
                        {{session()->get('m_msg')}}
                        {{session()->put('m_msg',' ')}}
                    </p>




                    <form action="{{url('/update-manufacturer/'.$manufacturer_info[0]->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <label for="exampleInputEmail1">Manufacturer Name</label>
                                    <input type="text" name="manufacturer_name" value="{{$manufacturer_info[0]->manufacturer_name}}" class="form-control" id="exampleInputEmail1" placeholder="Brand Name">
                                </div>



                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Manufacturer Image</label>
                                    <input type="file" name="manufacturer_image" class="form-control" id="exampleInputPassword1" placeholder="Image">
                                </div>

                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Manufacturer Description</label>
                                        <textarea   name="manufacturer_description" class="form-control"  placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$manufacturer_info[0]->manufacturer_description}}</textarea>
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <textarea   name="meta_title" class="form-control" value="" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$manufacturer_info[0]->meta_title}}</textarea>
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Keywords</label>
                                        <textarea type="text" name="meta_keywords" value="" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$manufacturer_info[0]->meta_keywords}}</textarea>
                                    </div>
                                </div> 

                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea  type="text" name="meta_description" class="form-control" value=""  placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$manufacturer_info[0]->meta_description}}</textarea>
                                    </div>
                                </div> 

                                <div class="form-group col-sm-6">
                                    <label>Publication Status</label>                                                                      
                                    <select class="form-control" id="typeahead" name="manufacturer_status" placeholder="Select Publication Status"  required>                        
                                        <option value="1" @if($manufacturer_info[0]->manufacturer_status==1) selected @endif >Published</option>
                                        <option value="0" @if($manufacturer_info[0]->manufacturer_status==0) selected @endif >UnPublished</option>
                                    </select>                        
                                </div>



                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer "">
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