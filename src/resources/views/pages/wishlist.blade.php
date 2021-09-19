@extends('layouts.app')

@section('content')

<div class="d-flex align-items-baseline position-relative">
    <a href="../catalog" class="p-3 stretched-link">Go to Catalog</a>
    <h1 class="pt-2 position-absolute top-0 start-50 translate-middle-x" style="color: #571f70">Wishlist</h1>
</div>
<div class="py-5 container">
    <div class="row">

        <div class="col-lg-12">
            @foreach($user->wishlistItems as $WishlistItem)
            <div class="pb-4 row row-cols-1 row-cols-md-2  row-cols-lg-4 row-cols-xl-4 g-4">
                <a href="#">
                @each('partials.product', $WishlistItem->$product_id, 'product')
                </a>

            </div>
            @endforeach


        </div>
    </div>
</div>

@endsection