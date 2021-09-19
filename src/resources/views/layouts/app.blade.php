<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DiscoTech') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"
            defer>
    </script>
    <script type="text/javascript">
        // Fix for Firefox autofocus CSS bug
        // See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951

    </script>
    <script type="text/javascript" src={{ asset('js/app.js') }} defer>
    </script>
</head>

<body>
<main>
    <header style="background-color: #571f70" class="card-header">
        <nav class="navbar navbar-expand-md">
            <div class="navbar w-100 order-1 order-md-0 ">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}"><img
                                src="{{ asset('images/logo.png') }}" width="150" height="25" alt="Home Page"></a>
                    </li>
                </ul>
            </div>
            <div class="navbar w-100 order-3 ">
                <ul class="navbar-nav ms-auto">
                    <form id="searchData_icon" action="{{url('search')}}">
                        <li ><input  type="text" placeholder="Search..." name="searchData"></li>
                    </form>

                    <li id="wishlist_icon" class="nav-item">
                        <a class="nav-link" href="../myprofile/wishlist"><img src="{{ asset('images/favourites.png') }}" width="25"
                                height="25" alt="Wishlist"></a>
                    </li>


                    <li class="nav-item dropdown">
                        <a style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown_icon"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/profile.png') }}" width="25" height="25" alt="Profile">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (Auth::check())
                                <li><a class="dropdown-item" href="../myprofile">My Profile</a></li>
                                @if(Auth()->user()->is_admin)
                                <li><a class="dropdown-item" href="../admin_manage_users">Manage</a></li>
                                @endif
                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>

                            @else
                                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                            @endif
                            </ul>
                        </li>

                        <li id="cart_icon" class="nav-item">
                            <div class="my_cart_wrapper">
                                <div class="my_cart_button">
                                    <img src="{{ asset('images/mycart.png') }}" width="25" height="25" alt="" class="img-responsive">
                                </div>
                                <div class="my_cart_popup">

                                <br>

                                <table style="width:100%;">

                                <?php $total = 0; $shipping = 5;
                                if(session()->has('totalarr')){
                                  $total = session()->get('totalarr')['total'];
                                  $shipping = session()->get('totalarr')['shipping'];
                                }
                                ?>



                                @if(session()->has('cart'))
                                <?php
                                $cart = session()->get('cart');
                                 ?>

                                    @foreach( session()->get('cart') as $item)

                                    <tr>
                                    @if($item['quantity']>0)
                                        <th><img width="75" height="75" src="./images/{{ $item['photo'] }}" data-holder-rendered="true"></th>
                                        <th width="75">{{$item['name']}}</th>
                                        <th>{{$item['type']}}</th>
                                        <th>{{$item['quantity']}}</th>

                                        <th><a style="color:purple; text-decoration:none" href="{{ route('basket.increaseQty', $item['id'])}}"> +</a></th>
                                        <th><a style="color:purple; text-decoration:none" href="{{ route('basket.decreaseQty', $item['id'])}}"> -</a></th>
                                    </tr>

                                    @endif

                                    @endforeach
                                @endif


                                </table>


                                    <div class="my_cart_shipping clearfix">

                                      @if(isset($cart) && count($cart)>0)
                                          <div class="left">Shipping <br><i>(free above 25€)</i></div>
                                          @if($shipping==0)
                                          <div class="right">FREE</div>
                                          @endif
                                          @if($shipping!=0)
                                          <div class="right">€{{ $shipping }}</div>
                                          @endif
                                      @endif

                                    </div>
                                    <div class="my_cart_subtotal clearfix">
                                      @if(isset($cart) && count($cart)>0)
                                        <div class="left">Total</div>
                                        <div class="right">€{{ $total + $shipping }}</div>
                                      @endif


                                </div>
                                <a href="{{ route('basket.clearBasket') }}" class="my_cart_check_out">Clear Cart</a>
                                <br>
                                <a href="{{ url('/checkout') }}" class="my_cart_check_out">Checkout</a>
                </ul>
                </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="content">
        @yield('content')
    </section>

    <footer style="position: relative; bottom: 0; width: 100%; height: 2.5rem;  ">
        <nav style="background-color: #571f70" class="navbar navbar-expand-md">
            <div class="navbar w-100 order-1 order-md-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a style="color: white" class="nav-link" href="#">@2021 Copyright All Rights
                            Reserved</a>
                    </li>

                </ul>
            </div>
            <div class="mx-auto order-0">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/homepage') }}"><img src="{{ asset('images/logo.png') }}"
                                                                               width="150" height="25"
                                                                               alt="Profile"></a>
                    </li>
                </ul>
            </div>
            <div class="navbar w-100 order-3">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ url('/contacts') }}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
</main>
</body>

</html>
