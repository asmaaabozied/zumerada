@extends('master')

@section('content')

    <div class="container payment-page">
        <div class="row">
            <div class="col-lg-7 payment-form1">
                <form>
                    <h3 class="payment-title" _msthash="1271686" _msttexthash="166244" style="direction: ltr; text-align: left;">@lang('site.payment')</h3>
                    <p _msthash="1223196" _msttexthash="261365" style="direction: ltr; text-align: left;">@lang('site.invoice details')</p>
                    <div class="form-line">
                        <div class="form-group">
                            <label class="form1-label" for="first-name" _msthash="2217943" _msttexthash="138164" style="direction: ltr; text-align: left;">{{trans('site.fname')}}</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label class="form1-label" for="last-name" _msthash="2218190" _msttexthash="116116" style="direction: ltr; text-align: left;">{{trans('site.lname')}}</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="form-line">
                        <div class="form-group">
                            <label class="form1-label" for="phone-number" _msthash="2218268" _msttexthash="208299" style="direction: ltr; text-align: left;">{{trans('site.phone')}}</label>
                            <input type="number">
                        </div>
                        <div class="form-group">
                            <label class="form1-label" for="email" _msthash="2218515" _msttexthash="71097" style="direction: ltr; text-align: left;">{{trans('site.email')}}</label>
                            <input type="email">
                        </div>
                    </div>
                    <div class="form-line">
                                                <div class="form-group form-group-full-width">
                                                    <label class="form1-label" for="zip-code" _msthash="2218918" _msttexthash="82394" style="direction: ltr; text-align: left;">{{trans('site.code')}}</label>
                                                    <input type="number">
                                                </div>
                    </div>
                    <div class="form-line">



                        <div class="form-group">
                            <label class="form1-label" for="city" _msthash="2219165" _msttexthash="49231" style="direction: ltr; text-align: left;">{{trans('site.city')}}</label>
                            <div class="custom-select1" _msthidden="18">
                                <select name="city_id" class="location" _msthidden="9">
{{--                                    <option value="0" selected=""> @lang('site.select')</option>--}}
                                    @foreach(\Modules\Geography\Entities\Geography::where('parent_id','!=',null)->get() as $city)
                                    <option value="{{$city->id}}" _msthash="3515993" _msttexthash="925951" _msthidden="1">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                <div class="select-selected"></div><div class="select-items select-hide" _mstvisible="0"><div _msthash="2980952" _msttexthash="60983" _mstvisible="1" style="direction: ltr; text-align: left;">aruba</div><div _msthash="2980953" _msttexthash="156130" _mstvisible="1" style="direction: ltr; text-align: left;">azerbaijan</div><div _msthash="2980954" _msttexthash="95069" _mstvisible="1" style="direction: ltr; text-align: left;">armenia</div><div _msthash="2980955" _msttexthash="62842" _mstvisible="1" style="direction: ltr; text-align: left;">spain</div><div _msthash="2980956" _msttexthash="137241" _mstvisible="1" style="direction: ltr; text-align: left;">australia</div><div _msthash="2980957" _msttexthash="181818" _mstvisible="1" style="direction: ltr; text-align: left;">afghanistan</div><div _msthash="2980958" _msttexthash="92638" _mstvisible="1" style="direction: ltr; text-align: left;">albania</div><div _msthash="2980959" _msttexthash="98865" _mstvisible="1" style="direction: ltr; text-align: left;">germany</div><div _msthash="2980960" _msttexthash="344305" _mstvisible="1" style="direction: ltr; text-align: left;">antigua and barbuda</div></div></div>
                        </div>

                        <div class="form-group">
                            <label class="form1-label" for="state" _msthash="2218840" _msttexthash="94913" style="direction: ltr; text-align: left;">{{trans('site.country')}}</label>
                            <div class="custom-select1" _msthidden="18">
                                <select name="country_id" class="location" _msthidden="9">

                                    @foreach(\Modules\Geography\Entities\Geography::where('parent_id','=',null)->get() as $country)
                                        <option value="{{$country->id}}" _msthash="3515993" _msttexthash="925951" _msthidden="1">{{$country->name}}</option>
                                    @endforeach

                                </select>
                                <div class="select-selected"></div><div class="select-items select-hide" _mstvisible="0"><div _msthash="2980497" _msttexthash="60983" _mstvisible="1">aruba</div><div _msthash="2980498" _msttexthash="156130" _mstvisible="1">azerbaijan</div><div _msthash="2980499" _msttexthash="95069" _mstvisible="1">armenia</div><div _msthash="2980500" _msttexthash="62842" _mstvisible="1">spain</div><div _msthash="2980501" _msttexthash="137241" _mstvisible="1">australia</div><div _msthash="2980502" _msttexthash="181818" _mstvisible="1">afghanistan</div><div _msthash="2980503" _msttexthash="92638" _mstvisible="1">albania</div><div _msthash="2980504" _msttexthash="98865" _mstvisible="1">germany</div><div _msthash="2980505" _msttexthash="344305" _mstvisible="1">antigua and barbuda</div></div></div>
                        </div>
                    </div>
                    <div class="form-line">
                        <div class="form-group form-group-full-width">
                            <label class="form1-label" for="first-name" _msthash="2219243" _msttexthash="97565" style="direction: ltr; text-align: left;">{{trans('site.address')}}</label>
                            <input type="text">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5 payment-form2">
                <div class="form2-holder">
                    <div>
                        <h3 class="payment-title" _msthash="1549704" _msttexthash="188149">Payment Info.</h3>
                        <p class="payment-methods" _msthash="1496014" _msttexthash="258297">Payment Methods</p>
                        <div>
                            <label class="container-payment"><font _mstmutation="1" _msthash="2138474" _msttexthash="258297">Cash on Delivery
                                </font><input type="radio" checked="checked" name="radio">
                                <span class="checkmark checkmark-payment"></span>
                            </label>
                            <label class="container-payment"><font _mstmutation="1" _msthash="2138643" _msttexthash="147888">Credit Card
                                </font><input type="radio" checked="checked" name="radio">
                                <span class="checkmark checkmark-payment"></span>
                            </label>
                        </div>
                        <div class="form-group from2-group">
                            <label class="form2-label" for="name-on-card" _msthash="2138721" _msttexthash="160927">Name on Card:</label>
                            <input class="form2-inputt" type="text" id="name-on-card">
                        </div>
                        <div class="form-group from2-group credit-number">
                            <label class="form2-label" for="cardnumber" _msthash="2138968" _msttexthash="156169">Card number</label>
                            <input class="form2-inputt" id="cardnumber" type="text" pattern="[0-9]{16,19}" maxlength="19" placeholder="8888 8888 8888 8888" _mstplaceholder="168896" style="text-align: left;">
                            <img class="visa-icon" src="{{asset('frontend/img/visa-card.png')}}">
                            <img class="mastercard-icon" src="{{asset('frontend/img/mastercard_PNG23.png')}}">
                        </div>
                        <div class="card-exp-cvv">
                            <div class="input-group crdit-card-input-group">
                                <label class="form2-label" for="expiry-date" _msthash="2574936" _msttexthash="153465">Expiry Date</label>
                                <input class="form2-inputt" type="text" id="exp" name="expdate" placeholder="MM/YY" minlength="5" maxlength="5" _mstplaceholder="44811" style="text-align: left;">
                            </div>
                            <div class="input-group crdit-card-input-group">
                                <label class="form2-label" for="cvv" _msthash="2575183" _msttexthash="25103">CVV</label>
                                <input class="form2-inputt" type="password" name="cvv" placeholder="●●●" minlength="3" maxlength="3" _mstplaceholder="3019848" style="text-align: left;">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn confirm-credit-card" _msthash="1452698" _msttexthash="94991">Confirm</button>

                </div>

            </div>
        </div>

    </div>





@endsection
