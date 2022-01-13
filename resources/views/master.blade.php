<!DOCTYPE html>
<html>

<head>
    <style type="text/css">@charset "UTF-8";
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }</style>
    <title _msthash="149916" _msttexthash="111709" style="direction: ltr; text-align: left;">Zumarada</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--style css-->
    @if(app()->getLocale()=='ar')
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/style.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/style-en.css')}}">
    @endif

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <!--    <link rel="stylesheet" href="/resources/demos/style.css">-->
    <!---fontawesome--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/all.css')}}">

    <!---google-font--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&amp;display=swap"
          rel="stylesheet">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" async=""
            src="https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?24201"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <!---owl-carousel---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer">

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--java scripts-->
    @if(app()->getLocale()=='ar')
        <script src="{{asset('frontend/js/myScript.js')}}"></script>
    @else
        <script src="{{asset('frontend/js/myScript-en.js')}}"></script>

@endif
<!---angular-->
    <script data-require="angular.js@1.4.8" data-semver="1.4.8"
            src="https://code.angularjs.org/1.4.8/angular.js"></script>
    <!--  <link rel="stylesheet" href="style.css" />-->
    <script src="{{asset('frontend/js/script.js')}}"></script>
    <style type="text/css">
        <
        br > #whatsapp_chat_widget {
            < br >
            display: block < br >
        }

        <
        br >
        .wa-chat-box-content-send-btn-text {
            < br >
            margin-left: 8px;
            < br >
            margin-right: 8px;
            < br >
            z-index: 1;
            < br >
            color: rgb(255, 255, 255);
            < br >
        }

        <
        br > .wa-chat-box-content-send-btn-icon {
            < br >
            width: 16px;
            < br >
            height: 16px;
            < br >
            fill: rgb(255, 255, 255);
            < br >
            z-index: 1;
            < br >
            flex: 0 0 16px;
            < br >
        }

        <
        br > .wa-chat-box-content-send-btn {
            < br >
            text-decoration: none;
            < br >
            color: rgb(255, 255, 255);
            < br >
            font-size: 15px;
            < br >
            font-weight: 700;
            < br >
            line-height: 20px;
            < br >
            cursor: pointer;
            < br >
            position: relative;
            < br >
            display: flex;
            < br >
            -webkit-box-pack: center;
            < br >
            justify-content: center;
            < br >
            -webkit-box-align: center;
            < br >
            align-items: center;
            < br >
            -webkit-appearance: none;
            < br >
            padding: 8px 12px;
            < br >
            border-radius: 25px;
            < br >
            border-width: initial;
            < br >
            border-style: none;
            < br >
            border-color: initial;
            < br >
            border-image: initial;
            < br >
            background-color: #14c656;
            < br >
            margin: 20px;
            < br >
            overflow: hidden;
            < br >
        }

        <
        br > .wa-chat-box-send {
            < br >
            background-color: white;
            < br > < br >
        }

        <
        br > .wa-chat-box-content-chat-brand {
            < br >
            font-size: 13px;
            < br >
            font-weight: 700;
            < br >
            line-height: 18px;
            < br >
            color: rgba(0, 0, 0, 0.4);
            < br >
        }

        <
        br > .wa-chat-box-content-chat-welcome {
            < br >
            font-size: 14px;
            < br >
            line-height: 19px;
            < br >
            margin-top: 4px;
            < br >
            color: rgb(17, 17, 17);
            < br >
        }

        <
        br > .wa-chat-box-content-chat {
            < br >
            background-color: white;
            < br >
            display: inline-block;
            < br >
            margin: 20px;
            < br >
            padding: 10px;
            < br >
            border-radius: 10px;
            < br >
        }

        <
        br > .wa-chat-box-content {
            < br >
            background: url('https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png');
            < br > < br >
        }

        <
        br > .wa-chat-bubble-close-btn {
            < br >
            cursor: pointer;
            < br >
            position: absolute;
            < br >
            right: 20px;
            < br >
            top: 20px;
            < br >
        }

        <
        br > .wa-chat-box-brand-text {
            < br >
            margin-left: 20px;
            < br >
        }

        <
        br > .wa-chat-box-brand-name {
            < br >
            font-size: 16px;
            < br >
            font-weight: 700;
            < br >
            line-height: 20px;
            < br >
        }

        <
        br > .wa-chat-box-brand-subtitle {
            < br >
            font-size: 13px;
            < br >
            line-height: 18px;
            < br >
            margin-top: 4px;
            < br >
        }

        <
        br > < br > .wa-chat-box-header {
            < br >
            height: 100px;
            < br >
            max-height: 100px;
            < br >
            min-height: 100px;
            < br >
            background-color: #0a5f54;
            < br >
            color: white;
            < br >
            border-radius: 10px 10px 0px 0px;
            < br >
            display: flex;
            < br >
            align-items: center;
            < br >
        }

        <
        br > .wa-chat-box-brand {
            < br >
            margin-left: 20px;
            < br >
            width: 50px;
            < br >
            height: 50px;
            < br >
            border-radius: 25px;
            < br >
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            < br >
        }

        <
        br > .wa-chat-box {
            < br >
            background-color: white;
            < br >
            z-index: 16000160 !important;
            < br >
            margin-bottom: 60px;
            < br >
            width: 360px;
            < br >
            position: fixed !important;
            < br >
            bottom: 50px !important;
            < br >
            right: 20px;
            < br >
            border-radius: 10px;
            < br >
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            < br >
            font: 400 normal 15px/1.3 -apple-system, BlinkMacSystemFont, Roboto, Open Sans, Helvetica Neue, sans-serif;
            < br >
        }

        <
        br > #wa-widget-send-button {
            < br >
            margin: 0 0 50px 0 !important;
            < br >
            padding-left: 0px;
            < br >
            padding-right: 0px;
            < br >
            position: fixed !important;
            < br >
            z-index: 16000160 !important;
            < br >
            bottom: 0 !important;
            < br >
            text-align: center !important;
            < br >
            height: 50px;
            < br >
            min-width: 50px;
            < br >
            border-radius: 25px;
            < br >
            visibility: visible;
            < br >
            transition: none !important;
            < br >
            background-color: #14c656;
            < br >
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            < br >
            right: 20px;
            < br >
            cursor: pointer;
            < br >
            display: flex;
            < br >
            align-items: center;
            < br >
            justify-content: center;
            < br >
        }

        <
        br > .wa-messenger-svg-whatsapp {
            < br >
            fill: white;
            < br >
            width: 41px;
            < br >
            height: 50px;
            < br >
        }

        <
        br > .wa-chat-box-poweredby {
            < br >
            text-align: center;
            < br >
            font: 400 normal 15px/1.3 -apple-system, BlinkMacSystemFont, Roboto, Open Sans, Helvetica Neue, sans-serif;
            < br >
            margin-bottom: 15px;
            < br >
            margin-top: -10px;
            < br >
            font-style: italic;
            < br >
            font-size: 12px;
            < br >
            color: lightgray;
            < br >
        }

        <
        br >

        @media only screen and (max-width: 600px) {
        <br > .wa-chat-box< br > {
            < br >
            width: auto;
            < br >
            position: fixed !important;
            < br >
            right: 20px !important;
            < br >
            left: 20px !important;
            < br >
        }

        <br >
        }

        <
        br >


    </style>


