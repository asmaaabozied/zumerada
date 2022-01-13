@extends('master')

@section('content')

    <div class="container forth-section">
        @if($products->count()>0)
        <div class="row s3-product-row">
            @foreach($products as $product)

            <div class="col-lg-3">
                <div class="product-card">
                    <a href="{{route('showproduct',$product->id)}}">
                        <div class="product-card-img product-category-img"
                             style="background-image: url({{asset('uploads/'.$product->image)}})">
                            <a class="favouritess" id="favouritess{{$product->id}}" data-id="{{$product->id}}"><i class=" @if($product->favorites->count()>0) fas @else far @endif fa-heart slide__heart "></i></a>

                        </div>
                    </a>
                    <div class="product-card-info">
                        <h3 class="product-name" _msthash="1549548" _msttexthash="181701" style="direction: ltr;">
                          {{$product->name}}
                        </h3>
                        <div class="rating rating2" style="direction: ltr;">
                            <font _mstmutation="1" _msthash="1617980" _msttexthash="5693805"><a href="#5"
                                                                                                title="Give 5 stars"
                                                                                                _mstmutation="1">★</a>
                                <a href="#4" title="Give 4 stars" _mstmutation="1">★</a>
                                <a href="#3" title="Give 3 stars" _mstmutation="1">★</a>
                                <a href="#2" title="Give 2 stars" _mstmutation="1">★</a>
                                <a href="#1" title="Give 1 star" _mstmutation="1">★</a></font>
                        </div>
                        <div class="sale-prices"><h3 class="price" _msthash="1925261" _msttexthash="38194"> {{$product->showPrice()}}</h3>
                            <h3 class="price old-price" _msthash="1925262" _msttexthash="15249">{{$product->showPreviousPrice()}}</h3></div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

            <div class="row">
                <div class="col-5"></div>
                <div class="col-6">

                    <center>
                        {{ $products->appends(request()->query())->links() }}
                    </center>
                </div>

            </div>

        @else
            <br><br>

            <div class="alert-danger form-control"> {{trans('site.no_data_found')}}</div>
            <br><br>
        @endif

    </div>
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
