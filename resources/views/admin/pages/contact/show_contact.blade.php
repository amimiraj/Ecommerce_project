<!-- Content Wrapper. Contains page content -->
@extends('admin.dashboard')

@section('main-content')

<div class="col-12">


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Contacts</h3>
        </div>
        <h4 style="color: green" class="text-center">
            {{session()->get('contact_msg')}}
            {{session()->put('contact_msg',' ')}}
        </h4> 

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>

                        <th>Contact ID</th>
                        <th>Contact Name</th>
                        <th>Contact Email</th>
                        <th>Contact Subject</th>
                        <th>Contact Message</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($all_contact as $v_contact)
                    <tr>
                        <td>{{$v_contact->contact_id}}</td>
                        <td>{{$v_contact->contact_name}}</td>
                        <td>{{$v_contact->contact_email}}</td>
                        <td>{{$v_contact->contact_subject}}</td>
                        <td>{{$v_contact->contact_message}}</td>
                        <td class="project-actions text-right">

                            <a class="btn btn-danger btn-sm" href="{{URL::to('/delete-contact'.'/'.$v_contact->contact_id)}}" onclick="return confirm('Are you want to delete this! ');">
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
