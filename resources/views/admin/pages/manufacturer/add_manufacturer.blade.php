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
                        <h3 class="card-title">Add Manufacturer</h3>
                    </div>                  
                    <!-- /.card-header -->
                    <!-- form start -->


                    <h4 style="color: green" class="text-center">
                        {{session()->get('m_msg')}}
                        {{session()->put('m_msg',' ')}}
                    </h4>



                    <form action="{{URL::to('/save-manufacturer')}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <label for="exampleInputEmail1">Manufacturer Name</label>
                                    <input type="text" name="manufacturer_name" class="form-control" id="exampleInputEmail1" placeholder="Manufacturer name" required>
                                </div>



                                <div class="form-group col-md-6">
                                    <label for="">Manufacturer Image</label>
                                    <input type="file" name="manufacturer_image" class="form-control" id="exampleInputPassword1" placeholder="Image" >
                                </div>

                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Manufacturer Description</label>
                                        <textarea name="manufacturer_description" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <textarea name="meta_title" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Keywords</label>
                                        <textarea name="meta_keywords" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div> 

                                <div class="form-group col-sm-6">
                                    <label>Publication Status</label>                                                                      
                                    <select class="form-control" id="typeahead" name="manufacturer_status" placeholder="Select Publication Status"  required>                        
                                        <option value="1" >Published</option>
                                        <option value="0" >UnPublished</option>
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