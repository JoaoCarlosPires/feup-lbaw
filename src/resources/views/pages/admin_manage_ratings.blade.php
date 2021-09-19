@extends('layouts.app')

@section('content')

@if(auth()->user()->is_admin)
<div class="py-5 container">
    <div class="row">
        <div class="col-lg-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link active" aria-current="page" href="admin_manage_users">Manage
                        Users</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="admin_manage_products">Manage
                        Products</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="admin_manage_ratings">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
                        </svg>
                        Manage Ratings</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link " href="admin_manage_payments">Manual
                        Payments</a>
                </li>
            </ul>
            <div class="col">
                <br></br>
                <br></br>
                <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                    class="btn btn-primary btn-lg">Logout </button>
            </div>
        </div>
        <div class="col-lg-10">
            <h3>Manage Ratings</h3>
            <br></br>
            <div class="card" style="border-color: #571f70; background-color: #d9aded; color: 571f70">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <img src="./images/transparent.png" width="50" height="50" alt="Icon"></a>
                        </div>
                        <div class="col">
                            <label for="product" class="form-label">Product </label>
                        </div>
                        <div class="col">
                            <label for="user" class="form-label">User </label>
                        </div>
                        <div class="col">
                            <label for="comment" class="form-label">Comment </label>
                        </div>
                        <div class="col-auto">
                            <img src="./images/transparent.png" width="25" height="25" alt="Delete"></a>
                        </div>
                    </div>

                    @each('partials.review', $review, 'review')
                </div>
            </div>
            
        </div>
    </div>
</div>

@else
<meta http-equiv="refresh" content="0; URL='homepage'" />
@endif
@endsection
