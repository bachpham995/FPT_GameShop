<!-- xu ly hien thong bao loi -->
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(\Session::get('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
@endif