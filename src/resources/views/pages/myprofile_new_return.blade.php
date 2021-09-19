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
                    Payment Method</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="../myprofile/myprofile_inventory">Inventory</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="../myprofile/myorders">My Orders</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="../admin_manage_ratings.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                    </svg>
                    New Return</a>
                </li>
            </ul>
            <div class="col">
            <br></br>
            <br></br>
                <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary btn-lg">Logout </button>
            </div>
        </div>
        <div class="col-lg-4">
            <h3>New Return</h3>
            <div class="container-fluid">
                <br></br>
                <form>
                    <label for="name" class="form-label">Please select a product </label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>U2 - Joshua Tree</option>
                        <option value="1">U2 - October</option>
                        <option value="2">U2 - Pop</option>
                        <option value="3">U2 - Rattle&Hum</option>
                    </select>
                    <div class="mb-3">
                        <label for="reason" class="form-label">Reason</label>
                        <textarea class="form-control" id="reason" rows="3" placeholder="Please describe here the reason why you want to return your order"></textarea>
                    </div>
                </form>
                <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary">SUBMIT</button>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
