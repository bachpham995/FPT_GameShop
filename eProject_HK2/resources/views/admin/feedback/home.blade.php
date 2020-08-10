<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout')
@section('title', 'Feedback')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>FEEDBACK MESSAGE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Feedback</li>
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
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($message as $mess)
                        <tr>
                            <a href="">
                                <td>{{ $mess->ID }}</td>
                                <td>{{ $mess->NAME }}</td>
                                <td><a href="">{{ $mess->EMAIL }}</a></td>
                                <td>{{ $mess->SUBJECT }}</td>
                                <td class="text-left">
                                    <a class="btn btn-danger btn-sm" href="{{ url('admin/feedback/delete/'.$mess->ID) }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </a>
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
</div>
<!-- /.row -->
</section>
@endsection
@section('script-section')
<script>
    $(function() {
        $('#categories').DataTable({
            "pageLength" : 5,
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection
