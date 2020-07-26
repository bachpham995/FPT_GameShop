<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('supervisor.layout')
@section('title', 'Members')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>MEMBERS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Members</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a class="btn btn-success btn-btn" href="{{ url('supervisor/member/create') }}">
                            <i class="fas fa-plus"></i> Add
                        </a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="members" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $u)
                            <tr>
                                <td>{{ $u->ID }}</td>
                                <td>{{ $u->FNAME }}</td>
                                <td>{{ $u->LNAME }}</td>
                                <td>{{ $u->EMAIL }}</td>
                                <td>{{ $u->ADDRESS }}</td>
                                <td>{{ $u->PHONE }}</td>
                                <td>{{ $u->UserType() }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="{{ url('supervisor/member/update/'.$u->ID) }}" @if($u->TYPE == 0) hidden @endif>
                                        <i class="fas fa-pencil-alt" id="btnEdit"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ url('supervisor/member/delete/'.$u->ID) }}" @if($u->TYPE == 0) hidden @endif>
                                        <i class="fas fa-trash" id="btnDelete"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>User ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
@section('script-section')
<script>
    $(function() {
        $('#members').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 5
        });

        // if($('u.UserType') == 0){
        //     document.getElementById("btnEdit").disabled = true; 
        //     document.getElementById("btnDelete").disabled = true; 
        // }
    });

</script>
@endsection
