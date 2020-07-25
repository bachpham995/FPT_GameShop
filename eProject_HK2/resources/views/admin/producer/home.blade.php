<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout')
@section('title', 'Producers')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>PRODUCERS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Producers</li>
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
                    <a class="btn btn-success btn-btn" href="{{ url('admin/producer/create') }}">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id ="producers" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Producer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($producer as $pdc)
                        <tr>
                            <td>{{ $pdc->ID }}</td>
                            <td>{{ $pdc->NAME }}</td>
                            <td class="text-left">
                                <a class="btn btn-info btn-sm" href="{{ url('admin/producer/update/'.$pdc->ID) }}">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>

                                <a class="btn btn-danger btn-sm" href="{{ url('admin/producer/delete/'.$pdc->ID) }}">
                                    <i class="fas fa-trash"></i> Delete
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
</div>
<!-- /.row -->
</section>
@endsection
@section('script-section')
<script>
    $(function() {
        $('#producers').DataTable({
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
