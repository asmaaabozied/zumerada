
@extends('master')

@section('content')



    <div class="container-fluid tabs-section">
        <div class="tabs-section row">
            <div class="tabs-container col-3">
                <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'mystore')" id="defaultOpen" _msthash="178867" _msttexthash="48828" style="direction: ltr;">@lang('site.shop')</button>
                    <button class="tablinks" onclick="openCity(event, 'addproduct')" _msthash="1452360" _msttexthash="183339" style="direction: ltr;"> @lang('site.create') @lang('site.products')</button>
                    <button class="tablinks" onclick="openCity(event, 'acc-settings')" _msthash="1452542" _msttexthash="298935" style="direction: ltr;">@lang('site.profile')</button>
                    <button class="tablinks" onclick="openCity(event, 'myorders')" _msthash="1452724" _msttexthash="342056" style="direction: ltr;">@lang('site.orders')</button>
{{--                    <button class="tablinks" onclick="openCity(event, 'orders-to-me')" _msthash="1452906" _msttexthash="367406" style="direction: ltr;">orders from my store</button>--}}
                </div>
            </div>
            <div class="tabs-content-container col-9">
                <div id="mystore" class="tabcontent" style="display: block;">
                    <div class="my-store-inner">
                        <div class="col-lg-9 products-row-1">
                            <div class="row products-row-wrap">
                                @foreach(\App\Product::where('family_id',auth()->user()->id)->get() as $product)
                                <div class="col-lg-4">
                                    <div class="product-card" onclick="window.location={{route('showproduct',$product->id)}}">
                                        <div class="product-card-img" style="background-image: url({{asset('uploads/'.$product->image)}})">
                                            <a class="favouritess" id="favouritess{{$product->id}}" data-id="{{$product->id}}"><i class=" @if($product->favorites) fas @else far @endif fa-heart slide__heart "></i></a>

                                        </div>
                                        <div class="product-card-info">
                                            <h3 class="product-name" _msthash="1729169" _msttexthash="181701" style="direction: ltr;">
                                                <a href="{{route('showproduct',$product->id)}}">
                                                {{$product->name ?? ''}}
                                                </a>

                                            </h3>
                                            <div class="rating rating2" style="direction: ltr;">
                                                <font _mstmutation="1" _msthash="1801007" _msttexthash="5693805"><a href="#5" title="Give 5 stars" _mstmutation="1">★</a>
                                                    <a href="#4" title="Give 4 stars" _mstmutation="1">★</a>
                                                    <a href="#3" title="Give 3 stars" _mstmutation="1">★</a>
                                                    <a href="#2" title="Give 2 stars" _mstmutation="1">★</a>
                                                    <a href="#1" title="Give 1 star" _mstmutation="1">★</a></font>
                                            </div>
                                            <h3 class="price" _msthash="1729429" _msttexthash="38038">{{$product->showPrice()}}</h3>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>

                <div id="addproduct" class="tabcontent" style="display: none;" _mstvisible="0">
                    <div class="add-product-inner col-6" _mstvisible="1">
                        <form action="{{route('addproducts')}}" _mstvisible="2" method="post" enctype="multipart/form-data">
