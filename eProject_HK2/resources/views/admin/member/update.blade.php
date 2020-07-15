<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout')
@section('title', 'Member')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update {{ $member->FNAME }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/member/postUpdate/'.$member->ID) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Id</label>
                                <input type="text" class="form-control" id="txt-id" name="ID" placeholder="1" value="{{ $member->ID }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Frist Name</label>
                                <input type="text" class="form-control" id="txt-name" name="FNAME" placeholder="Frist Name" value="{{ $member->FNAME }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Last Name</label>
                                <input type="text" class="form-control" id="txt-price" name="LNAME" placeholder="1" value="{{ $member->LNAME }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" rows="3" name="EMAIL" placeholder="EMAIL" value="{{ $member->EMAIL }}">
                            </div>
                            <div class="form-group">
                                <label>ADDRESS</label>
                                <input class="form-control" rows="3" name="ADDRESS" placeholder="ADDRESS" value="{{ $member->ADDRESS }}">
                            </div>
                            <div class="form-group">
                                <label>PHONE</label>
                                <input class="form-control" rows="3" name="PHONE" placeholder="PHONE" value="{{ $member->PHONE }}">
                            </div>
                            <div class="form-group">
                                <label>TYPE</label>
                                <input class="form-control" rows="3" name="TYPE" placeholder="TYPE" value="{{ $member->TYPE }}">
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
