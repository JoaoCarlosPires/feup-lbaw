<div class="card" style="border-color: #d9aded">
    <div class="card-body">
        <div class="row">
            <div class="col-1">
                <img src="./images/{{ $product->picture }}" width="50" height="50" alt="Profile Picture"></a>
            </div>
            <div class="col-3">
                <p>{{ $product->name }}</p>
            </div>
            <div class="col-1">
                <p>{{ $product->type }}</p>
            </div>
            <div class="col-1">
                <p>{{ $product->shopPrice->price }}€</p>
            </div>
            <div class="col-4">
                <p>{{ $product->shopPrice->releasedate }}</p>
            </div>
            <div class="col-auto">
                <button style="border-color: #571f70 ; background-color: #d9aded; color: white" type="button"
                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Delete-{{$product->id}}"
                    id="{{$product->id}}">
                    <img src="./images/delete.png" width="25" height="25" alt="Delete">
                </button>
                @if(count($product->isAlbum($product->id))>0)
                <button style="border-color: #571f70 ; background-color: #d9aded; color: white" type="button"
                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditAlbum-{{$product->id}}">
                    <img src="./images/edit.png" width="25" height="25" alt="Edit">
                </button>
                @else
                <button style="border-color: #571f70 ; background-color: #d9aded; color: white" type="button"
                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditOther-{{$product->id}}">
                    <img src="./images/edit.png" width="25" height="25" alt="Edit">
                </button>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Delete-{{ $product->id }}" tabindex="-1" aria-labelledby="DeleteProduct" aria-hidden="true">
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
                <a href="{{ route('products.delete', $product->id )}}">
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                        class="btn btn-primary" href="google.pt">DELETE</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditOther-{{$product->id}}" tabindex="-1" aria-labelledby="EditOtherDetails" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditOtherDetails">Edit Instrument/Accessory Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="admin_manage_products/updateOther">
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
                                <label for="brand" class="form-label">Brand</label>
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
                                <input type="number" class="form-control" min="0" max="1000" id="price" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="picture" class="form-label">Picture </label>
                                <input type="file" id="picture" name="picture" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="id" name="id" value="{{$product->id}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <a href="{{ route('products.updateOther', $product->id )}}">
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                        class="btn btn-primary" href="google.pt">UPDATE</button></a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="EditAlbum-{{$product->id}}" tabindex="-1" aria-labelledby="EditAlbumDetails" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditAlbumDetails">Edit Album Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="admin_manage_products/updateAlbum">
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
                            <input type="hidden" id="id" name="id" value="{{$product->id}}">

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <a href="{{ route('products.updateAlbum', $product->id )}}">
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                        class="btn btn-primary" href="google.pt">UPDATE</button></a>
                            </div>
                        </form>
            </div>

        </div>
    </div>
</div>
