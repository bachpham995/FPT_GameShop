<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout')
@section('title', 'ADMIN')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>GAME</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                {{-- <a href="{{ url('admin/publisher/create') }}">Create</a> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>CATEGORIES</th>
                            <th>DESCRIPTION</th>
                            <th>RATING</th>
                            <th>STATUS</th>
                            <th>PUBLISHER</th>
                            <th>PRODUCERS</th>
                            <th>REQUIREMENT</th>
                            <th>PRICE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $prd)
                        <tr>
                            <td>{{ $prd->ID }}</td>
                            <td>{{ $prd->NAME }}</td>
                            <td>{{$prd->getCategories()}}</td>
                            <td>{{ substr($prd->DESCRIPTION,0,100)."..."  }}</td>
                            <td>{{ $prd->RATING }}</td>
                            <td>{{ $prd->STATUS }}</td>
                            <td>{{$prd->getPublishers()}}</td>
                            <td>{{$prd->getProducers()}}</td>
                            <td></td>
                            <td>{{ $prd->PRICE }}</td>
                            <td class="text-right">
                                <a class="btn btn-info btn-sm" href="{{ url('admin/products/update/'.$prd->ID) }}">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>

                                <a class="btn btn-danger btn-sm" href="{{ url('admin/products/delete/'.$prd->ID) }}">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th>Publisher ID</th>
                            <th>Publisher Name</th>
                            <th></th>
                        </tr>
                    </tfoot> --}}
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
        $('#product').DataTable({
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
