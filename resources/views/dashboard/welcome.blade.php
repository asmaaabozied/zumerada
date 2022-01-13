@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.dashboard')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>

        <section class="content">
            @if (auth()->user()->hasPermission('read_roles'))

            <div class="row">


                <div class="col-lg-4 col-xs-6">
                    <div class="small-box bg-aqua" style="background-color: #2255a4!important;">
                        <div class="inner">
                            <h3>{{ $products }}</h3>

                            <p>@lang('site.products')</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('dashboard.products.index') }}" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-4 col-xs-6">
                    <div class="small-box bg-blue"  style="background-color: #d62a52!important;">
                        <div class="inner">
                            <h3>{{ $users_count }}</h3>

                            <p>@lang('site.users')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{ route('dashboard.users.index') }}" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                    <div class="small-box bg-red"  style="background-color: #008000!important;">
                        <div class="inner">
                            <h3>{{$catogery}}</h3>

                            <p>@lang('site.categories')</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-futbol-o"></i>
                        </div>

                        <a href="{{ route('dashboard.catogeries.index') }}" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div><!-- end of row -->

                <div class="row">


                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-aqua" style="background-color: #ee081b!important;">
                            <div class="inner">
                                <h3>{{ \Modules\Pages\Entities\Page::count() }}</h3>

                                <p>@lang('site.pages')</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <a href="{{ route('dashboard.pages.index') }}" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-blue"  style="background-color: rgba(94,17,238,0.89)!important;">
                            <div class="inner">
                                <h3>{{ \App\Order::count() }}</h3>

                                <p>@lang('site.orders')</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="{{ route('dashboard.orders.index') }}" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <div class="small-box bg-red"  style="background-color: #d70be7!important;">
                            <div class="inner">
                                <h3>{{\App\Offer::count()}}</h3>

                                <p>@lang('site.offers')</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-futbol-o"></i>
                            </div>

                            <a href="{{ route('dashboard.offers.index') }}" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div><!-- end of row -->

            @endif

                <div class="row">


                    <div class="col-md-12 col-lg-12 col-xl-12" >
                        <div class="card" style="background-color:#88c5e8">
                            <h5 class="card-header"> @lang('site.clients')</h5>
                            <div class="card-body">

                                <div class="my-table-responsiv">
                                    <table class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>@lang('site.name')</th>
                                            <th>@lang('site.email')</th>
                                            <th>@lang('site.date')</th>
                                            <th>@lang('site.phone')</th>
                                            <th>@lang('site.image')</th>
                                        </tr>
                                        @foreach(\App\User::latest()->paginate(5) as $user)
                                        <tr>
                                            <td>{{$user->first_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td> <img src="{{asset('uploads/'.$user->image)}}" width="100px" height="100px"></td>
                                            <td>

                                            </td>
                                        </tr>
                                        @endforeach
                                        </thead>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        </section><!-- end of content -->




    </div><!-- end of content wrapper -->


@endsection