@csrf

                            @foreach (config('translatable.locales') as $locale)
                                <div class="form-group  product-info" _mstvisible="3">
                                    @if(count(config('translatable.locales'))>1)
                                        <label>@lang('site.' . $locale . '.name')</label>
                                    @else
                                        <label for="product-name" _msthash="1135693" _msttexthash="183742" _mstvisible="4" style="direction: ltr; text-align: left;">@lang('site.name')</label>

                                    @endif

                                        <input type="text" name="{{ $locale }}[name]" class="form-control" value="{{ old($locale . '.name') }}" required>
                                </div>
                            @endforeach


                                @foreach (config('translatable.locales') as $locale)
                                    <div class="form-group  product-info" _mstvisible="3">
                                        @if(count(config('translatable.locales'))>1)
                                            <label>@lang('site.' . $locale . '.description')</label>
                                        @else
                                            <label for="product-name" _msthash="1135693" _msttexthash="183742" _mstvisible="4" style="direction: ltr; text-align: left;">@lang('site.description')</label>

                                        @endif
                                            <textarea type="text" class="form-control" id="product-describtion" name="{{ $locale }}[description]" _mstvisible="4" required></textarea>

                                    </div>
                                @endforeach

                            <div class="form-group product-info" _mstvisible="3">
                                <label for="product-price" _msthash="1136187" _msttexthash="61646" _mstvisible="4" style="direction: ltr; text-align: left;">{{trans('site.price')}}</label>
                                <input type="text" class="form-control" id="product-price" name="price" _mstvisible="4" required>
                            </div>
                            <div class="form-group product-info add-photo" _mstvisible="3">
                                <label for="product-photo" _msthash="1136434" _msttexthash="580996" _mstvisible="4" style="direction: ltr; text-align: left;">{{trans('site.image')}}</label>
                                <input type="file" onchange="readURL(this, 'ImagePreview', 'ImagePreview');" name="image" class="form-control image" required >

                            </div>



                            <div class="form-group product-info" _mstvisible="3">

                                <label for="">{{trans('site.USe Currency')}}</label>

                                <input type="checkbox" name="use_currency" id="use_currency" value="1"
                                       onclick="show_checked()" checkes="false">

                                @foreach(\App\Models\Currency::get() as $currency)
                                    <input type="hidden" name="currency_id[]" value="{{$currency->id}}">
                                    <div class="row">

                                        <div class="form-group product-info" _mstvisible="3">
                                            <h4 class="heading">{{trans('site.price')}}{{$currency->name}}</h4>

                                            <input type="text" name="currency[]" id="{{$currency->key}}"
                                                   data-value="{{$currency->value}}"
                                                   class="form-control currecny" data-key="{{$currency->key}}"
                                                   onkeyup="Checkedkeyed(this)">
                                        </div>
                                    </div>
                                @endforeach

                            </div>



                            <button type="submit" class="btn btn-default add-button" _msthash="903747" _msttexthash="30927" _mstvisible="3" style="direction: ltr;">{{trans('site.add')}}</button>
                      <br><br>
                        </form>
                    </div>


                </div>

                <div id="acc-settings" class="tabcontent" style="display: none;" _mstvisible="0">
                    <div class="acc-settings-container" _mstvisible="1">
                        <div class="acc-settings-inner col-6" _mstvisible="2">
                            <form action="{{route('updateprofiles',auth()->user()->id)}}" _mstvisible="3" method="post">
                                @csrf
                                <div class="form2-first-line" _mstvisible="4">
                                    <div class="input-container form1-input-container half-form-input" _mstvisible="5">
                                        <i class="fas fa-user form-icon" _mstvisible="6"></i>
                                        <input class="input-field" type="text" placeholder="{{trans('site.first_name')}}" _mstplaceholder="138164" _mstvisible="6" style="direction: ltr; text-align: left;" name="first_name" value="{{auth()->user()->first_name}}">
                                    </div>
                                    <div class="input-container form1-input-container half-form-input" _mstvisible="5">
                                        <i class="fas fa-user form-icon" _mstvisible="6"></i>
                                        <input class="input-field" type="text" placeholder="last name" _mstplaceholder="116116" _mstvisible="6" style="direction: ltr; text-align: left;" name="last_name" value="{{auth()->user()->last_name}}">
                                    </div>
                                </div>
                                <div class="input-container form1-input-container form2-input" _mstvisible="4">
                                    <i class="fa fa-envelope icon form-envelope-icon" _mstvisible="5"></i>
                                    <input class="input-field" type="text" placeholder="{{trans('site.email')}}"  required="" _mstplaceholder="71097" _mstvisible="5" style="direction: ltr; text-align: left;" name="email" value="{{auth()->user()->email}}">
                                </div>

                                <div class="input-container form1-input-container psw-form-wrap" _mstvisible="4">
                                    <i class="fas fa-lock form-icon" _mstvisible="5"></i>
                                    <div class="display-psw" _mstvisible="5"><input class="input-field" type="password" placeholder="{{trans('site.password')}}" name="password" id="password-field"  _mstplaceholder="120484" _mstvisible="6" style="direction: ltr; text-align: left;">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password" _mstvisible="6"></span></div>
                                </div>

                                <div class="input-container form2-input ng-scope" ng-app="myApp" _mstvisible="4">
                                    <div ng-controller="countryCtrl" class="ng-scope" _mstvisible="5">

                                        <div class="input-container form1-input-container form2-input" _mstvisible="6">
                                            <i class="fas fa-map-marker-alt form-icon" _mstvisible="7"></i>
                                            <select  class="form-control">
                                                <option value="" class="" selected="selected" _msthash="546312" _msttexthash="1179776" _mstvisible="8" style="direction: ltr; text-align: left;">@lang('site.country')</option>

                                                @foreach(\Modules\Geography\Entities\Geography::where('parent_id',null)->get() as $key=>$country)

                                                    <option value="{{$country->id}}" class=""   @if(auth()->user()->country_id ==$country->id)}) selected @endif  style="direction: ltr; text-align: left;">{{$country->name}}</option>

                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="input-container form1-input-container form2-input" _mstvisible="6">
                                            <i class="fas fa-phone-alt form-icon" _mstvisible="7"></i>
{{--                                            <input class="country-code" value="" disabled="" _mstvisible="7">--}}
                                            <input class="phone-input ng-pristine ng-untouched ng-valid" placeholder="{{trans('site.phone')}}" id="intTextBox"  style="direction: ltr; text-align: left;" name="phone" value="{{auth()->user()->phone}}">
                                        </div>

                                    </div>

                                </div>
                                <div class="input-container form1-input-container form2-input" _mstvisible="4">
                                    <i class="fas fa-store-alt form-icon" _mstvisible="5"></i>
                                    <input class="input-field" type="text" placeholder="store name" _mstplaceholder="137865" _mstvisible="5" style="direction: ltr; text-align: left;" name="store_name_en" value="{{auth()->user()->store_name_en}}">
                                </div>

                                <div class="input-container form1-input-container form2-input" _mstvisible="4">
                                    <i class="fas fa-store-alt form-icon" _mstvisible="5"></i>
                                    <input class="input-field" type="text" placeholder="the name of the store is in english." _mstplaceholder="824018" _mstvisible="5" style="direction: ltr; text-align: left;" name="store_name" value="{{auth()->user()->store_name}}">
                                </div>


                                <div class="sign-button-container" _mstvisible="4"><button type="submit" class="btn btn-default sign-in-button" _msthash="1638936" _msttexthash="162188" _mstvisible="5" style="direction: ltr;">@lang('site.edit')</button></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="myorders" class="tabcontent" style="display: none;" _mstvisible="0">
                    <div class="myorders-inner" _mstvisible="1">
                        <div class="empty-orders col-7" _msthash="421564" _msttexthash="3040999" _mstvisible="2" style="direction: ltr;">you're welcome.. but it looks like there's no data on this page right now.</div>
                    </div>
                </div>

                <div id="orders-to-me" class="tabcontent" style="display: none;" _mstvisible="0">
                    <div class="myorders-inner" _mstvisible="1">
                        <div class="" id="orders2" _mstvisible="2">
                            <select name="orders-to-me" class="orders-select" _mstvisible="3">
                                <option _msthash="582530" _msttexthash="2736630" _mstvisible="4" style="direction: ltr; text-align: left;">complete requests</option>
                                <option _msthash="582712" _msttexthash="5284487" _mstvisible="4" style="direction: ltr; text-align: left;">previous or incomplete request</option>
                            </select>
                        </div>
                        <div class="empty-orders col-7" _msthash="535951" _msttexthash="3040999" _mstvisible="2" style="direction: ltr;">you're welcome.. but it looks like there's no data on this page right now.</div>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection

