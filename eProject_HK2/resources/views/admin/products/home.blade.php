<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout')
@section('title', 'All Products')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>PRODUCTS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">All Products</li>
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
                    <a class="btn btn-success btn-btn" href="{{ url('admin/products/create') }}">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="games" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Actions</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Categories</th>
                            <th class="text-center">Publishers</th>
                            <th class="text-center">Producers</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $prd)
                        <tr>
                            <td>{{ $prd->ID }}</td>
                            <td >
                                <div class="row">
                                    <a class="btn btn-warning btn-sm" title="View" href="{{ url('admin/products/view/'.$prd->ID) }}">
                                        <font style="color: white"><i class="fas fa-eye"></i></font>
                                    </a>

                                    <a class="btn btn-info btn-sm" title="Edit" href="{{ url('admin/products/update/'.$prd->ID) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a class="btn btn-danger btn-sm" title="Delete" onclick="removeNotify()" href="{{url("admin/products/delete/".$prd->ID)}}" >
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                                <div class="row">
                                    <a class="btn btn-primary btn-sm" title="Img" onclick="" href="" >
                                        <i class="fa fa-image" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-dark btn-sm" title="Cmt" onclick="" href="{{url("admin/products/comment/".$prd->ID)}}" >
                                        <i class="fas fa-comments" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </td>
                            <td>{{ $prd->NAME }}</td>
                            <td>{{$prd->getCategories() }}</td>
                            <td>{{$prd->getPublishers()}}</td>
                            <td>{{$prd->getProducers()}}</td>
                            <td>...</td>
                            <td>{{$prd->getStatus()}}</td>
                            <td>{{ $prd->PRICE." $"}}</td>

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
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    function removeNotify(){
        alertify.success('Success Remove');
    }
</script>
@endsection
@section('script-section')
<script>
    $(document).ready(function() {
        $('#games').DataTable({
            "pageLength" : 5,
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "sScrollX": "300%",
            "bScrollCollapse": true

        });
    });
</script>
@endsection
