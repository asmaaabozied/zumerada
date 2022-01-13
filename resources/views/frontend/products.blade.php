
@extends('master')

@section('content')



    <!---products-section---------->
    <div class="container forth-section">
        <div class="row s3-product-row">

            @foreach($products as $product)
            <div class="col-lg-3">
                <div class="product-card">
                    <a  href="{{route('showproduct',$product->id)}}"><div class="product-card-img product-category-img" style="background-image: url({{asset('uploads/'.$product->image)}})">
{{--                            <i class="fas fa-heart"></i>--}}
                            <a class="favouritess" id="favouritess{{$product->id}}" data-id="{{$product->id}}"><i class=" @if($product->favorites->count()>0) fas @else far @endif fa-heart slide__heart "></i></a>

                        </div></a>
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
        <div class="row">
            <div class="col-5"></div>
            <div class="col-6">

                <center>
                    {{ $products->appends(request()->query())->links() }}
                </center>
            </div>

        </div>

    </div>


@endsection
