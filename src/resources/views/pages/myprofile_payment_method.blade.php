@extends('layouts.app')

@section('content')

<div class="py-5 container">
    <div class="row">
        <div class="col-lg-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link active" aria-current="page" href="/myprofile">Personal Information</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="../myprofile/account_data">Account Data</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="../myprofile/preferences">Preferences</a>
                </li>

                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link " href="../myprofile/myprofile_payment_method" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                    </svg>
                    Payment Method</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="../myprofile/myprofile_inventory">Inventory</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="../myprofile/myorders">My Orders</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="../myprofile/myprofile_new_return">New Return</a>
                </li>
            </ul>
            <div class="col">
            <br></br>
            <br></br>
                <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary btn-lg">Logout </button>
            </div>
        </div>
        <div class="col-lg-10">
            <h3>Payment Method</h3>
            <div class="container-fluid">
                <br></br>
                Pick just one
                <form>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Credit Card
                        </label>
                        <button style="border-color: white ; background-color: white; color: #571f70" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            PayPal
                        </label>
                        <button style="border-color: white ; background-color: white; color: #571f70" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Transfer
                        </label>
                        <button style="border-color: white ; background-color: white; color: #571f70" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            MBWay
                        </label>
                        <button style="border-color: white ; background-color: white; color: #571f70" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                </form>
                <button style="border-color: white ; background-color: white; color: #571f70" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NewPayment">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Modal -->

        <div class="modal fade" id="NewPayment" tabindex="-1" aria-labelledby="NewPaymentDetails" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="NewPaymentDetails">New Payment Method</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Select an option </label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Credit Card</option>
                                    <option value="1">PayPal</option>
                                    <option value="2">Transfer</option>
                                    <option value="3">MBWay</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Credit Card Number </label>
                                <input type="text" class="form-control" id="brand" placeholder="XXXX XXXX XX XXXXXX XX">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary">ADD</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="DeleteProduct" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="DeleteProduct">Delete product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this product? This action cannot be undone.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary">DELETE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
