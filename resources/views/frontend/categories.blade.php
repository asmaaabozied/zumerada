
@extends('master')

@section('content')



    <!---products-section---------->
    <div class="container forth-section">
        <div class="row s3-product-row">

            @foreach($categories as $category)
            <div class="col-lg-3">
                <div class="product-card">
                    <div class="product-card-img product-category-img" style="background-image: url({{asset('uploads/'.$category->icons)}})">

                        </div>

                    <div class="product-card-info">
                        <a href="{{route('storecategories', $category->id)}}">
                        <h3 class="product-name">{{$category->name}}</h3>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="row">
            <div class="col-5"></div>
            <div class="col-6">

                <center>
                    {{ $categories->appends(request()->query())->links() }}
                </center>
            </div>

        </div>
    </div>


@endsection
