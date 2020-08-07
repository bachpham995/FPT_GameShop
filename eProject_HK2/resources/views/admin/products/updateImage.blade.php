<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout')
@section('title', 'Edit Image')
@section('content')
<section class="content">
    <div class="container-fluid">
<div class="row">
    <div class="offset-md-3 col-md-6 mt-5">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Image</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/products/postUpdateImage/'.$image->ID) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label >Old Image </label>
                        {{-- <div>{{dd($image->ImageName())}}</div> --}}
                        <input readonly type="text" value="{{$image->ImageName()}}" class="form-control" id="txt-image" accept="image/*" required>
                        <label >New Image </label>
                        {{-- <div>{{dd($image->ImageName())}}</div> --}}
                        <input type="file" class="form-control" id="txt-image" name="IMAGE" accept="image/*" >
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="txt-cover">Use as the Cover </label>
                        <div class="form-control">
                            Yes <input type="radio" @if($image->COVER == 1) checked @endif id="txt-cover" name="COVER" value="1" required>
                            No <input type="radio" @if($image->COVER == 0) checked @endif id="txt-cover" name="COVER" value="0" required>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{url("admin/products/image/".$image->GAME_ID)}}">Cancel</a>
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
