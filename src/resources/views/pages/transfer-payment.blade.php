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

            <?php $total=0; $shipping=5?>
            @if(session()->has('cart'))

                @foreach( session()->get('cart') as $item)

                    @if($item['quantity']>0)
                        <div class="row d-flex justify-content-center border-top">
                            <div class="col-5">
                                <div class="row d-flex">
                                    <div class="book"> <img src="./images/{{ $item['photo'] }}" class="book-img"> </div>
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
                                            <h6>{{$item['quantity']}}</h6>
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
                        if($total>=25){
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
                                <h3>Bank accout no.</h3>
                                <h4>85522 222554 211288 500000</h4>
                                <p>Title: your name and surname</p>
                                <p>Amount to pay </p>
                                <h5>€{{$total + $shipping}}</h5>
                                <p>Shipping</p>
                                @if($shipping!=0)
                                    <h6 class="mb-1 text-right">€{{$shipping}}</h6>
                                @endif
                                @if($shipping==0)
                                    <div class="right">FREE</div>
                                @endif
                            </div>
                             <form method="GET"><button style="background-color: #571f70; border-color: #571f70"
                                                     class="btn-block btn-blue" name="done"> <span> <span id="done">Done</span> <span
                                                id="check-amt"></span> </span> </button></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
