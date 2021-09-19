@extends('layouts.app')

@section('title', 'Catalog')

@section('content')

    <div class="py-5 container">
        <div class="row">
            <div class="col-lg-2">
                {{--                <form method="GET" action="{{action('CatalogController@proCat', 'Disc')}}" role="search">--}}
                <form action="{{url('find')}}" method="GET">
                    <div class="mb-3">
                        <select name="type" class="form-select" aria-label="Choose Category">
                            <option id="type" name="type" value="" disabled selected><h3>Select type</h3></option>
                            @foreach($categories as $category)
                                <option id="type" name="type" value="{{$category->type}}"><h3>{{$category->type}}</h3>
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="customRange2" class="form-label">Price</label>
{{--                        <input type="range" class="form-range" min="0" max="1000" id="customRange2">--}}
                        <input type="range" class="form-range" min="0" max="300" id="customRange2" value="" oninput="this.nextElementSibling.value = this.value" name="price">
                        <output>150</output>

                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">ARTIST/BAND</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Coldplay">
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">BRAND</label>
                        <select name="brand" class="form-select" aria-label="Choose Brand">
                            <option value="" disabled selected><h3>Choose brand</h3></option>
                            @foreach($categories as $category)
                                <option><h3>{{$category->brand}}</h3></option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">RATING</label>
                        <select class="form-select" aria-label="Choose Rating" name="star">

                            <option selected disabled>_________</option>
                            <option value="5" id="star" name="star">5 stars</option>
                            <option value="4" id="star" name="average">4 stars</option>
                            <option value="3" id="star" name="average">3 stars</option>
                            <option value="2" id="star" name="average">2 stars</option>
                            <option value="1" id="star" name="average">1 star</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="customRange2" class="form-label">Release Date</label>
                        <input type="range" class="form-range" min="1950" max="2021" id="customRange2" value="2021" oninput="this.nextElementSibling.value = this.value" name="date">
                        <output>2021</output>

{{--                        <label for="release_date" class="form-label">Release Date </label>--}}
{{--                        <input type="text" class="form-control" id="release_date" name="date"--}}
{{--                               placeholder="27 February 2021">--}}
                    </div>
                    <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                        <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                                name="submit"
                                class="btn btn-primary">FILTER
                        </button>
                    </div>

            </div>
            <div class="album py-5 bg-light col-lg-10">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-3 g-1">

                        @if(count($product)==0)
                            <div class="col-md-12" align="center">
                            <h4 align="center" style="margin:20px">
                                No products found under category </h4>
                                
                        @else

                            @each('partials.product', $product, 'product')
                        @endif
                    </div>
                </div>
            </div>
                </form>
        </div>
    </div>

@endsection
