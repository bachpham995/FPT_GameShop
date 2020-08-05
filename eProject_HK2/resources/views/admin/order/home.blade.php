<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout')
@section('title', 'Order')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Order List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Order List</li>
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
                <table id="oss" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Order Day</th>
                            <th>Paid</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $cart)
                        <tr>
                            <td>{{ $cart->ID }}</td>
                            <td>{{$cart->getNameOfUser()}}</td>
                            <td>{{$cart->getEmailOfUser()}}</td>
                            <td>{{ $cart->ORDER_DATE }}</td>
                            <td>{{ $cart->ORDER_DATE }}</td>
                            <td class="text-left">
                                <a class="btn btn-info btn-sm" href="{{url('admin/order/detail/'.$cart->ID)}}">
                                    <i class="fas fa-pencil-alt"></i> View Detail
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
        $('#oss').DataTable({
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
