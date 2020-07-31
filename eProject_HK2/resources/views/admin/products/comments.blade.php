<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout')
@section('title', 'comments')
@section('content')
<section class="content">
    <div class="container-fluid">
<div class="row">
    <div class="offset-md-3 col-md-6 mt-5">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Comments</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <table id="games" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">User</th>
                            <th class="text-center">DESCRIPTION</th>
                            <th class="text-center">RATING</th>
                            <th class="text-center">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $cmt)
                        <tr>
                            <td>{{ $cmt->ID }}</td>
                            <td>{{$cmt->User()}}</td>
                            <td>{{$cmt->DESCRIPTION}}</td>
                            <td>{{$cmt->RATING}}</td>
                            <td class="text-center">

                                <a class="btn btn-danger btn-sm" title="Delete" onclick="removeNotify()" href="{{url("admin/products/deleteComment/".$cmt->ID)}}" >
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
