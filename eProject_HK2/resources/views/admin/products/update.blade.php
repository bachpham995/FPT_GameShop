<div class="row">
    <div class="offset-md-3 col-md-6">
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
                        <label for="txt-name" >Name</label>
                        <input type="text" class="form-control" id="txt-name" name="NAME" placeholder="Input Name" value="{{$publisher->NAME}}">
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
