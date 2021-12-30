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
                        <h3 class="card-title">Edit Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <p style="color: green" class="text-center">
                        {{session()->get('msg')}}
                        {{session()->put('msg',' ')}}
                    </p>



                    <form action="{{url('/categories/'.$select_category[0]->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" name="category_name" value="{{$select_category[0]->category_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required="">
                                    <input type="hidden" name="id" value="{{$select_category[0]->id}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputFile">Category Cover Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="category_cover_image" class="custom-file-input" id="exampleInputFile">
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
                                        <textarea name="category_description" class="" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$select_category[0]->category_description}}</textarea>
                                    </div>
                                </div> 

                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Meta Title</label>
                                    <textarea name="meta_title" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$select_category[0]->meta_title}}</textarea>
                                </div> 

                                <div class="form-group col-md-6" >
                                    <label for="typeahead">Meta Keywords</label>
                                    <textarea name="meta_keywords" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$select_category[0]->meta_keywords}}</textarea>
                                </div> 

                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" class="form-control" placeholder="Place some text here" style="width: 100%; font-size: 14px; border: 1px solid #dddddd; padding: 10px;">{{$select_category[0]->meta_description}}</textarea>
                                    </div>
                                </div> 
                                
                                
                                <div class="form-group col-md-6" >
                                    <label for="exampleInputEmail1">Select Category Status</label>
                                    
                                    <select class="form-control" name="category_status">

                                        <option value="1" @if($select_category[0]->category_status==1) selected @endif> Publish </option>

                                        <option value="0" @if($select_category[0]->category_status==0) selected @endif> UnPublish </option>

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