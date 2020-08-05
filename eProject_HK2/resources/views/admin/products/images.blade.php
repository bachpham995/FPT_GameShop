<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout')
@section('title', 'Images')
@section('content')
<section class="content">
    <div class="container-fluid">
<div class="row">
    <div class="offset-md-3 col-md-6 mt-5">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Images</h3>
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
                            <th class="text-center">#</th>
                            <th class="text-center">IMAGE</th>
                            <th class="text-center">USE AS COVER</th>
                            <th class="text-center">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $img)
                        <tr>
                            <td class="text-center">{{ $img->ID }}</td>
                            <td class="text-center">
                                <img height="150px" width="120px" src="{{$img->URL}}" alt="">
                            </td>
                        <td class="text-center">{{$img->COVER==1?'Yes':'No'}}</td>
                            <td class="text-center">
                                <a class="btn btn-danger btn-sm" title="Delete" onclick="removeNotify()" href="{{url("admin/products/deleteImage/".$img->ID)}}" >
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>

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
<script>
    function removeNotify(){
        alertify.success('Success Remove');
    }
</script>
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
            "pageLength" :5,
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
    });
</script>
@endsection
