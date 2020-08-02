<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('supervisor.layout')
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
                    <form role="form" action="{{ url('supervisor/member/postCreateMember') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-first-name">First Name</label>
                                <input type="text" class="form-control" id="txt-fname" name="FNAME" value="{{ $regInfo->firstName }}" placeholder="FNAME"
                                title="Firstname must have only words and space, at least 3  characters, at max 40 characters."
                                pattern="[a-zA-Z\s]{3,40}" maxlength="40" required
                                >
                            </div>
                            <div class="form-group">
                                <label for="txt-last-name">Last Name</label>
                                <input type="text" class="form-control" id="txt-lname" name="LNAME" value="{{ $regInfo->lastName }}" placeholder="LNAME"
                                title="Lastname must have only words and space, at least 3  characters, at max 40 characters."
                                pattern="[a-zA-Z\s]{3,40}" maxlength="40" required
                                >
                            </div>
                            <div class="form-group">
                                <label for="txt-email">Email</label>
                                <input type="text" class="form-control" id="txt-email" name="EMAIL" value="{{ $regInfo->email }}" placeholder="EMAIL"
                                title="Email must have at least 3 characters before “@”, + “@”, + at least 3 character after “@”, total at max 100 characters, not duplicatied."
                                pattern="[a-zA-Z0-9.]{3,}@[a-zA-Z0-9]{3,}\.[a-zA-Z]{3,}" maxlength="100" required>
                                @if(isset($invalidEmail))
                                    <strong> {{ $invalidEmail ?? '' }}</strong>
                                @endif
                                
                            </div>
                            <div class="form-group">
                                <label for="txt-address">ADDRESS</label>
                                <input type="text" class="form-control" id="txt-address" name="ADDRESS" value="{{ $regInfo->address }}" placeholder="ADDRESS"
                                title="Address must have at least 15 characters, at max 150 characters."
                                minlength="15"
                                maxlength="150" required>
                            </div>
                            <div class="form-group">
                                <label for="txt-phone">PHONE</label>
                                <input type="text" class="form-control" id="txt-phone" name="PHONE" value="{{ $regInfo->phone }}" placeholder="PHONE"
                                title="Phone number must have only digits, at least 7 digits, at max 15 digits."
                                pattern="\d{7,15}" maxlength="15" required>
                            </div>
                            <div class="form-group">
                                <label for="txt-type">TYPE</label>
                                <select name="TYPE" id="TYPE">
                                    <option value="1">Admin</option>
                                    <option value="2">Client</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txt-pass">PASSWORD</label>
                                <input type="password" id="id_account_pass" name="PASSWORD"  class="form-control"
                                placeholder="Password"
                                title="Password must have at least 8 characters, including characters and digits, at least one uppercase words, one number and total at max 20 characters."
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" maxlength="20" required>
                            </div>
                            <div class="form-group">
                                <label for="">CONFIRM PASSWORD</label>
                                <input type="password" id="id_account_confirm_pass" name="txtAccountConfirmPass" class="form-control"
                                placeholder="Password"
                                title="Password must have at least 8 characters, including characters and digits, at least one uppercase words, one number and total at max 20 characters."
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" maxlength="20" required>
                                @if(isset($invalidPass))
                                    <strong> {{ $invalidPass ?? '' }}</strong>
                                @endif
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
