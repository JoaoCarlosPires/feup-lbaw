@extends('layouts.app')

@section('content')

<head>
  <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
</head>
<section class="py-5 container text-left" id="aboutUs">
    <div class="row g-5">
      <div id="homepage_image" class="col-lg-4">
        <img src="./images/vinyl_homepage.png" class="img-fluid" alt="Vinyl disc"></a>
      </div>
      <div class="col-lg-8">
        <h1 style="color: #571f70">This week's highlights</h1>
        <br>
        <p style="color: #571f70" class="fs-2">This week's highlights are U2 and Ed Sheeran.</p>


        <a href="catalog">
        <button style="border-color: #571f70; background-color: #571f70; color: white" type="button"
          class="btn btn-primary">
          Tell me more!
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
            Add itemBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
            </path>
          </svg>
        </button></a>
      </div>
    </div>

    @if (Auth::check())
    <h1 style="color: #571f70" class="text-center">Suggestions</h1>
    <h5 style="color: #571f70" class="text-center">Welcome back <b>{{auth()->user()->name}}</b>, we suggest a selection of recent discs for you.</h5>
    @else
    <h1 style="color: #571f70" class="text-center">Top Sales</h1>
    <h5 style="color: #571f70" class="text-center">Based on our clients ratings, we present our top sales. </h5>
    @endif

      <div id="container1" class="container">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-4 g-1">
          @each('partials.product', $product->slice(0, 10), 'product')
        </div>
      </div>

    <br></br>
    <h1 style="color: #571f70" class="text-center">Latest arrivals</h1>
    <h4 style="color: #571f70" class="text-center">Based on the last published products, we present our latest arrivals.
    </h4>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-4 g-1">
        @each('partials.product', $product->slice(11, 20), 'product')
        </div>
      </div>
    </div>
</section>
@endsection