@section('scripts')

    <script>

        function Checkedkeyed(data) {

            if ($('#use_currency').attr('checkes') == 'true') {

                var use_currency = $("#use_currency").val();


                var currency_from_key = $(data).data('key');
                var price = $(data).val();

                // console.log(change_currency(currency_from_key,'EGP',price));

                var divs = document.getElementsByClassName('currecny');

                console.log(divs);
                var currency_to_key = '';
                for (let i = 0; i < divs.length; ++i) {
                    currency_to_key = divs[i].getAttribute('data-key');
                    divs[i].value = change_currency(currency_from_key, currency_to_key, price);
                }


                // }

                function change_currency(from_currecny, to_cuurency, price) {
                    let CurrencyJson = @json($currecny_json);

                    return Math.round(CurrencyJson[from_currecny][to_cuurency] * price);
                }
            }
        }

        function show_checked() {
            if ($('#use_currency').attr('checkes') == 'false') {
                // $(this).prop('checked',true);

                $('input[name="use_currency"]').attr('checkes', 'true');


            } else if ($('#use_currency').attr('checkes') == 'true') {

                $('input[name="use_currency"]').attr('checkes', 'false');

            }


            if ($('#use_currency').attr('checkes') == 'true') {

                Checkedkeyed();

                // alert($('#use_currency').attr('checkes'));

            } else if ($('#use_currency').attr('checkes') == 'false') {

                console.log('error');


                // }

            }
        }



    </script>



@endsection
