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
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('sliders/update/'.$slider_info[0]->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="row">
                             
                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Slider Title</label>
                                    <input type="text" name="slider_title" value="{{$slider_info[0]->slider_title}}" class="form-control" id="exampleInputPassword1" >
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="exampleInputFile">Slider Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="slider_image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>        
                                
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Slider Status</label>
                                    <select class="form-control" name="slider_status">
                                        <option @if($slider_info[0]->slider_status == 'Active') selected @endif>Active</option>
                                        <option @if($slider_info[0]->slider_status == 'Inactive') selected @endif>Inactive</option>
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