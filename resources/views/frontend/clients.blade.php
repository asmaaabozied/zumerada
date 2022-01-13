@extends('master')

@section('content')

    <div class="container form2-section">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 form-container">
                <form action="{{route('storeclients')}}" method="post">
                    @csrf
                    <div class="form2-first-line">
                        <div class="signup-using-wrap">
                            <button onclick=window.location.href="{{route('login.social','facebook')}}"
                                    class="signup-facebook" href="{{route('login.social','facebook')}}"><font
                                    _mstmutation="1" style="direction: rtl;">

                                    @lang('site.facebooklogin')
                                </font><i class="fab fa-facebook-f"></i>
                            </button>
                        </div>
                        <div class="signup-using-wrap">
                            <button class="signup-google"
                                    onclick=window.location.href="{{route('login.social','google')}}"
                                    href="{{route('login.social','google')}}"><font _mstmutation="1"
                                                                                    style="direction: rtl;">

                                    @lang('site.googlelogin')

                                </font><i class="fab fa-google"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form2-first-line">
                        <div class="input-container form1-input-container half-form-input">
                            <i class="fas fa-user form-icon"></i>
                            <input class="input-field" type="text" placeholder="{{trans('site.fname')}}"
                                   style="direction: rtl; text-align: start;" required name="first_name">
                        </div>
                        <div class="input-container form1-input-container half-form-input">
                            <i class="fas fa-user form-icon"></i>
                            <input class="input-field" type="text" placeholder="{{trans('site.lname')}}"
                                   style="direction: rtl; text-align: start;" required name="last_name">
                        </div>
                    </div>
                    <div class="input-container form1-input-container form2-input">
                        <i class="fa fa-envelope icon form-envelope-icon"></i>
                        <input class="input-field" type="text" placeholder="{{trans('site.email')}}" name="email"
                               required="" style="direction: rtl; text-align: start;">


                    </div>

                    @if ($errors->has('email'))
                        <span class="form-control-feedback" style="color: red">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                    @endif

                    <div class="input-container form1-input-container psw-form-wrap">
                        <i class="fas fa-lock form-icon"></i>
                        <div class="display-psw"><input class="input-field" type="password"
                                                        placeholder="{{trans('site.password')}}" name="password"
                                                        id="password-field" required=""
                                                        style="direction: rtl; text-align: start;">
                            <span toggle="#password-field"
                                  class="fa fa-fw fa-eye-slash field-icon toggle-password"></span></div>
                    </div>

                    <div class="input-container form2-input ng-scope" ng-app="myApp">
                        <div ng-controller="countryCtrl" class="ng-scope">

                            <div class="input-container form1-input-container form2-input">
                                <i class="fas fa-map-marker-alt form-icon"></i>

                                <select id="country-select" name="country_id"
                                        ng-options="country.name for country in countriesWithPhoneCode"
                                        class="ng-pristine ng-valid ng-touched">
                                    <option value="" class="" selected="selected">@lang('site.country')
                                    </option>
                                    @foreach(\Modules\Geography\Entities\Geography::where('parent_id',null)->get() as $key=>$country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="input-container form1-input-container form2-input">
                                <i class="fas fa-phone-alt form-icon"></i>
                                {{--                                <input class="country-code" value="" disabled="">--}}
                                <input class="phone-input ng-pristine ng-untouched ng-valid"
                                       placeholder="{{trans('site.phone')}}" id="intTextBox" name="phone" required>


                            </div>

                            @if ($errors->has('phone'))
                                <span class="form-control-feedback" style="color: red">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
                            @endif

                        </div>

                    </div>
                    <div class="container-checkbox accept-condition-wrap">
                        <input type="checkbox" id="accept-conditions" name="" value="">
                        <span class="checkmark"></span>
                        <label class="checkbox-label" for="conditions">
                            @lang('site.agreed on')
                            <span><a class="conditions-terms"
                                     href="{{route('pages',['terms-and-conditions'])}}">@lang('site.terms-and-conditions')</a></span>
                            @lang('site.our own')
                        </label>
                    </div>

                    <div class="sign-button-container">
                        <button type="submit" class="btn btn-default sign-in-button">
                            {{trans('site.register')}}</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
@endsection
