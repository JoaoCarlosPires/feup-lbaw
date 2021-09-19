@extends('layouts.app')

@section('content')
<section class="py-5 container text-center" id="aboutUs">
        <div class="row g-5">
            <div class="col-lg-4">
                <img src="./images/vinyl.png" class="img-fluid" alt="Vinyl disc"></a>
            </div>
            <div class="col-lg-8">
                <h1 style="color: #571f70">Contacts</h1>
                <p style="color: #571f70" class="fs-2">If you have any question, please use one of<br>the following contacts to share it with us.</p>
                <p style="color: #571f70" class="fs-2">E-mail: store@discotech.com</p>
                <p style="color: #571f70" class="fs-2">Telephone: +351 912 345 678</p>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="homepage" role="button"> Return to the homepage</a>
                <a style="border-color: #571f70; background-color: #571f70; color: white"
                    class="btn btn-primary btn-lg " href="catalog" role="button"> Go to the Catalog</a>
            </div>
        </div>
    </section>
@endsection
