
@extends('master')

@section('content')


    <div class="container">
        @if($products->count()>0)
@foreach($products as $product)
        <div class="order row order-shopping-cart added-product-row">
            <div class="col-lg-3 added-product-img" style="">
                <img src="{{asset('uploads/'.$product->image)}}" style="width: 100%; height: 100%;"></div>
            <div class="order-details col-lg-9">
                <p class="shopping-cart-order-name" _msthash="878163" _msttexthash="183742" style="direction: ltr; text-align: left;">{{$product->name}}</p>
                <p class="shopping-cart-order-p" _msthash="878280" _msttexthash="38194" style="direction: ltr; text-align: left;">{{$product->showPrice()}}</p>
            </div>
            <a href="{{route('deletefavourite',$product->id)}}">
            <i class="fas fa-times shopping-cart-order-delete"></i>
            </a>
        </div>


@endforeach



        @else

            <br><br>

            <div class="alert-danger form-control"> {{trans('site.no_data_found')}}</div>
            <br><br>

        @endif

    </div>




@endsection
