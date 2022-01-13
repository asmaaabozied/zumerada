
@extends('master')

@section('content')


    <div class="container form2-section">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 form-container">
                <form action="{{ route('updateprofiles', $user->id) }}" method="post"  >

                    {{ csrf_field() }}

                    <div class="form2-first-line">
                        <div class="input-container form1-input-container half-form-input">
                            <i class="fas fa-user form-icon"></i>
                            <input class="input-field" type="text" placeholder="{{trans('site.first_name')}}"  name="first_name" _mstplaceholder="138164" style="direction: ltr; text-align: left;" value="{{$user->first_name}}">
                        </div>
                        <div class="input-container form1-input-container half-form-input">
                            <i class="fas fa-user form-icon"></i>
                            <input class="input-field" type="text"  name="last_name" placeholder="{{trans('site.last_name')}}" _mstplaceholder="116116" style="direction: ltr; text-align: left;"  value="{{$user->last_name}}">
                        </div>
                    </div>
                    <div class="input-container form1-input-container form2-input">
                        <i class="fa fa-envelope icon form-envelope-icon"></i>
                        <input class="input-field" type="text" placeholder="{{trans('site.email')}}" name="email"   required="" _mstplaceholder="71097" style="direction: ltr; text-align: left;">
                    </div>

                    <div class="input-container form1-input-container psw-form-wrap">
                        <i class="fas fa-lock form-icon"></i>
                        <div class="display-psw"><input class="input-field" type="password" name="password" placeholder="{{trans('site.password')}}" name="psw" id="password-field"  _mstplaceholder="120484" style="direction: ltr; text-align: left;">
                            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span></div>
                    </div>

                    <div class="input-container form2-input ng-scope" ng-app="myApp">
                        <div ng-controller="countryCtrl" class="ng-scope">

                            <div class="input-container form1-input-container form2-input">
                                <i class="fas fa-map-marker-alt form-icon"></i>

                                <select id="country-select" name="country_id" ng-options="country.name for country in countriesWithPhoneCode" class="ng-pristine ng-valid ng-touched">
                                    <option value="" class="" selected="selected">@lang('site.country')
                                    </option>
                                    @foreach(\Modules\Geography\Entities\Geography::where('parent_id',null)->get() as $key=>$country)
                                        <option  value="{{$country->id}}"   @if($user->country_id ==$country->id)}) selected @endif >{{$country->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="input-container form1-input-container form2-input">
                                <i class="fas fa-phone-alt form-icon"></i>

                                <input  name="phone" class="phone-input ng-pristine ng-untouched ng-valid" placeholder="{{trans('site.phone')}}" id="intTextBox" ng-model="phone" _mstplaceholder="208299" style="direction: ltr; text-align: left;" value="{{$user->phone}}">
                            </div>

                        </div>

                    </div>
                    <div class="container-checkbox accept-condition-wrap">
                        <input type="checkbox" id="accept-conditions" name="" value="">
                        <span class="checkmark"></span>
                        <label class="checkbox-label" for="conditions" _msthash="1815073" _msttexthash="809068" style="direction: ltr; text-align: left;"> agree to our <span _istranslated="1"> <a class="conditions-terms" href="" _istranslated="1">terms and conditions</a> </span> </label>
                    </div>

                    <div class="sign-button-container"><button type="submit" class="btn btn-default sign-in-button" _msthash="1888211" _msttexthash="94783" style="direction: ltr;">{{trans('site.edit')}}</button></div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>



@endsection
