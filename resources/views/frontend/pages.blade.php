
@extends('master')

@section('content')
    <!------------->
    <div class="container who-are-we-section">
        <div class="row">

            <p class="subpage-title text-center">{{$pages->name ?? ''}}</p>
            <div class="">
                <p class="subpage-title">{{$pages->title ?? ''}}</p>

                <p class="subpage-title">

                    {{$pages->content ?? ''}}
                </p></div>

        </div>
    </div>
    <!-----who-are-we-------->
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
