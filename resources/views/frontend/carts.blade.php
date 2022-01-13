@extends('master')

@section('content')

@if(Session::get('cart')->items)
    <?php $total = 0; ?>
    <div class="container shopping-cart-page">
        @foreach(Session::get('cart')->items as $product)
        <div class="order row order-shopping-cart">
            <div class="col-lg-3" style="width: 15%; text-align: center; max-height: 220px;">
                <img src="{{asset('uploads/'.$product['item']->image ?? '')}}" style="width: auto; height: 100%;"></div>
            <div class="order-details col-lg-9">
                <p class="shopping-cart-order-name" _msthash="878163" _msttexthash="183742" style="direction: ltr; text-align: left;">{{$product['item']->name ?? ''}}</p>
                <p class="shopping-cart-order-p" style="direction: ltr; text-align: left;"><font _mstmutation="1" _msthash="878280" _msttexthash="130624">@lang('site.price'): <span _mstmutation="1" _istranslated="1">{{$product['item']->showPrice() ?? ''}}</span></font> </p>
{{--                <p class="shopping-cart-order-p" _msthash="878397" _msttexthash="324857" style="direction: ltr; text-align: left;">store: <span _istranslated="1"> <a href="#" _istranslated="1">lorem ipsum</a> </span></p>--}}
            </div>

            <a class="favouritess" id="favouritess{{$product['item']->id}}" data-id="{{$product['item']->id}}"><i class=" @if($product['item']->favorites->count()>0) fas @else far @endif fa-heart shopping-cart-order-fav "></i></a>

{{--            <a  href="{{route('removecart',$product['item']->id)}}">  <i class="fas fa-times shopping-cart-order-delete"></i></a>--}}

        </div>
            <?php $total += $product['item']->showPriceWithoutCurrency() ?? 0?>
        @endforeach
        <div class="col-3">
            <p class="shopping-cart-total" _msthash="629278" _msttexthash="132704" style="direction: ltr; text-align: left;">@lang('site.total'): <span _istranslated="1">{{\App\Models\Currency::where('is_default', '=', 1)->first()->sign ?? ''}}{{$total}} </span></p>

            <div class="coupon">
                <form>
                    <div class="form-group coupon"> <label _msthash="1814072" _msttexthash="159692" style="direction: ltr; text-align: left;">@lang('site.add a coupon')</label>
                        <div class="input-group"> <input type="text" class="form-control coupon-input" name=""> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon-btn" _msthash="2834611" _msttexthash="133263" style="direction: ltr;">@lang('site.take place')</button> </span> </div>
                    </div></form>
            </div>
            <button class="pay-shopping-cart payment" href="{{route('payment')}}" onclick="location.href='{{route('payment')}}'" _msthash="848536" _msttexthash="166244" style="direction: ltr;">@lang('site.payment')</button>
        </div>





    </div>

@endif

@endsection
