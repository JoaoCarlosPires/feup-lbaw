@extends('layouts.app')

@section('content')
<section class="py-5 container text-center" id="aboutUs">
        <div class="row g-2">
                <h1 style="color: #571f70">FAQ</h1>
                <p style="color: #571f70" class="fs-2"><b>What are the accepted payment methods?</b></p>
                <p style="color: #571f70" class="fs-3">For now, you can only make your payments using the bank transfer method.</p>
                <p style="color: #571f70" class="fs-2"><b>What products can I buy?</b></p>
                <p style="color: #571f70" class="fs-3">At DiscoTech, you can either buy discs/vinyls or instruments and accessories. Feel free to select which products do you want.</p>
                <p style="color: #571f70" class="fs-2"><b>How can I make a purchase?</b></p>
                <p style="color: #571f70" class="fs-3">Start by searching through the catalog the products you want and then add them to the shopping basket. After that, proceed to the checkout page and confirm your purchase. You can pay by transfering the total price of your order to the reference that is there and then all you have to do is to wait for it to be accepted by one of our collaborators.</p>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="homepage" role="button"> Return to the homepage</a>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="catalog" role="button"> Go to the Catalog</a>
        </div>
    </section>
@endsection
