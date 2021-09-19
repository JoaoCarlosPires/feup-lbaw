@extends('layouts.app')

@section('content')

<head>
    <title>Discotech | Product</title>
    <!--CSS Bootstrap-->
    <link rel="stylesheet" href="./css/footer.css">
    <link href="./css/style2.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"
        defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <div class="container d-flex flex-column">
        <div class="group1">
            <div class="row align-items-start">
                <div class="col">
                    <div class="left-side">
                        <div class="row">
                            <div class="col-sm-5">

                                @foreach ($products as $product)
                                <br>
                                <img class="" height="400"
                                                    src="../images/{{ $product->picture }}">

                            </div>

                            <div class="col">
                                <div class="d-flex flex-column">
                                    <div class="product-details p-2">
                                        <h1 id="title p-2">{{$product->name}}</h1>
                                        <h5>{{$product->type}}</h5>
                                        <p>{{$product->price}},00 €</p>


                                        <div class="row">
                                            <div class="stars d-flex flex-row">
                                                @for ($i = 0; $i < 5; ++$i) <i
                                                    class="fa fa-star{{ $product->average <= $i ? '-o' : '' }} d-flex flex-row p-1"
                                                    aria-hidden="true"></i>
                                                    @endfor
                                            </div>

                                            <p class="opinions-no">({{$product->average}})</p>

                                        </div>
                                        <div class="row mb-5">
                                            <div class="col">
                                                <div class="add-to-basket">
                                                    @if($product->quantity != 0)
                                                    <a class="btn btn-primary add-to-basket d-flex justify-content-center"
                                                        href="{{ route('basket.add', $product->product_id) }}"
                                                        role="button" style="background-color: #571f70">Add
                                                        to
                                                        basket</a>
                                                    @else
                                                    <a class="btn btn-primary add-to-basket d-flex justify-content-center"
                                                        href="#" role="button" style="background-color: gray">Not
                                                        available</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <script
                                                src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
                                            </script>
                                            <script
                                                src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js">
                                            </script>
                                            <link
                                                href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css"
                                                rel="stylesheet" />

                                            <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                                                <div class="container">
                                                    <ul class="nav nav-tabs card-header-tabs" id="tabs">
                                                        <li class="nav-item">
                                                            <a class="active nav-link active" href="#post"
                                                                data-toggle="tab">Product details</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#link"
                                                                data-toggle="tab">Shipping</a>
                                                        </li>
                                                    </ul>
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="post">
                                                                <p>Artist / Band:
                                                                    <strong>{{$product->band_artist}}</strong></p>
                                                                {{--                                                                <p>Genere: <strong>{{$product->albumGenre}}</strong>
                                                                </p>--}}
                                                                <p>Year: <strong>{{$product->year}}</strong></p>
                                                            </div>
                                                            <div class="tab-pane" id="link">
                                                                <p>Free shipping over 25 euro orders. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="group2 row">
            <div class="row d-flex flex-column">

                <div class="col justify-content-start">
                    <div class="col">
                        <div class="reviews">
                            <h2>Ratings and reviews</h2>
                        </div>
                        {{--                        <div class="col-sm-3">--}}
                        {{--                            <div class="progress">--}}
                        {{--                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"--}}
                        {{--                                     aria-valuemax="100"></div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="progress">--}}
                        {{--                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"--}}
                        {{--                                     aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="progress">--}}
                        {{--                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"--}}
                        {{--                                     aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="progress">--}}
                        {{--                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"--}}
                        {{--                                     aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="progress">--}}
                        {{--                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"--}}
                        {{--                                     aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>

                </div>


                <div class="row">
                    {{--                    <div class="rating">--}}
                    {{--                        <div class="col-sm-3">--}}
                    {{--                            <div class="pull-left">--}}
                    {{--                                <div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--                                    <div style="height:9px; margin:5px 0;">5 <span--}}
                    {{--                                            class="glyphicon glyphicon-star"></span-->--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="pull-left">--}}
                    {{--                                    <div class="progress" style="height:7px; margin:8px 0;">--}}
                    {{--                                        <div class="progress-bar progress-bar-success" role="progressbar"--}}
                    {{--                                             aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"--}}
                    {{--                                             style="width: 80%">--}}
                    {{--                                            <span class="sr-only"></span>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <!--          <div class="pull-right" style="margin-left:10px;">1</div>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="pull-left">--}}
                    {{--                                <div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--                                    <div style="height:9px; margin:5px 0;">4 <span--}}
                    {{--                                            class="glyphicon glyphicon-star"></span-->--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="pull-left">--}}
                    {{--                                    <div class="progress" style="height:7px; margin:8px 0;">--}}
                    {{--                                        <div class="progress-bar progress-bar-primary" role="progressbar"--}}
                    {{--                                             aria-valuenow="4" aria-valuemin="0" aria-valuemax="5"--}}
                    {{--                                             style="width: 80%">--}}
                    {{--                                            <span class="sr-only"></span>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <!--          <div class="pull-right" style="margin-left:10px;">1</div>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="pull-left">--}}
                    {{--                                <div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--                                    <div style="height:9px; margin:5px 0;">3 <span--}}
                    {{--                                            class="glyphicon glyphicon-star"></span-->--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="pull-left">--}}
                    {{--                                    <div class="progress" style="height:7px; margin:8px 0;">--}}
                    {{--                                        <div class="progress-bar progress-bar-info" role="progressbar"--}}
                    {{--                                             aria-valuenow="3" aria-valuemin="0" aria-valuemax="5"--}}
                    {{--                                             style="width: 60%">--}}
                    {{--                                            <span class="sr-only"></span>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <!--          <div class="pull-right" style="margin-left:10px;">0</div>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="pull-left">--}}
                    {{--                                <div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--                                    <div style="height:9px; margin:5px 0;">2 <span--}}
                    {{--                                            class="glyphicon glyphicon-star"></span-->--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="pull-left">--}}
                    {{--                                    <div class="progress" style="height:7px; margin:8px 0;">--}}
                    {{--                                        <div class="progress-bar progress-bar-warning" role="progressbar"--}}
                    {{--                                             aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"--}}
                    {{--                                             style="width: 40%">--}}
                    {{--                                            <span class="sr-only"></span>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <!--          <div class="pull-right" style="margin-left:10px;">0</div>-->--}}
                    {{--                            </div>--}}
                    {{--                            <div class="pull-left">--}}
                    {{--                                <div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--                                    <div style="height:9px; margin:5px 0;">1 <span--}}
                    {{--                                            class="glyphicon glyphicon-star"></span-->--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="pull-left">--}}
                    {{--                                    <div class="progress" style="height:7px; margin:8px 0;">--}}
                    {{--                                        <div class="progress-bar progress-bar-danger" role="progressbar"--}}
                    {{--                                             aria-valuenow="1" aria-valuemin="0" aria-valuemax="5"--}}
                    {{--                                             style="width: 20%">--}}
                    {{--                                            <span class="sr-only"></span>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <!--          <div class="pull-right" style="margin-left:10px;">0</div>-->--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    @if(count($reviews)=="0")
                    <p><i>No reviews yet!</i></p>
                    @endif
                    @foreach($reviews as $review)
                    <div class="comments">


                        <div class="line"></div>
                        <label><strong>{{$review->username}}</strong></label>
                        <p style="font-size:70%;">Reviewed on: {{$review->review_date}} </p>
                        <p id="com">{{$review->comment}}</p>
                        <br>
                        <div class="line"></div>
                        @endforeach
                        @endforeach
                        <div class="col justify-content-start">
                            <a href="{{route('rateProduct', $product->product_id)}}" type="button"
                                class="btn btn-primary mb-5" style="background-color: #bc72e3">Add review</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</body>

@endsection
