
@extends('master')

@section('content')
    <div class="container forth-section">
        <div class="row s3-product-row">
            <div class="store-cat">

            </div>
            @foreach($sellers as $seller)
                @if(!empty($seller->productseller))
                @foreach($seller->productseller as $product)
            <div class="col-lg-3">
                <div class="product-card">
                    <a href="{{route('showproduct',$product->id)}}"><div class="product-card-img product-category-img" style="background-image: url({{asset('uploads/'.$product->image)}})">
                            <a class="favouritess" id="favouritess{{$product->id}}" data-id="{{$product->id}}"><i class=" @if($product->favorites->count()>0) fas @else far @endif fa-heart slide__heart "></i></a>


                        </div></a>
                    <div class="product-card-info">
                        <a href="{{route('showproduct',$product->id)}}">
                            <h3 class="product-name">{{$product->name}}</h3>
                        </a>
                        <div class="rating rating2" style="direction: ltr;">
                            <font _mstmutation="1" _msthash="1618357" _msttexthash="5693805"><a href="#5" title="Give 5 stars" _mstmutation="1">★</a>
                                <a href="#4" title="Give 4 stars" _mstmutation="1">★</a>
                                <a href="#3" title="Give 3 stars" _mstmutation="1">★</a>
                                <a href="#2" title="Give 2 stars" _mstmutation="1">★</a>
                                <a href="#1" title="Give 1 star" _mstmutation="1">★</a></font>
                        </div>
                        <h3 class="price" _msthash="1550172" _msttexthash="38038">{{$product->showPrice()}}</h3>
                    </div>
                </div>
            </div>

            @endforeach
                @endif
            @endforeach
        </div>

        <div class="row">
            <div class="col-5"></div>
            <div class="col-6">

                <center>
                    {{ $sellers->appends(request()->query())->links() }}
                </center>
            </div>

        </div>
    </div>



@endsection
