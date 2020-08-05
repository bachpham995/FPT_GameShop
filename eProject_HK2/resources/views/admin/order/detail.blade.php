<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout')
@section('title', 'Order Detail')
@section('content')
<section class="content">
    <div class="container-fluid">
<div class="row">
    <div class="offset-md-3 col-md-6 mt-5">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    Order Detail 
                    #{{$item->first()->CART_ID." ".$item->first()->cart()->getNameOfUser()." ".$item->first()->cart()->ORDER_DATE}}
                </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <a class="btn btn-success btn-btn" onclick="history.back()">
                    <font color="white"><i class="fas fa-arrow-left"></i> Back</font>
                </a>
                <table id="games" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Discount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($item as $item)
                        <tr>
                            <td>{{$item->game()->NAME}}</td>
                            <td>{{$item->GAME_QUANTITY}}</td>
                            <td>{{$item->DISCOUNT}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.card -->
    </div>
</div>
</div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<script>
    $(document).ready(function() {
        $('#games').DataTable({
            "pageLength" : 10,
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
@endsection
