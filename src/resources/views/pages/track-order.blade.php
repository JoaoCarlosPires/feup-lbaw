@extends('layouts.app')

@section('content')


    <div class="d-flex align-items-baseline position-relative">
        <a href="../myprofile/myorders" class="p-3 stretched-link">Go back to My Orders</a>  
        <h1 class="pt-3 position-absolute top-0 start-50 translate-middle-x" style="color: #571f70">Track Order</h1>
    </div>

    <div class="pt-5 container mt-5">

        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <img class="photo-album w-20" src="images/1.jpg" alt="Third slide">
            </div>
            <div class="col col-lg-2">
                <h1 id="title">{Album Title}</h1>
                <p>{Artist}</p>
            </div>
            <div class="col-md-auto">
                <h4 id="order" style="color: #571f70">Order no. {Insert number}</h2>
                <p class="fs-6" id="order-no" >Estimated delivery time {Insert Date}</p>
            </div>
        </div>
    </div>

    <div class="pt-5 container d-flex flex-column">
        <div class="row">
            <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
            <div class="container-progress ">
                <div class="card-body">
                <div class="position-relative m-4">
                    <div class="progress" style="height: 3px">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div
                        class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                        <div class="position-relative step completed">
                            <div class="position-absolute top-0 start-50 translate-middle step-icon-wrap">
                                <a class="btn btn-primary rounded-pill" style="border-color: #571f70; background-color: #571f70; color:white">
                                    <div class="step-icon">
                                        <i class="pe-7s-cart" ></i>
                                    </div>
                                </a>
                            </div>
                            <div class="pt-4 step-title">Confirmed Order</div>
                        </div>
                        <div class="position-relative step completed">
                            <div class="position-absolute top-0 start-50 translate-middle step-icon-wrap">
                                <a class="btn btn-primary rounded-pill" style="border-color: #571f70; background-color: #571f70; color:white">
                                    <div class="step-icon"><i class="pe-7s-config"></i></div>
                                </a>
                            </div>
                            <div class="pt-4 step-title">Processing Order</div>
                        </div>
                        <div class="position-relative step completed">
                            <div class="position-absolute top-0 start-50 translate-middle step-icon-wrap">
                                <a class="btn btn-primary rounded-pill" style="border-color: #571f70; background-color: #DCDCDC; color: #571f70">
                                    <div class="step-icon"><i class="pe-7s-medal"></i></div>
                                </a>
                            </div>
                            <div class="pt-4 step-title">Quality Check</div>
                        </div>
                        <div class= "position-relative step" >
                            <div class="position-absolute top-0 start-50 translate-middle step-icon-wrap">
                                <a class="btn btn-primary rounded-pill" style="border-color: #571f70; background-color: #DCDCDC; color: #571f70">
                                    <div class="step-icon"><i class="pe-7s-car"></i></div>
                                </a>
                            </div>
                            <div class="pt-4 step-title">Product in Transit</div>
                        </div>
                        <div class= "position-relative step" >
                            <div class="position-absolute top-0 start-50 translate-middle step-icon-wrap">
                                <a class="btn btn-primary rounded-pill" style="border-color: #571f70; background-color: #DCDCDC; color: #571f70">
                                <div class="step-icon"><i class="pe-7s-home"></i></div>
                                </a>
                            </div>
                            <div class="pt-4 step-title">Product Delivered</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 container  d-flex justify-content-center align-items-center">
            <div class="progress-shipping mb-5">
                <div class="row row-cols-auto mb-2">
                    <div class="col-2">
                        <p id="date">{Insert date}</p>
                    </div>
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#571f70"
                            class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <h5>Order placed</h5>
                    </div>
                </div>
                <div class="row row-cols-auto mb-2">
                    <div class="col-2">
                        <p id="date">{Insert date}</p>
                    </div>
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#571f70"
                            class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <h5>Package left the warehouse</h5>
                    </div>
                </div>
                <div class="row row-cols-auto mb-2">
                    <div class="col-2">
                        <p id="date">{Insert date}</p>
                    </div>
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#571f70"
                            class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <h5>Shipped</h5>
                        <p>Final package sterilisation and inspection completed, package shipped.</p>
                    </div>
                </div>
                <div class="row row-cols-auto mb-2">
                    <div class="col-2">
                        <p id="date">{Insert date}</p>
                    </div>
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#571f70"
                            class="bi bi-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <h5>Arrived</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection