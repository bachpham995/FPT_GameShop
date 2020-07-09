<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                <a href="{{ url('admin/PublisherCreate') }}">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Publisher ID</th>
                            <th>Publisher Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($publisher as $pls)
                        <tr>
                            <td>{{ $pls->ID }}</td>
                            <td>{{ $pls->NAME }}</td>
                            <td class="text-right">
                                <a class="btn btn-info btn-sm" href="{{ url('admin/publisher/update'.$pls->ID) }}">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>
                                ||
                                <a class="btn btn-danger btn-sm" href="{{ url('admin/publisher/delete'.$pls->ID) }}">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Publisher ID</th>
                            <th>Publisher Name</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
