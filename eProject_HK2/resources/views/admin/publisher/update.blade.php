@extends('admin.layout')
@section('title', 'Edit Publisher')
@section('content')
<section class="content">
    <div class="container-fluid">
<div class="row">
    <div class="offset-md-3 col-md-6 mt-5">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Publisher</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ url("admin/publisher/postUpdate/".$publisher->ID) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="txt-name" >ID</label>
                        <input type="text" class="form-control" id="txt-name" name="NAME" placeholder="Input Name" value="{{$publisher->ID}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="txt-name" >Name</label>
                        <input type="text" class="form-control" id="txt-name" name="NAME" placeholder="Input Name" value="{{$publisher->NAME}}" required >
                        @if(isset($validate))
                        <strong style="color: red" > {{ $validate ?? '' }}</strong>
                        @endif
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-danger" onclick="history.back()">Cancel</button>
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
<script>
$('button#update').click(function(){
    if(confirm('Are you sure to update Publisher')) {
        return true;
    }
    return false;
});
</script>
@endsection
