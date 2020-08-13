@extends('layout.layout')
@section('title', 'Contact')
@section('page-name', 'Contact')
@section('content')

<div class="contact">
    <div class="contact-header">
        <h1 class="text-center">CONTACT US</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
            <div class="contact_widget">
                <span><i class="fa fa-map-marker icon-contact"></i></span>
                <h4>Address</h4>
                <p>590 Cách Mạng Tháng Tám, Phường 11, <br>Quận 3, Thành phố Hồ Chí Minh, Việt Nam</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
            <div class="contact_widget">
                <span><i class="fa fa-phone-square icon-contact"></i></span>
                <h4>Phone</h4>
                <p>+84-8888-6868</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
            <div class="contact_widget">
                <span><i class="fa fa-envelope-o icon-contact"></i></span>
                <h4>Email</h4>
                <p>company@devilshop.com.vn</p>
            </div>
        </div>
    </div>
    
    <iframe class="col-lg-12 col-md-12 col-sm-12 map-contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.322629018092!2d106.66391391440908!3d10.786583192314634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech%20Computer%20Education%20HCM!5e0!3m2!1svi!2s!4v1596132764796!5m2!1svi!2s" width="800px" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <form role="form" id="contact-form" class="contact-form" action="{{ url('postMessage') }}" method="POST">
        @csrf
        <h2 class="text-center">Leave Message</h2>
        @if ($errors->has('name'))
            <p class="text-center" style="color: white; background-color:red"">{{$errors->first('name')}}</p>
        @endif
        @if ($errors->has('email'))
            <p class="text-center" style="color: white; background-color:red">{{$errors->first('email')}}</p>
        @endif
        @if ($errors->has('subject'))
            <p class="text-center" style="color: white; background-color:red"">{{$errors->first('subject')}}</p>
        @endif
        @if ($errors->has('message'))
            <p class="text-center" style="color: white; background-color:red"">{{$errors->first('message')}}</p>
        @endif
        <input id='message' value="{{(Session::has('success'))?(Session::get('success')):'false'}}" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="E-mail">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" autocomplete="off" placeholder="Subject">
                </div>
            </div>
        </div>
        <div class="row">
              <div class="col-md-12">
              <div class="form-group">
                <textarea class="form-control textarea" rows="10" name="message" placeholder="Message"></textarea>
              </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn main-btn">Send a message</button>
        </div>
        </div>
    </form>
</div>
@endsection

@section('script-section')
    <script>
        window.onload = function(){
            var message = document.getElementById('message').value;
            if(message != 'false'){
                alertify.success(message);
            }
        }
    </script>
@endsection
