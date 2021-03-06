<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout')
@section('title', 'New Image')
@section('content')
<section class="content">
    <div class="container-fluid">
<div class="row">
    <div class="offset-md-3 col-md-6 mt-5">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Image</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/products/postCreateImage/'.$id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label >Image </label>
                        <input type="file" class="form-control" id="txt-image" name="IMAGE" accept="image/*" required>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="txt-cover">Use as the Cover </label>
                        <div class="form-control">
                            Yes <input type="radio"  id="txt-cover" name="COVER" value="1" required>
                            No <input type="radio"  id="txt-cover" name="COVER" value="0" required>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{url("admin/products/image/".$id)}}">Cancel</a>
                </div>
            </form>
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
@endsection
