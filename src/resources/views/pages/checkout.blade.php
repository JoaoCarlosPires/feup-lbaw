@extends('layouts.app')

@section('content')
    <section class="py-5 container text-left" id="aboutUs">
        <div class="container px-4 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-5">
                    <h4 class="heading">Shopping Basket</h4>
                </div>
                <div class="col-7">
                    <div class="row text-right">
                        <div class="col-4">
                            <h6 class="mt-2">Type</h6>
                        </div>
                        <div class="col-4">
                            <h6 class="mt-2">Quantity</h6>
                        </div>
                        <div class="col-4">
                            <h6 class="mt-2">Price</h6>
                        </div>
                    </div>
                </div>
            </div>

            <?php $total = 0; $shipping = 5?>
            @if(session()->has('cart'))

                @foreach( session()->get('cart') as $item)

                    @if($item['quantity']>0)
                        <div class="row d-flex justify-content-center border-top">
                            <div class="col-5">
                                <div class="row d-flex">
                                    <div class="book"><img src="./images/{{ $item['photo'] }}" class="book-img"></div>
                                    <div class="my-auto flex-column d-flex pad-left">
                                        <br>
                                        <h6 class="mob-text">{{$item['name']}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="my-auto col-7">
                                <div class="row text-right">
                                    <div class="col-4">
                                        <p class="mob-text">{{$item['type']}}</p>
                                    </div>
                                    <div class="col-4">
                                        <div class="row d-flex justify-content-end px-3">
                                            <h6>{{$item['quantity']}}

                                                <a style="color:red; text-decoration:none"
                                                   href="{{ route('basket.increaseQty', $item['id'])}}">+</a>
                                                <a style="color:red; text-decoration:none"
                                                   href="{{ route('basket.decreaseQty', $item['id'])}}">-</a>
                                            </h6>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="mob-text">€ {{$item['price'] * $item['quantity']}}</h6>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php

                        $total += $item['price'] * $item['quantity'];
                        if ($total >= 25) {
                            $shipping = 0;
                        }
                        ?>
                    @endif
                @endforeach
            @endif

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-7 mt-2">
                                <div class="dropdown">
                                    {{--                                    <button style="background-color: #571f70; border-color: #571f70"--}}
                                    {{--                                            class="btn btn-secondary dropdown-toggle" type="button"--}}
                                    {{--                                            id="dropdownMenuButton1"--}}
                                    {{--                                            data-bs-toggle="dropdown" aria-expanded="false">--}}
                                    {{--                                        Payment Method--}}
                                    {{--                                    </button>--}}
                                    {{--                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
                                    {{--                                        <li><a class="dropdown-item" href="#" name="card" name="card">Credit Card</a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li><a class="dropdown-item" href="#">Paypal</a></li>--}}
                                    {{--                                        <li><a class="dropdown-item" href="#" name="transfer">Bank Transfer</a></li>--}}
                                    {{--                                    </ul>--}}

                                    <p>Payment method: Bank Transfer</p>
                                    <p>Bank account: 1525151548480000254</p>
                                    <p>Title: DiscoTech Store</p>

                                </div>
                            </div>
                            <div class="col-lg-4 mt-2">
                                <div class="row d-flex justify-content-between px-4">
                                    <p class="mb-1 text-left">Subtotal</p>
                                    <h6 class="mb-1 text-right">€{{$total}}</h6>
                                </div>
                                <div class="row d-flex justify-content-between px-4">
                                    <p class="mb-1 text-left">Shipping</p>
                                    @if($shipping!=0)
                                        <h6 class="mb-1 text-right">€{{$shipping}}</h6>
                                    @endif
                                    @if($shipping==0)
                                        <div class="right">FREE</div>
                                    @endif

                                </div>
                                <div class="row d-flex justify-content-between px-4" id="tax">
                                    <p class="mb-1 text-left">Total (tax included)</p>
                                    <h6 class="mb-1 text-right">€{{$total + $shipping}}</h6>
                                </div>
                                <div>
                                <br>
                                <form action="GET" name="submit">
                                    <a href="{{ route('createOrder')}}"
                                       style="background-color: #571f70; border-color: #571f70"
                                       class="btn-block btn-blue"> <span> <span id="checkout">Done</span> <span
                                                id="check-amt"></span>CONFIRM</span></a>
                                </form>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
