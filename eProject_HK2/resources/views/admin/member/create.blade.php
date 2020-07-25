<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout')
@section('title', 'Member')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6 mt-5">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Member</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/member/postCreateMember') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">First Name</label>
                                <input type="text" class="form-control" id="txt-fname" name="FNAME" placeholder="FNAME">
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Last Name</label>
                                <input type="text" class="form-control" id="txt-lname" name="LNAME" placeholder="LNAME">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Email</label>
                                <input type="text" class="form-control" id="txt-email" name="EMAIL" placeholder="EMAIL">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">ADDRESS</label>
                                <input type="text" class="form-control" id="txt-address" name="ADDRESS" placeholder="ADDRESS">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">PHONE</label>
                                <input type="text" class="form-control" id="txt-phone" name="PHONE" placeholder="PHONE">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">TYPE</label>
                                <input type="text" class="form-control" id="txt-type" name="TYPE" placeholder="TYPE">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
