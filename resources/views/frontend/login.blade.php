
@extends('master')

@section('content')

    <div class="container form-section">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 form-container">
                <form action="{{ route('ckecklogin') }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    @include('partials._errors')
                    <div class="input-container form1-input-container">
                        <i class="fa fa-envelope icon form-envelope-icon"></i>
                        <input class="input-field" type="text" placeholder="{{trans('site.email')}}" name="email" required="" _mstplaceholder="71097" style="direction: ltr; text-align: left;">
                    </div>

                    <div class="input-container form1-input-container">
                        <i class="fas fa-lock form-lock-icon"></i>
                        <input class="input-field" type="password" placeholder="{{trans('site.password')}}" name="password" required="" _mstplaceholder="120484" style="direction: ltr; text-align: left;">
                    </div>
                    <div class="form-check form1-checkbox-wrap">
                        <input class="form-check-input form1-checkbox" id="checkbox1" type="checkbox">
                        <label class="form-check-label remember-psw" for="checkbox1" _msthash="1814410" _msttexthash="519649" style="direction: ltr; text-align: left;"> remind me of the password. </label>
                    </div>

                    <div class="sign-button-container"><button type="submit" class="btn btn-default sign-in-button" _msthash="1887951" _msttexthash="115167" style="direction: ltr;">{{trans('site.login')}}</button></div>
                </form>
                <div class="text-center" style="direction: ltr;">
                    <div class="sign-up-forget-psw-container">
                        <p class="dont-have-account" _msthash="1496170" _msttexthash="510588" style="direction: ltr;"> you don't have an account? </p>
                        <div class="signups-links">
                            <a class="a-green" href="{{route('clients')}}" _msthash="1863849" _msttexthash="469105" style="direction: ltr;">{{trans('site.Customer registration')}}</a>
                            <a class="a-green" href="{{route('sellers')}}" _msthash="1863966" _msttexthash="287729" style="direction: ltr;">@lang('site.Merchant Registration')</a></div></div>
{{--                    <a class="a-green" href="#" _msthash="973778" _msttexthash="797771">have you forgotten the password?</a>--}}
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>

@endsection
