@extends('master')

@section('content')
    <!------first-section---->
    <div class="container-fluid hero-section-wrap">
        <div class="container hero-section">
            <img src="{{asset('frontend/img/hero-section-bg.png')}}">
        </div>
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5 hero-section-div">
                <p>
                    {{\Modules\Pages\Entities\Page::where('slug','textpages')->first()->content ?? ''}}
{{--                    @lang('site.textpages')--}}
                </p>
                <a class="discover-world" href="#">

                    @lang('site.expore')
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>

    <!---------slider-section------>
    <div class="container slider-section">
        <div class="owl-two owl-carousel owl-theme owl-container">
            @foreach(\App\Slider::get() as $slider)
            <div class="item">
                <img class="slider-product" src="{{asset('uploads/'.$slider->image)}}">
            </div>
            @endforeach
        </div>
    </div>
    <!---------hero-section------>

    <div class="container who-section">
        <div class="row">

            <div class="col-lg-6 video-container" _msthidden="1">
                <video width="100%" controls="" _msthidden="1">
                    <source src="{{asset('frontend/videos/video.mp4')}}" type="video/mp4"><font _mstmutation="1" _msthash="1075776" _msttexthash="1111539" _msthidden="1">
                        Your browser does not support HTML video.
                    </font></video>
            </div>
            <div class="col-lg-6 who-container">
                <div class="hp-who-are-we">
                    <img src="{{asset('frontend/img/information-desk.png')}}">
                    <h2 _msthash="1216579" _msttexthash="117793" style="direction: ltr;">@lang('site.aboutas')</h2>
                    <p _msthash="1169558" _msttexthash="8767018" style="direction: ltr;">


                        {{\Modules\Pages\Entities\Page::where('slug','aboutas')->first()->content ?? ''}}

                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--------extra section------>
    <div class="container golas-section">
        <div class="row">
            <div class="col-md-4" style="display: flex;justify-content: center;">
                <div class=" goal-card">
                    <div class="goals-title">
                        <img class="goal-img" src="{{asset('frontend/img/business.png')}}">
                        <h3>{{\Modules\Pages\Entities\Page::where('slug','our-vision')->first()->title ?? ''}}</h3>
                    </div>
                    <p>

                        {{\Modules\Pages\Entities\Page::where('slug','our-vision')->first()->content ?? ''}}
                    </p>
                </div>
            </div>

            <div class="col-md-4" style="display: flex;justify-content: center;">
                <div class=" goal-card">
                    <div class="goals-title">
                        <img class="goal-img" src="{{asset('frontend/img/business.png')}}">
                        <h3>{{\Modules\Pages\Entities\Page::where('slug','our-goals')->first()->title ??''}}</h3>
                    </div>
                    <p>

                        {{\Modules\Pages\Entities\Page::where('slug','our-goals')->first()->content ?? ''}}
                    </p>
                </div>
            </div>

            <div class="col-md-4" style="display: flex;justify-content: center;">
                <div class=" goal-card">
                    <div class="goals-title">
                        <img class="goal-img" src="{{asset('frontend/img/business.png')}}">
                        <h3>{{\Modules\Pages\Entities\Page::where('slug','our-message')->first()->title ?? ''}}</h3>
                    </div>
                    <p>

                        {{\Modules\Pages\Entities\Page::where('slug','our-message')->first()->content ?? ''}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--------extra section------>

    <!-----second-section--------->
    <div class="container second-section">
        <div class="row products-row">
            <div class="col-lg-9 products-row-1">
                <div class="row products-row-wrap">
                    @foreach($productss as $product)
                        <div class="col-lg-4">
                            <div class="product-card">
                                <a href="{{route('showproduct',$product->id)}}">
                                    <div class="product-card-img"
                                         style="background-image: url({{asset('uploads/'.$product->image)}})">
                                        {{--                                    <i class="fas fa-heart"></i>--}}
                                        <a class="favouritess" id="favouritess{{$product->id}}"
                                           data-id="{{$product->id}}"><i
                                                class=" @if($product->favorites) fas @else far @endif fa-heart slide__heart "></i></a>

                                    </div>
                                </a>
                                <div class="product-card-info">

                                    <a href="{{route('showproduct',$product->id)}}">
                                        <h3 class="product-name">{{$product->name}}</h3>
                                    </a>
                                    <div class="rating rating2">
                                        <a href="#5" title="Give 5 stars">★</a>
                                        <a href="#4" title="Give 4 stars">★</a>
                                        <a href="#3" title="Give 3 stars">★</a>
                                        <a href="#2" title="Give 2 stars">★</a>
                                        <a href="#1" title="Give 1 star">★</a>
                                    </div>
                                    <h3 class="price">{{$product->showPrice()}}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
            @foreach(\App\Product::where('status',1)->paginate(1) as $prod)
                <div class="col-lg-3">
                    <a href="{{route('showproduct',$prod->id)}}" class="product-card product-card-vertical"
                       onclick="window.location={{route('showproduct',$prod->id)}}">
                        <a href="{{route('showproduct',$prod->id)}}">
                            <div class="product-card-img product-card-vertical-img"
                                 style="background-image: url({{asset('uploads/'.$prod->image)}})">
                                {{--                            <i class="fas fa-heart"></i>--}}
                                <a class="favouritess" id="favouritess{{$prod->id}}" data-id="{{$prod->id}}"><i
                                        class=" @if($prod->favorites) fas @else far @endif fa-heart slide__heart "></i></a>
                            </div>
                        </a>
                        <div class="product-card-info">
                            <h3 class="product-name">
                                <a href="{{route('showproduct',$prod->id)}}">
                                {{$prod->name}}
                                </a></h3>
                            <div class="rating rating2">
                                <a href="#5" title="Give 5 stars">★</a>
                                <a href="#4" title="Give 4 stars">★</a>
                                <a href="#3" title="Give 3 stars">★</a>
                                <a href="#2" title="Give 2 stars">★</a>
                                <a href="#1" title="Give 1 star">★</a>
                            </div>
                            <h3 class="price">{{$prod->showPrice()}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>


    </div>

    <!-----third-section---------->
    <div class="container third-section">
        <img src="{{asset('frontend/img/third-section-img.png')}}">
    </div>
    <!---forth-section---------->
    <div class="container forth-section">
        <div class="row s3-product-row">

            @foreach($products as $product)
                <div class="col-lg-3">
                    <div class="product-card">
                        <a href="{{route('showproduct',$product->id)}}">
                            <div class="product-card-img"
                                 style="background-image: url({{asset('uploads/'.$product->image)}})">

                                <a class="favouritess" id="favouritess{{$product->id}}" data-id="{{$product->id}}"><i
                                        class=" @if($product->favorites) fas @else far @endif fa-heart slide__heart "></i></a>

                                {{--                            <i class="fas fa-heart"></i>--}}
                            </div>
                        </a>
                        <div class="product-card-info">
                            <a href="{{route('showproduct',$product->id)}}">
                                <h3 class="product-name">{{$product->name}}</h3>
                            </a>
                            <div class="rating rating2">
                                <a href="#5" title="Give 5 stars">★</a>
                                <a href="#4" title="Give 4 stars">★</a>
                                <a href="#3" title="Give 3 stars">★</a>
                                <a href="#2" title="Give 2 stars">★</a>
                                <a href="#1" title="Give 1 star">★</a>
                            </div>
                            <h3 class="price">{{$product->showPrice()}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <button class="button1"><a href="{{route('Allproducts')}}">@lang('site.More products')</a></button>
    </div>


    <!---fifth-section--------->
    <div class="container fifth-section">
        <img src="{{asset('frontend/img/fifth-section-img.png')}}">
    </div>


    <!---sixth-section--------->
    <div class="container sixth-section">
        <div class="row categories-row">
            @foreach($categories as $category)
                <div class="col-lg-3 category-div">
                    <a><img class="cat-img" src="{{asset('uploads/'.$category->icons)}}"></a>
                    <a href="{{route('storecategories', $category->id)}}">
                    <h6 class="category-name">{{$category->name}}</h6>
                    </a>
                </div>

            @endforeach
        </div>

        <button class="button1"><a href="{{route('categories')}}">@lang('site.All Categories')</a></button>

    </div>


    <!--seventh-section------->
    <div class="container-fluid seventh-section">
        <div class=" owl-one owl-carousel owl-theme owl-container">
            @foreach($productsss as $product)
                @if(!empty($product->offers()))
                    @foreach($product->offers as $prod)
                        <div class="item"><img class="slider-product" src="{{asset('uploads/'.$product->image)}}">
                            <p class="slider-percentage">{{$prod->discount}}%</p></div>
                    @endforeach
                @endif
            @endforeach

        </div>
        <button class="button1"><a href="{{route('sale')}}">{{trans('site.Browse all offers')}}</a></button>
    </div>

    <!--eighth-section------->
    <div class="container-fluid eighth-section">
        <div class="container row">
            <div class="col-lg-6">
                <div>
                    <a><img class="service-img" src="{{asset('frontend/img/padlock.png')}}"></a>
                    <p class="service"> @lang('site.secure payment')</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <a><img class="service-img" src="{{asset('frontend/img/headset.png')}}"></a>
                    <p class="service">@lang('site.customer service')</p>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')

@endsection
