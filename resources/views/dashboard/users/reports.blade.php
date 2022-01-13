@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')
                    </a></li>
                <li class="active">@lang('site.users')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">@lang('site.users')
                        (<small>{{ $users->total() }}</small>)</h3>

                    <form action="{{ route('dashboard.users.index') }}" method="get">

                        <div class="row">

{{--                            <div class="col-md-4">--}}
{{--                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')"--}}
{{--                                       value="{{ request()->search }}">--}}
{{--                            </div>--}}

{{--                            <div class="col-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary"><i--}}
{{--                                        class="fa fa-search"></i> @lang('site.search')</button>--}}

{{--                            </div>--}}

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body table-responsive no-padding on-overflow-x minHeight">

                    @if ($users->count() > 0)
                        <table class="table table-hover" id="table">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.fname')</th>
                                <th>@lang('site.lname')</th>
                                <th>@lang('site.phone')</th>
                                <th>@lang('site.email')</th>


                                <th>@lang('site.created_at')</th>


                                {{--                                <th>@lang('site.image')</th>--}}
                                <th>@lang('site.status')</th>
                                @if (auth()->user()->hasPermission('update_admins','delete_admins'))

                                    <th>@lang('site.action')</th>
                                @endif
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($users as $index=>$user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->first_name  ?? ''}}</td>
                                    <td>{{ $user->last_name ?? ''}}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>



                                    <td>{{isset($user->created_at) ? $user->created_at->diffForHumans() :'' }}</td>



                                @if( $user->status==0)
                                        <td style="margin: 5px;" class="badge bg-red">@lang('site.inactive')</td>
                                    @elseif( $user->status==1)
                                        <td style="margin: 5px;" class="badge bg-green">@lang('site.active')</td>
                                    @endif

                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink4"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                <br>
                                                @if (auth()->user()->hasPermission('update_admins'))
                                                    <form action="{{ route('dashboard.users.block', $user->id) }}"
                                                          method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('POST') }}

                                                        @if( $user->status==1)
                                                            <button type="submit" class="btn btn-warning update btn-sm">
                                                                <i class="fa fa-ban"></i> @lang('site.block')
                                                            </button>
                                                        @elseif( $user->status==0)
                                                            <button type="submit" class="btn btn-default update btn-sm">
                                                                <i class="fa fa-user"></i> @lang('site.activate')
                                                            </button>
                                                        @endif

                                                    </form><!-- end of form -->
                                                    {{-- @else
                                                    <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('site.block')</button> --}}
                                                @endif
                                                <br>
                                                @if (auth()->user()->hasPermission('delete_admins'))
                                                    <form action="{{ route('dashboard.users.destroy', $user->id) }}"
                                                          method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button type="submit" class="btn btn-danger delete btn-sm"><i
                                                                class="fa fa-trash"></i> @lang('site.delete')</button>
                                                    </form><!-- end of form -->
                                                    {{-- @else
                                                    <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('site.delete')</button> --}}
                                                @endif

                                            </div>
                                        </div>

                                    </td>


                                </tr>

                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        <div style="text-align:center;">
                            {{ $users->appends(request()->query())->links() }}
                        </div>

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
