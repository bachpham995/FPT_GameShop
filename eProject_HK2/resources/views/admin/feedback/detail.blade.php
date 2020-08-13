<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout')
@section('title', 'Feedback')
@section('content')
    <div style="margin-left: 50px;">
        <h2 style="text-transform: uppercase;">{{$content->SUBJECT}}</h2>
        <p><strong>{{$content->NAME}}</strong> {{'<'.$content->EMAIL.'>'}}</p>
        <p>{{$content->MESSAGE}}</p>
        <hr>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Reply
        </button>
        <input type="text" id="success" value="{{ (Session::has('success'))?(Session::get('success')):'false'}}" hidden>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{ url('/admin/feedback/reply') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="uname">Email:</label>
                                <input type="text" name="email" value="{{ $content->EMAIL }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Subject:</label>
                                <input type="text" value="Mail form DevilShop" name="subject" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Message:</label>
                                <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-section')
    <script>
        window.onload = function(){
            var a = document.getElementById('success').value;
            if(a != 'false'){
                alertify.success(a);
            }
        }
    </script>
@endsection
