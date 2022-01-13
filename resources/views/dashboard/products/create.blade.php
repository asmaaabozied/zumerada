@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.products')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.products.index') }}"> @lang('site.products')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="row">
                            @foreach (config('translatable.locales') as $locale)
                                <div class="form-group col-md-6">
                                    @if(count(config('translatable.locales'))>1)
                                        <label>@lang('site.' . $locale . '.name')</label>
                                    @else
                                        <label>@lang('site.name')</label>
                                    @endif
                                    <input type="text" name="{{ $locale }}[name]" class="form-control" value="{{ old($locale . '.name') }}">
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">

                                <label>@lang('site.price')</label>
                                <input type="text" name="price" class="form-control">


                            </div>



                            <div class="form-group col-md-6">

                                <label>@lang('site.categories')</label>

                                <select class="form-control select2" name="catogery_id" id="parent" required>
                                    <option value="" disabled selected hidden>@lang('site.pleaseChoose')  ... </option>

                                    @foreach($catogeries as $id => $item)
                                        <option value="{{$id}}" >{{$item}}</option>
                                    @endforeach
                                </select>


                            </div>

                        </div>

                        <div class="row">
                            @foreach (config('translatable.locales') as $locale)
                                <div class="form-group col-md-6">
                                    @if(count(config('translatable.locales'))>1)
                                        <label>@lang('site.' . $locale . '.description')</label>
                                    @else
                                        <label>@lang('site.description')</label>
                                    @endif
                                    <textarea class="textarea" name="{{ $locale }}[description]" row="5"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old($locale . '.description') }}</textarea>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">

                            <div class="form-group col-sm-6 ">
                                {{--                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title=" {{ trans('category.fields.image_help') }}"></i> &nbsp;--}}
                                <label>@lang('site.image')</label>


                                <input type="file" onchange="readURL(this, 'ImagePreview', 'ImagePreview');" name="image" class="form-control image" required >
                            </div>

                            <div class="form-group col-sm-6">
                                <img src="{{ asset('public/uploads/image') }}" style="width: 100px"
                                     class="img-thumbnail image-preview" alt="">
                            </div>

                        </div>


<div class="row">

    <div class="form-group col-md-6">
        <label>@lang('site.images')</label>
        <input type="file" class="form-control"  name='images[]'>
    </div>
{{--                                <div class="form-group col-sm-6">--}}
{{--                                    <img src="{{ asset('public/uploads/images') }}" style="width: 100px"--}}
{{--                                         class="img-thumbnail image-preview" alt="">--}}
{{--                                </div>--}}
</div>


                        <div class="row">
                            <div class="form-group col-md-6">


                                <input  type="checkbox" name="common"  value="1" >
                                <label>common</label>
                            </div>
                        </div>

                        <div class="row">

                            <label for="">{{trans('site.USe Currency')}}</label>

                            <input type="checkbox" name="use_currency" id="use_currency" value="1"
                                   onclick="show_checked()" checkes="false">

                            @foreach(\App\Models\Currency::get() as $currency)
                                <input type="hidden" name="currency_id[]" value="{{$currency->id}}">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <h4 class="heading">{{trans('site.price')}}{{$currency->name}}</h4>

                                        <input type="text" name="currency[]" id="{{$currency->key}}"
                                               data-value="{{$currency->value}}"
                                               class="form-control currecny" data-key="{{$currency->key}}"
                                               onkeyup="Checkedkeyed(this)">
                                    </div>
                                </div>
                            @endforeach
<br><br>
                        </div>


<div class="row">

                         <div class="form-group col-md-6">

                             <button type="button" class="btn btn-warning mr-1"
                                     onclick="history.back();">
                                 <i class="fa fa-backward"></i> @lang('site.back')
                             </button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>
</div>
                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection


@section('scripts')

    <script>

        function Checkedkeyed(data) {

            if ($('#use_currency').attr('checkes') == 'true') {

                var use_currency = $("#use_currency").val();


                var currency_from_key = $(data).data('key');
                var price = $(data).val();

                // console.log(change_currency(currency_from_key,'EGP',price));

                var divs = document.getElementsByClassName('currecny');

                console.log(divs);
                var currency_to_key = '';
                for (let i = 0; i < divs.length; ++i) {
                    currency_to_key = divs[i].getAttribute('data-key');
                    divs[i].value = change_currency(currency_from_key, currency_to_key, price);
                }


                // }

                function change_currency(from_currecny, to_cuurency, price) {
                    let CurrencyJson = @json($currecny_json);

                    return Math.round(CurrencyJson[from_currecny][to_cuurency] * price);
                }
            }
        }

        function show_checked() {
            if ($('#use_currency').attr('checkes') == 'false') {
                // $(this).prop('checked',true);

                $('input[name="use_currency"]').attr('checkes', 'true');


            } else if ($('#use_currency').attr('checkes') == 'true') {

                $('input[name="use_currency"]').attr('checkes', 'false');

            }


            if ($('#use_currency').attr('checkes') == 'true') {

                Checkedkeyed();

                // alert($('#use_currency').attr('checkes'));

            } else if ($('#use_currency').attr('checkes') == 'false') {

                console.log('error');


                // }

            }
        }



    </script>



@endsection

