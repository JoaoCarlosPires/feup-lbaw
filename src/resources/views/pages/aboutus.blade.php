@extends('layouts.app')

@section('content')
<section class="py-5 container text-center" id="aboutUs">
        <div class="row g-5">
            <div class="col-lg-4">
                <img src="./images/vinyl.png" class="img-fluid" alt="Vinyl disc"></a>
            </div>
            <div class="col-lg-8">
                <h1 style="color: #571f70">About us</h1>
                <p style="color: #571f70" class="fs-2">Discotech is an online shop where you can increase your musical
                    collection, buying discs, in an <b>easy, accessible, safe</b> and <b>customizable</b> way.</p>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="homepage" role="button"> Return to the homepage</a>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="catalog" role="button"> Go to the Catalog</a>
            </div>
        </div>
    </section>
@endsection