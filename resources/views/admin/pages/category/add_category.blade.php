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
                        <h3 class="card-title">Add Category</h3>
                    </div>
                    <!-- /.card-header -->

                    <p style="color: green" class="text-center">
                        {{session()->get('c_msg')}}
                        {{session()->put('c_msg',' ')}}
                    </p>


                    <!-- form start -->
                    <form action="{{url('categories')}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputFile">Category Cover Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="category_cover_image" class="custom-file-input" id="exampleInputFile" required="">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Category Description</label>
                                        <textarea name="category_description" class="" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div> 
                                <div class="form-group col-md-6" >
                                    <label for="exampleInputEmail1">Select Category Status</label>

                                    <select class="form-control" name="category_status">

                                        <option value="1"> Publish </option>

                                        <option value="0"> UnPublish </option>

                                    </select>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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