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
                    <a style="color: #571f70" class="nav-link" href="admin_manage_products">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
                        </svg>
                        Manage Products</a>
                </li>
                <li class="nav-item">
                    <a style="color: #571f70" class="nav-link" href="admin_manage_ratings">Manage Ratings</a>
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
            <h3>Manage Products</h3>
            <div class="container-fluid">
                <br></br>
                <form class="d-flex">
                    <button style="border-color: white; background-color: #571f70; color: white" type="button"
                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDisc">
                        New Album/Disc
                    </button>
                    <button style="border-color: white; background-color: #571f70; color: white" type="button"
                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newInst">
                        New Instrument/Accessory
                    </button>
                </form>
                <br></br>
            </div>
            <div class="card" style="border-color: #571f70; background-color: #d9aded; color: 571f70">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <img src="./images/transparent.png" width="50" height="50" alt="Icon"></a>
                        </div>
                        <div class="col-1">
                            <label for="picture" class="form-label">Picture </label>
                        </div>
                        <div class="col-2">
                            <label for="name" class="form-label">Name </label>
                        </div>
                        <div class="col-1">
                            <label for="role" class="form-label">Type </label>
                        </div>
                        <div class="col-1">
                            <label for="username" class="form-label">Price </label>
                        </div>
                        <div class="col-4">
                            <label for="email" class="form-label">Date Added </label>
                        </div>
                        <div class="col-auto">
                            <label for="delete" class="form-label"></label>
                        </div>
                    </div>

                    @each('partials.productAdmin', $product, 'product')
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="newDisc" tabindex="-1" aria-labelledby="newDiscLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newDiscLabel">New Album/Disc</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="admin_manage_products/addAlbum">
                            {{ csrf_field()}}
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name </label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Type </label>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example" name="type">
                                            <option selected>Chose type</option>
                                            <option value="Disc">Disc</option>
                                            <option value="Vinyl">Vinyl</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="year" class="form-label">Year </label>
                                        <input type="number" class="form-control" min="0" max="2021" id="year"
                                            name="year">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tag" class="form-label">Tag </label>
                                        <input type="text" class="form-control" id="tag" name="tag">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description </label>
                                        <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                    <div class="mb-3">
                                        <label for="release_date" class="form-label">Release Date </label>
                                        <input class="form-control" id="release_date" type="date" name="release_date">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="band" class="form-label">Band </label>
                                        <input type="text" class="form-control" id="band" name="band">
                                    </div>
                                    <div class="mb-3">
                                        <label for="albumGenre" class="form-label">Album Genre </label>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example" name="albumGenre">
                                            <option selected>Chose type</option>
                                            <option value="Pop/Rock">Pop/Rock</option>
                                            <option value="Electronic">Electronic</option>
                                            <option value="Jazz">Jazz</option>
                                            <option value="Classic">Classic</option>
                                            <option value="Hip-Hop">Hip-Hop</option>
                                            <option value="Rap">Rap</option>
                                            <option value="Blues">Blues</option>
                                            <option value="Soul">Soul</option>
                                            <option value="Indie">Indie</option>
                                            <option value="R&B">R&B</option>
                                            <option value="Reggae">Reggae</option>
                                            <option value="Folk/Country">Folk/Country</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Quantity </label>
                                        <input type="number" class="form-control" min="0" max="1000" id="quantity"
                                            name="quantity">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price </label>
                                        <input type="number" class="form-control" min="0" max="1000" id="price"
                                            name="price">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pciture" class="form-label">Picture </label>
                                        <input type="file" id="picture" name="picture" accept="image/*">
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    type="submit" class="btn btn-primary">ADD</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="newInst" tabindex="-1" aria-labelledby="newInstLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newInstLabel">New Instrument/Accessory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="admin_manage_products/addInstrument">
                            {{ csrf_field()}}
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name </label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Type </label>
                                        <select id="type" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example" name="type">
                                            <option selected>Chose type</option>
                                            <option value="Accessories">Accessories</option>
                                            <option value="Instrument">Instrument</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="brand" class="form-label">Brand </label>
                                        <input type="text" class="form-control" id="brand" name="brand">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tag" class="form-label">Tag </label>
                                        <input type="text" class="form-control" id="tag" name="tag">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description </label>
                                        <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                    <div class="mb-3">
                                        <label for="release_date" class="form-label">Release Date </label>
                                        <input class="form-control" id="release_date" type="date" name="release_date">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category </label>
                                        <input type="text" class="form-control" id="category" name="category">
                                    </div>
                                    <div class="mb-3">
                                        <label for="model" class="form-label">Model </label>
                                        <input type="text" class="form-control" id="model" name="model">
                                    </div>
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Quantity </label>
                                        <input type="number" class="form-control" min="0" max="1000" id="quantity"
                                            name="quantity">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price </label>
                                        <input type="number" class="form-control" min="0" max="1000" id="price"
                                            name="price">
                                    </div>
                                    <div class="mb-3">
                                        <label for="picture" class="form-label">Picture </label>
                                        <input type="file" id="picture" name="picture" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    type="submit" class="btn btn-primary">ADD</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<meta http-equiv="refresh" content="0; URL='homepage'" />
@endif

@endsection
