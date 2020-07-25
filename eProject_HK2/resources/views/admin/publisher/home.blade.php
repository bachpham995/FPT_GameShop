<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout')
@section('title', 'Publishers')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>PUBLISHERS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Publishers</li>
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
                    <a class="btn btn-success btn-btn" href="{{ url('admin/publisher/create') }}">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </h3>
                {{-- <a href="{{ url('admin/publisher/create') }}">Create</a> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id ="publishers" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Publisher ID</th>
                            <th>Publisher Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($publisher as $pls)
                        <tr>
                            <td>{{ $pls->ID }}</td>
                            <td>{{ $pls->NAME }}</td>
                            <td class="text-right">
                                <a class="btn btn-info btn-sm" href="{{ url('admin/publisher/update/'.$pls->ID) }}">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>

                                <a class="btn btn-danger btn-sm" href="{{ url('admin/publisher/delete/'.$pls->ID) }}">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Publisher ID</th>
                            <th>Publisher Name</th>
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
        $('#publishers').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection
