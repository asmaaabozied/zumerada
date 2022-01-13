@extends('master')

@section('content')

    <div class="container forth-section">
        <div class="row s3-product-row">
            @if($products->count()>0)
            @foreach($products as $product)
               @if($product->offers())
                @if(!empty($product->offers()))
                    @foreach($product->offers as $prod)
            <div class="col-lg-3">
                <div class="product-card" onclick="window.location.href={{route('showproduct',$product->id)}};">
                    <a href="{{route('showproduct',$product->id)}}">
                        <div class="product-card-img product-category-img"
                             style="background-image: url({{asset('uploads/'.$product->image)}})">
                            <a class="favouritess" id="favouritess{{$product->id}}" data-id="{{$product->id}}"><i class=" @if($product->favorites->count()>0) fas @else far @endif fa-heart slide__heart "></i></a>

                        </div>
                    </a>
                    <div class="product-card-info">
                        <a href="{{route('showproduct',$product->id)}}">
                        <h3 class="product-name" _msthash="1549548" _msttexthash="181701" style="direction: ltr;">

                           {{$product->name}}

                        </h3>
                        </a>
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
                            <h3 class="price old-price" _msthash="1925262" _msttexthash="15249">{{$product->showPreviousPrice()}}</h3>
                        </div>
                    </div>
                </div>
            </div>
                    @endforeach
                @endif
                    @endif
            @endforeach
            @endif

        </div>


    </div>


@endsection
