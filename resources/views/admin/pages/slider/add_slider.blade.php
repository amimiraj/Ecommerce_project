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
                        <h3 class="card-title">Add Slider</h3>
                    </div>
                    <!-- form start -->
                    <form action="{{url('sliders/store')}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="row">

                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Slider Title</label>
                                    <input type="text" name="slider_title" class="form-control" id="exampleInputPassword1" required="">
                                </div>
<!--                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Slider Text</label>
                                    <input type="text"  name="slider_text" value="Slider Text" class="form-control" id="exampleInputPassword1" >
                                </div>-->
                                <div class="form-group col-md-12">
                                    <label for="exampleInputFile">Slider Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="slider_image" class="custom-file-input" id="exampleInputFile" required="">
                                            <label class="custom-file-label" for="">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>        

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Slider Status</label>
                                    <select class="form-control" name="slider_status">
                                        <option>Active</option>
                                        <option>Inactive</option>
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