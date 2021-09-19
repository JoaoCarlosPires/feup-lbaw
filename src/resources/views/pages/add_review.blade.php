@extends('layouts.app')

@section('content')


    <head>
        <title>Discotech | New Comment</title>
        <!--CSS Bootstrap-->
        <link rel="stylesheet" href="./css/footer.css">
        <link href="./css/style2.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous"
                defer></script>



        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>

    <body>
    <div class="container">

        <div class="container">
            {{--        @foreach($products as $product)--}}


            <div class="row d-flex align-items-start">
                <h1 class="col mt-5">What do you think about this product?</h1>
                <div class="row">
                    <img src="../images/{{ $product->picture }}"  height="400" class="img-fluid col-sm-3"
                         style="width: auto; height: 225px;">
                    <div class="details col">
                        <h5></h5>
                        <h3>{{$product->name}}</h3>
                        <h8><i>{{$product->type}}</i></h8>
                    </div>
                </div>

                <div class="row">
                    <h6 class="col">Your overall rating</h6>
                </div>


{{--                <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--                <title>Star Rating Script in PHP</title>--}}
{{--                <link href="./html/css/star-rating-style.css" type="text/css"--}}
{{--                      rel="stylesheet"/>--}}
{{--                <script src="./vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>--}}
{{--                </head>--}}

{{--                <body>--}}
{{--                <div class="phppot-container">--}}
{{--                    <div class="container">--}}
{{--                        <h2>Star Rating Script in PHP</h2>--}}
{{--                        <div id="course_list">--}}
{{--                            <!--                        --><?php //require_once "getRatingData.php"; ?>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <script src="./public/js/rating.js"></script>--}}


                {{--            <div class="stars col">--}}
                {{--                <div class="icons">--}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
                {{--                         class="bi bi-star" viewBox="0 0 16 16">--}}
                {{--                        <path--}}
                {{--                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                {{--                    </svg>--}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
                {{--                         class="bi bi-star" viewBox="0 0 16 16">--}}
                {{--                        <path--}}
                {{--                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                {{--                    </svg>--}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
                {{--                         class="bi bi-star" viewBox="0 0 16 16">--}}
                {{--                        <path--}}
                {{--                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                {{--                    </svg>--}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
                {{--                         class="bi bi-star" viewBox="0 0 16 16">--}}
                {{--                        <path--}}
                {{--                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                {{--                    </svg>--}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
                {{--                         class="bi bi-star" viewBox="0 0 16 16">--}}
                {{--                        <path--}}
                {{--                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />--}}
                {{--                    </svg>--}}
                {{--                </div>--}}
                {{--            </div>--}}


                <div class="row">
                    <div class="wrapper2">
                        <div class="mb-3">
{{--                            <form method="post" action="{{route('rateProduct.addReview', [$product->id, 10]) }} value="{{ csrf_token() }}"">--}}
{{--                                {{ csrf_field() }}--}}
                            <form method="post" value="{{ csrf_token() }}" action="{{route('rateProduct.addReview', [$product->id, 10]) }}" >
                                @csrf

                                <label>
                                    <input type="radio" name="radio" value="5">5
                                </label>
                                <label>
                                    <input type="radio" name="radio" value="4">4
                                </label>
                                <label>
                                    <input type="radio" name="radio" value="3">3
                                </label>
                                <label>
                                    <input type="radio" name="radio" value="2">2
                                </label>
                                <label>
                                    <input type="radio" name="radio" value="1">1
                                </label>

{{--                                <input type="submit" name="submit" vlaue="Get Values">--}}

                                <br><br><br>
                                <label for="exampleFormControlTextarea1" class="form-label">Share your thoughts!</label>
                                <textarea class="form-control rounded" id="exampleFormControlTextarea1" rows="3"
                                          placeholder="Tell us about your experiecnce in a couple of sentences" value="comment" name="comment"></textarea>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary mb-5" role="button" style="background-color: #bc72e3">Send</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
