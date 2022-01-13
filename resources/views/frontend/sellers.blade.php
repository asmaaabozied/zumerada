
@extends('master')

@section('content')

    <div class="container form2-section">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 form-container">
                <form action="{{route('storesellers')}}" method="post">
                    @csrf
                    <div class="form2-first-line">
                        <div class="input-container form1-input-container half-form-input">
                            <i class="fas fa-user form-icon"></i>
                            <input class="input-field" type="text" placeholder="{{trans('site.fname')}}" name="first_name" required >
                        </div>
                        <div class="input-container form1-input-container half-form-input">
                            <i class="fas fa-user form-icon"></i>
                            <input class="input-field" type="text" placeholder="{{trans('site.lname')}}"  name="last_name" required>
                        </div>
                    </div>
                    <div class="input-container form1-input-container form2-input">
                        <i class="fa fa-envelope icon form-envelope-icon"></i>
                        <input class="input-field" type="text" placeholder="{{trans('site.email')}}" name="email" required="">
                    </div>
                    @if ($errors->has('email'))
                        <span class="form-control-feedback" style="color: red">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                    @endif

                    <div class="input-container form1-input-containrequired psw-form-wrap">
                        <i class="fas fa-lock form-icon"></i>
                        <div class="display-psw"><input class="input-field" type="password" placeholder="{{trans('site.password')}}" name="password" id="password-field" required="">
                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span></div>
                    </div>

                    <div class="input-container form2-input ng-scope" ng-app="myApp">
                        <div ng-controller="countryCtrl" class="ng-scope">

                            <div class="input-container form1-input-container form2-input">
                                <i class="fas fa-map-marker-alt form-icon"></i>
                                <select id="country-select" name="country_id" ng-options="country.name for country in countriesWithPhoneCode" class="ng-pristine ng-valid ng-touched" id="country_id">
                                    <option value="" class="" selected="selected">@lang('site.country')
                                    </option>
                                    @foreach(\Modules\Geography\Entities\Geography::where('parent_id',null)->get() as $key=>$country)
                                    <option  value="{{$country->id}}" data-id="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="input-container form1-input-container form2-input">
                                <i class="fas fa-phone-alt form-icon"></i>
{{--                                <input class="country-code"  disabled=""--}}

{{--                                       id="phone_key"--}}

{{--                                >--}}

                                <input class="phone-input ng-pristine ng-valid ng-touched" placeholder="{{trans('site.phone')}}" id="intTextBox" ng-model="phone" name="phone" required>
                            </div>


                            @if ($errors->has('phone'))
                                <span class="form-control-feedback" style="color: red">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
                            @endif

                        </div>

                    </div>
                    <div class="input-container form1-input-container form2-input">
                        <i class="fas fa-store-alt form-icon"></i>
                        <input class="input-field" type="text" placeholder="{{trans('site.store_name')}}" name="store_name" required>
                    </div>

                    <div class="input-container form1-input-container form2-input">
                        <i class="fas fa-store-alt form-icon"></i>
                        <input class="input-field" type="text" placeholder="{{trans('site.store_name_en')}}" name="store_name_en" required>
                    </div>


                    <div class="sign-button-container"><button type="submit" class="btn btn-default sign-in-button">{{trans('site.register')}}</button></div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>

@endsection


