<div class="card" style="border-color: #d9aded">
    <div class="card-body">
        <div class="row">
            <div class="col-auto">
                <img src="./images/{{ $review->getPicture($review->id) }}" width="50" height="50" alt="Profile Picture"></a>
            </div>
            <div class="col">
                <p>{{ $review->getProductName($review->id) }}</p>
            </div>
            <div class="col">
                <p>{{ $review->getUsername($review->id) }}</p>
            </div>
            <div class="col">
                <p>{{ $review->getComment($review->id) }}</p>
            </div>
            <div class="col-auto">
                <div class="col-auto">
                    <button style="border-color: #571f70 ; background-color: #d9aded; color: white" type="button"
                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Delete-{{$review->id}}"
                    id="{{$review->id}}">
                        <img src="./images/delete.png" width="25" height="25" alt="Delete">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Delete-{{ $review->id }}" tabindex="-1" aria-labelledby="DeleteReview" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="DeleteReview">Delete review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this review? This action cannot be undone.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <a href="{{ route('reviews.delete', $review->id )}}">
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                        class="btn btn-primary" href="google.pt">DELETE</button></a>
                        </div>
                    </div>
                </div>
            </div>