</head>

<body>

<div class="main-container">
    <header>
        <div class="container-fluid top-bar">
            <div class="row mobile-menus-container">
                <div class="col-6">
                    <div class="dropdown mobile-sign">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false" onclick="this.blur();">
                            <i class="fas fa-user-circle"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">


                            <li><a class="dropdown-item" href="{{route('logins')}}">{{trans('site.login')}}</a></li>
                            <li><a class="dropdown-item"
                                   href="{{route('clients')}}">{{trans('site.Customer registration')}}</a></li>
                            <li><a class="dropdown-item"
                                   href="{{route('sellers')}}">@lang('site.Merchant Registration')</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dropdown mobile-selects">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false" onclick="this.blur();">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                            <div class="selects-mob">
                                <ul class="selects-ul">

                                    <select class="currency-select mobile-currency">
                                        @foreach(\App\Models\Currency::get() as $currency)
                                            <option
                                                value="{{route('currency',$currency->id)}}" {{ Session::has('currency') ? ( Session::get('currency') == $currency->id ? 'selected' : '' ) : (DB::table('currencies')->first()->id == $currency->id ? 'selected' : '') }} >{{$currency->sign}} {{$currency->name}}</option>
                                        @endforeach
                                    </select>


                                    <select class="language-select mobile-lang-select">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <option
                                                {{app()->getLocale() == $localeCode ? 'selected' : ''}} value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container row top-bar-inner">


                @if(auth()->user())
                    @if(auth()->user()->type=='User')
                        <div class="col-6 signed-in-div">
                            <div class="dropdown signed-in">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false" onclick="this.blur();"
                                        style="direction: ltr;">
                                    <i class="fas fa-user-alt signin-icon"></i><font _mstmutation="1" _msthash="402962"
                                                                                     _msttexthash="209755">
                                        {{auth()->user()->first_name ?? ''}} {{auth()->user()->last_name ?? ''}}
                                    </font></button>
                                <ul class="dropdown-menu client-sign-menu" aria-labelledby="dropdownMenuButton1"
                                    style=""
                                    _mstvisible="0">
                                    <li _mstvisible="1"><a class="dropdown-item"
                                                           href="{{route('profile',auth()->user()->id)}}"
                                                           _mstvisible="2"
                                                           style="direction: ltr; text-align: left;">
                                            <i class="far fa-user client-menu-icon" _mstvisible="3"></i><font
                                                _mstmutation="1" _msthash="2359227" _msttexthash="205881"
                                                _mstvisible="3">
                                                @lang('site.profile') </font></a></li>

