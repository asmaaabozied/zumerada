@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.currencies')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.currencies.index') }}"> @lang('site.currencies')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.edit')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.currencies.update', $category->id) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group col-lg-6">
                            @if(count(config('translatable.locales'))>1)
                                <label>@lang('site.' . $locale . '.name')</label>
                        @else
                        <label>@lang('site.name')</label>
                        @endif
                                <input type="text" name="{{ $locale }}[name]" class="form-control" value="{{ $category->translate($locale)->name }}">
                            </div>
                        @endforeach

                        <div class="form-group col-lg-6">
                            <label>@lang('site.sign')</label>

                            <input type="text" name="sign" class="form-control" value="{{$category->sign}}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>@lang('site.value')</label>

                            <input type="text" name="value" class="form-control" value="{{$category->value}}">
                        </div>

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group col-lg-6">
                                @if(count(config('translatable.locales'))>1)
                                    <label>@lang('site.' . $locale . '.description')</label>
                                @else
                                    <label>@lang('site.description')</label>
                                @endif


                                    <textarea class="textarea" name="{{ $locale }}[description]" row="5"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $category->translate($locale)->description }}</textarea>
                            </div>
                        @endforeach

                        <div class="form-group col-lg-6">
                            <label>@lang('site.key')</label>

                            <input type="text" name="key" class="form-control"  value="{{$category->key}}" >
                        </div>

                        <br><br><br>

                        <div class="form-group  col-lg-6">
                            <br><br><br>
                            <button type="button" class="btn btn-warning mr-1"
                                    onclick="history.back();">
                                <i class="fa fa-backward"></i> @lang('site.back')
                            </button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
