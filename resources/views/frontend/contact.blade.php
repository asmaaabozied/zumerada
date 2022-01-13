
@extends('master')

@section('content')


    <!--------------contact-us------------->
    <div class="container contact-us-section">
        <div class="row">

            <div class="col-lg-6 contact-form-wrap">
                <h1 class="contaht-us-title"> @lang('site.contact')</h1>
                <form class="contact-form" action="{{route('storecontact')}}" method="post">
                    @csrf
                    <div class="input-container form1-input-container">
                        <i class="fas fa-signature contact-form-icon"></i>
                        <input class="input-field" type="text" placeholder="{{trans('site.name')}}" name="name" required="">
                    </div>

                    <div class="input-container form1-input-container">
                        <i class="fa fa-envelope icon form-envelope-icon"></i>
                        <input class="input-field" type="email" placeholder="{{trans('site.email')}}" name="email" required="">
                    </div>

                    <div class="input-container form1-input-container">
                        <i class="fas fa-mobile contact-form-icon"></i>
                        <input class="input-field" type="text" placeholder="{{trans('site.phone')}}" name="phone" required="">
                    </div>

                    <textarea class="contact-input" id="subject" name="message" placeholder="اكتب رسالتك..." style="height:200px" required></textarea>

                    <div class="sign-button-container"><button type="submit" class="btn btn-default sign-in-button">@lang('site.send')</button></div>
                </form>
            </div>
            <div class="col-lg-6 contact-info">
                <div class="contact-us-info">
                    <i class="fas fa-phone"></i>
                    <a href="tel:234-567-8910">{{\App\Setting::where('slug','Phone')->first()->value ?? ''}}</a>
                </div>
                <div class="contact-us-info">
                    <i class="far fa-envelope"></i>
                    <a href="mailto:zumarada@org.com">{{\App\Setting::where('slug','Email')->first()->value ?? ''}}</a>
                </div>
                <div class="contact-us-info">
                    <i class="fas fa-fax"></i>
                    <a href="">1-234-567-8900</a>
                </div>

            </div>
        </div>
    </div>
    <!--------------contact-us------------->


@endsection