{{--                                    <li _mstvisible="1"><a class="dropdown-item" href="track-orders.html"--}}
{{--                                                           _mstvisible="2"--}}
{{--                                                           style="direction: ltr; text-align: left;">--}}
{{--                                            <img class="client-menu-icon" src="{{asset('frontend/img/package.png')}}"--}}
{{--                                                 _mstvisible="3"><font--}}
{{--                                                _mstmutation="1" _msthash="2359409" _msttexthash="330642"--}}
{{--                                                _mstvisible="3">--}}
{{--                                                tracking requests </font></a></li>--}}

                                    <li _mstvisible="1"><a class="dropdown-item" href="{{route('logout')}}"
                                                           _mstvisible="2"
                                                           style="direction: ltr; text-align: left;">
                                            <img class="client-menu-icon" src="{{asset('frontend/img/sign-out.png')}}"
                                                 _mstvisible="3"><font
                                                _mstmutation="1" _msthash="2359591" _msttexthash="118014"
                                                _mstvisible="3">
                                                @lang('site.logout') </font></a></li>
                                </ul>
                            </div>
                        </div>

                    @elseif(auth()->user()->type=='seller')
                        <div class="col-6 signed-in-div">
                            <div class="dropdown signed-in">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false" onclick="this.blur();"
                                        style="direction: ltr;">
                                    <i class="fas fa-user-alt signin-icon"></i><font _mstmutation="1" _msthash="402962"
                                                                                     _msttexthash="205686">   {{auth()->user()->first_name ?? ''}} {{auth()->user()->last_name ?? ''}} </font>
                                </button>
                                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1" style=""
                                    _mstvisible="0">
                                    <li _mstvisible="1"><a class="dropdown-item" href="{{route('stores')}}"
                                                           _msthash="2359227" _msttexthash="48828" _mstvisible="2"
                                                           style="direction: ltr;">@lang('site.shop')</a></li>
                                    <li _mstvisible="1"><a class="dropdown-item" href="{{route('stores')}}"
                                                           _msthash="2359409" _msttexthash="183339" _mstvisible="2"
                                                           style="direction: ltr;">@lang('site.create') @lang('site.products')</a>
                                    </li>
                                    <li _mstvisible="1"><a class="dropdown-item" href="{{route('stores')}}"
                                                           _msthash="2359591" _msttexthash="298935" _mstvisible="2"
                                                           style="direction: ltr;">@lang('site.profile')</a></li>
                                    <li _mstvisible="1"><a class="dropdown-item" href="{{route('stores')}}"
                                                           _msthash="2359773" _msttexthash="342056" _mstvisible="2"
                                                           style="direction: ltr;">@lang('site.orders')</a></li>

                                    <li _mstvisible="1"><a class="dropdown-item" href="{{route('logout')}}"
                                                           _msthash="2359955" _msttexthash="367406" _mstvisible="2"
                                                           style="direction: ltr;">@lang('site.logout')</a></li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="col-6">
                            <ul class="login-list">
                                <li><a href="{{route('logins')}}">{{trans('site.login')}}</a></li>
                                <li><a href="{{route('clients')}}">{{trans('site.Customer registration')}}</a></li>
                                <li><a href="{{route('sellers')}}">@lang('site.Merchant Registration')</a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    @endif
                @else
                    <div class="col-6">
                        <ul class="login-list">
                            <li><a href="{{route('logins')}}">{{trans('site.login')}}</a></li>
                            <li><a href="{{route('clients')}}">{{trans('site.Customer registration')}}</a></li>
                            <li><a href="{{route('sellers')}}">@lang('site.Merchant Registration')</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                @endif

                <div class="col-6 selects-div">
                    <ul class="selects-ul">
                        <select class="currency-select">
                            @foreach(\App\Models\Currency::get() as $currency)
                                <option
                                    value="{{route('currency',$currency->id)}}" {{ Session::has('currency') ? ( Session::get('currency') == $currency->id ? 'selected' : '' ) : (DB::table('currencies')->first()->id == $currency->id ? 'selected' : '') }} >{{$currency->sign}} {{$currency->name}}</option>
                            @endforeach
                        </select>

                        <select class="language-select">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <option
                                    {{app()->getLocale() == $localeCode ? 'selected' : ''}} value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </option>
                            @endforeach
                        </select>


                    </ul>

                </div>
            </div>
        </div>

        <div class="container-fluid header-logo">
            <div class="container row logo-menu-wrapper">
                <div class="col-8 menu-wrap2">
                    <ul class="menu-list">
                        <li>
                            <div id="nav-icon1">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </li>
                        <div class="menu">
                            <div class="menu-inner">
                                <span class="close-menu">&#10006;</span>
{{--                                <form action="/action_page.php">--}}
{{--                                    <h5>الفئه</h5>--}}
{{--                                    <div class="container-checkbox">--}}
{{--                                        <input type="checkbox" id="men" name="" value="">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                        <label class="checkbox-label" for="men">الرجال</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="container-checkbox">--}}
{{--                                        <input type="checkbox" id="women" name="" value="">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                        <label class="checkbox-label" for="women">النساء</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="container-checkbox">--}}
{{--                                        <input type="checkbox" id="kids" name="" value="">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                        <label class="checkbox-label" for="kids">الأطفال</label>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <p>--}}
{{--                                    <label class="price" for="amount">@lang('site.price'): </label>--}}
{{--                                    <!--                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">-->--}}
{{--                                </p>--}}
{{--                                <div id="slider-range"></div>--}}
{{--                                <div class="slider-titles">--}}
{{--                                    <label class="" for="amount-min">الحد الأدنى: </label>--}}
{{--                                    <input type="text" id="amount-min" readonly--}}
{{--                                           style="border:0; color:#f6931f; font-weight:bold;">--}}
{{--                                    <label class="" for="amount-min">الحد الأقصى: </label>--}}
{{--                                    <input type="text" id="amount-max" readonly--}}
{{--                                           style="border:0; color:#f6931f; font-weight:bold;">--}}
{{--                                    <button class="price-range-search" id="price-range-submit">تم</button>--}}
{{--                                </div>--}}
{{--                                <form action="/action_page.php">--}}
{{--                                    <h5>تصنيف حسب</h5>--}}
{{--                                    <label class="container-radio">الأحدث--}}
{{--                                        <input type="radio" name="radio">--}}
{{--                                        <span class="checkmark-radio"></span>--}}
{{--                                    </label>--}}
{{--                                    <label class="container-radio">الأقدم--}}
{{--                                        <input type="radio" name="radio">--}}
{{--                                        <span class="checkmark-radio"></span>--}}
{{--                                    </label>--}}
{{--                                    <label class="container-radio">من الأرخص للأغلى--}}
{{--                                        <input type="radio" name="radio">--}}
{{--                                        <span class="checkmark-radio"></span>--}}
{{--                                    </label>--}}
{{--                                    <label class="container-radio">من الأغلى للأرخص--}}
{{--                                        <input type="radio" name="radio">--}}
{{--                                        <span class="checkmark-radio"></span></label>--}}
{{--                                </form>--}}
                                <h5>@lang('site.All Categories')</h5>
                                <div id="accordion">
                                    @foreach(\App\Catogery::where('parent_id',null)->paginate(10) as $category)

                                        <div class="card">
                                            <div class="card-header">
                                                <a class="cat"
                                                   href="{{route('storecategories', $category->id)}}">{{$category->name}}</a>
                                                <ul class="btn categories-list" data-bs-toggle="collapse"
                                                    href="#collapseOne">
                                                    <!--                                      <li><a href="#">المنزل</a></li>-->
                                                    <i class="fas fa-angle-down"></i>
                                                </ul>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                                @foreach(\App\Catogery::where('parent_id',$category->id)->paginate(5) as $subcategory)
                                                    <div class="card-body">
                                                        <a href="{{route('storecategories', $subcategory->id)}}">{{$subcategory->name}}</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                                @include('partials._errors')
                                <form action="{{route('searchproduct')}}" method="post">
                                    @csrf
                                    <div class="input-group rounded search-hamburger-menu">
                          <span class="input-group-text border-0" id="search-addon" type="submit">
                            <i class="fas fa-search"></i>
                          </span>
                                        <input type="text" name="search" class="form-control rounded search-box"
                                               placeholder="{{trans('site.search')}}"
                                               required>
                                    </div>
                                </form>
                                <br>
                                <button class="btn-primary" onclick=window.location.href="{{route('categories')}}"> @lang('site.All Categories')</button>
                            </div>


                        </div>
                        <li class="storee"><a class="shopping-cart-icon" href="#"><img
                                    src="{{asset('frontend/img/shopping-cart.png')}}">
                                <p class="orders-quantity">


                                                              <span class="cart-quantity"
                                                                    id="cart-count">{{ Session::has('cart') ? count(Session::get('cart')->items) : '0' }}</span>

                                </p>

                            </a>

                            @if(Session::get('cart'))
                                <div class="orders-store-icon orders-pop-hide" _mstvisible="0">
                                    <?php $total = 0; ?>
                                    @foreach(Session::get('cart')->items as $product)
                                        <div class="order-info-store-icon" _mstvisible="1">
                                            <div class="order-store-icon-thumbnail" _mstvisible="2"><img
                                                    src="{{asset('uploads/'.$product['item']->image ?? '')}}"
                                                    _mstvisible="3"></div>
                                            <div class="name-price-order" _mstvisible="2">
                                                <p class="name-pop" _msthash="3308981" _msttexthash="183742"
                                                   _mstvisible="3"> {{$product['item']->name  ?? ''}}</p>
                                                <p class="price-pop" _msthash="3309098" _msttexthash="38194"
                                                   _mstvisible="3"
                                                   style="direction: ltr; text-align: left;"> {{$product['item']->showPrice()  ?? ''}} </p>
                                                <a href="{{route('removecart',$product['item']->id)}}"> <i
                                                        class="far fa-trash-alt" _mstvisible="3"></i></a>

                                            </div>
                                        </div>
                                        <?php $total += $product['item']->showPriceWithoutCurrency() ?? 0?>
                                    @endforeach
{{--                                    <div id="field1" _mstvisible="1">--}}
{{--                                        <button type="button" id="sub" class="sub" _mstvisible="2">-</button>--}}
{{--                                        <input class="quantity-number" type="number" id="1" value="1" min="1" max=""--}}
{{--                                               _mstvisible="2">--}}
{{--                                        <button type="button" id="add" class="add" _mstvisible="2">+</button>--}}
{{--                                    </div>--}}
                                    <p class="total-price" _msthash="2358382" _msttexthash="132704" _mstvisible="1">
                                        @lang('site.total'): <span _istranslated="1">{{$total}}{{\App\Models\Currency::where('is_default', '=', 1)->first()->sign ?? ''}} </span></p>
                                    <div class="pay-store-link" _mstvisible="1">
                                        <a href="#" _mstvisible="2" style="direction: ltr; text-align: left;"><img
                                                src="{{asset('frontend/img/shopping-cart.png')}}" _mstvisible="3">

                                        </a>
                                        <button href="{{route('carts')}}" class="pay-button"
                                                onclick="window.location.href='{{route('carts')}}';"
                                                _msthash="3238625" _msttexthash="166244"
                                                _mstvisible="2">@lang('site.trackorders')
                                        </button>
                                    </div>
                                </div>

                            @else
                                <div class="orders-store-icon orders-pop-hide">

                                    <div class="pay-store-link">

                                        <a>@lang('site.no_data_found')</a>

                                    </div>
                                </div>

                            @endif
                        </li>
                        <li><a href="{{route('favourite')}}"><i class="far fa-heart"></i></a></li>
                        <li><a class="sale-tag-icon" href="{{route('sale')}}"><img
                                    src="{{asset('frontend/img/sale-tag.png')}}"></a></li>
                        <li><a class="shop-icon" href="{{route('storeproduct')}}"><img
                                    src="{{asset('frontend/img/shop.png')}}"></a>
                        </li>
                        <form action="{{route('searchproduct')}}" method="post">
                            @csrf
                            <div class="input-group rounded search-bar-menu" style="background-color: #fff">
                          <span class="input-group-text border-0" id="search-addon">
                              <button type="submit">
                                  <i class="fas fa-search"></i>
                              </button>
                          </span>
                                <input type="search" name="search" class="form-control rounded search-box"
                                       placeholder="{{trans('site.search')}}"
                                       aria-label="Search"
                                       aria-describedby="search-addon">
                            </div>
                        </form>


                    </ul>
                </div>
                <div class="col-4 logo-container">
                    <div class="logo"><a href="{{route('home')}}"><img src="{{asset('frontend/img/logo.jpeg')}}"></a>
                    </div>
                </div>
            </div>
        </div>


    </header>


@yield('content')
<!------------footer-------------------->
    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 footer-div">
                    <h4 class="footer-title footer-logo">@lang('site.title')</h4>

                    <div class="row">
                        <div class="col-lg-8">
                            <p class="footer-p">
                                @foreach(\Modules\Pages\Entities\Page::where('slug','help')->get() as $page )

                                    {{$page->content}}
                                @endforeach
                            </p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-3 footer-div">
                    <h4 class="footer-title">@lang('site.important links')</h4>
                    <ul class="footer-list">


                        <li><a href="{{route('pages',['privacy-policy'])}}">@lang('site.privacy-policy')</a></li>


                        <li><a href="{{route('pages',['terms-and-conditions'])}}">@lang('site.terms-and-conditions')</a>
                        </li>


                        <li><a href="{{route('pages',['refund-policy'])}}">@lang('site.refund-policy')</a></li>


                        <li>
                            <a href="{{route('pages',['shipping-and-cancellation-policy'])}}">@lang('site.shipping-and-cancellation-policy')</a>
                        </li>


                    </ul>
                </div>
                <div class="col-lg-2 footer-div">
                    <h4 class="footer-title">@lang('site.contact')</h4>
                    <ul class="footer-list">


                        <li><a href="{{route('pages',['aboutas'])}}">@lang('site.aboutas')</a></li>

                        <li><a href="{{route('contact')}}">@lang('site.contact')</a></li>

                        <li><a href="{{route('pages',['help'])}}">@lang('site.help')</a></li>

                    </ul>
                </div>
                <div class="col-lg-2 footer-div social-media-container">
                    <div class="footer-buttons">

                        <a href="{{\App\Setting::where('slug','twitter')->first()->value}}"
                           class="twitter" target="_blank"

                        ><i class="fab fa-twitter social-media-footer"></i></a>

                        <a href="{{\App\Setting::where('slug','facebook')->first()->value}}" class="facebook"
                           target="_blank"><i class="fab fa-facebook social-media-footer"></i></a>
                        <a href="{{\App\Setting::where('slug','instagram')->first()->value}}" class="instagram"
                           target="_blank"><i class="fab fa-instagram social-media-footer"></i></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@yield('scripts')

<script>


    jQuery(document).ready(function () {
        jQuery('.favouritess').click(function (e) {
            e.preventDefault();

            var id = $(this).data('id');
            jQuery.ajax({
                url: 'favouritproduct/' + id,
                method: 'GET',
                data: {
                    '_token': '{{ csrf_token() }}',
                },
                success: function (result) {
                    console.log(result.status);
                    if (result.status == 'deleted')
                        $(`#favouritess${id} i`).addClass('far').removeClass('fas');
                    else if (result.status == 'added')
                        $(`#favouritess${id} i`).addClass('fas').removeClass('far');
                    console.log(result);
                },
                error: function (err) {
                    console.log(err)
                }
            });
        });
    });
</script>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?24201';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#14c656",
            "ctaText": "",
            "borderRadius": "25",
            "marginLeft": "0",
            "marginBottom": "50",
            "marginRight": "20",
            "position": "right"
        },
        "brandSetting": {
            "brandName": "زمردة",
            "brandSubTitle": "Typically replies within a day",
            "brandImg": "img/logo2.jpg",
            "welcomeText": "مرحباً بك.\nكيف يمكننا مساعدتك؟",
            "messageText": "",
            "backgroundColor": "#0a5f54",
            "ctaText": "تواصل معنا",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "+966-1234567890"
        }
    };
    s.onload = function () {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
<script>
    $(document).ready(function () {
//     get the tab from url
        var hash = window.location.hash;
        // if a hash is present (when you come to this page)
        if (hash != '') {
            // show the tab
            $('.dropdown-item a[href="' + hash + '"]').tab('show');
        }
        ;
    });
</script>

<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 40,
            max: 1500,
            step: 10,
            values: [40, 1500],
            slide: function (event, ui) {
                $("#amount").val("" + ui.values[0] + " " + ui.values[1]);
                $("#amount-min").val("" + ui.values[0]);
                $("#amount-max").val(" " + ui.values[1]);
            }
        });
        $("#amount").val("SR " + $("#slider-range").slider("values", 0) +
            " - SR " + $("#slider-range").slider("values", 1));

        $("#amount-min").val("" + $("#slider-range").slider("values", 0));
        $("#amount-max").val("" + $("#slider-range").slider("values", 1));


    });
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<!----owl-carousel--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $('.owl-one').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        nav: true,
        dots: false,
        rtl: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script>
    $('.owl-two').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        nav: true,
        dots: false,
        rtl: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>


<script>


    $('.facebook').on('change', function (e) {
        e.preventDefault();
        var item = $(this).href();
        window.location.href = item;

    });
    $('.twitter').on('change', function (e) {
        e.preventDefault();
        var item = $(this).href();
        window.location.href = item;

    });
    $('.instagram').on('change', function (e) {
        e.preventDefault();
        var item = $(this).href();
        window.location.href = item;

    });


    $('.currency-select').on('change', function (e) {
        e.preventDefault();
        var item = $(this).val();
        window.location.href = item;

    });
    $('.language-select').on('change', function (e) {
        e.preventDefault();
        var item = $(this).val();
        window.location.href = item;

    });
    $('.shopping-cart-icon').on('click', function (e) {
        $('.orders-store-icon').toggleClass("orders-pop-hide orders-pop-show");
        e.preventDefault();
    });


</script>
</body>
</html>
