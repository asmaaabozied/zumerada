@extends('master')

@section('content')

    <div class="container product-page-wrap">
        <div class="product-page">

            <div class="product-page-inner">
                <div class="card">
                    <div class="row row-card">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse">
                                <div class="main_image">
                                    <i class="fas fa-heart main-img-heart"></i>
                                    <img src="{{asset('uploads/'.$product->image)}}" id="main_product_image" width="">

                                </div>
                                <div class="thumbnail_images">
                                    <ul id="thumbnail">
                                        <li><img class="thumbnail-product-mini" onclick="changeImage(this)"
                                                 src="{{asset('uploads/'.$product->image)}}" width=""></li>
                                        <li><img class="thumbnail-product-mini" onclick="changeImage(this)"
                                                 src="{{asset('uploads/'.$product->image)}}" width=""></li>
                                        <li><img class="thumbnail-product-mini" onclick="changeImage(this)"
                                                 src="{{asset('uploads/'.$product->image)}}" width=""></li>
                                        <li><img class="thumbnail-product-mini" onclick="changeImage(this)"
                                                 src="{{asset('uploads/'.$product->image)}}" width=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <div class="main_image customer-opinins-div">
                                    <div class="customers-opinins" style="direction: ltr;"><font _mstmutation="1"
                                                                                                 _msthash="2883738"
                                                                                                 _msttexthash="373204">
                                            @lang('site.customer opinions') <span _mstmutation="1" _istranslated="1">(3)</span></font>
                                        <div class="rating rating2" style="direction: ltr;">
                                            <font _mstmutation="1" _msthash="3385915" _msttexthash="5693805"><a
                                                    href="#5" title="Give 5 stars" _mstmutation="1">★</a>
                                                <a href="#4" title="Give 4 stars" _mstmutation="1">★</a>
                                                <a href="#3" title="Give 3 stars" _mstmutation="1">★</a>
                                                <a href="#2" title="Give 2 stars" _mstmutation="1">★</a>
                                                <a href="#1" title="Give 1 star" _mstmutation="1">★</a></font>
                                        </div>
                                    </div>

                                </div>
                                <div class="thumbnail_images">
                                    <ul id="thumbnail placeholder-thumbnail">
                                        <li><img class="thumbnail-product-mini" onclick="changeImage(this)" src=""
                                                 width=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 right-side">
                                <div class="d-flex product-name-rating">
                                    <h4 _msthash="2795663" _msttexthash="183742"
                                        style="direction: ltr; text-align: left;">{{$product->name}}</h4>
                                    <div class="rating rating2" style="direction: ltr;">
                                        <font _mstmutation="1" _msthash="2883959" _msttexthash="5693805"><a href="#5"
                                                                                                            title="Give 5 stars"
                                                                                                            _mstmutation="1">★</a>
                                            <a href="#4" title="Give 4 stars" _mstmutation="1">★</a>
                                            <a href="#3" title="Give 3 stars" _mstmutation="1">★</a>
                                            <a href="#2" title="Give 2 stars" _mstmutation="1">★</a>
                                            <a href="#1" title="Give 1 star" _mstmutation="1">★</a></font>
                                    </div>
                                </div>
                                <div class="mt-2 pr-3 content">
                                    <p class="product-page-description" _msthash="2721979" _msttexthash="33307274"
                                       style="direction: ltr; text-align: left;">
                                        {{$product->description}}
                                    </p>
                                </div>
                                <h4 class="product-page-price" _msthash="2340624" _msttexthash="38194"
                                    style="text-align: left;">{{$product->showPrice()}}</h4>
                                <h4 class="quantity" _msthash="2340754" _msttexthash="122694"
                                    style="direction: ltr; text-align: left;">@lang('site.quantity')</h4>
{{--                                <div id="field1">--}}
{{--                                    <button type="button" id="sub" class="sub">-</button>--}}
{{--                                    <input class="quantity-number" type="number" id="1" value="1" min="1" max="">--}}
{{--                                    <button type="button" id="add" class="add">+</button>--}}

{{--                                </div>--}}
                                <div class="buttons d-flex buy-buttons-wrap">
                                    <button  style="background-color:white " id="addtobasket" class="btn buy-button add-to-fav-btn btn-block"  onclick="window.location.href={{route('cart',$product->id)}};">

                                        <a href="{{route('cart',$product->id)}}" ><p class="add-basketp" _msthash="275171" _msttexthash="273338"
                                           style="direction: ltr;">@lang('site.add to the basket')</p>
                                    </a>
                                        <i class="fas fa-shopping-cart basket-add" style="color: #1a2226"></i>
                                    </button>


                                    <button id="addtofav" class="btn buy-button add-to-fav-btn">
                                        <font _mstmutation="1"
                                                                                                      _msthash="115661"
                                                                                                      _msttexthash="398281"
                                                                                                      style="direction: ltr;">
                                            @lang('site.add to your favorites') </font>


                                            <a class="favouritess" id="favouritess{{$product->id}}" data-id="{{$product->id}}"><i class=" @if($product->favorites->count()>0) fas @else far @endif fa-heart basket-fav"></i></a>




                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="related-products">
            <h3 class="related-products-title" _msthash="663117" _msttexthash="296556" style="direction: ltr; text-align: left;">@lang('site.related products')</h3>
            <div class="row s3-product-row">
                @foreach(\App\Product::where('catogery_id',$product->catogery_id)->paginate(4) as $prod)
                <div class="col-lg-3">
                    <div class="product-card">
                        <a  href="{{route('showproduct',$prod->id)}}"><div class="product-card-img product-category-img" style="background-image: url({{asset('uploads/'.$prod->image)}})">
                                {{--                            <i class="fas fa-heart"></i>--}}
                                <a class="favouritess" id="favouritess{{$prod->id}}" data-id="{{$prod->id}}"><i class=" @if($prod->favorites->count()>0) fas @else far @endif fa-heart slide__heart "></i></a>

                            </div></a>
                        <div class="product-card-info">
                            <h3 class="product-name" _msthash="1925859" _msttexthash="181701" style="direction: ltr;">
                                <a href="{{route('showproduct',$prod->id)}}">
                                    <h3 class="product-name">{{$prod->name ?? ''}}</h3>
                                </a>

                            </h3>
                            <div class="rating rating2" style="direction: ltr;">
                                <font _mstmutation="1" _msthash="2000973" _msttexthash="5693805"><a href="#5" title="Give 5 stars" _mstmutation="1">★</a>
                                    <a href="#4" title="Give 4 stars" _mstmutation="1">★</a>
                                    <a href="#3" title="Give 3 stars" _mstmutation="1">★</a>
                                    <a href="#2" title="Give 2 stars" _mstmutation="1">★</a>
                                    <a href="#1" title="Give 1 star" _mstmutation="1">★</a></font>
                            </div>
                            <h3 class="price" _msthash="1926119" _msttexthash="38038">{{$prod->showPrice() ?? ''}}</h3>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </div>

@endsection
@section('scripts')
    <script>
    function addToCart(form_id) {
    $.ajax({
    type: "POST",
    url: "{{ LaravelLocalization::localizeURL(url('/cart')) }}",
    data: $('#' + form_id).serialize(),
    dataType: "json",
    success: function (res) {
    if (res.message == "Done") {
    $('#addToCartModal').modal('show');
    $('.cart_counter').show();
    $('.cart_counter').html(res.cart_counter);
    }
    }
    });
    }
    </script>


@endsection
